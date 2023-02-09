<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 7</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<body>
<div class="container">

<?php
function tervita(){
		return "Tere päiksekene";
        
	}
echo tervita();
function uudiskiri(){
    echo
    '<form action="" method="get">
    Nimi <input type="text" name="t1"><br>
    <input type="submit" value="Saada">
</form>';
if(isset($_GET["t1"])){
    $a = $_GET['t1'];

    }
  }
  echo
  '<form>
  <div class="form-group">
    <label for="exampleInputEmail1"><br>Uudiskirjaga liitumine</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>';
  echo '<br>';
echo uudiskiri()


?>
<h1>Email ja kood</h1>
<?php

$n=10;
function getName($n) {
    if (isset($_GET['t1'])) {
        $nimi = $_GET['t1'];
        $email = $nimi . "@hkhk.edu.ee";
        echo "<p>Email on: $email</p>";
      }
}

echo getName($n);
?>
<?php
function getCode($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return strtolower($randomString);
}

$k = 7;
echo "Kood on:";
echo getCode($k);

?>
<h1>Arvude vahemikud</h1>
<form action="" method="get">
    Arvude vahemik algus <input type="text" name="t2"><br>
    Arvude vahemik lõpp <input type="text" name="t3"><br>
    Arvude vahemiku aste <input type="text" name="t4"><br>
    <input type="submit" value="Saada">
</form>

<?php
function gennumber($i) {
    function generateNumbers($start, $end, $step = 1) {
        for ($i = $start; $i <= $end; $i += $step) {
            echo $i . ", ";
        }
    }
    
    if (isset($_GET['t2']) && isset($_GET['t3']) && isset($_GET['t4'])) {
        $start = $_GET['t2'];
        $end = $_GET['t3'];
        $step = $_GET['t4'];
        generateNumbers($start, $end, $step);
    }
      }
echo gennumber("");
?>
<h1>Ristküliku pindala</h1>
<form action="" method="get">
    Ristküliku 1.külg <input type="text" name="t5"><br>
    Ristküliku 2.külg <input type="text" name="t6"><br>
    <input type="submit" value="Saada">
</form>

<?php
function ristkylikupindala($laius, $pikkus) {
    return $laius * $pikkus;
}

if (isset($_GET['t5']) && isset($_GET['t6'])) {
    $laius = $_GET['t5'];
    $pikkus = $_GET['t6'];
    echo "Ristküliku pindala on: " . ristkylikupindala($laius, $pikkus);
}
?>
<h1>Isikukood</h1>
<form action="" method="get">
    Isikukood <input type="text" name="t7"><br>
    <input type="submit" value="Saada">
</form>

<?php
function isikukood($kood) {
    $oige = 11;
    if (strlen($kood) !== $oige) {
        return false;
    }

    $sugu = (int) $kood[0] % 2 === 0 ? 'Naine' : 'Mees';
    $aasta = (int) substr($kood, 1, 2);
    $kuu = (int) substr($kood, 3, 2);
    $paev = (int) substr($kood, 5, 2);

    if ($aasta < 20) {
        $aasta += 2000;
    } else {
        $aasta += 1900;
    }

    $sunniaasta = "$paev/$kuu/$aasta";

    return [
        'sugu' => $sugu,
        'sunniaasta' => $sunniaasta,
    ];
}

if (isset($_GET['t7'])) {
    $isikukood = $_GET['t7'];
    $vastus = isikukood($isikukood);
    if ($vastus === false) {
        echo 'Vale pikkusega';
    } else {
        echo "Sugu: {$vastus['sugu']}<br>";
        echo "Sünniaeg: {$vastus['sunniaasta']}";
    }
}
?>
<h1>Head mõtted</h1>
<?php
function headmotted() {
    $alus = array("Päike ", "Ta ", "Ma ", "Palju ", "Sina ", "Poiss ");
    $oeldis = array("räägib ", "joob ", "sööb ", "lööb ", "ootab ");
    $sihitis = array("pilvedes ", "kodus ", "peol ", "koolis ", "majas ");
    $key = array_rand($alus);
    echo $alus[$key];
    $key2 = array_rand($oeldis);
    echo $oeldis[$key2];
    $key3 = array_rand($sihitis);
    echo $sihitis[$key3];
    
}
headmotted();

?>
</div>
</body>
</html>