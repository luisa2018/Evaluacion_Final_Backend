<?php
/* SCRIPT QUE VALIDA LAS FUNCIONES DE CIUDAD Y TIPO */

$data = file_get_contents("data-1.json");
$atributos = json_decode($data, true);

function Ciudad($data){
	$i=0;
	foreach($data as $atrib){
		$city[$i] = $atrib[Ciudad];
		$i++;
	}
	$cityList = array_values(array_unique($city));
	$a = count($cityList);
	for($b=0; $b<$a;$b++){
		$item .= "<option value='$cityList[$b]'>";
		$item .= $cityList[$b];
		$item .= "</option>";
	}
	echo $item;
}
function Tipo($data){
	$i=0;
	foreach($data as $atrib){
		$atribiedad[$i] = $atrib[Tipo];
		$i++;
	}
	$atribiedadList = array_values(array_unique($atribiedad));
	$a = count($atribiedadList);
	for($b=0; $b<$a;$b++){
		$item .= "<option value='$atribiedadList[$b]'>";
		$item .= $atribiedadList[$b];
		$item .= "</option>";
	}
	echo $item;
}
?>
