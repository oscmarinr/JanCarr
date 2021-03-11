<!--------------------------------------------------------------------->
<!-- 	BOTÓN PARA DESPLAZARSE AL INICIO DEL CONTENEDOR 			 -->
    <style>
        #IrTop          {display            : none;
                        position            : fixed;
                        bottom              : 20px;
                        right               : 30px;
                        z-index             : 99;
                        font-size           : 18px;
                        border              : none;
                        outline             : none;
                        background-color    : #F26A21;
                        color               : #fff;
                        opacity             : 0.8;
                        cursor              : pointer;
                        padding             : 15px;
                        border-radius       : 5px;}

        #IrTop:hover    {background-color   : #993EB6;}
    </style>

    <button onclick="topFunction()" id="IrTop" title="Ir arriba">
        <i class="icon-arrow-up2"></i>
    </button>

    <script>
        //Obtener el botón
        var mybutton = document.getElementById("IrTop");

        // Muestre el botón cuando el usuario se desplace 20px desde la parte superior del documento hacia abajo
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // Cuando el usuario haga clic en el botón, desplácese hasta la parte superior del documento.
        function topFunction() {
            document.body.scrollTop             = 0;
            document.documentElement.scrollTop  = 0;
        }
    </script>