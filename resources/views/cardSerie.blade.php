@extends('layout.base')

@section('title', 'Serie')

@section('content')
    <section class="serieCard">
        <div class="blueBoxCard">
            <div class="cardContainer">
                <div class="boxImgCard">
                    <img src="{{$thumb}}" alt="">
                </div>
            </div>
        </div>
        <div class="descriptionCard">
            <div class="cardContainer">
                <div class="boxTextCard">
                    <h3>{{$title}}</h3>
                    <p>{{$description}}</p>
                </div>
            </div>
        </div>
        <div class="infoCard">
            <div class="cardContainer">
                <h5>Talent</h5>
            </div>
        </div>
    </section>
@endsection