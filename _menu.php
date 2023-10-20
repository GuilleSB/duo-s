<?php error_reporting(E_ALL ^ E_NOTICE);?>
<script>
	$( document ).ready(function() {
$('#alert').affix({
    offset: {
      top: 150
    , bottom: function () {
        return (this.bottom = $('#footer').outerHeight(true))
      }
    }
  })  
});	
</script>

<h1 class="duos_title text-center"><?php echo $head_name;?></h1> 

    <script>
        var indice = 0;
        enlace = new Array();
        enlace[0] = "<img class='_dd_header_image' src='./_images/head_background/b1.jpg' alt='Imagen de fondo 1'>";
        enlace[1] = "<img class='_dd_header_image' src='./_images/head_background/b2.jpg' alt='Imagen de fondo 2'>";
        enlace[2] = "<img class='_dd_header_image' src='./_images/head_background/b3.jpg' alt='Imagen de fondo 3'>";
        enlace[3] = "<img class='_dd_header_image' src='./_images/head_background/b4.jpg' alt='Imagen de fondo 4'>";
        enlace[4] = "<img class='_dd_header_image' src='./_images/head_background/b5.jpg' alt='Imagen de fondo 5'>";
        enlace[5] = "<img class='_dd_header_image' src='./_images/head_background/b6.jpg' alt='Imagen de fondo 6'>";
        enlace[6] = "<img class='_dd_header_image' src='./_images/head_background/b7.jpg' alt='Imagen de fondo 7'>";
        enlace[7] = "<img class='_dd_header_image' src='./_images/head_background/b8.jpg' alt='Imagen de fondo 8'>";
        enlace[8] = "<img class='_dd_header_image' src='./_images/head_background/b9.jpg' alt='Imagen de fondo 9'>";
        
        
        enlace.sort(function(){
        return Math.random() - Math.random();})
        indice = Math.random() * (enlace.length);
        indice = Math.floor(indice);
        for (i=1;i<=1;i++) {
        if (indice == enlace.length) indice = 0;
        document.write(enlace[indice]);
        indice++;
        }
    </script>
        
<div id="headerGlobal">
    <div class="header--hamburger" id="alert" class="affix">
        <div class="header--main header--main--background--black">
            <div class="headerGlobal--grid headerGlobal--grid--white">
                <div class="headerGlobal--hamburger-logo all--valign--middle ">                
<!--start-nav-->
                    <div class="movil_nav_container">
                        <div class="headerGlobal--nav-icon" onclick="$(&#39;body&#39;).toggleClass(&#39;mobile-nav--showing&#39;);">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <nav class="text-center movil_main_menu_hover hidden-xxs">                   
                        <ul>
                            <li><a class="movil_main_menu" href="https://duo-s.com">INICIO</a></li>
                            <li><a class="movil_main_menu" href="./_services.php">SERVICIOS</a></li>
                            <li><a class="movil_main_menu" href="./_us.php">NOSOTROS</a></li>
                            <li><a class="movil_main_menu" href="./_pub.php">PUBLÍCATE</a></li>
                        </ul>                     
                     </nav>

<!--end-nav-->            
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hidden-md hidden-lg">
    <?php include ("_adds\_add_head.php"); ?>
</div>
<!--end-nav-->



<div id="headerGlobal--mobile">
    <div class="headerGlobal--mobile--close-logo">
        <div class="headerGlobal--mobile--close-icon" onclick="$(&#39;body&#39;).toggleClass(&#39;mobile-nav--showing&#39;);">
            X
        </div>
    </div>      
        <?php
            include ('_movil_categories.php');
        ?>       
</div>
