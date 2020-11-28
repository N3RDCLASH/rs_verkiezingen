<?php 
use App\Http\Controllers\DistrictenController;
?>
<div id="modal1" class="modal">
    <div class="modal-content row">
        <form class="col s10 offset-s1" action="{{action([DistrictenController::class,'store'],[$kandidaat??Null])}}"
            id="KandidaatForm" method="POST">
            <h5>District Registreren</h5>
            @csrf
            <div class="row">

                <div class="input-field col s6">
                    <input name="district_naam" id="district_naam" type="text" class="rsv-input" required>
                    <label for="district_naam" class="rsv-input-label">District Naam</label>

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