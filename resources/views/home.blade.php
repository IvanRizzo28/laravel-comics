@extends('layout.layout')

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
                                <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
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