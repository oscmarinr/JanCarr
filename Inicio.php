<?php   session_start();
	//---------------------------------------------------------------------//
	//	A CONTINUACION COLOCAR 'SI' PARA PONER LA PAGINA EN MANTENIMIENTO  //		
	//---------------------------------------------------------------------//

	$_SESSION['EN_MANT'] = 'NO';

	$_ruta1	= "";
	$_ruta2	= "";    
	if ($_SESSION["EN_MANT"] == "NO") {
		$_contenedor_principal = "_inicio.php";
	} else {    
		$_contenedor_principal = "_en_mant.php";
	}
	include $_ruta1.'_plantill/_plantilla_00.php';
?>