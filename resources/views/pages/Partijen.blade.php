@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col m8 offset-m2 s12">
        <div class="card white">
            <div class="card-header-floating z-depth-1">
                <span class="card-title">Partijen</span>
                <span class="card-subtitle">Politieke partijen in het systeem</span>
            </div>
            <div class="card-content ">
                <table>
                    <thead>
                        <tr>
                            <th>Naam</th>
                            <th>Afkorting</th>
                            <th>Aantal Stemmen
                            <th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @if($partijen!=="")
                        @foreach($partijen as $partij)
                        <tr data-id="">
                            <td>{{$partij->partij_naam}}</td>
                            <td>{{$partij->partij_afkorting}}</td>
                            <td>{{($partij->aantal_stemmen)??0}}</td>
                            <td><a href="/partijen/{{$partij->partij_id}}"> <i class="material-icons edit">edit</i>
                                </a>
                            </td>
                            <td>
                                <form action="
                                {{-- {{action([PartijenController::class,'destroy'],[$partij])}}" --}}
                                    id="delete_form_{{$partij->partij_id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a onclick="confirmDelete({{$partij->partij_id}})">
                                        <i class="material-icons edit red-text" class="delete_btn">delete</i>
                                    </a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td>
                                Geen partijen beschikbaar
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