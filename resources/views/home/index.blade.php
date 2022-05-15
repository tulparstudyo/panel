<?php
$list = ["M"=>1, "T"=>2, "W"=>7, "T"=>2, "F"=>9, "S"=>5, "S"=>8];
$json = json_encode($list);
$value = "1.25$";
?>
<div class="row">
    <x-item.badgebox style="success" icon="schedule" title="Başlık" description="Açıklama" :value="$value" />
    <x-item.badgebox style="info" icon="person" title="Başlık" description="Açıklama" :value="$value" />
    <x-item.badgebox style="danger" icon="weekend" title="Başlık" description="Açıklama" :value="$value" />
    <x-item.badgebox style="warning" icon="person" title="Başlık" description="Açıklama" :value="$value" />
</div>
<div class="row mt-4">
    <x-item.cardbox type="line" style="danger" icon="schedule" title="Başlık" description="Açıklama" :json="$json" />
    <x-item.cardbox type="line" style="dark" icon="schedule" title="Başlık" description="Açıklama" :json="$json" />
    <x-item.cardbox type="line" style="success" icon="schedule" title="Başlık" description="Açıklama" :json="$json" />
</div>
