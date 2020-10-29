@isset($itens)
    <!-- {!!json_encode($itens)!!}-->
    @include('layouts.includes.nav-tree',[
        'icon' => ($icon??'media-record'),
        'name' => ($name),
        'size' => ($size??[15,15]),
        'itens' => $itens,
        'number' => ($number??null),
        'alert' => ($alert??null),
    ])
@else
    @include('layouts.includes.nav-link',[
        'href' => ($href??'#'),
        'icon' => ($icon??'media-record'),
        'name' => ($name),
        'size' => ($size??[15,15]),
        'number' => ($number??null),
        'alert' => ($alert??null),
    ])
@endisset
