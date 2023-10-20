<head>
    <?php include ('../_page_sources.php');?>
    <base href="../index.php">
    <meta http-equiv="cache-control" content="no-cache"/>
    <meta name="description" content="Encuentra autos y motos en duo-s.com.">
    <title>Autos y motos | duo-s.com</title>
</head>

<?php
    $head_name="Autos y motos";
    include ('../_menu.php');
?>

<script src="./_js/gallery.js"></script>
  
<?php include ('../_searching_page_indx.php');?>

<div class="col-md-12 categories_body">
    <?php include ('../_side_page.php');?>
    
    <div class="col-sm-12 col-md-9 col-lg-9 text-center">
        <div class="text-center"><br><br>
            <section class="col-xxs-12 col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10"><br>
                <?php
                    include ('../_adds/_add_up.php');
                ?>
            </section>
            <h1>Autos y motos</h1><br>
        </div>
        <button class="btn btn-default filter-button active" data-filter="all">Todo</button>
        <button class="btn btn-default filter-button" data-filter="1">Decoración</button>
        <button class="btn btn-default filter-button" data-filter="2">Grúa / plataforma</button>
        <button class="btn btn-default filter-button" data-filter="3">Eléctrico</button>
        <button class="btn btn-default filter-button" data-filter="4">Lavacar / limpieza</button>
        <button class="btn btn-default filter-button" data-filter="5">Llantera</button>
        <button class="btn btn-default filter-button" data-filter="6">Lubricación</button>    
        <button class="btn btn-default filter-button" data-filter="7">Mecánico</button>
        <button class="btn btn-default filter-button" data-filter="8">Radiadores</button>
        <button class="btn btn-default filter-button" data-filter="9">Repuestos</button>
        <button class="btn btn-default filter-button" data-filter="10">Soldadura</button>
    </div><br/>
    
    <div class="main_body_page col-xxs-12 col-xs-12 col-sm-12 col-md-9 col-lg-9"> 
        <?php include ('./_autos_motos.php');?>
    </div>
    
<!--start-chat-->
    <?php include ('../_chat.php');?>
<!--end-chat-->
</div>
<?php include ("../_random_cards_banner.php"); ?>
<?php include ("../_footer.php"); ?> 