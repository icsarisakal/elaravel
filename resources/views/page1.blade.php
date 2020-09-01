<h1>BLADE YAPISI</h1>

<?php
//$ad = "Emrah Yüksel";
//echo $ad;
//?>

@php
    $ad = "Emrah Yüksel";
    echo $ad;
@endphp

<br>
Adınız..: {{$ad}}
<br>
@php
$deger ="<script>alert('hack')</script>";
@endphp

