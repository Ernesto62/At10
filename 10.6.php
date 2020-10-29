<?php 
$pacientes = array(
'Joana' =>20,
'Joana' =>25,
'Joana' =>30
);
echo ' Idade do paciente Joana ' . $pacientes['Joana'] . ' anos.';

foreach ($pacientes as $nome=>$idade){
	echo 'O paciente ' . $nome . ' tem ' . $idade . ' anos.<br>';
}
$pacientes['Pedro']=24;
$pacientes['Carla']=23;
