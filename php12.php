<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 12</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<body>
<div class="container">

<h1>Sõiduaeg</h1>
<form action="" method="get">
    Sõidu algus (hh:mm) <input type="text" name="t1"><br>
    Sõidu lõpp (hh:mm) <input type="text" name="t2"><br>
    <input type="submit" value="Saada">
</form>

<?php
if (!empty($_GET["t1"]) && isset($_GET['t2'])) {
    $t1 = $_GET['t1'];
    $t2 = $_GET['t2'];
    
    if (strlen($t1) >= 5 && strlen($t2) >= 5) {
        $alg = new DateTime($t1);
        $lopp = new DateTime($t2);
        $erinev = $lopp->diff($alg);

        $tund= $erinev->h;
        $minut = $erinev->i;

        echo "Sõiduaeg on: $tund tundi ja $minut minutit";
    } else {
        echo "Sisestatud ajad peavad olema vähemalt viis sümbolit pikad.";
    }
}
?>

<h1>Palkade võrdlus</h1>

<?php
$allikas = 'tootajad.csv';
$minu_csv = fopen($allikas, 'r') or die('Ei saanud faili avada!');

$header = fgetcsv($minu_csv, filesize($allikas),';');

$mpalk = [];
$fpalk = [];

while (!feof($minu_csv)) {
    $row = fgetcsv($minu_csv, filesize($allikas),';');
    if (is_array($row) && $row[1] == 'm') {
        array_push($mpalk, $row[2]);
    } elseif (is_array($row) && $row[1] == 'n') {
        array_push($fpalk, $row[2]);
    }
}

fclose($minu_csv);

$mkesk = array_sum($mpalk) / count($mpalk);
$fkesk = array_sum($fpalk) / count($fpalk);

$msuurim = max($mpalk);
$fsuurim = max($fpalk);

echo 'Mehe keskmine palk: '.$mkesk.'<br>';
echo 'Naise keskmine palk: '.$fkesk.'<br><br>';
echo 'Mehe suurim palk: '.$msuurim.'<br>';
echo 'Naise suurim palk: '.$fsuurim.'<br>';
?>
</div>
</body>
</html>