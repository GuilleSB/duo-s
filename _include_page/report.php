<style>
    .modal-header, .modal-body{color:#364968}
</style>
<div class="report_button">
    <button data-toggle="modal" data-target="#report" class="btn-round center-block">Recomendar duo-s.com                        
    </button>
</div>                  

 <!-- line modal -->
 <div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
        	    <div class="modal-content">
        		    <div class="modal-header">
        			    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        			    <h3 class="modal-title" id="lineModalLabel">Recomendar duo-s.com </h3>
        		    </div>

        		    <div class="modal-body">
                        <div class="text-center">
                            Si conoces una empresa que debería aparecer en duo-s.com puedes recomendarlo con su dueño(a) llenando este formulario
                        </div><br>
                        <form class="recommend_form" action="./_whatsapp.php" method="POST">
                            <input class="recommend_input" type="text" name="recname" placeholder=" Su nombre" autocomplete="off" required>
                            <input class="recommend_input" type="text" name="friendname" placeholder=" Encargado(a) de la empresa que desa recomendar" autocomplete="off" required>
                            <input class="recommend_input" type="number" name="whatsapp" placeholder=" WhatsApp de la empresa" autocomplete="off" required>
                            <input class="recommend_submit" type="submit" value="Enviar enlace">
                        </form><br><br>
        			</div>
        	    </div>
            </div>
        </div>