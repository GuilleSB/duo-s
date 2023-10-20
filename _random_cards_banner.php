<article class="main_body_page hidden-xxs hidden-xs hidden-sm col-md-12 col-lg-12">
<div class="col-xxs-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 add_down">
    <?php include ('../_adds/_add_down.php');?>
</div>
    <div class="some_categories">
        <h3 class="some_categories_title text-left">Otras empresas</h3>         
    </div>

    <?php
        $images=array("../_categories_banner.php");

        shuffle($images);

        for($i=0; $i<4; $i++)
        {           
            include ($images[$i]);
        }
    ?>  
</article>