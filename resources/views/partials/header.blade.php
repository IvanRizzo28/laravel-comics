<?php
    $data=[
        'Characters',
        'Comics',
        'Movies',
        'Tv',
        'games',
        'collectibles',
        'videos',
        'fans',
        'news',
        'shop'
    ]
?>
<header>
    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" srcset="">
    <nav>
        <ul>
            @foreach ($data as $item)
                <li>
                    <a href="#">{{$item}}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>