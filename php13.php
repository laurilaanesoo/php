<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 13</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://w2ui.com/src/w2ui-1.4.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://w2ui.com/src/w2ui-1.4.2.min.css" />
    <script>$(document).ready(function () {
        $(".image").click(function () {
            w2popup.open({
                title: 'Pilt',
                body: '<img src="' + $(this).attr('src') + '" width="100%">',
                width: 500,
                height: 400
            });
        });
    });
    </script>
<body>
<h1>Failide üleslaadimine</h1>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="minu_fail" accept=".jpg, .jpeg" required>
    <input type="submit" value="Lae üles!">

</form>
<?php
if(!empty($_FILES['minu_fail']['name'])){
	$sinu_faili_nimi = $_FILES['minu_fail']['name'];
	$ajutine_fail= $_FILES['minu_fail']['tmp_name'];
	
	$faili_suurus = $_FILES['minu_fail']['size'];
	$lubatudlaiendus = array("image/jpeg", "image/jpg");
	
	$kataloog = 'failid';
	if (!is_dir($kataloog)) {
		mkdir($kataloog);
	}
	
	if (in_array($_FILES['minu_fail']['type'], $lubatudlaiendus)) {
		if (is_writable($kataloog)) {
			if(move_uploaded_file($ajutine_fail, $kataloog.'/'.$sinu_faili_nimi)){
				echo 'Faili üleslaadimine oli edukas';
				echo '<br><img class="image" src="'.$kataloog.'/'.$sinu_faili_nimi.'" />';
			} else {
				echo 'Faili üleslaadimine ebaõnnestus';
			}
		} else {
			echo "Kataloog failid ei ole kirjutatav";
		}
	} else {
		echo 'Lubatud failitüübid on JPEG, JPG';	
	}
}