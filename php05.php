<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 5</title>
</head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<body>
    <div class="container">
    <h1>Tüdrukute nimed</h1>
    <?php
    $tydruk_nimi = array("Emma", "Olivia", "Ava", "Isabella", "Sophia", "Mia", "Charlotte", "Amelia", "Emily", "Abigail");
    //reastab kõik nimed tähestiku järjekorras
    echo "Kõik nimed järjekorras:<br>";
    sort($tydruk_nimi);
    foreach ($tydruk_nimi as $nimi) {
        echo $nimi . "<br>";
    }

    sort($tydruk_nimi);
    // Kolm esimest nime tähestikujärjekorras
    echo "<br>Esimesed 3 nime: <br>";
    for($i=0; $i<3; $i++){
        echo $tydruk_nimi[$i] . "<br>";
    }
    // Viimane tüdruku nimi
    echo "Viimane nimi: ".end($tydruk_nimi)."<br>";
    // Suvaline tüdruku nimi
    $random_key = array_rand($tydruk_nimi);
    echo "Suvaline nimi: ".$tydruk_nimi[$random_key]."<br>";
?>
<h1>Autod</h1>
<?php
    //auto loend
    $autobrand = array("Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota","Volkswagen","Volkswagen","GMC","Jeep","Saab","Hyundai","Subaru","Mercedes-Benz",
    "Honda","Kia","Mercedes-Benz","Chevrolet","Chevrolet","Porsche","Buick","Dodge","GMC","Dodge","Nissan","Dodge","Jaguar","Ford","Honda","Toyota","Jeep",
    "Kia","Buick","Chevrolet","Subaru","Chevrolet","Chevrolet","Pontiac","Maybach","Chevrolet","Plymouth","Dodge","Nissan","Porsche","Nissan","Mercedes-Benz",
    "Suzuki","Nissan","Ford","Acura","Volkswagen","Lincoln","Mazda","BMW","Mercury","Mitsubishi","Ram","Audi","Kia","Pontiac","Toyota","Acura","Toyota","Toyota",
    "Chevrolet","Oldsmobile","Acura","Pontiac","Lexus","Chevrolet","Cadillac","GMC","Jeep","Audi","Acura","Acura","Honda","Dodge","Hummer","Chevrolet","BMW",
    "Honda","Lincoln","Hummer","Acura","Buick","BMW","Chevrolet","Cadillac","BMW","Pontiac","Audi","Hummer","Suzuki","Mitsubishi","Jeep","Buick","Ford");
    $autovin = array(
        "1GKS1GKC8FR966658", "1FTEW1C87AK375821", "1G4GF5E30DF760067", "1FTEW1CW9AF114701", "WAUGGAFC8CN433989", "3G5DA03E83S704506", "4JGDA2EB0DA207570", 
        "1FTEW1E88AK070552", "SAJWA0F77F8732763", "JHMFA3F21BS660717", "JTHBP5C29C5750730", "WA1LFAFP9DA963060", "3D7TT2CT6BG521976", "WVWN7EE961049", 
        "2C3CA5CG3BH341234", "YV4952CFXC162587", "KNALN4D71F5805172", "JN1CV6EK7BM903692", "5FRYD3H84EB186765", "WAUL64B83N441878", "WDDGF4HBXCF845665", 
        "WAUKF78E45A133973", "JN1BY0AR2AM022612", "WA1EY74L69D931520", "3GYFNGEYXBS290465", "1D7CW2GK4AS059336", "JN8AZ1FY5EW087447", "WAUBF78E57A343355", 
        "SCFFBCCD8AG695133", "WBAWC73548E143482", "3GYFNGE38DS093883", "SCBCP73WC348460", "JN8AE2KPXE9353316", "2C3CDXDT2EH018229", "1G6AH5SX7D0325662", 
        "WVWED7AJ7DW431402", "1FTKR1AD3AP316066", "WBAKF5C52CE612586", "1FTNX2A57AE16083", "WAUCFAFR1AA166821", "SCFFDAAM3EG486065", "1G4PR5SK5F4821043", 
        "1C3CDFCB4ED858321", "1N6AD0CW8EN722090", "1NXBU4EE0AZ438077", "2T1BPRHE7FC131594", "JH4KB1637C451183", "1C4NJCBA7ED747024", "WAUHF68P86A736691", 
        "3D7TT2HT1AG96429", "5GADX23L96D250838", "5FRYD3H25FB985936", "1G4GG5E30DF126304", "KNADH5A38B6072755", "WAUBFAFL1BA477979", "3C63DRL4CG674293", 
        "1G6AR5SX0E0834815", "1NXBU4EE2AZ309838", "WAUKGBFB4AN797783", "JN1AJ0HP8AM801887", "WAUPL68E25A448831", "WA1C8BFP3FA535374", "WAUHE78P78A019744", 
        "TRURD38J081400551", "1G4HP52K95428171", "5N1CR2MN1EC607241", "5UMDU93417L322773", "1G6AJ5S35F09585", "JN1CV6AP3BM234743", "SCBCR63W66C842051", 
        "SCFFDCBD2AG509467", "WBA3C1C58CA664091", "1D7RW2BK6BS922303", "WAUDH98E67A546009", "2HNYB1H46CH683844", "3VW467AT4DM257275", "WDDGF4HB7CA515172", 
        "2G61W5S88E9666199", "5GADV33W17D256205", "2C3CDXDT9CH683075", "2G4GU5X0E9989574", "WAUJC58E53A641651", "WDDEJ7KB3CA053774", "3D73M3CL6AG890452", 
        "5GAER13D19J026924", "1G4HC5EM1BU329204", "3VWML7AJ6CM772736", "3C6TD4HT2CG011211", "JTDZN3EU2FJ023675", "JN8AZ1MU4CW041721", "KNAFX5A82F5991024", 
        "1N6AA0CJ1D57470", "WAUEG98E76A780908", "WAUAF78E96A920706", "1GT01XEG8FZ268942", "1FTEW1CW4AF371278", "JN1AZ4EH8DM531691", "WAUEKAFBXAN294295", 
        "1N6AA0EDXFN868772", "WBADW3C59DJ422810");

