<?php
$uri = explode('/',$_SERVER['REQUEST_URI']);
?>
<div class="row">
    <div class="col s12">
        @for ($i = 1; $i < count($uri); $i++) 
    @if($i==1) <a href="/{{$uri[$i]}}" class="breadcrumb black-text">{{UCfirst($uri[$i])}}</a>
        @else <a href="" class="breadcrumb black-text">{{UCfirst($uri[$i])}}</a>
        @endif
        @endfor
    </div>
</div>