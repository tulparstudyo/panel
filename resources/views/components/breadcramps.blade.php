<?php
$items = explode('/', $path);
$last = array_pop($items);
$list = '';
if($items){
    foreach($items as $item){
        $list .= '<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">'.$item.'</a></li>';
    }
}
if($last){
    $list .= '<li class="breadcrumb-item text-sm text-dark active" aria-current="page">'.$last.'</li>';
}
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">{!! $list !!} </ol>
    <h6 class="font-weight-bolder mb-0">{{ $title }}</h6>
</nav>
