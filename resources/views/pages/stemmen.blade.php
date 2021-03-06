<?php
use App\Http\Controllers\StemmenController;
?>
@extends('layouts.dashboard')
@section('content')

<div class="row">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <div class="col m12 s12">
        Filter tools here
    </div>
</div>
@for ($i = 0; $i < count($kandidaat); $i++) @if ($i%2==0) <div class="row">
    <div class="col m6 s12">
        <div class="card white kandidaat">
            <div class="card-content ">
                <div class="kandidaat-info-container">
                    <div class="">
                        <img class="kandidaat-circle" src="{{asset('assets/placeholder-user.png')}}" alt="">
                    </div>
                    <div class="kandidaat-info" data-kandidaat_id="{{$kandidaat[$i]->kandidaat_id}}">
                        <span class="card-title">{{$kandidaat[$i]->kandidaat_naam}}</span>
                        <p>{{$kandidaat[$i]->partij}}</p>
                        <form method="POST" id="stem_form_{{$kandidaat[$i]->kandidaat_id}}"
                            action="{{action([StemmenController::class,'update'],[$kandidaat[$i]->kandidaat_id])}}">
                            @csrf()
                            @method('PUT')
                            <input type="hidden" name="burger_id" value="{{$user->burger_id}}">
                        </form>
                    </div>
                    <div class="">
                        <p>
                            <label>
                                <input name="group1" class="with-gap" type="radio" />
                                <span class="red-text"></span>
                            </label>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="col m6 s12">
        <div class="card white kandidaat">
            <div class="card-content ">
                <div class="kandidaat-info-container">
                    <div class="kanidaat-image">
                        <img class="kandidaat-circle" src="{{asset('assets/placeholder-user.png')}} alt="">
                    </div>
                    <div class=" kandidaat-info" data-kandidaat_id="{{$kandidaat[$i]->kandidaat_id}}">
                        <span class="card-title">{{$kandidaat[$i]->kandidaat_naam}}</span>
                        <p>{{$kandidaat[$i]->partij}}</p>
                        <form method="POST" id="stem_form_{{$kandidaat[$i]->kandidaat_id}}"
                            action="{{action([StemmenController::class,'update'],[$kandidaat[$i]->kandidaat_id])}}">
                            @csrf()
                            @method('PUT')
                            <input type="hidden" name="burger_id" value="{{$user->burger_id}}">
                        </form>
                    </div>
                    <div class="">
                        <p>
                            <label>
                                <input name="group1" class="with-gap" type="radio" a />
                                <span class="red-text"></span>
                            </label>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
    @endfor

    <div class="fixed-action-btn hide" id="stem_btn">
        <a class="btn btn-large waves-effect waves-light red"><i class="material-icons">how_to_vote</i></a>
    </div>

    {{-- <script src="sweetalert2.all.min.js"></script> --}}
    <script type="application/javascript" src="{{asset('js/stemmen.js')}}"></script>
    @endsection