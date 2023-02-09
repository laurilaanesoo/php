
<h1>Vastus</h1>
<?php
/*
	02 - PHP
	Lauri Laanesoo
	Haapsalu Kutsehariduskeskus
	24.01.2023
*/

    
    $a = $_GET['t1'];
	$b = $_GET['t2'];
	$h = $_GET['t3'];
	
    $romb = 4 * $a;
    $trapet = $a + $b /2 * $h;
    echo 'Trapetsi pindala on: '.$trapet.'cm';
	echo ' Rombi ümbermoot on: '.$romb.'cm';
    
    

?>