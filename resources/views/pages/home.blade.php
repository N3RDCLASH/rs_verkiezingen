@extends('layouts.dashboard')

@section('head')
<link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
@endsection

@section('content')

<div class="row">
    <div class="col m3 s12">
        <div class="card white ">
            <div class="card-content ">
                <span class="card-title">Card Title</span>
                lorem
            </div>
        </div>
    </div>
    <div class="col m3 s12">
        <div class="card white ">
            <div class="card-content ">
                <span class="card-title">Card Title</span>
                lorem
            </div>
        </div>
    </div>
    <div class="col m3 s12">
        <div class="card white ">
            <div class="card-content ">
                <span class="card-title">Card Title</span>
                lorem
            </div>
        </div>
    </div>
    <div class="col m3 s12">
        <div class="card white ">
            <div class="card-content ">
                <span class="card-title">Card Title</span>
                lorem
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col m8 s12">
        <div class="card white">
            <div class="card-header-floating z-depth-1">
                <span class="card-title">Staafdiagram</span>
                <span class="card-subtitle">This is a card nigga</span>
            </div>
            <div class="card-content ">
                <canvas id="barChart" width="400" height="180"></canvas>
            </div>
        </div>
    </div>
    <div class="col m4 s12">
        <div class="card white">
            <div class="card-header-floating z-depth-1">
                <span class="card-title">Cirkeldiagram</span>
                <span class="card-subtitle">This is a card nigga</span>
            </div>
            <div class="card-content ">
                <canvas id="pieChart" height="300"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col m6 s12">
        <div class="card">
            <div class="card-header-floating z-depth-1">
                <span class="card-title">Lijst met Kandidaten</span>
                <span class="card-subtitle">De lijst met de kiesbare DNA kandidaten</span>
            </div>
            <div class="card-content ">
                <ul class="collection">
                    @foreach ($kandidaten as $kandidaat)
                        
                    <li class="collection-item avatar">
                        <img src="{{asset('assets/su.png')}}" alt="" class="circle">
                        <span class="title">{{$kandidaat->kandidaat_naam}}</span>
                        <p>{{$kandidaat->partij}} <br>
                            {{$kandidaat->district}}
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="col m6 s12">
        <div class="card">
            <div class="card-header-floating z-depth-1">
                <span class="card-title">Uitgebrachte Stemmen per District</span>
                <span class="card-subtitle"></span>
            </div>
            <div class="card-content ">
                <div id='map' style=" height: 300px;"></div>
            </div>
        </div>
    </div>
</div>
</div>
<script defer type="application/javascript" src="{{asset('js/dashboard.js')}}"></script>
<script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
@endsection

<?php

$DISTRICTEN = [
    "Nickerie",
    "Coronie",
    "Saramacca",
    "Wanica",
    "Paramaribo",
    "Commewijne",
    "Marowijne",
    "Sipaliwini",
    "Brokopondo",
    "Para"
]
?>