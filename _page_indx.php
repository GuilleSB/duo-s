<!DOCTYPE html>
<html lang="es">
<head>
    <?php include ("../_page_sources.php"); ?>
    <base href="..\<?php echo $b_id;?>.php" target="_self">

    <meta name="keywords" content="<?php echo $b_activity;?>" />
    <meta name="description" content="<?php echo $b_services;?>" />
    <meta name="robots" content="index, follow" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="Duo-s">
    <meta name="twitter:title" content="<?php echo $b_services;?>">
    <meta name="twitter:description" content="<?php echo $b_activity;?>">
    <meta name="twitter:image" content="https://duo-s.com/_categories/<?php echo $b_id;?>.jpg" />
    <meta property="og:title" content="<?php echo $b_services;?>" />
    <meta property="og:description" content="<?php echo $b_activity;?>" />
    <meta property="og:image" content="https://duo-s.com/_categories/<?php echo $b_id;?>.jpg" />   
    <meta property="og:image:width" content="510" />
    <meta property="og:image:height" content="283" />
    <meta property="og:url" content="https://duo-s.com/<?php echo $b_id;?>" />
    <meta property="og:site_name" content="Duo-s" />
    <meta property="article:publisher" content="https://www.facebook.com/duos/" />
    <meta property="article:published_time" content="2021-08-10T21:40:26+02:00" />
    <link rel="canonical" href="https://duo-s.com/<?php echo $b_id;?>">
    <title><?php echo $b_activity;?> | <?php echo $b_name;?></title>

    <style>
        figure>.page_img{
            display:block;
            margin:auto;
        }
        .page_img{
            margin:auto;
            box-shadow:0px 0px 100px #333;
        }
        .bdy{position:relative;
            top:-200px;
        }
        h2>strong{
            font-size:20px;
            font-weight:500;
        }            
        .business_name_text>h1{
            font-size:20px;
            margin-top:20px;
        }
        .business_info>div>h3{
            font-size:20px;
        }    
        .bussiness_space{
            background:#fff;
            padding:10px 0px;
            margin:10px 0px;
            border-radius:10px;
            box-shadow:0px 10px 20px #ddd;
        }
        span>.web_link{color:#333;}
        span>.web_link:hover{color:#00f;}
        .d_wa{
            background-image: linear-gradient(310deg,#98ec2d, #17ad37);
            padding:5px;
            border-radius:5px;
            margin:5px 0px;
            width:26px;
            position: relative;
            top: -6px;
        }
        .share_whatsapp{background:#24cc63;color:#fff;font-size:11px;padding:5px 10px 4px 10px;border-radius:3px;font-weight:500;cursor:pointer; cursor: hand}
        .share_wtspp{width:12px;position:relative;top:-1px;}
        .share_twitter{background:#1d9bf0;color:#fff;font-size:11px;padding:5px 10px 4px 10px;border-radius:3px;font-weight:500;}
        .scl_bttn{display:inline-block;margin-top:5px;}
        .bdy, figure{position:relative;top:-120px}
        @media (max-width:793px){
           .bdy, figure{position:relative;top:-60px} 
        }
        .input-value{display: none;}
    </style>
</head>
        
<body>
<?php
    $head_name=$b_name;
    include ('../_menu.php'); 
    include ("../_chat.php"); 
    include ('../_register.php');
?>
    
<!--START-FACEBOOK-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v10.0" nonce="ituoLUkh"></script>
<!--END-FACEBOOK-->
    <?php             
        include('../_searching_page_indx.php');
    ?>

    <div class="text-center">
        <figure>      
            <img class="img-responsive page_img" src="./_categories/<?php echo $b_id;?>.jpg" alt="<?php echo $b_name;?>"><br>

            <div>
                <div class="scl_bttn">
                    <span class="share_whatsapp" data-toggle="modal" data-target="#wtsp-share"><img class="share_wtspp" src="./_images/whatsapp.png"/> Compartir</span>
                </div>

                <div class="scl_bttn">
                    <div class="fb-share-button" data-href="https://duo-s.com/<?php echo $b_id;?>" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fduo-s.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
                </div>
                
                <div class="scl_bttn">
                    <a class="share_twitter" href="https://twitter.com/intent/tweet?text=<?php echo $b_activity;?>&url=https%3A%2F%2Fduo-s.com%2F<?php echo $b_id;?>" data-show-count="false"><img class="share_wtspp" src="./_images/twitter.png"/> Compartir</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
 
                <div class="scl_bttn">
                    <script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: es_ES</script>
                    <script type="IN/Share" data-url="https://duo-s.com/<?php echo $b_id;?>"></script>
                </div>

                <div class="scl_bttn">
                    <a data-pin-do="buttonPin" href="https://www.pinterest.com/pin/create/button/?url=https%3A%2F%2Fwww.duo-s.com%2F<?php echo $b_id;?>&media=https%3A%2F%2Fwww.duo-s.com%2F_categories%2F<?php echo $b_id;?>.jpg&description=Compartir"></a>
                </div>

<!-- line modal -->
                <div class="modal fade" id="wtsp-share" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                    <h3 class="modal-title" id="lineModalLabel">Compartir tarjeta</h3>
                            </div>

                            <div class="modal-body">
                                <div class="text-center">
                                    Para compartir la tarjeta de <?php echo $b_name;?>, solo escribe un mensaje y el número de WhatsApp al que desea enviarla.
                                </div><br>
                                <form class="recommend_form" action="./_wp.php" method="POST">
                                    <input class="recommend_input" type="number" name="whatsapp" placeholder=" Número de WhatsApp al cual quieres enviar la tarjeta" autocomplete="off" required><br>
                                    <input class="input-value" value="<?php echo $b_id;?>" type="text" name="page">
                                    <textarea class="recommend_textarea" type="number" name="whatsappmensaje" placeholder=" Escribe un mensaje" autocomplete="off" required></textarea><br><br>
                                    <input class="recommend_submit" type="submit" value="Compartir tarjeta">
                                </form><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </figure>
    </div>
               
    <section class="bdy">
        <div class="col-md-12 business_name_text text-center"> 
            <h2><?php echo $b_name;?></h2>
            <h1><?php echo $b_activity;?></h1>                        
        </div>

        <div class="business_info">
            <div class="col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 text-center"> <br><br>
                <h3><?php echo $b_services;?></h3>
            </div>
        </div> 
    </section>
        
    <section class="bdy">
        <?php include ("../_side_page.php");?>
        <div class="page_position main_body_page col-xxs-12 col-xs-12 col-sm-8 col-md-6 col-lg-6">                       
            
<!-- start contact form -->
        <div class="bussiness_space col-sm-12 col-md-12">
            <div class="contact-image">
                <span class="icon-carta"></span>
                <h3 class="text-left">
                    <b>Contáctenos!</b>
                </h3>
            </div><br>

            <p>
                Si tiene alguna pregunta sobre nuestros servicios o si solo quiere decir hola,     nos encantaría saber de usted.
            </p>
            <span><b>Teléfono:</b><a href="tel:506<?php echo $b_phone;?>" class="web_link"> <u><?php echo $b_phone;?></u></a></span><br>
            <span><b>Email:</b> <?php echo $b_mail;?></span><br>
            <span><b>Sitio Web:</b> <a class="web_link" href="<?php echo $b_web_site;?>" target="a_link"> <u><?php echo $b_web_site;?></u></a></span><br>
        </div>

        <div class="bussiness_space row col-sm-12 col-md-12 col-lg-12">
            <div class="clock-image">
                <span class="icon-reloj"></span>
                <h3 class="text-left">
                   <b>Horario</b>
                </h3>
            </div><br>
            
            <span class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center"><b>Lunes - Viernes</b>
                <?php
                    if(empty($b_l_v_am . $b_l_v_pm)){
                        echo "Cerrado";
                    }else if($b_l_v_am == $b_l_v_pm){
                        echo "Abierto";
                    }else{
                        echo $b_l_v_am . " - " . $b_l_v_pm;
                    }
                ?>                          
            </span>
            <span class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center"><b>Sábado</b>
                <?php
                    if(empty($b_s_am . $b_s_pm)){
                        echo "Cerrado";
                    }else if($b_s_am == $b_s_pm){
                        echo "Abierto";
                    }else{
                        echo $b_s_am . " - " . $b_s_pm;
                    }
                ?>
            </span>
            <span class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center"><b>Domingo</b>
                <?php
                    if(empty($b_d_am . $b_d_pm)){
                        echo "Cerrado";
                    }else if($b_d_am == $b_d_pm){
                        echo "Abierto";
                    }else{
                        echo $b_d_am . " - " . $b_d_pm;
                    }
                ?>
            </span>
        </div> 

        <div class="bussiness_space col-sm-12 col-md-12">  
            <img class="d_wa" src="./_images/whatsapp.png" alt="WhatsApp">
            <h3 class="text-left">                
                <b>Escríbenos</b>
            </h3><br>

            <p>
                Para lo que necesite ¡No dudes en ponerte en contacto con nosotros!
            </p>
            <form id="miformulario" class="contactForm">
                <fieldset>
                    <input type="text" name="name" class="form_input" id="minombre" placeholder="Escribe su nombre" autocomplete="off" required/><br><br>
                    <input type="text" name="subject" class="form_input" id="direccion" placeholder="Escribe su dirección" autocomplete="off" required/><br><br>
                    <textarea name="message" class="form_textarea"  id="mimensaje" placeholder="Escribe su mensaje" autocomplete="off" required></textarea><br><br>
                    <button class="boton" type="submit" id="misubmit">Enviar WhatsApp</button>
                </fieldset>
            </form>
<!--start_script_whatsapp-->            
            <script>
                $(".box-inputs input").on("focus", function(){
                    $(this).addClass("focus");
                });

                $(".box-inputs input").on("blur", function(){
                    if($(this).val() == ""){
                        $(this).removeClass("focus");
                    }
                });

                $(".box-textareas textarea").on("focus", function(){
                    $(this).addClass("focus");
                });

                $(".box-textareas textarea").on("blur", function(){
                    if($(this).val() == ""){
                        $(this).removeClass("focus");
                    }
                });
            </script>

            <script>
                function isMobiles() {
                    if (sessionStorage.desktop)
                        return false;
                    else if (localStorage.mobile)
                        return true;
                    var mobile = ["iphone", "ipad", "android", "blackberry", "nokia", "opera mini", "windows mobile", "windows phone", "iemobile"];
                        for (var i in mobile)
                            if (navigator.userAgent.toLowerCase().indexOf(mobile[i].toLowerCase()) > 0) return true;
                                return false;
                        }

                    const miformulario = document.querySelector("#miformulario");
                    const buttonSubmits = document.querySelector("#misubmit");
                    const urlDesktops = "https://web.whatsapp.com/";
                    const urlMobiles = "whatsapp://";
                    const telefonos = "506<?php echo $b_whatsapp;?>"

                    miformulario.addEventListener("submit", (event) => {
                    event.preventDefault()
                    buttonSubmits.innerHTML = "<i class='fas fa-circle-notch fa-spin'></i>"
                    buttonSubmits.disabled = true
                    setTimeout(() => {
                        let minombre = document.querySelector("#minombre").value
                        let direccion = document.querySelector("#direccion").value
                        let mimensaje = document.querySelector("#mimensaje").value
                        let mensaje = "send?phone=" + telefonos + "&text=Mensaje desde https://duo-s.com/<?php echo $b_id;?>%0AHola, le saluda " + minombre + ", soy de " + direccion + ".%0A%0A" + mimensaje + ""
                            if(isMobiles()) {
                                window.open(urlMobiles + mensaje, "_blank")
                            }else{
                                window.open(urlDesktops + mensaje, "_blank")
                            }
                            buttonSubmits.innerHTML = "<i class='fab fa-whatsapp'></i> Enviar WhatsApp"
                                buttonSubmits.disabled = false
                                }, 3000);
                            });
            </script>
<!--end_script_whatsapp-->            
        </div>
<!-- end contact form -->
                    
        
        <div class="col-xxs-12 col-xs-12 col-sm-12 col-md-12 col-lg-12"> <br><br>
            <?php include ("../_adds/_add_up.php"); ?>
        </div>
                
        <div class="bussiness_space col-sm-12 col-md-12">
            <div id="google_map">   
                <div class="maps" >
                    <span class="icon-ubicacion"></span>
                    <address><b><?php echo $b_location;?></b></address>
                    <iframe src="https://embed.waze.com/es/iframe?zoom=15&lat=<?php echo $b_lat;?>&lon=<?php echo $b_lon;?>&pin=1" height="520"></iframe>
                </div>                         
            </div>       
        </div>       
        
        </div>  
        <div class="page_position main_body_page col-xxs-12 col-xs-12 col-sm-4 col-md-3 col-lg-3"><br>
            <div class='fb-page' data-href='https://www.facebook.com/<?php echo $b_fb;?>/' data-tabs='timeline, messages' data-width=''     data-height='500' data-small-header='false'     data-adapt-container-width='true' data-hide-cover='false'     data-show-facepile='true'><blockquote cite='https://www.facebook.com/<?php echo $b_fb;?>/' class='fb-xfbml-parse-ignore'><a href='https://www.facebook.com/<?php echo $b_fb;?>/'><?php echo $b_name;?></a></blockquote></div><br><br><br>
            <?php include ("../_adds/_add_right.php"); ?> 
        </div>

    </section>
    
    <?php include ("../_random_cards_banner.php"); ?>
    <?php include ("../_footer.php"); ?>

<!--PINTEREST-->
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>


</body>
</html>