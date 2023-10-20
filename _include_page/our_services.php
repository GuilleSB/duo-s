<style>
    .indx_half>div>div>strong{font-size:20px;}
    .indx_half>div>div>h5{font-size:18px;}
    .indx_half>div>div>img{width:150px}
    .indx_half_info{background:#fff;padding:10px;box-shadow:0px 10px 20px #ddd;border-radius:10px;margin:10px 0;}
    .index_add{position:relative;top:25px;}
</style>
<section class="col-xxs-12 col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 text-center indx_half">
    <h3 class="col-md-12">Encuentre aquí los siguientes servicios</h3>    
    <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 col-lg-3 text-center">
        <div class="indx_half_info">
            <img src="_images/marketing.png" alt="Imagen de marketing"><br>
            <strong class="products">Marketing <br> Digital</strong>
            <?php
                include ('_include_page/services.php');
            ?>
        </div>
    </div>
    <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 col-lg-3 text-center">
        <div class="indx_half_info">
            <img src="_images/web.png" alt="Imagen de servicios web"><br>
            <strong class="products">Páginas <br> Web</strong>
            <?php
                include ('_include_page/services.php');
            ?>
        </div>
    </div>
    <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 col-lg-3 text-center">
            <div class="indx_half_info">
            <img src="_images/grafico.png" alt="Imagen de diseño gráfico"><br>
            <strong class="products">Diseño <br> Gráfico</strong>
            <?php
                include ('_include_page/services.php');
            ?>
        </div>
    </div>    
    <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 col-lg-3 text-center">
            <div class="indx_half_info">
            <img src="_images/facturacion.png" alt="Imagen de servicios de facturación"><br>
            <strong class="products">Contabilidad <br> factura electr.</strong>
            <?php
                include ('_include_page/invoice.php');
            ?>
        </div>
    </div>   
</section>