<?php
use 
?>
@extends('layouts.dashboard');
@section('content')
@include('includes.breadcrumbs')
<div class="row">
    <div class="col m8 offset-m2 s12">
        <div class="card white">
            <div class="card-header-floating z-depth-1">
                <span class="card-title">Kandidaat</span>
                <span class="card-subtitle">De informatie van de DNA kandidaat: {{$kandidaat->kandidaat_naam}} </span>
            </div>
            <div class="card-content row">
                <form class="col s10 offset-s1" action="" id="KandidaatForm ">
                    <div class="row">

                        <div class="input-field col s6">
                            <input name="voornaam" id="voornaam" type="text"
                                class="rsv-input" value="{{explode(" ",$kandidaat->kandidaat_naam)[0]}}">
                        <label for="voornaam" class="rsv-input-label" >Voornaam</label>

                        </div>
    
                        <div class="input-field col s6">
                            <input id="naam" name="naam" type="text" class="validate rsv-input" value="{{explode(" ",$kandidaat->kandidaat_naam)[1]}}">
                            <label for="voornaam" class="rsv-input-label">Naam</label>
                        </div>
                    </div>
                    {{-- <?php var_dump( explode(" ",$kandidaat->kandidaat_naam));?> --}}
                    <div class="row">
                        <div class="input-field col s12">
                            <select class="" name="partij" id="partj">
                                <option value="" disabled selected>Selecteer de politieke partij</option>
                                <option value="1">ABOP</option>
                                <option value="2">VHP</option>
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select class="" name="district" id="district">
                                <option value="" disabled selected>Selecteer het district</option>
                                <option value="1">Paramaribo</option>
                                <option value="2">Wanica</option>
                            </select>
                        </div>
                    </div>
        
                        <div class="row">
                            <button class="waves-effect waves-light btn col s4 right login-btn" type="submit"
                                name="action" id="persoonlijke_gegevens_btn">Weizig
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