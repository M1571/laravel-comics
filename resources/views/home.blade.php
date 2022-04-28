@extends('layout.base')

@section('pageTitle', 'Home')

@section('content')

<div id="main">

    {{-- --------------------------- --}}

    <div class="comicsBox">

        <div class="container" id="load">
            <button class="serieButton"><h4>CURRENT SERIES</h4></button>
        </div>

        <div class="container" id="load2">
            @foreach ($fumetti as $key => $elemento)
                <a href="{{route('fumetti', ['fumetti_id' => $key])}}" class="comics">

                    <img class="imgCard" src="{{$elemento['thumb']}}" :alt="{{$elemento['thumb']}}">
                    <h6>{{$elemento['title']}}</h6>

                </a>
            @endforeach
        </div>

        <div class="container" id="load">
        <button class="loadButton">LOAD MORE</button>
        </div>

    </div>

    {{-- --------------------------- --}}

    <div id="points">
        <div class="container">

            <div class="card">
                <img class="imgPoints" src="{{ asset('img/buy-comics-digital-comics.png')}}">
                <a class="linkText">DIGITAL COMIC</a>
            </div>

            <div class="card">
                <img class="imgPoints" src="{{ asset('img/buy-comics-merchandise.png')}}">
                <a class="linkText">DC MERCHANDISE</a>
            </div>

            <div class="card">
                <img class="imgPoints" src="{{ asset('img/buy-comics-subscriptions.png')}}">
                <a class="linkText">SUBSCRIPTION</a>
            </div>

            <div class="card">
                <img class="imgPoints" src="{{ asset('img/buy-comics-shop-locator.png')}}">
                <a class="linkText">COMIC SHOP LOCATOR</a>
            </div>

            <div class="card">
                <img class="imgPoints" src="{{ asset('img/buy-dc-power-visa.svg')}}">
                <a class="linkText">DC POWER VISA</a>
            </div>

        </div>
    </div>

</div>

@endsection