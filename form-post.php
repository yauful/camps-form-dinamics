<?php

date_default_timezone_set('UTC');
$data = date("d.m.y"); 

$nombre = $_POST['nombre'];
$email= $_POST['email'];


echo $email;
echo "<br>";
echo $nombre;
echo "<br>";
echo "<hr>";
echo $data;
echo "<hr>";

$numberNFacturas = count($_POST["nFactura"]);
//echo numberNFacturas;


if($numberNFacturas  > 0){

	for($i=0; $i<$numberNFacturas ; $i++){

		if(trim($_POST["nFactura"][$i] != '')){
			$nFacturas = $_POST["nFactura"][$i]."<br>";
		}

		echo "Numero de factura ".$nFacturas;
	}
}


$numberReferencia = count($_POST["referencia"]);

if($numberReferencia > 0){

	for($i=0; $i<$numberReferencia; $i++){

		if(trim($_POST["referencia"][$i] != '')){
			$referencia = $_POST["referencia"][$i]."<br>";
		}

		echo "Número de referencia ".$referencia;
	}
}


$numberDesAnomalia = count($_POST["descripcionAnomalia"]);

if($numberDesAnomalia > 0){

	for($i=0; $i<$numberDesAnomalia; $i++){

		if(trim($_POST["descripcionAnomalia"][$i] != '')){
			$descripcionAnomalia = $_POST["descripcionAnomalia"][$i]."<br>";
		}

		echo "Descripción anomalia ".$descripcionAnomalia;
	}
}



?>