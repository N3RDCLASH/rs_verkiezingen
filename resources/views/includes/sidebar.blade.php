<?php
// user role logic here...
if (auth()->user()){
if(property_exists(auth()->user(),'burger_id')){
    $user_role = 'user';
}else {
    $user_role= 'admin';
}

}else {
    $user_role= 'admin';
}
; //this is for testing purposes 
?>
<div class="sidebar col">
    <ul id="slide-out" class="sidenav sidenav-fixed">
        <div class="sidebar_logo_container">
            <h5 class="">Verkiezingen</h5>

            <button class="hamburger hamburger--collapse" id="sidebar_toggle" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>

        </div>
        <nav-block>
            <li class="<?php echo ((\Request::is('home')) ? "active" : ""); ?>">
                <a href="/home">
                    <i class="material-icons left">
                        dashboard
                    </i>
                    <span>Home</span></a>
            </li>
            @if($user_role == 'user')
            <li class="<?php echo ((\Request::is('stemmen')) ? "active" : ""); ?>">
                <a href="/stemmen">
                    <i class="material-icons left">
                        how_to_vote
                    </i>
                    <span>Stemmen</span>
                </a>
            </li>
            @endif
            @if($user_role == 'admin')
            <li class="<?php echo ((\Request::is('kandidaten')) ? "active" : ""); ?>">
                <a href="/kandidaten">
                    <i class="material-icons left">
                        face
                    </i>
                    <span>Kandidaten</span>
                </a>
            </li>
            <li class="<?php echo ((\Request::is('partijen')) ? "active" : ""); ?>">
                <a href="/partijen">
                    <i class="material-icons left">
                        group
                    </i>
                    <span>Partijen</a>
            </li>
            <li class="<?php echo ((\Request::is('districten')) ? "active" : ""); ?>">
                <a href="/districten">
                    <i class="material-icons left">
                        location_city
                    </i>
                    <span> Districten</span>
                </a>
            </li>
            <li class="<?php echo ((\Request::is('admins')) ? "active" : ""); ?>">
                <a href="/admins">
                    <i class="material-icons left">
                        supervisor_account
                    </i>
                    <span>Admins</span>
                </a>
            </li>
            @endif
        </nav-block>
</div>