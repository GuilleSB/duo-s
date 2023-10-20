<?php
    $images=array("./_indx_image.php");

    shuffle($images);
    
    for($i=0; $i<1; $i++)
    {           
        include ($images[$i]);
    }
?> 