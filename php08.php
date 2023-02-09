<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 8</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<body>
<div class="container">
<h1>Kuupäev ja kellaaeg</h1>
<?php
echo date('d.m.Y H:i:s');

?>
<h1>Vanus</h1>
<?php
$aeg = new DateTime();

$sund = 2005;
$vanus = $aeg->format('Y') - $sund;

echo "Sa oled: " . $vanus . " aastat vana";
?>
<h1>Kooliaasta lõpp</h1>
<?php
$tana = new DateTime();

$koollopp = new DateTime("June 20");

if ($tana > $koollopp) {
    $koollopp->modify("+1 year");
}

$jaanud = date_diff($tana, $koollopp);
$paeva = $jaanud->format("%a");
echo "2022 kooliaasta lõpuni on jäänud " . $paeva . " päeva";
?>
<h1>Aastaaeg</h1>
<?php

$kuu = date("n");

if ($kuu >= 3 && $kuu <= 5) {
    $aastaaeg = "kevad";
    
} elseif ($kuu >= 6 && $kuu <= 8) {
    $aastaaeg = "suvi";
    
} elseif ($kuu >= 9 && $kuu <= 11) {
    $aastaaeg = "sugis";
   
} else {
    $aastaaeg = "talv";

}


echo '<img src="img/' .$aastaaeg .'.jpg" alt="' .$aastaaeg . '">';
?>

</div>
</body>
</html>