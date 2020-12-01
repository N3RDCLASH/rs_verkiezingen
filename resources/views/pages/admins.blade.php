<?php 
use App\Http\Controllers\AdminsController;
?>
@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col m8 offset-m2 s12">
        <div class="card white">
            <div class="card-header-floating z-depth-1">
                <span class="card-title">Admins</span>
                <span class="card-subtitle"> Admins in het systeem</span>
            </div>
            <div class="card-content ">
                <table>
                    <thead>
                        <tr>
                            <th>Naam</th>
                            <th>Rol</th>
                            <th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @if($gebruikers!=="")
                        @foreach($gebruikers as $gebruiker)
                        <tr data-id="">
                            <td>{{$gebruiker->gebruikers_naam}}</td>
                            <td>{{$gebruiker->rol}}</td>
                            <td><a href="/admins/{{$gebruiker->gebruikers_id}}">
                                    <i class="material-icons edit">edit</i>
                                </a>
                            </td>
                            <td>
                                <form action="{{action([AdminsController::class,'destroy'],[$gebruiker])}}"
                                    id="delete_form_{{$gebruiker->gebruikers_id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a onclick="confirmDelete({{$gebruiker->gebruikers_id}})">
                                        <i class="material-icons edit red-text" class="delete_btn">delete</i>
                                    </a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td>
                                Geen gebruikers beschikbaar
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@include('includes.fab')
{{-- @include('includes.createGebruikersForm') --}}
@endsection