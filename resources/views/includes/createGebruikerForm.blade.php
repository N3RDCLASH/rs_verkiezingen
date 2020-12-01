<?php 
use App\Http\Controllers\AdminsController;
?>
<div id="modal1" class="modal">
    <div class="modal-content row">
        <form class="col s10 offset-s1" action="{{action([AdminsController::class,'store'],[$kandidaat??Null])}}"
            id="KandidaatForm" method="POST">
            <h5>Kandidaat Registreren</h5>
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <input name="gebruikers_naam" id="gebruikers_naam" type="text" class="rsv-input">
                    <label for="gebruikers_naam" class="rsv-input-label">Gebruikersnaam</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <select class="" name="rol" id="rol" required>
                        <option value="" disabled selected>Selecteer gebruiker type</option>
                        <option value="admin">Admin</option>
                        <option value="super_admin">Super Admin</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="gebruikers_password" id="gebruikers_password" type="password" class="rsv-input">
                    <label for="gebruikers_naam" class="rsv-input-label">Gebruikers Password</label>
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