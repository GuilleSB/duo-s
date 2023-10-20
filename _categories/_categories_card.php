<style>
    .modal-header, .modal-body {
    color: #344767;
    background: #fff;
}
</style>
        <div class='col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-4 business_card'>
            <div class='card'>
                <img class='tp' src='./_categories/<?php echo $b_id;?>.jpg' alt='Empresa de arquitectura' />
                <div class='business_name'>
                    <span class='icon-empresa col-xxs-1 col-xs-1 col-sm-1 col-md-1 col-lg-1'></span>
                    <div class='col-xxs-10 col-xs-11 col-sm-10 col-md-10 col-lg-10'>
                        <?php echo $b_name;?>
                    </div>
                </div>
                <div class='business_activity'>
                    <span class='icon-actividad col-xxs-1 col-xs-1 col-sm-1 col-md-1 col-lg-1'></span>
                    <div class='col-xxs-10 col-xs-11 col-sm-10 col-md-10 col-lg-10'>
                        <?php echo $b_activity;?> 
                    </div>
                </div>
                <address class='business_address'>
                    <span class='icon-ubicacion col-xxs-1 col-xs-1 col-sm-1 col-md-1 col-lg-1'></span>
                    <div class='col-xxs-10 col-xs-11 col-sm-10 col-md-10 col-lg-10'>
                        <?php echo $b_location;?>
                    </div>
                </address>             
                <div class="center">
                    <button data-toggle="modal" data-target="#<?php echo $b_id;?>" class="btn-round center-block">+ DETALLES                         
                    </button>
                </div>               
                <div class='text-center'>
                    <a class='business_phone' href='tel:+506<?php echo $b_phone;?>'>
                        <button class='btn'>
                            <span class='icon-telefono'></span> 
                            Llamar
                        </button>
                    </a>
                    <a rel="nofollow" class='business_whatsapp' href='https://wa.me/506<?php echo $b_whatsapp;?>' target='_blank'>
                        <button class='btn'>
                            <span class='icon-whatsapp'></span> 
                            WhatsApp
                        </button>
                    </a>
                    <div>
                        <a href='./<?php echo $b_id;?>'>
                            <button class='btn see_more'>
                                    Visitar página...
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        


<!-- line modal -->
        <div class="modal fade" id="<?php echo $b_id;?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
        	    <div class="modal-content">
        		    <div class="modal-header">
        			    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        			    <h3 class="modal-title whus" id="lineModalLabel"><span class="icon-empresa"></span> <?php echo $b_name;?></h3>
        		    </div>

        		    <div class="modal-body colsm-12 col-md-12">
                        <div class="col-sm-7 col-md-7">
                            <img class='tp' src='./_categories/<?php echo $b_id;?>.jpg' alt='tarjeta' /><br><br>
                        </div>

                        <address class="col-sm-5 col-md-5">
                            <div class="whus"><span class="icon-ubicacion"></span> ¿Donde estamos?</div>
                            <h4><?php echo $b_location;?></h4><br>
                        </address>
                        
                        <div class="col-sm-12 col-md-12">
                            <div class="whus"><span class="icon-quienessomos"></span> ¿Quién somos?</div>
                            <h4><?php echo $b_services;?></h4>
                        </div>
                        <div class='text-right col-xxs-12 col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                            <a class='business_phone' href='tel:+506<?php echo $b_phone;?>'>
                                <button class='btn'>
                                    <span class='icon-telefono'></span> 
                                    Llamar
                                </button>
                            </a>
                            <a class='business_whatsapp' href='https://wa.me/506<?php echo $b_whatsapp;?> 'target='_blank'>
                                <button class='btn'> 
                                    WhatsApp
                                </button>
                            </a>
                        </div>
                        <div>
                            <a href='./<?php echo $b_id;?>'>
                                <button class='btn see_more'>
                                    Visitar página...
                                </button>
                            </a>
                        </div>
        			</div>
        	    </div>
            </div>
        </div>