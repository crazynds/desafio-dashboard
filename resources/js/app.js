/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./scripts-frameworks');

import Vue from 'vue'
import vuetify from "./vuetify";
import VueRouter from 'vue-router'
import VueProgressBar from 'vue-progressbar'

Vue.use(VueProgressBar, {
    color: "rgb(143, 255, 199)",
    failedColor: "red",
    height: "6px"
})
Vue.use(VueRouter)

const Home = { template: '<h1>Home</h1>' }
const Dashboard = require("./views/Dashboard.vue").default



const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path:'/',
            name:'home',
            component: Home
        },
        {
            path: '/home',
            name: 'Home',
            component: Home
        },
        {
            path: '/Dashboard',
            name: 'Dashboard',
            component: Dashboard
        },
        {
            path: '*',
            name: 'Not Found 404',
            component: require ("./views/NotFound.vue").default
        }
    ],
})



const app = new Vue({
    el: '#app',
    router,
    vuetify,
});
