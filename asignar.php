<?php
/* SCRIPT QUE LISTA LOS ATRIBUTOS REQUERIDOS */

$data = file_get_contents("data-1.json");
$atributos = json_decode($data, true);
	foreach ($atributos as $atrib) {
		  $item = "<div class='itemMostrado card'>";
		  $item .="<img src='img/home.jpg' alt='Demo'>";
		  $item .="<div class='card-stacked'>";
		  $item .="<strong>Dirección: </strong>".$atrib["Direccion"]."</br>";
		  $item .="<strong>Ciudad: </strong>".$atrib["Ciudad"]."</br>";
		  $item .="<strong>Teléfono: </strong>".$atrib["Telefono"]."</br>";
		  $item .="<strong>Código Postal: </strong>".$atrib["Codigo_Postal"]."</br>";
		  $item .="<strong>Tipo: </strong>".$atrib["Tipo"]."</br>";
		  $item .="<strong>Precio: </strong><span class='precioTexto'>".$atrib["Precio"]."</span></br>";
		  $item .="<div class='card-action'>VENTAS</div>";
		  $item .="</div>";
		  $item .= "</div>";
		  echo $item;
	}
	

?>