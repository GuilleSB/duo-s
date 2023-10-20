<?php
    include ('../_categories_bd_banner.php' );

shuffle($images);

    for($i=0; $i<4; $i++)
    {           
        include ('../' . $images[$i]);
    }
?>