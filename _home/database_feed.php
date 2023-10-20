<?php error_reporting(E_ALL ^ E_NOTICE);?>
<?php error_reporting(E_ALL ^ E_DEPRECATED);?>
<?php require_once 'templates/header.php';?>

<style>
    .main_form{display:block;position:relative;top:0px;}
    .main_form_input{border-radius:5px;box-shadow:0px 0px 5px #333;padding-left:10px;height:30px; width:100%;margin:5px 0px;border:none;}
    .main_form_input_a{border-radius:5px;box-shadow:0px 0px 5px #333;height:30px; width:15.7%;border:none;margin:5px 0px}
    .main_form_input_b{border-radius:5px;box-shadow:0px 0px 5px #333;height:30px; width:32.5%;border:none;margin:5px 0px}
    .main_form_input_c{border-radius:5px;box-shadow:0px 0px 5px #333;height:30px; width:91.5%;border:none;margin:5px 0px}
    .main_form_input_d{border-radius:25px;box-shadow:0px 0px 5px #333;height:30px; width:7%;border:none;margin:5px 0px}
    .main_form_input_e{border-radius:5px;box-shadow:0px 0px 5px #333;height:30px; width:49%;border:none;margin:5px 0px}
    .accordion__itemTitleWrap{height:24px; width:300px;margin:5px;border:none;box-shadow:0px 0px 1px #333;color:#333;}
    .accordion__itemTitleWrap::after{background:#fff;}
    body{background:#fff;}
    .txta{height:90px;}
    .fdown{position:relative;top:42px;}
    .chkbtn{position:relative;top:2px;}
    .week_lttr{color:#590080;}
    .sat_lttr{color:#ff9703;}
    .sun_lttr{color:#00d4ff;}
    .week_bg_in, .sat_bg_in, .sun_bg_in{background:#a3f596;}
    .week_bg_out, .sat_bg_out, .sun_bg_out{background:#fb9a9a;}
</style>

<br><br><br>
<h1 class="text-center">Ingresar empresa</h1>

<script>
    $(document).ready(function(){
        $("select[name=categoryone]").change(function(){
            $.post("../_js_cargarSelect2.php", {id:$(this).val()}, function(data){
                $("select[name=subonea] option").remove();
                if(data.correcto==1)
                {
                    $.each(data.contenido, function(i, item) {
                        $("select[name=subonea]").append(new Option(item, i));
                    });
                    
                    // activamos el select
                    $("select[name=subonea]").prop('disabled', false);
                }else{
                    // desactivamos el select
                    $("select[name=subonea]").prop('disabled', true);
                }
            }, "json");
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("select[name=categoryone]").change(function(){
            $.post("../_js_cargarSelect3.php", {id:$(this).val()}, function(data){
                $("select[name=suboneb] option").remove();
                if(data.correcto==1)
                {
                    $.each(data.contenido, function(i, item) {
                        $("select[name=suboneb]").append(new Option(item, i));
                    });
                    
                    // activamos el select
                    $("select[name=suboneb]").prop('disabled', false);
                }else{
                    // desactivamos el select
                    $("select[name=suboneb]").prop('disabled', true);
                }
            }, "json");
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("select[name=categoryone]").change(function(){
            $.post("../_js_cargarSelect4.php", {id:$(this).val()}, function(data){
                $("select[name=subonec] option").remove();
                if(data.correcto==1)
                {
                    $.each(data.contenido, function(i, item) {
                        $("select[name=subonec]").append(new Option(item, i));
                    });
                    
                    // activamos el select
                    $("select[name=subonec]").prop('disabled', false);
                }else{
                    // desactivamos el select
                    $("select[name=subonec]").prop('disabled', true);
                }
            }, "json");
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("select[name=categorytwo]").change(function(){
            $.post("../_js_cargarSelect2.php", {id:$(this).val()}, function(data){
                $("select[name=subtwoa] option").remove();
                if(data.correcto==1)
                {
                    $.each(data.contenido, function(i, item) {
                        $("select[name=subtwoa]").append(new Option(item, i));
                    });
                    
                    // activamos el select
                    $("select[name=subtwoa]").prop('disabled', false);
                }else{
                    // desactivamos el select
                    $("select[name=subtwoa]").prop('disabled', true);
                }
            }, "json");
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("select[name=categorytwo]").change(function(){
            $.post("../_js_cargarSelect3.php", {id:$(this).val()}, function(data){
                $("select[name=subtwob] option").remove();
                if(data.correcto==1)
                {
                    $.each(data.contenido, function(i, item) {
                        $("select[name=subtwob]").append(new Option(item, i));
                    });
                    
                    // activamos el select
                    $("select[name=subtwob]").prop('disabled', false);
                }else{
                    // desactivamos el select
                    $("select[name=subtwob]").prop('disabled', true);
                }
            }, "json");
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("select[name=categorytwo]").change(function(){
            $.post("../_js_cargarSelect4.php", {id:$(this).val()}, function(data){
                $("select[name=subtwoc] option").remove();
                if(data.correcto==1)
                {
                    $.each(data.contenido, function(i, item) {
                        $("select[name=subtwoc]").append(new Option(item, i));
                    });
                    
                    // activamos el select
                    $("select[name=subtwoc]").prop('disabled', false);
                }else{
                    // desactivamos el select
                    $("select[name=subtwoc]").prop('disabled', true);
                }
            }, "json");
        });
    });
</script>

<?php
$nombre='../_categories';

//echo count($_FILES["file0"]["name"]);exit;
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_FILES["fileToUpload"]["type"])){
$target_dir = "$nombre/";
$carpeta=$target_dir;
if (!file_exists($carpeta)) {
    mkdir($carpeta, 0777, true);
}

$target_file = $carpeta . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $errors[]= "El archivo es una imagen - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $errors[]= "El archivo no es una imagen.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $errors[]="Lo sentimos, archivo ya existe.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 524288) {
    $errors[]= "Lo sentimos, el archivo es demasiado grande.  Tamaño máximo admitido: 0.5 MB";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $errors[]= "Lo sentimos, sólo archivos JPG, JPEG, PNG & GIF  son permitidos.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $errors[]= "Lo sentimos, tu archivo no fue subido.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       $messages[]= "El Archivo ha sido subido correctamente.";
	   
	   
    } else {
       $errors[]= "Lo sentimos, hubo un error subiendo el archivo.";
    }
}

if (isset($errors)){
	?>
	<div class="alert alert-danger alert-dismissible" role="alert">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	    <strong>Error!</strong> 
	    <?php
	    foreach ($errors as $error){
		    echo"<p>$error</p>";
	    }
	?>
	</div>
	<?php
}

if (isset($messages)){
	?>
	<div class="alert alert-success alert-dismissible" role="alert">
    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	    <strong>Aviso!</strong> 
	    <?php
	    foreach ($messages as $message){
		    echo"<p>$message</p>";
	    }
	?>
	</div>
	<?php
}
}
?> 

<?php
    if (isset($_POST['submit'])) {

        $file_name="../".$_POST['id'];
        $target_dir = $file_name."/";
        $carpet=$target_dir;
        if (!file_exists($carpet)) {
            mkdir($carpet, 0777, true);
        }

        $wclose=$_POST['wclose'];
        $satclose=$_POST['satclose'];
        $sunclose=$_POST['sunclose'];
        $search = fopen("../_search_db.php","a");
        $cat = fopen("../_categories_bd.php","a");
        $cat_banner = fopen("../_categories_bd_banner.php","a");
        $indx_image = fopen("../_indx_bd_image.php","a");
        $close_up_main = fopen("../_categories/" . $_POST['id'].".php","w");
        $close_up_main_banner = fopen("../_categories_banner/" . $_POST['id'].".php","w");
        $close_up_main_banner_image = fopen("../_categories_banner_image/" . $_POST['id'].".php","w");
        $categoryone = fopen("../_categories_db/" . $_POST['categoryone'].".php","a");
        $categorytwo = fopen("../_categories_db/" . $_POST['categorytwo'].".php","a");        
        $page = fopen("../".$_POST['id']."/"."index.php","w");
        $robots = fopen("../robots.txt","a"); 
        $db_data_base = fopen("db_data_base.php","a");

        $wclose = "cerrado";
        $satclose = "cerrado";
        $sunclose = "cerrado";     

        //borrar linea de texto_categories_bd
        $borrar=");";
        $cadena=join(";",file("../_categories_bd.php"));
        $cadena=str_replace($borrar,"",$cadena);
        $cadena=str_replace(";","",$cadena);
        file_put_contents("../_categories_bd.php",$cadena);

        $result = date('c');
        ////////////////////////////////////////////////

        //borrar linea de texto_categories_bd_banner
        $borrar_banner=");";
        $cadena_banner=join(";",file("../_categories_bd_banner.php"));
        $cadena_banner=str_replace($borrar_banner,"",$cadena_banner);
        $cadena_banner=str_replace(";","",$cadena_banner);
        file_put_contents("../_categories_bd_banner.php",$cadena_banner);

        $result_banner = date('c');
        //////////////////////////////////////////////// 

        //borrar linea de texto_indx_bd_image
        $borrar_indx_image=");";
        $cadena_indx_image=join(";",file("../_indx_bd_image.php"));
        $cadena_indx_image=str_replace($borrar_indx_image,"",$cadena_indx_image);
        $cadena_indx_image=str_replace(";","",$cadena_indx_image);
        file_put_contents("../_indx_bd_image.php",$cadena_indx_image);

        $result_indx_image = date('c');
        ////////////////////////////////////////////////   
        
        //borrar linea de texto_robots
        $borrar_robots="Sitemap: https://www.duo-s.com/sitemap.xml";
        $cadena_robots=join(";",file("../robots.txt"));
        $cadena_robots=str_replace($borrar_robots,"",$cadena_robots);
        $cadena_robots=str_replace(";","",$cadena_robots);
        file_put_contents("../robots.txt",$cadena_robots);
         $result_robots = date('c');

        ////////////////////////////////////////////////

        fwrite($search,  "<tr><td><a href=". $_POST['id'] . ">" . $_POST['name'] . "<span class=" . "'" . 'transparent' . "'" . "> " . $_POST['keywords'] . "</span>" . "</a></td></tr>" . PHP_EOL);

        fwrite($cat,  "\"./_categories/" . $_POST['id'] . ".php\"," . ");" . PHP_EOL);

        fwrite($cat_banner,  "\"./_categories_banner/" . $_POST['id'] . ".php\"," . ");" . PHP_EOL);
              
        fwrite($indx_image,  "\"./_categories_banner_image/" . $_POST['id'] . ".php\"," . ");" . PHP_EOL);

        fwrite($close_up_main,  "
        <?php
        //ID
        $"."b_id"."=\"".$_POST['id']."\";
        
        //NOMBRE DE LA EMPRESA
        $"."b_name"."=\"".$_POST['name']."\";        
        
        //ACTIVIDAD DE LA EMPRESA
        $"."b_activity"."=\"".$_POST['sactivity']."\";
        
        //DETALLES DE LA ACTIVIDAD DE LA EMPRESA
        $"."b_services"."=\"".$_POST['activity']."\";
        
        //NUMERO DE TELEFONO
        $"."b_phone"."=\"".$_POST['phone']."\";
        
        //NUMERO DE WHATSAPP
        $"."b_whatsapp"."=\"".$_POST['whatsapp']."\";
        
        //DIRECCION
        $"."b_location"."=\"".$_POST['address']."\";    
        
        include('_categories_card.php');
        ?>" . PHP_EOL);

        fwrite($close_up_main_banner, "
        <?php
        //ID
        $"."b_id"."=\"".$_POST['id']."\";
        
        //NOMBRE DE LA EMPRESA
        $"."b_name"."=\"".$_POST['name']."\";
        
        
        //ACTIVIDAD DE LA EMPRESA
        $"."b_activity"."=\"".$_POST['sactivity']."\";      
        
        include('_categories_banner_card.php');
        ?>" . PHP_EOL);

        fwrite($close_up_main_banner_image, "
        <?php
        //ID
        $"."b_id"."=\"".$_POST['id']."\";
        
        include('_categories_banner_image.php');
        ?>" . PHP_EOL);

        fwrite($categoryone, "echo" . " \"<div class='filter " . $_POST['subonea'] ." " . $_POST['suboneb'] ." " . $_POST['subonec'] ."'>\";" . "$"."images=array('../_categories/".$_POST['id'].".php');" . "shuffle($"."images);" . "for($"."i=0; $"."i<1; $"."i++){include ($"."images[$"."i]);}" . "echo" . " \"</div>\";" . PHP_EOL);

        fwrite($categorytwo, "echo" . " \"<div class='filter " . $_POST['subtwoa'] ." " . $_POST['subtwob'] ." " . $_POST['subtwoc'] ."'>\";" . "$"."images=array('../_categories/".$_POST['id'].".php');" . "shuffle($"."images);" . "for($"."i=0; $"."i<1; $"."i++){include ($"."images[$"."i]);}" . "echo" . " \"</div>\";" . PHP_EOL);

        fwrite($robots, "Disallow: /". $_POST['id']."/ <br> Sitemap: https://www.duo-s.com/sitemap.xml". PHP_EOL);

        fwrite($page, "
        <?php
        //ID
        $"."b_id"."=\"".$_POST['id']."\";
        
        //NOMBRE DE LA EMPRESA
        $"."b_name"."=\"".$_POST['name']."\";        
        
        //ACTIVIDAD DE LA EMPRESA
        $"."b_activity"."=\"".$_POST['sactivity']."\";
        
        //DETALLES DE LA ACTIVIDAD DE LA EMPRESA
        $"."b_services"."=\"".$_POST['activity']."\";
        
        //NUMERO DE TELEFONO
        $"."b_phone"."=\"".$_POST['phone']."\";
        
        //CORREO ELECTRONICO
        $"."b_mail"."=\"".$_POST['mail']."\";
        
        //SITIO WEB
        $"."b_web_site"."=\"".$_POST['web']."\";
        
        //HORADIO ENTRE SEMANA
        $"."b_l_v_am"."=\"".$_POST['weekam']."\";
        $"."b_l_v_pm". "=\"".$_POST['weekpm']."\";
        
        //HORARIO SÁBADO
        $"."b_s_am"."=\"".$_POST['satam']."\";
        $"."b_s_pm"."=\"".$_POST['satpm']."\";
        
        //HORARIO DOMINGO
        $"."b_d_am"."=\"".$_POST['sunam']."\";
        $"."b_d_pm"."=\"".$_POST['sunpm']."\";
        
        //NUMERO DE WHATSAPP
        $"."b_whatsapp"."=\"".$_POST['whatsapp']."\";
        
        //DIRECCION
        $"."b_location"."=\"".$_POST['address']."\";
        
        //UBICACION GEOGRAFICA
        $"."b_lat"."=\"".$_POST['lat']."\";
        $"."b_lon"."=\"".$_POST['lon']."\";
        
        //FACEBOOK        
        $"."b_fb"."=\"".$_POST['facebook']."\";        
        
        include('../_page_indx.php');
        ?>        
        ". PHP_EOL);    
        
        fwrite($db_data_base, "<tr><td><a href='../".$_POST['id']."' target='a_link'>".$_POST['name']."</a></td><td>".$_POST['sactivity']."</td><td>".$_POST['whatsapp']."</td><td>".$_POST['address']."</td></tr>". PHP_EOL);
        
        fclose($search);
        fclose($cat);
        fclose($cat_banner);
        fclose($indx_image);
        fclose($close_up_main);        
        fclose($close_up_main_banner);
        fclose($close_up_main_banner_image);
        fclose($categoryone);
        fclose($categorytwo);
        fclose($page);
        fclose($robots);
        fclose($db_data_base);
        
        $titulo = $_POST['name'];
        echo "<center><img src='../_images/succesfully_add.png'><br><br>";
        echo "Has agregado con éxito a <b><a href=\"../". $_POST['id'] ."\"> $titulo </a></b> a Duo-s!<br><a href='database_feed.php' title='volver'>Volver</a>"; 
        die; 
    }
?>


<div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
    <form class="main_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
	    <div class="col-md-6">    
            <input class="" type="file"  id="fileToUpload" onchange="upload_image();"><div class="upload-msg"></div>
            <input class="main_form_input_c" type="text" name="keywords" placeholder=" Palabras clave" value="<?php
                    if (!empty($_POST['provincia'])){
                        @$provincia= "en ".$_POST['provincia'].", ";
                    }else{
                        @$provincia=false;
                    }
                    if (!empty($_POST['canton'])){
                        @$canton= "en ".$_POST['canton'].", ";
                    }else{
                        @$canton=false;
                    }
                    if (!empty($_POST['distrito'])){
                        @$distrito="en ".$_POST['distrito'].", ";
                    }else{
                        @$distrito=false;
                    }
                    if (!empty($_POST['lugar'])){
                        @$lugar="en ".$_POST['lugar'].", ";
                    }else{
                        @$lugar=false;
                    }
                    if (!empty($_POST['categoria'])){
                        @$categoria=$_POST['categoria'];
                    }else{
                        @$categoria=false;
                    }
                    if (!empty($_POST['servicio'])){
                        @$servicio=$_POST['servicio'];
                    }else{
                        @$servicio=false;
                    }
                    if (!empty($_POST['producto1'])){
                        @$producto1=$_POST['producto1'];
                    }else{
                        @$producto1=false;
                    }
                    if (!empty($_POST['producto2'])){
                        @$producto2=$_POST['producto2'];
                    }else{
                        @$producto2=false;
                    }
                    if (!empty($_POST['producto3'])){
                        @$producto3=$_POST['producto3'];
                    }else{
                        @$producto3=false;
                    }
                    if (!empty($_POST['producto4'])){
                       @$producto4=$_POST['producto4'];
                    }else{
                        @$producto4=false;
                    }
                    if (!empty($_POST['producto5'])){
                        @$producto5=$_POST['producto5'];
                    }else{
                        @$producto5=false;
                    }
                    if (!empty($_POST['producto6'])){
                       @$producto6=$_POST['producto6'];
                    }else{
                        @$producto6=false;
                    }
                    if (!empty($_POST['producto7'])){
                        @$producto7=$_POST['producto7'];
                    }else{
                        @$producto7=false;
                    }
                    if (!empty($_POST['producto8'])){
                        @$producto8=$_POST['producto8'];
                    }else{
                        @$producto8=false;
                    }
                    if (!empty($_POST['producto9'])){
                        @$producto9=$_POST['producto9'];
                    }else{
                        @$producto9=false;
                    }
                    if (!empty($_POST['producto10'])){
                       @$producto10=$_POST['producto10'];
                    }else{
                        @$producto10=false;
                    }
                    if (!empty($_POST['producto11'])){
                        @$producto11=$_POST['producto11'];
                    }else{
                        @$producto11=false;
                    }
                    if (!empty($_POST['producto12'])){
                       @$producto12=$_POST['producto12'];
                    }else{
                        @$producto12=false;
                    }

///////////////////////////////////////////////////////////////////                    
                    if (!empty($categoria) and !empty($provincia)) {
                        echo "$categoria $provincia";
                    }

                    if (!empty($servicio) and !empty($provincia)) {
                        echo "$servicio $provincia";
                    }
                    if (!empty($producto1) and !empty($provincia)) {
                        echo "$producto1 $provincia";
                    }
                    if (!empty($producto2) and !empty($provincia)) {
                        echo "$producto2 $provincia";
                    }
                    if (!empty($producto3) and !empty($provincia)) {
                        echo "$producto3 $provincia";
                    }
                    if (!empty($producto4) and !empty($provincia)) {
                        echo "$producto4 $provincia";
                    }
                    if (!empty($producto5) and !empty($provincia)) {
                        echo "$producto5 $provincia";
                    }
                    if (!empty($producto6) and !empty($provincia)) {
                        echo "$producto6 $provincia";
                    }
                    if (!empty($producto7) and !empty($provincia)) {
                        echo "$producto7 $provincia";
                    }
                    if (!empty($producto8) and !empty($provincia)) {
                        echo "$producto8 $provincia";
                    }
                    if (!empty($producto9) and !empty($provincia)) {
                        echo "$producto9 $provincia";
                    }
                    if (!empty($producto10) and !empty($provincia)) {
                        echo "$producto10 $provincia";
                    }
                    if (!empty($producto11) and !empty($provincia)) {
                        echo "$producto11 $provincia";
                    }
                    if (!empty($producto12) and !empty($provincia)) {
                        echo "$producto12 $provincia";
                    }
                    
///////////////////////////////////////////////////////////////////                    
                    if (!empty($categoria) and !empty($canton)) {
                        echo "$categoria $canton";
                    }

                    if (!empty($servicio) and !empty($canton)) {
                        echo "$servicio $canton";
                    }
                    if (!empty($producto1) and !empty($canton)) {
                        echo "$producto1 $canton";
                    }
                    if (!empty($producto2) and !empty($canton)) {
                        echo "$producto2 $canton";
                    }
                    if (!empty($producto3) and !empty($canton)) {
                        echo "$producto3 $canton";
                    }
                    if (!empty($producto4) and !empty($canton)) {
                        echo "$producto4 $canton";
                    }
                    if (!empty($producto5) and !empty($canton)) {
                        echo "$producto5 $canton";
                    }
                    if (!empty($producto6) and !empty($canton)) {
                        echo "$producto6 $canton";
                    }
                    if (!empty($producto7) and !empty($canton)) {
                        echo "$producto7 $canton";
                    }
                    if (!empty($producto8) and !empty($canton)) {
                        echo "$producto8 $canton";
                    }
                    if (!empty($producto9) and !empty($canton)) {
                        echo "$producto9 $canton";
                    }
                    if (!empty($producto10) and !empty($canton)) {
                        echo "$producto10 $canton";
                    }
                    if (!empty($producto11) and !empty($canton)) {
                        echo "$producto11 $canton";
                    }
                    if (!empty($producto12) and !empty($canton)) {
                        echo "$producto12 $canton";
                    }
                    
///////////////////////////////////////////////////////////////////                    
                    if (!empty($categoria) and !empty($distrito)) {
                        echo "$categoria $distrito";
                    }

                    if (!empty($servicio) and !empty($distrito)) {
                        echo "$servicio $distrito";
                    }
                    if (!empty($producto1) and !empty($distrito)) {
                        echo "$producto1 $distrito";
                    }
                    if (!empty($producto2) and !empty($distrito)) {
                        echo "$producto2 $distrito";
                    }
                    if (!empty($producto3) and !empty($distrito)) {
                        echo "$producto3 $distrito";
                    }
                    if (!empty($producto4) and !empty($distrito)) {
                        echo "$producto4 $distrito";
                    }
                    if (!empty($producto5) and !empty($distrito)) {
                        echo "$producto5 $distrito";
                    }
                    if (!empty($producto6) and !empty($distrito)) {
                        echo "$producto6 $distrito";
                    }
                    if (!empty($producto7) and !empty($distrito)) {
                        echo "$producto7 $distrito";
                    }
                    if (!empty($producto8) and !empty($distrito)) {
                        echo "$producto8 $distrito";
                    }
                    if (!empty($producto9) and !empty($distrito)) {
                        echo "$producto9 $distrito";
                    }
                    if (!empty($producto10) and !empty($distrito)) {
                        echo "$producto10 $distrito";
                    }
                    if (!empty($producto11) and !empty($distrito)) {
                        echo "$producto11 $distrito";
                    }
                    if (!empty($producto12) and !empty($distrito)) {
                        echo "$producto12 $distrito";
                    }
                    
///////////////////////////////////////////////////////////////////                    
                    if (!empty($categoria) and !empty($lugar)) {
                        echo "$categoria $lugar";
                    }

                    if (!empty($servicio) and !empty($lugar)) {
                        echo "$servicio $lugar";
                    }
                    if (!empty($producto1) and !empty($lugar)) {
                        echo "$producto1 $lugar";
                    }
                    if (!empty($producto2) and !empty($lugar)) {
                        echo "$producto2 $lugar";
                    }
                    if (!empty($producto3) and !empty($lugar)) {
                        echo "$producto3 $lugar";
                    }
                    if (!empty($producto4) and !empty($lugar)) {
                        echo "$producto4 $lugar";
                    }
                    if (!empty($producto5) and !empty($lugar)) {
                        echo "$producto5 $lugar";
                    }
                    if (!empty($producto6) and !empty($lugar)) {
                        echo "$producto6 $lugar";
                    }
                    if (!empty($producto7) and !empty($lugar)) {
                        echo "$producto7 $lugar";
                    }
                    if (!empty($producto8) and !empty($lugar)) {
                        echo "$producto8 $lugar";
                    }
                    if (!empty($producto9) and !empty($lugar)) {
                        echo "$producto9 $lugar";
                    }
                    if (!empty($producto10) and !empty($lugar)) {
                        echo "$producto10 $lugar";
                    }
                    if (!empty($producto11) and !empty($lugar)) {
                        echo "$producto11 $lugar";
                    }
                    if (!empty($producto12) and !empty($lugar)) {
                        echo "$producto12 $lugar";
                    }
                ?>" required="required" autocomplete="off"/>
            <button data-toggle="modal" data-target="#squarespaceModal" class="main_form_input_d">?</button><br>
	    	<input class="main_form_input" type="text" name="id" placeholder=" ID" required="required" autocomplete="off"/><br>    
            <input class="main_form_input" type="text" name="name" placeholder=" Nombre de la empresa" required="required" autocomplete="off" /><br> 
            <input class="main_form_input" type="text" name="sactivity" placeholder=" Actividad" required="required" autocomplete="off"/><br>
            <textarea class="main_form_input txta" type="text" name="activity" placeholder=" Descripción" required="required" autocomplete="off"></textarea><br>        
            <label>Horario de atención:</label><br>
            <label class="week_lttr col-xs-4 col-sm-4 col-md-4 text-center">L - V:</label>
            <label class="sat_lttr col-xs-4 col-sm-4 col-md-4 text-center">Sábado:</label>
            <label class="sun_lttr col-xs-4 col-sm-4 col-md-4 text-center">Domingo:</label><br>
            <div class="col-md-4">
                <input class="week_bg_in main_form_input" type="time" name="weekam" autocomplete="on"/>
                <input class="week_bg_out main_form_input" type="time" name="weekpm" autocomplete="on"/>  
            </div> 
            <div class="col-md-4">         
                <input class="sat_bg_in main_form_input" type="time" name="satam" autocomplete="on"/>
                <input class="sat_bg_out main_form_input" type="time" name="satpm" autocomplete="on"/>
            </div>
            <div class="col-md-4"> 
                <input class="sun_bg_in main_form_input" type="time" name="sunam" autocomplete="on"/>            
                <input class="sun_bg_out main_form_input" type="time" name="sunpm" autocomplete="on"/>
            </div>
            <input class="main_form_input" type="text" name="address" placeholder=" Dirección" required="required" autocomplete="off"/><br>
            <input class="main_form_input" type="number" name="phone" placeholder=" Teléfono" required="required" autocomplete="off"/><br>
        </div>
        <div class="col-md-6 fdown">      
            <input class="main_form_input" type="number" name="whatsapp" placeholder=" WhatsApp" required="required" autocomplete="off"/><br>
            <input class="main_form_input" type="email" name="mail" placeholder=" Correo" autocomplete="off"/><br>
            <input class="main_form_input" type="text" name="facebook" placeholder=" Facebook" autocomplete="off"/><br>
            <input class="main_form_input" type="text" name="web" placeholder=" Web" autocomplete="off"/><br>
            <label>Waze:</label><br>
            <input class="main_form_input" type="text" name="lat" placeholder=" Latitud" autocomplete="off"/>
            <input class="main_form_input" type="text" name="lon" placeholder=" Longitud" autocomplete="off"/>    
            <label>Categoría principal:</label><br>
            <select class="main_form_input" name="categoryone" required="required">
                <option value='0'>Seleccione una categoría</option>
                <option value='_alquileres'>Alquileres</option>
                <option value='_artes'>Artes</option>
                <option value='_audiovisuales'>Audiovisuales</option>
                <option value='_autos_motos'>Autos y motos</option>
                <option value='_ciclos'>Ciclos</option>
                <option value='_comidas_bebidas'>Comidas y bebidas</option>
                <option value='_compras_hogar'>Compras del hogar</option>
                <option value='_construccion'>Construcción</option>
                <option value='_cuidado_personal'>Cuidado Personal</option>
                <option value='_deportes'>Deportes</option>
                <option value='_educacion'>Educación</option>
                <option value='_electronica_tecnologia'>Electrónica y Tecnología</option>
                <option value='_eventos'>Entretenimiento</option>
                <option value='_fabricas'>Fábricas</option>
                <option value='_impresos'>Impresos y publicidad</option>
                <option value='_joyas_accesorios'>Joyas y accesorios</option>
                <option value='_libreria_bazar'>Librería y bazar</option>
                <option value='_mascotas'>Mascotas</option>            
                <option value='_recreacion_turismo'>Recreación y turismo</option>
                <option value='_salud_bienestar'>Salud y bienestar</option>
                <option value='_seguridad'>Seguridad</option>
                <option value='_servicios_agricolas'>Servicios agrícolas</option>
                <option value='_profesionales'>Servicios profesionales</option>            
                <option value='_vestido_calzado'>Vestido y calzado</option>
            </select>
        
            <!-- Segundo select. Se llena automaticamente segun la seleccion
            del primer select -->
            <select class="main_form_input_b" name="subonea" disabled></select>
    
            <!-- Tercer select. Se llena automaticamente segun la seleccion
            del primer select -->
            <select class="main_form_input_b" name="suboneb" disabled></select>
    
            <!-- Cuarto select. Se llena automaticamente segun la seleccion
            del primer select -->
            <select class="main_form_input_b" name="subonec" disabled></select><br>
            
            <label>Categoría secundaria:</label><br>
            <select class="main_form_input" name="categorytwo">
                <option value='0'>Seleccione una categoría</option>
                <option value='_alquileres'>Alquileres</option>
                <option value='_artes'>Artes</option>
                <option value='_audiovisuales'>Audiovisuales</option>
                <option value='_autos_motos'>Autos y motos</option>
                <option value='_ciclos'>Ciclos</option>
                <option value='_comidas_bebidas'>Comidas y bebidas</option>
                <option value='_compras_hogar'>Compras del hogar</option>
                <option value='_construccion'>Construcción</option>
                <option value='_cuidado_personal'>Cuidado Personal</option>
                <option value='_deportes'>Deportes</option>
                <option value='_educacion'>Educación</option>
                <option value='_electronica_tecnologia'>Electrónica y Tecnología</option>
                <option value='_eventos'>Entretenimiento</option>
                <option value='_fabricas'>Fábricas</option>
                <option value='_impresos'>Impresos y publicidad</option>
                <option value='_joyas_accesorios'>Joyas y accesorios</option>
                <option value='_libreria_bazar'>Librería y bazar</option>
                <option value='_mascotas'>Mascotas</option>           
                <option value='_recreacion_turismo'>Recreación y turismo</option>
                <option value='_salud_bienestar'>Salud y bienestar</option>
                <option value='_seguridad'>Seguridad</option>
                <option value='_servicios_agricolas'>Servicios agrícolas</option>
                <option value='_profesionales'>Servicios profesionales</option>            
                <option value='_vestido_calzado'>Vestido y calzado</option>
            </select>
            
            <!-- Segundo select. Se llena automaticamente segun la seleccion
            del primer select -->
            <select class="main_form_input_b" name="subtwoa" disabled></select>
    
            <!-- Tercer select. Se llena automaticamente segun la seleccion
            del primer select -->
            <select class="main_form_input_b" name="subtwob" disabled></select>
    
            <!-- Cuarto select. Se llena automaticamente segun la seleccion
            del primer select -->
            <select class="main_form_input_b" name="subtwoc" disabled></select>
        </div>
            <br><br>
        <div class="col-md-12">
            <input class="main_form_input btn-primary" name="submit" type="submit" value="Agregar">  
        </div>
    </form>
</div>

<!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
	    <div class="modal-content">
		    <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			    <h3 class="modal-title" id="lineModalLabel">Keywords</h3>
		    </div>
		    <div class="modal-body">			
            <!-- content goes here -->
			    <form method="POST" action="database_feed.php">
                    <input type="text" class="main_form_input_e" name="provincia" placeholder=" Provincia">
                    <input type="text" class="main_form_input_e" name="canton" placeholder=" Cantón">
                    <input type="text" class="main_form_input_e" name="distrito" placeholder=" Distrito">
                    <input type="text" class="main_form_input_e" name="lugar" placeholder=" Lugar">
                    <input type="text" class="main_form_input_e" name="categoria" placeholder=" Categoría">
                    <input type="text" class="main_form_input_e" name="servicio" placeholder=" Servicio">
                    <input type="text" class="main_form_input_e" name="producto1" placeholder=" Producto 1">
                    <input type="text" class="main_form_input_e" name="producto2" placeholder=" Producto 2">
                    <input type="text" class="main_form_input_e" name="producto3" placeholder=" Producto 3">
                    <input type="text" class="main_form_input_e" name="producto4" placeholder=" Producto 4">
                    <input type="text" class="main_form_input_e" name="producto5" placeholder=" Producto 5">
                    <input type="text" class="main_form_input_e" name="producto6" placeholder=" Producto 6">
                    <input type="text" class="main_form_input_e" name="producto7" placeholder=" Producto 7">
                    <input type="text" class="main_form_input_e" name="producto8" placeholder=" Producto 8">
                    <input type="text" class="main_form_input_e" name="producto9" placeholder=" Producto 9">
                    <input type="text" class="main_form_input_e" name="producto10" placeholder=" Producto 10">
                    <input type="text" class="main_form_input_e" name="producto11" placeholder=" Producto 11">
                    <input type="text" class="main_form_input_e" name="producto12" placeholder=" Producto 12">
                    <button type="submit" name="submit_b" class="btn btn-primary">Submit</button>
                </form>
            </div>
	    </div>
    </div>
</div>

<script>
	function upload_image(){//Funcion encargada de enviar el archivo via AJAX
				$(".upload-msg").text('Cargando...');
				var inputFileImage = document.getElementById("fileToUpload");
				var file = inputFileImage.files[0];
				var data = new FormData();
				data.append('fileToUpload',file);
				
				/*jQuery.each($('#fileToUpload')[0].files, function(i, file) {
					data.append('file'+i, file);
				});*/
							
				$.ajax({
					url: "../_image_upload.php",        // Url to which the request is send
					type: "POST",             // Type of request to be send, called as method
					data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
					contentType: false,       // The content type used when sending data to the server.
					cache: false,             // To unable request pages to be cached
					processData:false,        // To send DOMDocument or non processed data file it is set to false
					success: function(data)   // A function to be called if request succeeds
					{
						$(".upload-msg").html(data);
						window.setTimeout(function() {
						$(".alert-dismissible").fadeTo(500, 0).slideUp(500, function(){
						$(this).remove();
						});	}, 5000);
					}
				});
			}
</script>
    </div>
</div> <!-- /container -->
<?php //require_once 'templates/footer.php';?>