<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 6</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<body>
<div class="container">
<h1>Genereeri</h1>
<?php
	for ($i = 1; $i <= 100; $i++) {
        echo $i . ".";
        if ($i % 10 == 0) {
          echo "<br>";
        } else {
          echo " ";
        }
      }

?>
<h1>Rida ja Rida II</h1>
<?php
echo "Rida";
echo "<br>**********";
echo "<br>Rida II<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "*<br>";
  }
echo "<br>";
?>

<h1>Ruut</h1>

<form action="" method="get">
    Ruudu 1 külg <input type="text" name="t1"><br>
    Ruudu 2 külg <input type="text" name="t2"><br>
    <input type="submit" value="Saada">
</form>

<?php
if(isset($_GET["t1"]) && isset($_GET["t2"])) {
  $a = $_GET['t1'];
  $b = $_GET['t2'];

  for($rida = 1; $rida <= $b; $rida++) { 
      for($veerg = 1; $veerg <= $a; $veerg++) { 
          echo "*";	
      }
      echo "<br>";
  }
}

?>
<h1>Kahanev</h1>
<?php

$num=0;
 
for ($i = 10; $i >= 2; $i -= 2) {
  echo $i . "\n";
}
 
?>

<h1>Kolmega jagunevad</h1>

<?php

$arv = 1;
	while($arv <=100){
		$arv++;	
    if ($arv % 3 == 0) {
      echo $arv . " ";
    }
	}


?>

<h1>Masiivid ja tsüklid</h1>

<?php

$tnimed = array("Emma", "Olivia", "Ava");
$pnimed = array("Liam", "Noah", "William");
$paarid = array_map(null, $tnimed, $pnimed);

foreach ($paarid as $paar) {
    echo $paar[0] . " ja " . $paar[1] . "<br>";
}
?>
</div>
</body>
</html>