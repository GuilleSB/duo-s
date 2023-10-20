<?php
    include ('./_categories_bd.php' );
    
    $archivo = "./_home/db_data_base.php";
    $lineas = count(file($archivo));
    $total_lineas = $lineas;

shuffle($images);

    for($i=0; $i<$total_lineas; $i++)
    {           
        include ('./' . $images[$i]);
    }
?>