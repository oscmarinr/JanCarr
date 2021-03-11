<?php
	//---------------------------------------------------------------------//
	//	VARIABLES INICIALES      										   //
		$_SESSION["Titulo"]			= "Janett Carreño Hernandez";
		$_SESSION["Autor"]			= "Oscar Rafael Marin Revilla";
		$_SESSION["Descripcion"]	= "jANETT CARREÑO";
?>

<!DOCTYPE html>
	<html lang="es">

		<!--------------------------------------------------------------------------------------------------------------------->
		<!---	HEAD                                                                                             			--->
		<head>
			<meta charset		="utf-8">
			<meta http-equiv	="X-UA-Compatible"  		content="IE=edge">
			<meta name			="viewport"					content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<meta name			="author"					content="<?php echo $_SESSION["Autor"];?>">
			<meta name			="description"				content="<?php echo $_SESSION["Descripcion"];?>">

			<title><?php echo $_SESSION['Titulo'];?></title>

			<!--------------------------------------------------------------------->
			<!-- 	ESTILOS NUEVOS                                               -->
			<link 	href="<?php echo $_ruta1;?>css/barra_navegacion.css"					rel="stylesheet" media="screen">
			<link 	href="<?php echo $_ruta1;?>css/iconos.css"								rel="stylesheet" media="screen">
			<link 	href="<?php echo $_ruta1;?>css/estilos.css"								rel="stylesheet" media="screen">
			<link 	href="<?php echo $_ruta1;?>css/pagina_titulo.css"						rel="stylesheet" media="screen">
			<link 	href="<?php echo $_ruta1;?>css/pie_pagina.css"							rel="stylesheet" media="screen">
		
			<!--------------------------------------------------------------------->
			<!-- 	BOOSSTRAP CORE CSS 											 -->
			<link 	href="<?php echo $_ruta1;?>vendor/bootstrap/css/bootstrap.min.css"		rel="stylesheet">

			<!--------------------------------------------------------------------->
			<!-- 	CUSTOM STYLES FOR THIS TEMPLATE 							 -->
			<link	href="<?php echo $_ruta1;?>css/modern-business.css"						rel="stylesheet">
		</head>

		<!--------------------------------------------------------------------------------------------------------------------->
		<!---   BODY                                                                                             			--->
		<body>
			<!--------------------------------------------------------------------->
			<!---   BARRA SUPERIOR DE NAVEGACION                                --->
			<?php   include $_ruta1.'_plantill/_barra_navegacion.php';?>

			<!--------------------------------------------------------------------->
			<!---   BARRA REDES SOCIALES            							--->
			<?php
			if ($_SESSION["EN_MANT"] == 'NO') {
					include $_ruta1.'_plantill/_barra_redes_sociales.php'; 
			}	?>

			<!--------------------------------------------------------------------->
			<!---   CONTENEDOR PRINCIPAL DE LA PAGINA                           --->
			<?php   include $_ruta1.$_contenedor_principal;?>   

			<!--------------------------------------------------------------------->
			<!---   PIE DE PAGINA                                               --->
			<?php   include $_ruta1.'_plantill/_pie_de_pagina.php';?>
			
			<!--------------------------------------------------------------------->
            <!-- 	BOTÓN PARA DESPLAZARSE AL INICIO DEL CONTENEDOR 			 -->
			<?php   include $_ruta1.'_plantill/_boton_top.php';?>

			<!--------------------------------------------------------------------->
			<!-- 	BOOTSTRAP CORE JAVASCRIPT                                    -->
			<script src="<?php echo $_ruta1;?>vendor/jquery/jquery.min.js"></script>
			<script src="<?php echo $_ruta1;?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		</body>
	</html>
