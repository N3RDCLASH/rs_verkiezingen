<?php
use App\Http\Controllers\PartijenController;
?>
@extends('layouts.dashboard')
@section('content')
@include('includes.breadcrumbs')
<div class="row">
    <div class="col m8 offset-m2 s12">
        <div class="card white">
            <div class="card-header-floating z-depth-1">
                <span class="card-title">Partij Wijzigen</span>
                <span class="card-subtitle">De informatie van de Politieke partij: <b>{{$partij->partij_naam}}</b>
                </span>
            </div>
            <div class="card-content row">
                <form class="col s10 offset-s1"
                    action="{{action([PartijenController::class,'update'],$partij->partij_id)}}" id="KandidaatForm"
                    method="POST">
                    @method('PUT')
                    @csrf()
                    <div class="row">

                        <div class="input-field col s12">
                            <input name="partij_naam" id="partij_naam" type="text" class="rsv-input"
                                value="{{$partij->partij_naam}}">
                            <label for="partij_naam" class="rsv-input-label">Partij Naam</label>

                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="partij_afkorting" name="partij_afkorting" type="text" class="validate rsv-input"
                                value="{{$partij->partij_afkorting}}">
                            <label for="partij_afkorting" class="rsv-input-label">Partij Afkorting</label>
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