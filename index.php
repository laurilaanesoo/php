<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 10</title>
</head>
<menu>
    <a href="index.php">Avaleht</a> 
    <a href="index.php?leht=portfoolio">Portfoolio</a>
    <a href="index.php?leht=kaart">Kaart</a>
    <a href="index.php?leht=kontakt">Kontakt</a>
</menu>
<body>
<?php
if (!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
	$lubatud = array('portfoolio','kaart','kontakt');
	$kontroll = in_array($leht, $lubatud);
	if($kontroll==true){
		include($leht.'.php');
	} else {
		echo 'Valitud lehte ei eksisteeri!';
	}
} else {

?>

<h2>Avaleht</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, praesentium quae nesciunt ipsum fuga dignissimos reiciendis distinctio commodi voluptates autem suscipit hic eius eum architecto eos amet quibusdam, molestias provident? Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ex sed fugiat dignissimos eligendi odio harum, non, minima perspiciatis incidunt fugit, odit amet explicabo inventore quaerat ratione ullam temporibus quisquam?</p>
<?php
}
?>
</body>
</html>