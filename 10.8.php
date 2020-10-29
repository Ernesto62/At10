<?php 
$carros = array (
	'Punto'=> array(
		'cor'=>'azul',
		'potência'=>'1.0',
		'opcionais'=>'Ar cond.'
	),
		'corsa'=> array(
		'cor'=>'cinza',
		'potência'=>'1.3',
		'opcionais'=>'MP3.'
	),

	'Golf'=> array(
		'cor'=>'Branco',
		'potência'=>'1.0',
		'opcionais'=>'Metalica'
	)


);
 //echo $carros['Punto']['opcionais'];

 foreach ($carros as $modelo=>$carro){
 	echo '<h1>'. $modelo . '</h1>';
 	foreach ($carro as $chave=>$detalhe){
 	echo '<b>'. $chave . '</b>=' . $detalhe . '<br>';
 }

 }
 ?>