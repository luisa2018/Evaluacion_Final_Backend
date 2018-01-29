<?php 

/* SCRIP QUE VALIDAD EL FILTRO POR CUIDAD, TIPO, Y PRECIO */

$ciudad = $_POST["ciudad"];
$tipo = $_POST["Tipo"];
$precio = $_POST["Precio"];
$data = file_get_contents("data-1.json");
$atributos = json_decode($data, true);
$valor = explode(";",$precio);

if($ciudad == "x" and $tipo == "x"){
	foreach ( $atributos as $atrib ) {
		$venta = explode("$",$atrib["Precio"]);
		$venta = str_replace(",","",$venta);
		if( $venta[1] > $valor[0] and $venta[1]<$valor[1]){
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
	}
}if($ciudad != "x" and $tipo != "x"){
	foreach ( $atributos as $atrib ) {
    	$venta = explode("$",$atrib["Precio"]);
		$venta = str_replace(",","",$venta);		
		if($ciudad == $atrib["Ciudad"]){
			if($tipo == $atrib["Tipo"]){
				if( $venta[1] > $valor[0] and $venta[1]<$valor[1]){
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
			}
		}
	}
}else{
	if($ciudad != "x" and $tipo == "x"){
			foreach ( $atributos as $atrib ) {
				$venta = explode("$",$atrib["Precio"]);
				$venta = str_replace(",","",$venta);
				if($ciudad == $atrib["Ciudad"]){
					if( $venta[1] > $valor[0] and $venta[1]<$valor[1]){
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
				}
			}
	}elseif($ciudad == "x" and $tipo != "x"){
		foreach ( $atributos as $atrib ) {
			$venta = explode("$",$atrib["Precio"]);
			$venta = str_replace(",","",$venta);
			if($tipo == $atrib["Tipo"]){
				if( $venta[1] > $valor[0] and $venta[1]<$valor[1]){
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
			}
		}
	}
}

?>
