<head>
    <?php include ('../_page_sources.php');?>
    <base href="../index.php">
    <meta http-equiv="cache-control" content="no-cache"/>
    <meta name="description" content="Encuentra todo en compras para el hogar en duo-s.com.">
    <title>Compras del hogar | duo-s.com</title>
</head>

<?php
    $head_name="Compras del hogar";
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
            <h1>Compras del hogar</h1><br>
        </div>
    
        <button class="btn btn-default filter-button active" data-filter="all">Todo</button>
        <button class="btn btn-default filter-button" data-filter="1">Almacén</button>
        <button class="btn btn-default filter-button" data-filter="2">Carnicería</button>
        <button class="btn btn-default filter-button" data-filter="3">Distribuidora</button>
        <button class="btn btn-default filter-button" data-filter="4">Ferretería</button>
        <button class="btn btn-default filter-button" data-filter="5">Licorera</button>
        <button class="btn btn-default filter-button" data-filter="6">Muebles</button>
        <button class="btn btn-default filter-button" data-filter="7">Panadería</button>
        <button class="btn btn-default filter-button" data-filter="8">Pescadería</button>
        <button class="btn btn-default filter-button" data-filter="9">Supermercado</button>
        <button class="btn btn-default filter-button" data-filter="10">Tienda</button>
        <button class="btn btn-default filter-button" data-filter="11">Verdulería</button>
    </div>
    
    <div class="main_body_page col-xxs-12 col-xs-12 col-sm-12 col-md-9 col-lg-9"> 
        <?php include ('./_compras_hogar.php');?>
    </div>
    
<!--start-chat-->
    <?php include ('../_chat.php');?>
<!--end-chat-->
</div>
<?php include ("../_random_cards_banner.php"); ?>
<?php include ("../_footer.php"); ?>