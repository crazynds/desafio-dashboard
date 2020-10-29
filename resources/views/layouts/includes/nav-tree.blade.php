<li class="nav-item has-treeview">
    @isset($to)
    <router-link :to="{{$to}}" class="nav-link">
    @else
    <a href="{{$href??'#'}}" class="nav-link">
    @endisset
        @include('layouts.includes.icon',['icon'=> ($icon??'fa-circle')])
        <p>
            {{$name}}
            <i class="right fas fa-angle-left"></i>
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
    <ul class="nav nav-treeview">
        @foreach ($itens as $link)
            @isset($link['itens'])
                @include('layouts.includes.nav-tree',[
                    'icon' => ($link['icon']??null),
                    'name' => ($link['name']),
                    'itens' => ($link['itens']),
                    'number' => ($link['number']??null),
                    'alert' => ($link['alert']??null),
                    'href' => ($link['href']??'#'),
                    'to' => ($link['to']??null),
                ])
            @else
                @include('layouts.includes.nav-link',[
                    'href' => ($link['href']??'#'),
                    'to' => ($link['to']??null),
                    'icon' => ($link['icon']??null),
                    'name' => ($link['name']),
                    'number' => ($link['number']??null),
                    'alert' => ($link['alert']??null),
                ])
            @endisset
        @endforeach
    </ul>
</li>
