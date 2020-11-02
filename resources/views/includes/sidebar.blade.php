
<?php
// get user role
$user_role = "admin" //this is for testing purposes 

?>
<div class="sidebar">
    <ul id="slide-out" class="sidenav sidenav-fixed">
        <nav-block>
            <li class="<?php echo ((\Request::is('home')) ? "active" : ""); ?>">
                <i class="material-icons left">
                    dashboard
                </i>
                <a href="home">Home</a>
            </li>
            @if($user_role == 'user')
            <li class="<?php echo ((\Request::is('stemmen')) ? "active" : ""); ?>">
                <i class="material-icons left">
                    how_to_vote
                </i>
                <a href=stemmen"">Stemmen</a>
            </li>
            @endif
            @if($user_role == 'admin')
            <li class="<?php echo ((\Request::is('kandidaten')) ? "active" : ""); ?>">
                <i class="material-icons left">
                    person
                </i>
                <a href="kandidaten">Kandidaten</a>
            </li>
      <li class="<?php echo ((\Request::is('partijen')) ? "active" : ""); ?>">
                <i class="material-icons left">
                    group
                </i>
                <a href="partijen">Partijen</a>
            </li>      <li class="<?php echo ((\Request::is('distrikten')) ? "active" : ""); ?>">
                <i class="material-icons left">
                    location_city
                </i>
                <a href="distrikten">Distrikten</a>
            </li>      
            @endif
        </nav-block>
</div>