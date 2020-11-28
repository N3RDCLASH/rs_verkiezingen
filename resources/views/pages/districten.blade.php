<?php
use App\Http\Controllers\DistrictenController;
?>
@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col m8 offset-m2 s12">
        <div class="card white">
            <div class="card-header-floating z-depth-1">
                <span class="card-title">Districten</span>
                <span class="card-subtitle">Districten in het systeem</span>
            </div>
            <div class="card-content ">
                <table>
                    <thead>
                        <tr>
                            <th>Naam</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @if($districten!=="")
                        @foreach($districten as $district)
                        <tr data-id="">
                            <td>{{$district->district_naam}}</td>
                            <td><a href="/districten/{{$district->district_id}}">
                                    <i class="material-icons edit">edit</i>
                                </a>
                            </td>
                            <td>
                                <form action="{{action([DistrictenController::class,'destroy'],[$district])}}"
                                    id="delete_form_{{$district->district_id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a onclick="confirmDelete({{$district->district_id}})">
                                        <i class="material-icons edit red-text" class="delete_btn">delete</i>
                                    </a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td>
                                Geen districten beschikbaar
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
@endsection
@include('includes.fab')
@include('includes.createDistrictForm')