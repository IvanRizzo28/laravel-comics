@extends('layout.layout')

<?php
    $data=[
        [
            "thumb" => "https://picsum.photos/200/300",
            "price" => "$19.99",
            "series" => "Action Comics",
            "type" => "comic book"
        ],
        [
            "thumb" => "https://picsum.photos/200/300",
                    "price" => "$3.99",
                    "series" => "American Vampire 1976",
                    "type" => "comic book"
        ],
        [
            "thumb" => "https://picsum.photos/200/300",
                    "price" => "$16.99",
                    "series" => "Aquaman",
                    "type" => "graphic novel"
        ],
        [
            "thumb" => "https://picsum.photos/200/300",
                    "price" => "$2.99",
                    "series" => "Batgirl",
                    "type" => "comic book"
        ],
        [
            "thumb" => "https://picsum.photos/200/300",
                    "price" => "$3.99",
                    "series" => "Batman",
                    "type" => "comic book"
        ],
        [
            "thumb" => "https://picsum.photos/200/300",
                    "price" => "$2.99",
                    "series" => "Batman Beyond",
                    "type" => "comic book"
        ],
        [
            "thumb" => "https://picsum.photos/200/300",
                    "price" => "$3.99",
                    "series" => "Batman/Superman",
                    "type" => "comic book"
        ],
        [
            "thumb" => "https://picsum.photos/200/300",
                    "price" => "$4.99",
                    "series" => "Batman/Superman Annual",
                    "type" => "comic book"
        ],
        [
            "thumb" => "https://picsum.photos/200/300",
                    "price" => "$5.99",
                    "series" => "Batman: The Joker War Zone",
                    "type" => "comic book"
        ],
        [
            "thumb" => "https://picsum.photos/200/300",
                    "price" => "$6.99",
                    "series" => "Batman: Three Jokers",
                    "type" => "comic book"   
        ],
        [
            "thumb" => "https://picsum.photos/200/300",
                    "price" => "$4.99",
                    "series" => "Batman: White Knight Presents: Harley Quinn",
                    "type" => "comic book"
        ],
        [
            "thumb" => "https://picsum.photos/200/300",
                    "price" => "$16.99",
                    "series" => "Catwoman",
                    "type" => "graphic novel"
        ]
]
?>

@section('prova')
    <main>
        <section class="j-bg"></section>
        <section class="content">
            <div class="container">
                <h2>CURRENT SERIES</h2>
                @foreach ($data as $item)
                    <div class="card">
                        <div class="content">
                            <div class="foto">
                                <img src="{{$item['thumb']}}" alt="">
                            </div>
                            <span></span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="button">
                <a href="#">LOAD MORE</a>
            </div>
        </section>
        <section class="service">
            <div class="container">
                <div>
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <span>DIGITAL COMICS</span>
                </div>
                <div>
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <span>DIGITAL COMICS</span>
                </div>
                <div>
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <span>DIGITAL COMICS</span>
                </div>
                <div>
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <span>DIGITAL COMICS</span>
                </div>
                <div>
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    <span>DIGITAL COMICS</span>
                </div>
            </div>
        </section>
    </main>
@endsection