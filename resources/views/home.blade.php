@extends('layout.base')

@section('title', 'Home')

@section('content')
    <section class="currentSeries">
        <div class="bgSeries">
            <div class="mainContainer">
                <!-- items -->
                <div class="serieCard">
                    <!-- img -->
                    <div class="boxImgCard">
                        <a href="{{route('serie')}}">
                            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
                        </a>
                    </div>
                    <!-- title -->
                    <div>
                        <a href="{{route('serie')}}">TITLE</a>
                    </div>
                </div>               
            </div>
        </div>
        <div class="blueInfoBar">
            <div class="mainContainer">
            </div>
        </div>
    </section>    
@endsection