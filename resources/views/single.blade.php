@extends('layout.layout')


@section('prova')
    <section class="j-bg"></section>
    <div class="single">
        <section style="background-color: #0282F9;">
            <div class="container" style="position:relative;">
                <img src="{{ $data['thumb'] }}" alt="" class="img">
            </div>
        </section>
        <section>
            <div class="container">
                <div style="width: 60%;">
                    <h2>{{ $data['title'] }}</h2>
                    <div class="prezzo">
                        <div>{{ $data['price'] }}</div>
                        <div>Check avaiables</div>
                    </div>
                    <p>{{ $data['description'] }}</p>
                </div>
                <div>
                    <img src="{{ $data['thumb'] }}" alt="aaaa" style="width: 300px;">
                </div>
            </div>
        </section>
    </div>
@endsection