@extends('layout.base')

@section('pageTitle', $fumetto['title'])

@section('content')

<div id="main">

    <div class="stripe">

        <div class="containerComic" id="load">
            <div class="label1">{{$fumetto['type']}}</div>
            <div class="label2">VIEW GALLER</div>
            <img class="imgComic" src="{{$fumetto['thumb']}}" :alt="{{$fumetto['title']}}">
        </div>

    </div>

    {{-- --------------------------- --}}

    <div class="infoBox">
        <div class="leftInfo">
            <h2>{{$fumetto['title']}}</h2>
            <div class="greenBox">
                <div class="leftGreen">
                    <h4>U.S. Price:&nbsp<p>{{$fumetto['price']}}</p></h4>
                    <h4>AVAILABLE</h4>
                </div>
                <div class="middleGreen"></div>
                <div class="rightGreen">
                    <h4>Check Availability</h4>
                </div>
            </div>
            <p class="description">{{$fumetto['description']}}</p>
        </div>

        <div class="rightInfo">
            <h4>ADVERTISMENT</h4>
            <img src="{{asset('img/aaddvv.jpg')}}" alt="">
        </div>
    </div>

    {{-- --------------------------- --}}

    <div class="greyBox">

        <div class="infoBox">

            <div class="leftGrey">
                <h3>Talent</h3>
                <div class="line"></div>
                <div class="infoData">
                    <h5>Art by:</h5>
                    <div class="names">
                        @foreach ($fumetto['artists'] as $item)
                            <p>{{$item}},&nbsp</p>
                        @endforeach
                    </div>
                </div>

                <div class="line"></div>
                <div class="infoData">
                    <h5>Written by:</h5>
                    <div class="names">
                        @foreach ($fumetto['writers'] as $item)
                            <p>{{$item}},&nbsp</p>
                        @endforeach
                    </div>
                </div>
                <div class="line"></div>
            </div>

            {{-- --------------------------- --}}

            <div class="rightGrey">
                <h3>Specs</h3>
                <div class="line"></div>
                <div class="infoData">
                    <h5>Series:</h5>
                    <div class="names"><p class="series">{{$fumetto['series']}}</p></div>
                </div>

                <div class="line"></div>
                <div class="infoData">
                    <h5>U.S. Price:</h5>
                    <div class="names"><p class="blackData">{{$fumetto['price']}}</p></div>
                </div>

                <div class="line"></div>
                <div class="infoData">
                    <h5>On Sale Date:</h5>
                    <div class="names"><p class="blackData">{{$fumetto['sale_date']}}</p></div>
                </div>
                <div class="line"></div>
            </div>

            {{-- --------------------------- --}}

        </div>

        <div class="line outline"></div>

        {{-- --------------------------- --}}

        <div class="infoBox">
            <div class="iconsBox">
                <h5>DIGITAL COMICS</h5>
                <div class="icon1"></div>
            </div>

            <div class="iconsBox">
                <h5>SHOP DC</h5>
                <div class="icon2"></div>
            </div>

            <div class="iconsBox">
                <h5>COMIC SHOP LOCATOR</h5>
                <div class="icon3"></div>
            </div>

            <div class="iconsBox">
                <h5>SUBSRIPTIONS</h5>
                <div class="icon4"></div>
            </div>
        </div>

        {{-- --------------------------- --}}

    </div>


</div>

@endsection