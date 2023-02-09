
<!DOCTYPE html>
<html lang="et">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <title>Harjutus 4</title>
</head>

<body>
<div class="container">
<form action="php04.php" method="get">
        Arv 1 <input type="text" name="t1"><br>
        Arv 2 <input type="text" name="t2"><br>
        <input type="submit" value="Saada">
    </form>
    <form action="php04.php" method="get">
        Vanus 1 <input type="text" name="t3"><br>
        Vanus 2 <input type="text" name="t4"><br>
        <input type="submit" value="Saada">
    </form>
    <form action="php04.php" method="get">
        Arvud 1 <input type="text" name="t5"><br>
        Arvud 2 <input type="text" name="t6"><br>
        <input type="submit" value="Saada">
    </form>
    <form action="php04.php" method="get">
        Juubel <input type="text" name="t7"><br>
        <input type="submit" value="Saada">
    </form>
    <form action="php04.php" method="get">
        Puntkid <input type="text" name="t8"><br>
        <input type="submit" value="Saada">
    </form>
<?php
/*
	04 - PHP
	Lauri Laanesoo
	Haapsalu Kutsehariduskeskus
	24.01.2023
*/

/* Jagamine
*/

if(isset($_GET["t1"]))
{
    $a = $_GET['t1'];
    $b = $_GET['t2'];
    
    $jagam = $a / $b;

    echo "Vastus on: $jagam";
}

/*
Vanused
*/
if(isset($_GET["t3"]))
{
    $v1 = $_GET['t3'];
    $v2 = $_GET['t4'];

    if($v1 > $v2){
        echo "Esimene kasutaja on vanem teisest";
    } else if ($v1 < $v2) {
        echo "Teine kasutaja on esimesest vanem";
    } else if ($v1 = $v2) {
        echo "Kasutajad on samavanused";
    }

}


/*
Ruut I ja II
*/
if(isset($_GET["t5"]))
{
    $arv1 = $_GET['t5'];
    $arv2 = $_GET['t6'];

    if ($arv1 == $arv2) {
        echo "Kujund on ruut<br>";
        echo '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/Red_square.svg/640px-Red_square.svg.png" alt="Ruut" width="200" height="200">';
    } else {
        echo "Kujund on ristkülik<br>";
        echo '<img src="https://d1whtlypfis84e.cloudfront.net/guides/wp-content/uploads/2018/07/20131909/11-300x178.png" alt="Ristkülik" width="300" height="200">';
    }

}
/*
Juubel
*/
if(isset($_GET["t7"]))
{
    $juubel = $_GET['t7'];
    
    if($juubel == '') {
        echo "Sisesta aasta";
    } else {
        if($juubel % 5 == 0 || $juubel % 10 == 0) {
            echo "Sul on juubel!";
        } else {
            echo "Sul ei ole juubel";
        }
    }
}

if(isset($_GET["t8"]))
{
    $skoor = $_GET["t8"];

    if($skoor == '') {
        echo "SISESTA OMA PUNKTID!";
    } elseif(!is_numeric($skoor)) {
        echo "SISESTA OMA PUNKTID!";
    } else {
        switch ($skoor) {
            case ($skoor >= 10):
                echo "SUPER!";
                break;
            case ($skoor >= 5):
                echo "TEHTUD!";
                break;
            case ($skoor < 5):
                echo "KASIN!";
                break;
        }
    }
}
?>
</div>
</body>

</html>