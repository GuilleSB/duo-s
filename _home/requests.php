<?php error_reporting(E_ALL ^ E_NOTICE);?>
<?php require_once 'templates/header.php';?>
<meta http-equiv="refresh" content="60" />
<style>
    .request{
        text-decoration:none;
        color:#333;
    }
    .requested{        
        padding: 7px;
        border:1px #ccc solid;
        text-align:center;
        width:500px;
        display:block;
    }
    .requested:hover{
        background:#ccc;
    }
    .requested>span{
        font-weight:700;
    }
    .request_list>.request>li{
        display: block;
        margin:auto;
    }
    div>a:visited{
        color:red;
    }
</style>
<br><br><br><br><br><br><br><br><br>
<?php
$list = null;
$dir = opendir("requests/");
$dirr = "requests/";
$q   = (count(glob("$dir/*")) === 0) ? 'empty' : 'not empty';

if (is_dir_empty($dirr)) {
  echo "<h3 class='text-center'>De momento no hay solicitudes, sigue invitando no te desanimes!!!</h3>"; 
}else{
    if ($q==1){
        echo "<h3 class='text-center'>Excelente, tenemos " . count(glob('./requests/{*.php}',GLOB_BRACE));  
        echo " solicitud!!!</h3>";
    }else{
        echo "<h3 class='text-center'>Excelente, tenemos " . count(glob('./requests/{*.php}',GLOB_BRACE));  
        echo " solicitudes!!!</h3>";
    }
}

function is_dir_empty($dirr) {
  if (!is_readable($dirr)) return null; 
  return (count(scandir($dirr)) == 2);
}



while ($element = readdir($dir))

{
    if($element != '.' && $element != '..')
    {
        if (is_dir("requests/". $element))
        {
            $list .= "<li><a href='requests/$element'>$element/</a></li>";
        }
        else
            {
                $element_format=trim($element, ".php");
                $list .= "<a class='request' href='requests/$element'><li class='requested'><span>$element_format</span> solicitó unirse a DUO-S</li></a>";
            }
    }

}

?>


<ul class="request_list">
    <?php echo $list ?>
</ul>