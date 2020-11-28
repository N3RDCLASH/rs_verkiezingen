<?php
use App\Http\Controllers\DistrictenController;
?>
@extends('layouts.dashboard')
@section('content')
@include('includes.breadcrumbs')
<div class="row">
    <div class="col m8 offset-m2 s12">
        <div class="card white">
            <div class="card-header-floating z-depth-1">
                <span class="card-title">Partij Wijzigen</span>
                <span class="card-subtitle">De informatie van de Politieke district: <b>{{$district->district_naam}}</b>
                </span>
            </div>
            <div class="card-content row">
                <form class="col s10 offset-s1"
                    action="{{action([DistrictenController::class,'update'],$district->district_id)}}" id="KandidaatForm"
                    method="POST">
                    @method('PUT')
                    @csrf()
                    <div class="row">

                        <div class="input-field col s12">
                            <input name="district_naam" id="district_naam" type="text" class="rsv-input"
                                value="{{$district->district_naam}}">
                            <label for="district_naam" class="rsv-input-label">Partij Naam</label>

                        </div>
                    </div>

                    <div class="row">
                        <button class="waves-effect waves-light btn col s4 right login-btn" type="submit" name="action"
                            id="persoonlijke_gegevens_btn">Wijzig
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection