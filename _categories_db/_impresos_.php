<head>
    <?php include ('../_page_sources.php');?>
    <base href="../index.php">
    <meta http-equiv="cache-control" content="no-cache"/>
    <meta name="description" content="Encuentra imprenta y publicidad en duo-s.com.">
    <title>Entretenimiento | duo-s.com</title>
</head>

<?php
    $head_name="Imprenta y publicidad";
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
            <h1>Imprenta y publicidad</h1><br>
        </div>
        <button class="btn btn-default filter-button active" data-filter="all">Todo</button>
        <button class="btn btn-default filter-button" data-filter="1">Bordado</button>
        <button class="btn btn-default filter-button" data-filter="2">Diseño gráfico y web</button>
        <button class="btn btn-default filter-button" data-filter="3">Imprenta</button>
        <button class="btn btn-default filter-button" data-filter="4">Sellos</button>
        <button class="btn btn-default filter-button" data-filter="5">Serigrafía</button>
        <button class="btn btn-default filter-button" data-filter="6">Sublimación</button>
    </div><br/>
    
    
    <div class="main_body_page col-xxs-12 col-xs-12 col-sm-12 col-md-9 col-lg-9"> 
        <?php include ('./_impresos.php');?>
    </div>
    
<!--start-chat-->
    <?php include ('../_chat.php');?>
<!--end-chat-->
</div>
<?php include ("../_random_cards_banner.php"); ?>
<?php include ("../_footer.php"); ?>