// loendist autode lugemine
$lug = count($autobrand);
echo "<br>Siin on loendis on $lug autot";
if($lug == count(array_unique($autobrand))){
    echo "<br>Loendi pikkus on sama";
} else {
    echo "<br>Loendi pikkus on erinev";
}

// toyota ja audi arv
$toyota_arv = 0;
$audi_arv = 0;
foreach($autobrand as $auto) {
    if ($auto === "Toyota") {
        $toyota_arv++;
    } else if ($auto === "Audi") {
        $audi_arv++;
    }
}
echo "<br>Toyota arv: " . $toyota_arv . "<br>";
echo "Audi arv: " . $audi_arv . "<br>";

// vin numbrid väiksemad kui 17 kohalised

echo "VIN koodid vähema kui 17 kohaga:<br>";
foreach($autovin as $vin) {
    if (strlen($vin) < 17) {
        echo $vin . "<br>";
    }
}
?>

<h1>Palgad</h1>

<?php

// 2018 palkade keskmine
$palgad = array(1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455);
$keskmine = array_sum($palgad) / count($palgad);
echo "<br>2018 aasta palkade keskmine on: $keskmine<br>";
?>
<h1>Firmad</h1>

<form action="php05.php" method="get">
        Sisesta firma nimi, mida eemaldada <input type="text" name="t1"><br>
        <input type="submit" value="Saada">
    </form>
<?php

// Firmad 
$firmad = array("Kimia","Mynte","Voomm","Twiyo","Layo","Talane","Gigashots","Tagchat","Quaxo","Voonyx","Kwilith","Edgepulse","Eidel","Eadel","Jaloo","Oyope","Jamia");

// Lahter firma eemaldamiseks
if(isset($_GET["t1"])){
    $key = array_search($_GET["t1"], $firmad);
    if($key !== false){
        unset($firmad[$key]);
        sort($firmad);
    }
}


// sorteerimine
sort($firmad);

// prindib kõik firma nimed
foreach ($firmad as $company) {
    echo $company . "<br>";
}

// sorteerimine
sort($firmad);
// uuendatud firmad
foreach ($firmad as $company) {
    echo $company . "<br>";
}
?>

<h1>Riigid</h1>
<?php
$riigid = array("Indonesia","Canada","Kyrgyzstan","Germany","Philippines",
"Philippines","Canada","Philippines","South Sudan","Brazil",
"Democratic Republic of the Congo","Indonesia","Syria","Sweden",
"Philippines","Russia","China","Japan","Brazil","Sweden","Mexico","France",
"Kazakhstan","Cuba","Portugal","Czech Republic");
print_r($riigid);
$pikim = "";
foreach ($riigid as $riik) {
    if (strlen($riik) > strlen($pikim)) {
        $pikim = $riik;
    }
}
echo "<br>Kõige rohkem tähemärkidega riik on: " . $pikim . " koos " . strlen($pikim) . " tähemärgiga.<br>";
?>
<h1>Hiina nimed</h1>
<?php
$nimed = array("瀚聪","月松","雨萌","展博","雪丽","哲恒","慧妍","博裕","宸瑜","奕漳",
"思宏","伟菘","彦歆","睿杰","尹智","琪煜","惠茜","晓晴","志宸","博豪",
"璟雯","崇杉","俊誉","军卿","辰华","娅楠","志宸","欣妍","明美");

//järjestikust väiksemast suuremani
sort($nimed);


echo "First name: " . $nimed[0] . "<br>";
echo "Last name: " . end($nimed);

?>

<h1>Google</h1>
<form action="php05.php" method="get">
        Sisesta nimi, mida otsida  <input type="text" name="t2"><br>
        <input type="submit" value="Saada">
    </form>

<?php
// loend
$nimedloend = array("Feake","Bradwell","Dreger","Bloggett","Lambole","Daish","Lippiett","Blackie","Stollenbeck","Houseago","Dugall","Sprowson","Kitley","Mcenamin","Allchin","Doghartie","Brierly","Pirrone","Fairnie","Seal","Scoffins","Galer","Matevosian","DeBlase","Cubbin","Izzett","Ebi","Clohisey","Prater","Probart","Samwaye","Concannon","MacLure","Eliet","Kundt","Reyes");
//funktsiooni, kui nimi leidakse siis antakse vastav teade
function findName($nimed2, $nimedloend) {
  if (in_array($nimed2, $nimedloend)) {
    echo '<div class="alert alert-success" role="alert">Nimi "'.$nimed2.'" leiti loendist</div>';
  } else {
    echo '<div class="alert alert-danger" role="alert">Nimi "'.$nimed2.'" ei leitud loendist</div>';
  }
}

if (isset($_GET['t2'])) {
    findName($_GET['t2'], $nimedloend);
  }

?>
<h1>Pildid</h1>

<?php

  $pildid = array("prentice.jpg","freeland.jpg","peterus.jpg","devlin.jpg","gabriel.jpg","pete.jpg");
  echo "Kolmas pilt loendist<br>";
  echo '<img class="col-sm-2" src="img/'.$pildid[2].'">';
  echo '<div class="row">';
  
  foreach ($pildid as $pilt)  {
    
    echo '<div class="col-sm-2">';
            echo '<img src="img/'.$pilt.'"class="img-fluid">';
            echo '</div>';
            
  }
  echo '</div>';
  
?>

</div>
</body>
</html>