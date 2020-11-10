@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col m8 offset-m2 s12">
        <div class="card white">
            <div class="card-header-floating z-depth-1">
                <span class="card-title">Kandidaten</span>
                <span class="card-subtitle">DNA Kandidaten in het systeem</span>
            </div>
            <div class="card-content ">
                <table>
                    <thead>
                        <tr>
                            <th>Naam</th>
                            <th>Partij</th>
                            <th>District
                            <th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @if($kandidaten!=="")
                        @foreach($kandidaten as $kandidaat)
                    <tr data-id="">
                            <td>{{$kandidaat->kandidaat_naam}}</td>
                            <td>{{$kandidaat->partij}}</td>
                            <td>{{$kandidaat->district}}</td>
                            <td><a href="/kandidaten/{{$kandidaat->kandidaat_id}}">                               <i class="material-icons edit">edit</i>
                            </a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr><td>
                            Geen kandidaten beschikbaar
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
