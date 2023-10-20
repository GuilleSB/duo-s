<!DOCTYPE html>
<html lang="es">
<head>
    <base href="./index.php">
    <meta name="keywords" content="negocios, presencia en línea, publicidad en internet, pymes, tarjeta de presentación, encuentra, publica">
    <meta name="description" content="Su tarjeta de presentación digital mejorara su presencia en línea para empresas y pymes mediante la publicidad en la web.">
    <meta name="robots" content="index, follow">
    <!-- OpenGraph -->
    <meta property="og:url" content="www.duo-s.com" />
    <meta property="og:title" content="DUO-S - Directorio de negocios" />
    <meta property="og:image" content="https://www.duo-s.com/_images/duos_social_image.jpg" />
    <meta property="og:description" content="Su tarjeta de presentación digital - Regístrate sin ningún costo!!!" />
    <meta property="og:type" content="website"/>
    <link rel="canonical" href="https://www.duo-s.com/">

    <title>Tarjeta de presentación digital | Revista digital</title>
    
    <?php
        include ('./_sources.php')
    ?>

<!--start js slow_top_moving-->
    <script>
        $(function() {    
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                $('html,body').animate({
            scrollTop: target.offset().top
                }, 1000);
                    return false;
                }
                }
            });  
        });
    </script> 
<!--end js slow_top_moving--> 

</head>

<body>
    <header> 
        <section class="container_one">              
            <?php
                $page_image="index";
                $head_name="Duo-s.com";
                include ('./_menu.php');
            ?>
        </section>
    </header>
    <style>
        .head_logo{width:200px;display:block;margin:20px auto;}
    </style>
    <figure>
        <img class="head_logo" src="./_images/main_logo.svg" alt="Logo de duo-s.com">
    </figure>
    <h1 class="text-center">Publica o encuentra!!!</h1>
    <div class="index_head"><br><br><br>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <p>Publica tus servicios o simplemente encuéntralos fácil</p><br>
            <h4>Únete a <!--la mejor--> duo-s.com, su plataforma online para promocionar tus servicios</h4><br>

            <div class="recommend_button">
                <button class="btn-round"><a href="_pub.php">Publica tu empresa de forma gratuita</a></button>                  
                <br><br>
            </div> 
        </div>
        <div class="col-xxs-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">            
            <?php
                include ('./_random_cards_image.php');
            ?>
        </div>
    </div>


<!--start-magazine-->
    <div class="main_indx">
        <div class="text-center">
            <div class="info_one col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">        
<!--end-close_up_image-->

                Duo-s es una plataforma de <strong>negocios</strong> cuyo objetivo es ayudarle a potenciar la presencia de su empresa / pymes mediante una plataforma de servicios. Con el auge del acceso a Internet y la popularización de los smartphones, se ha convertido en algo necesario asegurar su <strong>presencia en linea</strong>. <br>
                Duo-s te ayudará a mejorar esa presencia de manera <b>gratuita</b>.
            </div>      
        </div>

        <div>
            <?php 
                include('_indx_one.php');
            ?>
        </div>

        <div>
<!--start_side_page-->    
            <?php
                include ('./_side_page.php');
            ?>
<!--end_side_page-->
     
<!--start-main_article-->
            <?php 
                include ('./_random_cards.php');
            ?>
<!--end-main_article-->
        
        </div>

        
        <div class="col-xxs-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 add_down">
            <?php
                include ('./_adds/_add_down.php'); 
            ?> 
        </div> 
 
<!--start-chat-->
        <?php
            include ('./_chat.php');
        ?>
<!--end-chat-->        
<!--end-magazine-->  
        <?php  
            include ('./_footer.php');
        ?>
        <?php
            $ca = "count.dat";
            $fp = fopen($ca,"r");
            $ct = trim(fread($fp,filesize($ca)));
            if ($ct != "") {$ct++;
            }else {$ct = 1;}
            @fclose($fp);
            $fp = fopen($ca,"w");
            @fputs($fp,$ct);
            for($i=0;$i<strlen($ct);$i++) {
            $imgnum = substr($ct,$i,1);
            $contador .= $imgnum;
            }
            @fclose($fp);
        ?>
<!--PINTEREST-->
<!--
<script async defer data-pin-hover="true" data-pin-tall="true" data-pin-lang="es" src="//assets.pinterest.com/js/pinit.js"></script>
-->
    </div>
</body>
</html>