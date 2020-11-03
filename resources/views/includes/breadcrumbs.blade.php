<?php
$uri = explode('/',$_SERVER['REQUEST_URI']);
?>
<div class="row">
    <div class="col s12">
        @for ($i = 1; $i < count($uri); $i++) <a href="" class="breadcrumb black-text">{{UCfirst($uri[$i])}}</a>
            @endfor
    </div>
</div>