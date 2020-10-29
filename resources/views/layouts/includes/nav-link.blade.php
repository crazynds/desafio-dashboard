<li class="nav-item">
    @isset($to)
        <router-link to="{{$to}}" class="nav-link">
    @else
        <a href="{{$href??'#'}}" class="nav-link">
    @endisset
        @include('layouts.includes.icon',['icon' => ($icon??'fa-circle')])
        <p>
            {{$name}}
            @isset($number)
                <span class="badge badge-info right">{{$number}}</span>
            @endisset
            @isset($alert)
                <span class="right badge badge-danger">{{$alert}}</span>
            @endisset
        </p>
    @isset($to)
        </router-link>
    @else
        </a>
    @endif
</li>
