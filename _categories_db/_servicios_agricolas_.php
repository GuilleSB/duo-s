<head>
    <?php include ('../_page_sources.php');?>
    <base href="../index.php">
    <meta http-equiv="cache-control" content="no-cache"/>
    <meta name="description" content="Encuentra servicios agrícolas en duo-s.com.">
    <title>Servicios Agrícolas | duo-s.com</title>
</head>

<?php
    $head_name="Servicios Agrícolas";
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
            <h1>Servicios agrícolas</h1><br>
        </div>
        <button class="btn btn-default filter-button active" data-filter="all">Todo</button>
        <button class="btn btn-default filter-button" data-filter="1">Agroquímicos</button>
        <button class="btn btn-default filter-button" data-filter="2">Apicultura</button>
        <button class="btn btn-default filter-button" data-filter="3">Maquinaria agrícola</button>
        <button class="btn btn-default filter-button" data-filter="4">Taller de maquinaria</button>
        <button class="btn btn-default filter-button" data-filter="5">Veterinaria</button>
    </div><br/>
    
    <div class="main_body_page col-xxs-12 col-xs-12 col-sm-12 col-md-9 col-lg-9"> 
        <?php include ('./_servicios_agricolas.php');?>
    </div>
    
<!--start-chat-->
    <?php include ('../_chat.php');?>
<!--end-chat-->
</div>
<?php include ("../_random_cards_banner.php"); ?>
<?php include ("../_footer.php"); ?>