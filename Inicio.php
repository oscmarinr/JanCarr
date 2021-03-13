<?php   session_start();
	//---------------------------------------------------------------------//
	//	A CONTINUACION COLOCAR 'SI' PARA PONER LA PAGINA EN MANTENIMIENTO  //		
	//---------------------------------------------------------------------//

	// $_SESSION['EN_MANT'] = 'NO';

	// if ($_SESSION["EN_MANT"] == "NO") {
	// 	$_contenedor_principal = "_inicio.php";
	// } else {    
	// 	$_contenedor_principal = "_en_mant.php";
	// }

	$_ruta1	= "";
	$_ruta2	= ""; 

	$_contenedor_principal = "_inicio.php";
	include $_ruta1.'_plantill/_plantilla_00.php';

?>