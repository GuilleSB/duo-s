<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presencia en la web | Publica tu negocio</title>
    <meta name="keywords" content="publica tu negocio, presencia en la web, llegar más fácil, necesidades del cliente, página web">
    <meta name="description" content="Publica tu negocio, empresa o Pymes y mejore su presencia en la web, duo-s.com le ayudará a satisfacer las necesidades de los clientes de forma más fácil.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Publica tu negocio, empresa o Pymes con Duo-s" />
    <meta property="og:description" content="Publica tu negocio, empresa o Pymes y mejore su presencia en la web, duo-s.com le ayudará a satisfacer las necesidades de los clientes de forma más fácil." />
    <meta property="og:image" content="https://duo-s.com/_images/duos_social_image.jpg" />      
    <meta property="og:url" content="https://duo-s.com/_pub.php" />
    <?php
        include ('./_sources.php');
    ?>
    <style>
        .strong_font{font-size:20px;position:relative;top:-50px;}
        .services_icons{height:90px;}
        .oth_send_services{position:relative;top:30px;} 
        .products{font-size:16px;position:relative;top:10px;}
        .asterisco{color:#ff0000;font-size:20px;}
    </style>
</head>
<body>
<?php
    $head_name="Publícate";
    include ('./_menu.php');
?>

<!--start-services-->
<div class="main_body_page">
    <div class="col-xxs-12 col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10"><br>
        <?php
            include ('./_adds/_add_up.php');
        ?> 
    </div>
    <section class="col-xxs-12 col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 text-justify"><br><br><br>
        <div class="info_one">
            <h3 class="text-center"><b>¡Bienvenidos!!!</b></h3><br>
            <div>
                <p><b>Que todos te conozcan...</b> Eso es lo que queremos. <br><br> Deseamos crear una conexión entre tu empresa y las <strong>necesidades del cliente</strong>. El internet es hoy por hoy una de las mejores herramientas para darse a conocer y duo-s.com lo hace posible de una manera fácil y eficaz. Con duo-s.com mejorarás tu <strong>presencia en la web</strong> y tu negocio estará en las principales redes sociales para que más gente te conozca</p>
            </div>
        </div><br>

        <style>mark{background:yellow}</style>

        <div class="info_one">
            <h3 class="text-left"><b>¿Qué le ofrecemos?</b></h3><br>
            <div>
                <h4><b>SERVICIO GRATUITO</b></h4><br>
                <p>                    
                    1- Una página web para tu negocio. <br><br>
                    2- Los clientes podrán ponerse en contacto contigo mediante tu teléfono, whatsapp, red social y correo electrónico. <br><br>
                    3- Se incluirá la ubicación de tu empresa para que los clientes puedan <strong>llegar más fácil</strong> hasta tu negocio mediante Waze. <br><br>
                    4- Desde nuestra web los clientes podrán ingresar a tu pagina de red social o  tu <strong>página web</strong>.
                </p><br>
                    <h5>
                        *Servicio <b>GRATUITO</b>, si le interesa este servicio, por favor llene el formulario que se encuentra al pie de página con los datos que se le solicita.
                    </h5><br><br>

                    <h4><b>SERVICIO DE PAGA</b></h4><br>
                <p>                    
                    1- Tienda online para tu negocio donde podrás vender en línea y recibir pagos mediante Sinpe y depósito bancario. <br><br>
                    2- Menú virtual para su servicio de comidas en bares, restaurantes, heladerías... Tus clientes podrán accesar a su menú mediante un código QR.
                </p><br>
                    <h5>
                        *Servicio de paga  20 mil colones anuales, si le interesa este servicio, por favor pregunte sin compromiso <button onclick="mostrar_mini_contacto(10)"  class="btn">Información</button>
                    </h5>

            </div>
        </div><br>

        <div class="info_one">
            <h3 class="text-left"><b>Importante</b></h3><br>
            <div>
                <p>1- En caso de cambio de localidad de su negocio usted debe hacer el reporte a duo-s.com para que se hagan los ajustes respectivos y lo mismo en caso de cierre de su empresa. <br><br>
                2- Como una forma de respeto por nuestros usuarios, no se publicará ningún contenido inmoral, político o religioso.</p>
            </div>
        </div>

        <div id="pub_form"></div>

        <div class="text-center">
            <div><h4>Si deseas publicar tu empresa, negocio o pymes le damos una cordial bienvenida, el servicio es completamente gratuito y lo único que necesitas para publicarte es llenar este formulario con los datos de tu empresa, pronto nos pondremos en contacto contigo.</h4></div>
        </div><br>

        <?php
            if (isset($_POST['submit'])) {

                $requests = fopen("./_home/requests/" . $_POST['empresa'].".php","w");

                fwrite($requests,  "
                    <?php
                    //ID
                    $"."a_nombre"."=\"".$_POST['nombre']."\";
        
                    //NOMBRE DE LA EMPRESA
                    $"."a_empresa"."=\"".$_POST['empresa']."\";        
        
                    //ACTIVIDAD DE LA EMPRESA
                    $"."a_direccion"."=\"".$_POST['direccion']."\";
        
                    //DETALLES DE LA ACTIVIDAD DE LA EMPRESA
                    $"."a_actividad"."=\"".$_POST['actividad']."\";
        
                    //NUMERO DE TELEFONO
                    $"."a_horariolv"."=\"".$_POST['horariolv']."\";
        
                    //NUMERO DE WHATSAPP
                    $"."a_horarios"."=\"".$_POST['horarios']."\";
        
                    //DIRECCION
                    $"."a_horariod"."=\"".$_POST['horariod']."\"; 

                    //DIRECCION
                    $"."a_telefono"."=\"".$_POST['telefono']."\"; 

                    //DIRECCION
                    $"."a_whatsapp"."=\"".$_POST['whatsapp']."\"; 

                    //DIRECCION
                    $"."a_mail"."=\"".$_POST['mail']."\";

                    //DIRECCION
                    $"."a_facebook"."=\"".$_POST['facebook']."\"; 

                    //DIRECCION
                    $"."a_mensaje"."=\"".$_POST['mensaje']."\";

                    include ('../request_list.php')?>" . PHP_EOL);

                fclose($requests);

                $titulo = $_POST['name'];
                ?>

                <script>
                    (function(window, document) { // asilamos el componente
                      // creamos el contedor de las tostadas o la tostadora
                      var container = document.createElement('div');
                      container.className = 'toaster';
                      document.body.appendChild(container);
  
                      // esta es la funcion que hace la tostada
                      window.doToast = function(message) {
                        // creamos tostada
                        var toast = document.createElement('div');
                        toast.className = 'toast-toaster';
                        toast.innerHTML = message;

                      // agregamos a la tostadora
                      container.appendChild(toast);    

                      // programamos su eliminación
                      setTimeout(function() {
                        // cuando acabe de desaparecer, lo eliminamos del dom.
                        toast.addEventListener("transitionend", function() {
                           container.removeChild(toast);
                        }, false);

                      // agregamos un estilo que inicie la "transition". 
                      toast.classList.add("fadeout");      
                    }, 5000); // OP dijo, "solo dos segundos"
                  }
                })(window, document);


                // ejemplo retardado de uso
                setTimeout(function() {
                   doToast("<span class='offerts'>Su formulario ha sido enviado, ahora su empresa está en lista de espera, en cuanto esté en el directorio DUO-S se lo haremos saber, gracias!!!</span>");
                }, 1000);
            </script>
                <style>
                .toaster {
                  position:fixed;
                  bottom:0px;
                  width: 100%;
                  z-index: 10;
                }
                .offerts{
                  font-weight:500}
                .free_register{
                  background:#f6304f;
                  padding:5px;
                  margin-left:5px;
                  border-radius:3px;
                }

                .toast-toaster {
                  text-align: center;
                  font-size: 14px;
                  background: #4caf50;
                  color:#fff;
                  padding:9px 15px;
                  line-height: 1;  
                  transition: all 10s; 
                }

                .fadeout{
                  opacity: 0;
                }
            </style>

            <?php
                }
            ?>

        <form class="contactForm" method="POST">
            <fieldset>
                <h1 class="text-center">¡Publica <b>gratis</b> tu negocio!!!</h1>
                <div class="col-xss-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input type="text" class="form_input" name="nombre" placeholder="Escribe su nombre" autocomplete="off" required/>
                </div><br><br>
                <h4 class="text-center">Datos de su empresa</h4>
                <div class="col-xss-12 col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <input type="text" class="form_input" name="empresa" placeholder="Nombre de su empresa" autocomplete="off" required/>
                </div>
                <div class="col-xss-12 col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <input type="text" class="form_input" name="direccion" placeholder="Dirección exacta de la empresa" autocomplete="off" required/>
                </div>
                <div class="col-xss-12 col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <input type="text" class="form_input" name="actividad" placeholder="Actividad de su empresa" autocomplete="off" required/>
                </div>
                <div class="col-xss-12 col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <input type="text" class="form_input" name="horariolv" placeholder="Horario lunes a viernes" autocomplete="off" required/>
                </div>
                <div class="col-xss-12 col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <input type="text" class="form_input" name="horarios" placeholder="Horario sábados" autocomplete="off" required/>
                </div>
                <div class="col-xss-12 col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <input type="text" class="form_input" name="horariod" placeholder="Horario domingos" autocomplete="off" required/>
                </div>
                <div class="col-xxs-12 col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <input type="text" class="form_input" name="telefono" placeholder="Teléfono empresa" autocomplete="off" required/>
                </div>
                <div class="col-xxs-12 col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <input type="text" class="form_input" name="whatsapp" placeholder="WhatsApp empresa" autocomplete="off" required/>
                </div>
                <div class="col-xxs-12 col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <input type="text" class="form_input" name="mail" placeholder="Correo electrónico" autocomplete="off" required/>
                </div>
                <div class="col-xxs-12 col-xs-12 col-sm-6 col-md-3 col-lg-3">    
                    <input type="text" class="form_input" name="facebook" placeholder="Facebook empresa" autocomplete="off" required/>
                </div><br>
                <div class="col-xxs-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <textarea class="form_textarea" name="mensaje" placeholder="Escribe un breve resumen de su actividad" autocomplete="off"></textarea><br><br>
                    <button class="boton" type="submit" name="submit">Enviar Formulario</button>
                </div>
            </fieldset> <br>
        </form>        
    </section>
    
</div>

<div class="col-xxs-12 col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10"><br><br><br>
    <?php
        include ('./_adds/_add_down.php');
    ?>
</div>

<!--start-chat-->
<?php
    include ('./_chat.php');
?>
<!--end-chat-->
<!--end-services-->
<!--start-footer--> 
<?php
    include ('./_footer.php');
?>
<!--end-footer-->
</body>
</html>