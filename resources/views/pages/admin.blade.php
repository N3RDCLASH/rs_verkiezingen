<?php
use App\Http\Controllers\AdminsController;
$url = action([AdminsController::class,'update'],[$gebruiker]);
?>
@extends('layouts.dashboard')
@section('content')
@include('includes.breadcrumbs')
<div class="row">
    <div class="col m8 offset-m2 s12">
        <div class="card white">
            <div class="card-header-floating z-depth-1">
                <span class="card-title">Gebruiker Wijzigen</span>
                <span class="card-subtitle">De informatie van de DNA gebruiker: <b>{{$gebruiker->gebruikers_naam}}</b>
                </span>
            </div>
            <div class="card-content row">
                <form class="col s10 offset-s1" action="{{$url}}" id="GebruikersForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="gebruikers_naam" id="gebruikers_naam" type="text" class="rsv-input"
                                value="{{explode(" ",$gebruiker->gebruikers_naam)[0]}}">
                            <label for="gebruikers_naam" class="rsv-input-label">Gebruikersnaam</label>
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
</div>
@endsection