<!--------------------------------------------------------------------->
<!-- 	BARRA DE NAVEGACION								 			 -->
	<!-- <style>
		.dropdown-submenu 							{position					: relative;}
		.dropdown-submenu>.dropdown-menu 			{top						: 0;
													left						: 100%;
													margin-top					: -6px;
													margin-left					: -1px;
													-webkit-border-radius		: 0 6px 6px 6px;
													-moz-border-radius			: 0 6px 6px;
													border-radius				: 0 6px 6px 6px;}
}

		.dropdown-submenu:hover>.dropdown-menu		{display					: block;}
		.dropdown-submenu>a:after 					{display					: block;
													content						: " ";
													float						: right;
													width						: 0;
													height						: 0;
													border-color				: transparent;
													border-style				: solid;
													border-width				: 5px 0 5px 5px;
													border-left-color			: #ccc;
													margin-top					: 5px;
													margin-right				: -10px;}
		.dropdown-submenu:hover>a:after 			{border-left-color			: #fff;}
		.dropdown-submenu.pull-left 				{float						: none;}
		.dropdown-submenu.pull-left>.dropdown-menu	{left						: -100%;
													margin-left					: 10px;
													-webkit-border-radius		: 6px 0 6px 6px;
													-moz-border-radius			: 6px 0 6px 6px;
													border-radius				: 6px 0 6px 6px;} 
	</style> -->
<!------------------------------------------------------------------------------------------------------------------->
    <nav class="navbar fixed-top navbar-expand-md  navbar-dark">
        <!-- TITULO PAGINA-->
		<a class="navbar-brand pagina-titulo-1" href="<?php echo $_ruta1; ?>index.php"><?php echo $_SESSION["Titulo"];?></a>

	<?php	if ($_SESSION["EN_MANT"] == "NO") { ?>
        <!-- BOTON PLEGABLE -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- ENLACES BARRA NAVEGACION -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
				<!----------------------------------------->
				<!---   INICIO                          --->
				<li class="nav-item">
					<a class="nav-link" href="<?php echo $_ruta1; ?>index.php">Inicio</a>
				</li>

				<!----------------------------------------->            
				<!---   Instituciones                   --->
				<!-- 
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Instituciones
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Christian Barnard College</a>
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >U. E. "José Avalos"</a>
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >U.E.N "Tomás Vicente González"</a>                
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Liceo Bolivariano Jesús Alberto Marcano Echezuria</a>
					</div>
				</li> 
				-->

				<!----------------------------------------->            
				<!---   Educacion                       --->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Educación
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Clases Particulares</a>
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Educación Inicial</a>
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Tareas Dirigidas</a>                
					</div>
				</li>
				<!----------------------------------------->            
				<!---   Reposteria                      --->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Reposterias
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Tortas / Queques</a>
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Cupcakes</a>
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Gelatinas</a>                    
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Galletas</a>                
					</div>
				</li>

				<!----------------------------------------->            
				<!---   MANUALIDADES                    --->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Manualidades
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Bisuteria</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Collares</a></li>
								<li><a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Pulseras</a></li>
								<li><a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Tobilleras</a></li>                    
								<li><a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Zarcillos</a></li>
								<li><a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Solitarios</a></li>  
								<!-- <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
									<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
									<li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
									</ul>
								</li>
								<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
									<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
									<li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
									</ul>
								</li>  -->
							</ul>
						</li>
						<li><a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Cholas</a></li>
						<li><a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Cintillos</a></li>
						<li><a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Cuadros/Pinturas</a></li>
						<li><a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Foami</a></li>
						<li><a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Lazos</a></li>                    
						<li><a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Piñatas</a></li>
						<li><a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Virgenes Madera</a></li>
					</ul>
				</li>
				<!----------------------------------------->            
				<!---   Belleza Integral                --->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Belleza Integral
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Mis Cursos</a>
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Cejas</a>
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>..."  >Depilaciones</a>
					</div>
				</li>
				<!----------------------------------------->            
				<!---   BLOG                            --->           
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Blog
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
						<a class="dropdown-item" href="blog-home-1.php">Blog Home 1</a>
						<a class="dropdown-item" href="blog-home-2.php">Blog Home 2</a>
						<a class="dropdown-item" href="blog-post.php">Blog Post</a>
					</div>
				</li>                                              
				<!----------------------------------------->            
				<!---   CONTACTOS                       --->
				<li class="nav-item">
					<a class="nav-link" href="<?php echo $_ruta1;?>_contact/contact.php">Contactame</a>
				</li>


				<!----------------------------------------->            
				<!---   NOSOTROS                        --->
				<!-- 
				<li class="nav-item">
					<a class="nav-link" href="<?php echo $_ruta1; ?>nosotros.php">Nosotros</a>
				</li>             -->
				<!----------------------------------------->            
				<!---   SERVICIOS                       --->             
				<!-- 
				<li class="nav-item">
					<a class="nav-link" href="<?php echo $_ruta1; ?>servicios.php">Servicios</a>
				</li> -->
				<!----------------------------------------->            
				<!---   TIENDA                          --->
				<!-- 
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Tienda
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>tienda/fajas.php">Fajas</a>
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>tienda/suplementos.php">Suplementos</a>
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>tienda/relojes.php">Relojes</a>                
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>tienda/aretes.php">Aretes</a>
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>tienda/anillos.php">Anillos</a>
						<a class="dropdown-item" href="<?php echo $_ruta1; ?>tienda/bisuteria.php">Bisuteria</a>  
					</div>
				</li> -->
				<!----------------------------------------->            
				<!---   CONTACTOS                       --->
				<!-- 
				<li class="nav-item">
					<a class="nav-link" href="<?php echo $_ruta1; ?>contactos.php">Contactos</a>
				</li> -->
                 
				<!----------------------------------------->            
				<!---   PORTAFOLIO                     --->           
				<!-- 
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Portafolio
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
						<a class="dropdown-item" href="portfolio-1-col.php">Portafolio 1 Columna</a>
						<a class="dropdown-item" href="portfolio-2-col.php">Portafolio 2 Columna</a>
						<a class="dropdown-item" href="portfolio-3-col.php">Portafolio 3 Columna</a>
						<a class="dropdown-item" href="portfolio-4-col.php">Portafolio 4 Columna</a>
						<a class="dropdown-item" href="portfolio-item.php">Portafolio Simple</a>
					</div>
				</li> -->
            
				<!----------------------------------------->            
				<!---   BLOG                            --->           
				<!-- 
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Blog
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
						<a class="dropdown-item" href="blog-home-1.php">Blog Home 1</a>
						<a class="dropdown-item" href="blog-home-2.php">Blog Home 2</a>
						<a class="dropdown-item" href="blog-post.php">Blog Post</a>
					</div>
				</li> -->
           
				<!----------------------------------------->            
				<!---   OTRAS PAGINAS                   --->
				<!-- 
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Otras Paginas
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
						<a class="dropdown-item" href="pagina_full.php">Pagina Completa</a>
						<a class="dropdown-item" href="barra_izq.php">Barra Izquierda</a>
						<a class="dropdown-item" href="Preguntas.php">Preguntas Frecuentes</a>
						<a class="dropdown-item" href="404.php">Error 404</a>
						<a class="dropdown-item" href="Precios.php">Tabla de Precios</a>
						<a class="dropdown-item" href="Mantenimiento.php">En Mantenimiento</a>                
					</div>
				</li> -->

            </ul>
		</div>
	<?php	} ?>

    </nav>