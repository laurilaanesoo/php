<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 9</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<body>
<div class="container">
<h1>Nimi</h1>
<form action="" method="get">
    Sisesta oma nimi <input type="text" name="t1"><br>
    <input type="submit" value="Saada">
</form>


<?php
if (!empty($_GET["t1"])){
    $t1 = $_GET['t1'];
    $nimi = ucwords(strtolower($t1));
    echo "Tere, " . $nimi . "!";
}

?>

<h1>Punktidega nimi</h1>
<form action="" method="get">
Sisesta tekst <input type="text" name="t2"><br>
<input type="submit" value="Saada">
</form>
<?php
if (!empty($_GET["t2"])){
    $t2 = $_GET['t2'];
    $nimi2 = implode('.', str_split($t2));
    echo $nimi2;
}
?>


<h1>Sõnumid</h1>
<form action="" method="get">
Sisesta sõnum <input type="text" name="t3"><br>
<input type="submit" value="Saada">
</form>

<?php
if (!empty($_GET["t3"])){
    $t3 = $_GET['t3'];
    $sonad = array("noob", "loll", "ohmoon");
    $asenda = str_replace($sonad, "****", $t3);
    echo $asenda;
}
?>

<h1>Email</h1>
<form action="" method="get">
Eesnimi <input type="text" name="t4"><br>
Perenimi <input type="text" name="t5"><br>
<input type="submit" value="Saada">
</form>
<?php
if (!empty($_GET["t4"]) && !empty($_GET["t5"])) {
    $t4 = $_GET['t4'];
    $t5 = $_GET['t5'];
    $t4 = str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'y', 'o'), mb_strtolower($t4));
    $t5 = str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'y', 'o'), mb_strtolower($t5));
    $email = $t4 . "." . $t5 . "@hkhk.edu.ee";

    echo "Emaili aadress on: " . $email;
}

?>
</div>
</body>
</html>