<style>
    .add_your_business{width:100%;height:100%;}
    .plus{cursor: pointer;}
</style>

<article class="main_body_page col-xxs-12 col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <div class="some_categories">
        <h3 class="some_categories_title text-left">Algunas empresas y servicios con presencia en duo-s</h3>         
    </div>
    <?php
        include ('./_adds/_add_up.php');
    ?>
    <?php
        $archivo = "./_home/db_data_base.php";
        $lineas = count(file($archivo));
        $total_lineas = $lineas;
        $images=array("./_categories.php");

        shuffle($images);

        for($i=0; $i<$total_lineas; $i++)
        {           
            include ($images[$i]);
        }
    ?>
    <div class='col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-4 business_card'>
        <div class='business_card'>             
            <img class='plus tp business_card card' src='./_images\plus.png' alt='Su empresa en duo-s' data-toggle="modal" data-target="#plus">               
        </div>
    </div>

    <!-- line modal -->
    <div class="modal fade" id="plus" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
        	    <div class="modal-content">
        		    <div class="modal-header">
        			    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        			    <h3 class="modal-title whus" id="lineModalLabel"><span class=""></span> Ingresar empresa</h3>
        		    </div>

        		    <div class="modal-body colsm-12 col-md-12">
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
                <div class="col-xss-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <input type="text" class="form_input" name="empresa" placeholder="Nombre de su empresa" autocomplete="off" required/>
                </div>
                <div class="col-xss-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <input type="text" class="form_input" name="direccion" placeholder="Dirección exacta de la empresa" autocomplete="off" required/>
                </div>
                <div class="col-xss-12 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <input type="text" class="form_input" name="actividad" placeholder="Actividad de su empresa" autocomplete="off" required/>
                </div>
                <div class="col-xss-12 col-xs-12 col-sm-4 col-md-6 col-lg-6">
                    <input type="text" class="form_input" name="horariolv" placeholder="Horario lunes a viernes" autocomplete="off" required/>
                </div>
                <div class="col-xss-12 col-xs-12 col-sm-4 col-md-6 col-lg-6">
                    <input type="text" class="form_input" name="horarios" placeholder="Horario sábados" autocomplete="off" required/>
                </div>
                <div class="col-xss-12 col-xs-12 col-sm-4 col-md-6 col-lg-6">
                    <input type="text" class="form_input" name="horariod" placeholder="Horario domingos" autocomplete="off" required/>
                </div>
                <div class="col-xxs-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <input type="text" class="form_input" name="telefono" placeholder="Teléfono empresa" autocomplete="off" required/>
                </div>
                <div class="col-xxs-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <input type="text" class="form_input" name="whatsapp" placeholder="WhatsApp empresa" autocomplete="off" required/>
                </div>
                <div class="col-xxs-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <input type="text" class="form_input" name="mail" placeholder="Correo electrónico" autocomplete="off" required/>
                </div>
                <div class="col-xxs-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">    
                    <input type="text" class="form_input" name="facebook" placeholder="Facebook empresa" autocomplete="off" required/>
                </div><br>
                <div class="col-xxs-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <textarea class="form_textarea" name="mensaje" placeholder="Escribe un breve resumen de su actividad" autocomplete="off"></textarea><br><br>
                    <button class="boton" type="submit" name="submit">Enviar Formulario</button>
                </div>
            </fieldset> <br>
        </form>
        			</div>
        	    </div>
            </div>
        </div>
</article>