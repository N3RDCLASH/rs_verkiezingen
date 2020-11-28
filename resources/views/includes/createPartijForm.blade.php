<?php 
use App\Http\Controllers\PartijenController;
?>
<div id="modal1" class="modal">
    <div class="modal-content row">
        <form class="col s10 offset-s1" action="{{action([PartijenController::class,'store'],[$partij?? Null])}}"
            id="KandidaatForm" method="POST">
            <h5>Kandidaat Registreren</h5>
            @csrf
            <div class="row">

                <div class="input-field col s12">
                    <input name="partij_naam" id="partij_naam" type="text" class="rsv-input" value="">
                    <label for="partij_naam" class="rsv-input-label">Partij Naam</label>

                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="partij_afkorting" name="partij_afkorting" type="text" class="validate rsv-input"
                        value="">
                    <label for="partij_afkorting" class="rsv-input-label">Partij Afkorting</label>
                </div>
            </div>

            <div class="row">
                <button class="waves-effect waves-light btn col s4 right login-btn" type="submit" name="action"
                    id="persoonlijke_gegevens_btn">Registreer
                    <i class="material-icons right">send</i>
                </button>
            </div>
    </div>
    </form>
</div>
</div>