<?php error_reporting(E_ALL ^ E_NOTICE);?>
<?php require_once 'templates/header.php';?>
        
        <style>
 			.InviteTitle{font-family:arial;text-align:center;}
 			.FormInviteContainer{background:#fff;margin-top:150px;box-shadow:0px 0px 20px #aaa;padding:30px;border-radius:10px}
 			.InviteInput, .InviteBoton, .InviteMessage{width:100%;}
 			.InviteBoton{background:#009eff;color:#fff;border:none;padding:10px;border-radius:5px}
 			.InviteBoton:hover{background:#337ba7;}
 			.InviteMessage{background:#04d36a;color:#fff;border:none;padding:10px;border-radius:5px}
 			.InviteMessage:hover{background:#009688;}
 			a:link{text-decoration:none}
 		</style>
 		 
        <div class="FormInviteContainer col-xxs-offset-1 col-xxs-10 col-xs-offset-1 col-xs-10 col-sm-offset-6 col-sm-6 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4 hidden-xxs hidden-xs">

        	<h1 class="InviteTitle">Enviar invitación por WhatsApp</h1>

 		    <form class="InviteForm" method="POST">
                <input type="text" name="clientname" class="InviteInput" placeholder="Nombre de la empresa" autocomplete="off" required/><br><br>
                <input type="number" name="name" class="InviteInput" placeholder="Número de WhatsApp" autocomplete="off" required/><br><br>
                <button class="InviteBoton" name="submit" type="submit"> Ingresar número
            </button>
            </form>

            <?php

                $send_message = $_POST['name'];
                $clientname = $_POST['clientname'];

                if (isset($_POST['submit'])) {
                    echo "<br><a href='https://web.whatsapp.com/send?phone=506".$send_message."&text=Mensaje%20desde:%20*duo-s.com%20directorio%20de%20servicios*.%0A%0APara:%20*".$clientname."*.%0A%0AHola,%20espero%20que%20se%20encuentren%20muy%20bien,%20le%20saluda%20".$_SESSION['name'].".%0A%0AQuiero%20invitarle%20a%20ser%20parte%20de%20*DUO-S%20directorio%20de%20servicios*,%20es%20un%20servicio%20*GRATUITO*%20en%20el%20cual%20podrás%20publicar%20su%20empresa%20y%20disfrutar%20de%20muchos%20beneficios.
                    %0A%0ASi%20desea%20más%20información%20puede%20responder%20a%20este%20mensaje%20o%20si%20gusta%20puede%20solicitar%20el%20servicio%20llenando%20el%20formulario%20que%20se%20encuentra%20en%20este%20enlace:%20https://duo-s.com/_pub.php%20no%20se%20le%20solicitarán%20datos%20personales.%0A%0AGracias%20por%20su%20atención!!!' target='a_link'><div class='InviteMessage text-center'>Confirmar envío al número ".$send_message."</div> </a>";
                }
            ?>
        </div>
        
        <div class="FormInviteContainer col-xxs-offset-1 col-xxs-10 col-xs-offset-1 col-xs-10 col-sm-offset-6 col-sm-6 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4 hidden-sm hidden-md hidden-lg">

            <h1 class="InviteTitle">Enviar invitación por WhatsApp</h1>

            <form class="InviteForm" method="POST">
                <input type="text" name="clientname" class="InviteInput" placeholder="Nombre de la empresa" autocomplete="off" required/><br><br>
                <input type="number" name="names" class="InviteInput" placeholder="Número de WhatsApp" autocomplete="off" required/><br><br>
                <button class="InviteBoton" name="submit" type="submit"> Ingresar número
            </button>
            </form>

            <?php

                $send_message = $_POST['names'];
                $clientname = $_POST['clientname'];

                if (isset($_POST['submit'])) {
                    echo "<br><a href='whatsapp://send?phone=506".$send_message."&text=Mensaje%20desde:%20*duo-s.com%20directorio%20de%20servicios*.%0A%0APara:%20*".$clientname."*.%0A%0AHola,%20espero%20que%20se%20encuentren%20muy%20bien,%20le%20saluda%20".$_SESSION['name'].".%0A%0AQuiero%20invitarle%20a%20ser%20parte%20de%20*DUO-S%20directorio%20de%20servicios*,%20es%20un%20servicio%20*GRATUITO*%20en%20el%20cual%20podrás%20publicar%20su%20empresa%20y%20disfrutar%20de%20muchos%20beneficios.
                    %0A%0ASi%20desea%20más%20información%20puede%20responder%20a%20este%20mensaje%20o%20si%20gusta%20puede%20solicitar%20el%20servicio%20llenando%20el%20formulario%20que%20se%20encuentra%20en%20este%20enlace:%20https://duo-s.com/_pub.php%20no%20se%20le%20solicitarán%20datos%20personales.%0A%0AGracias%20por%20su%20atención!!!'><div class='InviteMessage text-center'>Confirmar envío al número ".$send_message."</div> </a>";
                }
            ?>
        </div>