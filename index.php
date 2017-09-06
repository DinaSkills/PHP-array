<!DOCTYPE html>
<html>
<head>
	<title>Vjezba</title>
	<link rel="stylesheet" type="text/css" href="">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Abel|Anton|Oxygen" rel="stylesheet">

</head>


<body>
<?php



$boje = array("zelena","ljubicasta","crna","crvena","magenta");

function ispis($parametri){
  $brojac= 1;
foreach ($parametri as $parametar ) {

    echo $brojac .  " : " .$parametar . "<br/>";
    $brojac++;

    }
}

ispis($boje);


$osoba = array ( "Ime"=>"Dina",
                "Prezime"=> "Ahmetspahic",
                "Mobitel" => "061066200",
                "Godine" => "Mnogo:) "

                );

function druga($opis){

    foreach ($opis as $key => $value) {

         echo $key. ":". $value  . "<br/>";

    }
}

druga($osoba);

?>

    </body>

</html>