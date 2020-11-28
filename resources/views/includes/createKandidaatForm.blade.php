<?php 
use App\Http\Controllers\KandidatenController;
?>
<div id="modal1" class="modal">
    <div class="modal-content row">
        <form class="col s10 offset-s1" action="{{action([KandidatenController::class,'store'],[$kandidaat??Null])}}"
            id="KandidaatForm" method="POST">
            <h5>Kandidaat Registreren</h5>
            @csrf
            <div class="row">

                <div class="input-field col s6">
                    <input name="voornaam" id="voornaam" type="text" class="rsv-input" required>
                    <label for="voornaam" class="rsv-input-label">Voornaam</label>

                </div>

                <div class="input-field col s6">
                    <input id="naam" name="naam" type="text" class="validate rsv-input" required>
                    <label for="voornaam" class="rsv-input-label">Naam</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <select class="" name="partij" id="partij" required>
                        <option value="" disabled selected>Selecteer de politieke partij</option>
                        @foreach ($partijen as $partij)
                        <option value="{{$partij->partij_id}}">{{$partij->partij_naam}}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="row">
                <div class="input-field col s12">
                    <select class="" name="district" id="district" required>
                        <option value="" disabled selected>Selecteer het district</option>
                        @foreach ($districten as $district)
                        <option value="{{$district->district_id}}">{{$district->district_naam}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <button class="waves-effect waves-light btn col s4 right login-btn" type="submit" name="action"
                    id="persoonlijke_gegevens_btn">Creëren
                    <i class="material-icons right">send</i>
                </button>
            </div>
    </div>
    </form>
</div>
</div>