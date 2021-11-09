@extends('layout.base')

@section('title', 'Home')

@section('content')
    <section class="currentSeries">
        
        <div class="bgSeries">

            <div class="mainContainer">
                <!-- items -->
                @foreach ($series as $index => $serie)
                <div class="serieCard">
                    <!-- img -->
                    <div class="boxImgCard">
                        <a href="{{route('serie', ['id'=> $index])}}">
                            <img src="{{$serie['thumb']}}" alt="imgSerie">
                        </a>
                    </div>
                    <!-- title -->
                    <div>
                        <a href="{{route('serie', ['id'=> $index])}}">{{$serie['series']}}</a>
                    </div>
                </div>
                @endforeach               
            </div>
        </div>
        <div class="blueInfoBar">
            <div class="mainContainer">
            </div>
        </div>
    </section>    
@endsection