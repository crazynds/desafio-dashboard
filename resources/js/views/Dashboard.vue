<style>
.v-picker__title {
    display: none;
}
</style>

<template>
    <layout-base>
        <div class="content-header">
            <h2>
                <v-card class="p-1" max-width="340px">
                    Dashboard
                    <small v-if="dates!=null">
                        <br>
                            ({{ dates[0] }} - {{ dates[1] }})
                    </small>
                </v-card>
                <div class="v-application float-right" v-if="dates!=null">
                    <v-date-picker
                        v-model="dates"
                        range
                    ></v-date-picker>
                </div>
            </h2>
        </div>
        <div class="content">
            <div class="container-fluid" v-if="this.apiData!=null">
                <div v-if="this.dates.length==2">
                    <div class="row" v-if="this.data1 == null">
                        {{this.prepareDataForChars()}}
                    </div>
                    <div class="row" v-else>
                        <div class="col-sm" style="max-width: 20%;min-width: 190px;" v-if="this.data1!=null">
                            <v-card class="p-1">
                                <pie-chart :chart-data="data1" :options="this.optionsPieChart"></pie-chart>
                            </v-card>
                        </div>
                        <div class="col-sm" style="max-width: 30%;min-width: 240px;" v-if="this.data2!=null">
                            <v-card class="p-1">
                                <line-chart :chart-data="data2"></line-chart>
                            </v-card>
                        </div>
                        <div class="col-sm" style="max-width: 30%;min-width: 240px;" v-if="this.data3!=null">
                            <v-card class="p-1">
                                <bar-chart :chart-data="data3" :options="this.optionsBarChart"></bar-chart>
                            </v-card>
                        </div>
                    </div>
                </div>
                <div class="row" v-else>
                    {{this.reset()}}
                </div>
            </div>
            <div class="container-fluid" v-else-if="this.error!=null">
                Erro ao carregar dados da api.
            </div>
            <div v-else class="container-fluid">
                Carregando...
            </div>
        </div>
    </layout-base>
</template>

<script>
    import LineChart from './../components/LineChart.js';
    import PieChart from './../components/PieChart.js';
    import BarChart from './../components/BarChart.js';
    import LayoutBase from "./../templates/LayoutBase";
    import moment from "moment";

    export default {
        components: {
            LineChart,
            LayoutBase,
            PieChart,
            BarChart,
        },
        data(){
            return {
                error: null,
                dates: null,
                apiData: null,
                data1: null,
                data2: null,
                data3: null,
                optionsPieChart: {
                    responsive: true,
                    maintainAspectRatio: true,
                    animation: {
                        animateRotate: true
                    }
                },
                optionsBarChart: {
                    scales: {
                        yAxes: [{
                            display: true,
                            ticks: {
                                suggestedMin: 0,    // minimum will be 0, unless there is a lower value.
                                // OR //
                                beginAtZero: true   // minimum value will be 0.
                            }
                        }]
                    }
                }
            }
        },
        methods:{
            prepare(){
                axios({
                        url: '/api/data',
                        method: 'get',
                        responseType: 'json'
                    }).then(response => {
                        this.prepareData(response.data)
                        this.$Progress.finish()

                    }).catch(err => {
                        console.log(err)
                        this.$Progress.fail()
                    })
            },
            prepareData(data){
                var major=null,minor=null;
                this.apiData = data;
                data.reservas.forEach(element => {
                    let time = element.start
                    if(major==null)major=time
                    else if(moment(time).isAfter(moment(major)))major = time;
                    if(minor==null)minor=time
                    else if(moment(minor).isAfter(moment(time)))minor = time;
                });
                this.dates = [];
                this.dates[0] = moment(minor).format("YYYY-MM-DD")
                this.dates[1] = moment(major).format("YYYY-MM-DD")
            },
            filterReservasByDates(value){
                if(moment(this.dates[0]).isAfter(value.start,'day'))return false;
                if(moment(value.start).isAfter(this.dates[1],'day'))return false;
                return true;
            },
            prepareDataForChars(){
                let minor = moment(this.dates[0],"YYYY-MM-DD")
                let major = moment(this.dates[1],"YYYY-MM-DD")
                let reservas = this.apiData.reservas.filter(this.filterReservasByDates);
                let days = major.diff(minor,'days')

                {
                    let totalTimeAvaliable = days * this.apiData.quadras[0].total_horas_disponiveis;
                    let totalTimeUsed = 0;
                    reservas.forEach(element => {
                        let start = moment(element.start)
                        let end = moment(element.end)
                        totalTimeUsed += end.diff(start,'minutes')
                    });
                    totalTimeUsed /= 60 // Transforma para horas
                    let percentUsed = (100*totalTimeUsed) / totalTimeAvaliable
                    percentUsed = percentUsed.toFixed(1);
                    this.data1 = {
                        labels: ["Utilizado (%)","Não utilizado (%)"],
                        datasets: [
                            {
                                label: "Data One",
                                backgroundColor: ["#00D000", "#E46651"],
                                data: [percentUsed, (100-percentUsed)]
                            }
                        ]
                    }
                }
                {
                    let x=0;
                    let datas = []
                    let values = []
                    let filter = function (res){
                        let val = moment(res.start).diff(minor,'days')
                        return val==0
                    };
                    for(x=0;x<=days;x++){
                        datas.push(minor.format("DD/MM"))
                        let filtredReservas = reservas.filter(filter)
                        let val=0;
                        filtredReservas.forEach(element => {
                            val += element.valor_pago;
                        });
                        values.push(val)

                        minor.add(1,'days')
                    }
                    minor.subtract(x,'days')
                    this.data2 = {
                        labels: datas,
                        datasets: [
                            {
                                label: 'Faturamento',
                                backgroundColor: '#33ee99',
                                data: values,
                            }
                        ]
                    }
                }
                {
                    let datas = []
                    let values = []
                    let x=0;
                    let filter = function (res){
                        let val = moment(res.start).diff(minor,'days')
                        return val==0
                    };
                    for(x=0;x<=days;x++){
                        datas.push(minor.format("DD/MM"))
                        let filtredReservas = reservas.filter(filter)
                        minor.add(1,'days')
                        values.push(filtredReservas.length)
                    }
                    minor.subtract(x,'days')
                    this.data3 = {
                        labels: datas,
                        datasets: [
                            {
                                label: 'Reservas',
                                backgroundColor: '#ee9933',
                                minBarLength: 5,
                                data: values,
                            }
                        ]
                    }
                }
            },
            getRandomInt () {
                return Math.floor(Math.random() * (50 - 5 + 1)) + 5
            },
            reset(){
                this.data1=null;
                this.data2=null;
                this.data3=null;
            }
        },
        mounted(){
            this.$Progress.start()
            this.prepare();
        }


    }
</script>

<style>

</style>
