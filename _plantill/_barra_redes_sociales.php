<!------------------------------------->
<!-- BARRA DE REDES SOCIALES         -->
<style>
    .social                             {position           : fixed;            /* Hacemos que la posición en pantalla sea fija para que siempre se muestre en pantalla*/
                                        left                : 0;                /* Establecemos la barra en la izquierda */
                                        top                 : 150px;             /* Bajamos la barra 200px de arriba a abajo */
                                        z-index             : 2000;}            /* Utilizamos la propiedad z-index para que no se superponga algún otro elemento como sliders, galerías, etc */

    .social ul                          {list-style         : none;}
 
	.social ul li a                     {display            : inline-block;
                                        color               : #fff;
                                        background          : #000;
                                        padding             : 10px 15px;
                                        text-decoration     : none;
                                        -webkit-transition  : all 500ms ease;
                                        -o-transition       : all 500ms ease;
                                        transition          : all 500ms ease;}  /* Establecemos una transición a todas las propiedades */
	
	.social ul li .icon-facebook        {background         : #3b5998;}         /* Establecemos los colores de cada red social, aprovechando su class */
    .social ul li .icon-instagram       {background         : #CB4154;}
    .social ul li .icon-twitter         {background         : #00abf0;}
	.social ul li .icon-google-plus     {background         : #ff0000;}
	.social ul li .icon-pinterest       {background         : #ae181f;}
	.social ul li .icon-mail            {background         : #666666;}
 
	.social ul li a:hover               {background         : #000;             /* Cambiamos el fondo cuando el usuario pase el mouse */
                                        padding             : 10px 30px;}       /* Hacemos mas grande el espacio cuando el usuario pase el mouse */
</style>

<div class="social">
    <ul>
        <li><a href="https://www.instagram.com/janoly1970/"     target="_blank" class="icon-instagram"></a></li>
        <li><a href="https://www.facebook.com/Janolicarr"       target="_blank" class="icon-facebook"></a></li>
        <li><a href="#"                                         target="_blank" class="icon-twitter"></a></li>
        <li><a href="#"                                         target="_blank" class="icon-google-plus"></a></li>
        <li><a href="#"                                         target="_blank" class="icon-pinterest"></a></li>
        <li><a href="mailto:laudeher@gmail.com"                                 class="icon-mail"></a></li>
    </ul>
</div>