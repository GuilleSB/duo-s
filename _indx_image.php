<?php
    include ('./_indx_bd_image.php' );

shuffle($images);

    for($i=0; $i<1; $i++)
    {           
        include ('./' . $images[$i]);
    }
?> 