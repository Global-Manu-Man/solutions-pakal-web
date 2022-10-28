<?php # ---------------------------------------------------------------------
# scripts
# ------------------------------------------------------------------------ ?>
<script src="<?= $_dominio ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= $_dominio ?>assets/vendor/popper.js/umd/popper.min.js"></script>
<script src="<?= $_dominio ?>assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= $_dominio ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="<?= $_dominio ?>assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

<script src="<?= $_dominio ?>assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

<script>

    

    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();
    });

    url_web = 'http://localhost/host/clientes/pakal.com/web/';



    $(document).ready(function() {

        // ---------------------------------------------------------
        // Quitar d-none
        // ---------------------------------------------------------
        setTimeout(__button_ver_todas_las_imagenes, 1500);
        function __button_ver_todas_las_imagenes() {
            $(".--button-ver-todas-las-imagenes").removeClass("d-none");
            $(".--button-ver-todas-las-imagenes").addClass("d-flex");
        }

        new dateDropper({
            selector: 'input.--check-in-variable',
            startFromMonday: true,
            range: true
        });

        new dateDropper({
            selector: 'input.--check-in-modal',
            startFromMonday: true,
            range: true
        });

        // -----------------------------------------------------------
        // https://web.archive.org/web/20210325170940/https://fancyapps.com/fancybox/3/docs/
        // -----------------------------------------------------------
        $('[data-fancybox="imagenes"]').fancybox({
            loop : true,
            buttons: [
                "zoom",
                // "share",
                "slideShow",
                "fullScreen",
                // "download",
                "close"
            ],
        });


        // -------------------


        // ------------------------------------------------------------------------
        // Ojo en registro, login y similares
        // ------------------------------------------------------------------------
        $(".--div-password-eye").click(function(){
            
            var status = $(this).attr("status");

            if(status == 'text'){
                $('.--div-password-eye').attr("status","password");
                $('.--password').attr("type","password");
                $('.--div-password-eye a span').removeClass("mdi-eye-off");
                $('.--div-password-eye a span').addClass("mdi-eye");
            
            }else if(status == 'password'){
                $('.--div-password-eye').attr("status","text");
                $('.--password').attr("type","text");
                $('.--div-password-eye a span').removeClass("mdi-eye");
                $('.--div-password-eye a span').addClass("mdi-eye-off");
            }
        
        });

        // ------------------------------------------------------------------------
        // Desplegable de idioma
        // ------------------------------------------------------------------------
        $(".--seleccionar-idioma-mobile").click(function(){
            
            var status = $(this).attr("status");

            if(status == 'close'){
                $('.--seleccionar-idioma-mobile').attr("status","open");
                $('.--idioma-mobile').removeClass("d-none");

                // Al abrir cerrar lo demás
                $('.--seleccionar-moneda-mobile').attr("status","close");
                $('.--moneda-mobile').addClass("d-none");
            
            }else if(status == 'open'){
                $('.--seleccionar-idioma-mobile').attr("status","close");
                $('.--idioma-mobile').addClass("d-none");
            }
        
        });

        // ------------------------------------------------------------------------
        // Desplegable de moneda
        // ------------------------------------------------------------------------
        $(".--seleccionar-moneda-mobile").click(function(){
            
            var status = $(this).attr("status");

            if(status == 'close'){
                $('.--seleccionar-moneda-mobile').attr("status","open");
                $('.--moneda-mobile').removeClass("d-none");
            
                // Al abrir cerrar lo demás
                $('.--seleccionar-idioma-mobile').attr("status","close");
                $('.--idioma-mobile').addClass("d-none");

            }else if(status == 'open'){
                $('.--seleccionar-moneda-mobile').attr("status","close");
                $('.--moneda-mobile').addClass("d-none");
            }
        
        });

        // ------------------------------------------------------------------------
        // Mostrar alerta en "alias" de registro.php
        // ------------------------------------------------------------------------
        $(".--alias-message").click(function(){
            $(this).remove();
            $('.--p-alias').removeClass("d-none");
        });

    
        // Ancho del dispositivo
        ancho_pantalla = screen.width;

        // Cambiamos el placholder, de "Realizar una búsqueda" a "Buscar" si está en dispositivos móviles
        if(ancho_pantalla < 576){
            $(".--nueva-busqueda input").attr("placeholder" , "Buscar");
        }

        // ------------------------------------------------------------------------

    });



    // -----------------------------------------------------------------------------
    // Smooth scrolling -- Va hacia el HASH (ej. .com/pagina#section-1)
    // -----------------------------------------------------------------------------
    var scrollLink_50 = $('.scroll_50');
    
    scrollLink_50.click(function(e) {
        e.preventDefault();
        $('body,html').animate({
          scrollTop: $(this.hash).offset().top - 50
        }, 300 );
    });

    // -----------------------------------------------------------------------------
    // Active link switching -- Activa el anchor cuando está en la posición del HASH
    // -----------------------------------------------------------------------------
    $(window).scroll(function() {
        var scrollbarLocation = $(this).scrollTop();
        // console.log("TCL: scrollbarLocation", scrollbarLocation);
        
        scrollLink_50.each(function() {
        
            var sectionOffset = $(this.hash).offset().top - 70;
            // console.log("TCL: sectionOffset", sectionOffset)
            
            if ( sectionOffset <= scrollbarLocation ) {
                $(this).parent().addClass('--li-active');
                $(this).parent().siblings().removeClass('--li-active');
                
            }

        })
        
    })
    
</script>

</body>