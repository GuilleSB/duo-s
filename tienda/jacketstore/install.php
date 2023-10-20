<?php include './inc/link.php'; ?>
<?php error_reporting(E_ALL ^ E_NOTICE);?>

<style>
    .main_form{display:block;position:relative;top:0px;}
    .main_form_input{border-radius:5px;box-shadow:0px 0px 5px #333;padding-left:10px;height:30px; width:100%;margin:5px 0px;border:none;}
    .main_form_input_a{border-radius:5px;box-shadow:0px 0px 5px #333;height:30px; width:15.7%;;border:none;margin:5px 0px}
    .main_form_input_b{border-radius:5px;box-shadow:0px 0px 5px #333;height:30px; width:32.6%;border:none;margin:5px 0px}
    .main_form_input_c{border-radius:5px;box-shadow:0px 0px 5px #333;height:30px; width:92%;border:none;margin:5px 0px}
    .main_form_input_d{border-radius:25px;box-shadow:0px 0px 5px #333;height:30px; width:7%;border:none;margin:5px 0px}
    .main_form_input_e{border-radius:5px;box-shadow:0px 0px 5px #333;height:30px; width:49%;border:none;margin:5px 0px}
    .accordion__itemTitleWrap{height:24px; width:300px;margin:5px;border:none;box-shadow:0px 0px 1px #333;color:#333;}
    .accordion__itemTitleWrap::after{background:#fff;}
    body{background:#fff;}
    .txta{height:95px;}
    .fdown{position:relative;top:22px;}
    .chkbtn{position:relative;top:2px;}
    .week_lttr{color:#590080;}
    .sat_lttr{color:#ff9703;}
    .sun_lttr{color:#00d4ff;}
    .week_bg{background:#f0e7f4;}
    .sat_bg{background:#f8f2eb;}
    .sun_bg{background:#e7f3f6;}
</style>

<h1 class="text-center">Ingresar datos de empresa</h1>


<?php
$nombre='./assets/img';

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
if ($_FILES["fileToUpload"]["size"] > 124288) {
    $errors[]= "Lo sentimos, el archivo es demasiado grande.  Tamaño máximo admitido: 0.1 MB";
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
        
        $stores = fopen("idsources.php","a"); 

        fwrite($stores, "$"."store"."=\"".$_POST['store']."\";
                         $"."link"."=\"".$_POST['link']."\";                        
                         $"."whatsapp"."=\"".$_POST['whatsapp']."\";
                         $"."address"."=\"".$_POST['address']."\";
                         $"."mail"."=\"".$_POST['mail']."\";
                         $"."headercolor"."=\"".$_POST['headercolor']."\";
                         $"."fontcolor"."=\"".$_POST['fontcolor']."\";
                         $"."footercolor"."=\"".$_POST['footercolor']."\";". PHP_EOL);      
        
        fclose($stores);
        $titulo = $_POST['name'];
        echo "<center><img src='./_images/succesfully_add.png'><br><br>";
        echo "Has agregado con éxito a <b><a href=\"./". $_POST['id'] ."\"> $titulo </a></b> a Duo-s!<br><a href='_database_feed.php' title='volver'>Volver</a>"; 
        die; 
    }
?>


<div class="col-md-offset-2 col-md-8">
    <form class="main_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
	    <div class="col-md-6">    
            <input class="" type="file"  id="fileToUpload" onchange="upload_image();"><div class="upload-msg"></div>   

            <input class="main_form_input" type="text" name="link" placeholder=" Link: https://duo-s.com/" required="required" autocomplete="off" /><br>
            <input class="main_form_input" type="text" name="store" placeholder=" Nombre de la tienda" required="required" autocomplete="off" /><br>
            <input class="main_form_input" type="number" name="whatsapp" placeholder=" Número de WhatsApp" required="required" autocomplete="off" /><br>
            <input class="main_form_input" type="text" name="address" placeholder=" Dirección" required="required" autocomplete="off" /><br>
            <input class="main_form_input" type="mail" name="mail" placeholder=" Correo" required="required" autocomplete="off" /><br>
            <Label>Color de header y botones: </Label>
            <input class="main_form_input" type="color" name="headercolor" value="#fff" required="required" autocomplete="off" /><br>
            <Label>Color Letras en footer: </Label>
            <input class="main_form_input" type="color" name="fontcolor" value="#fff" required="required" autocomplete="off" /><br>
            <Label>Color de footer: </Label>
            <input class="main_form_input" type="color" name="footercolor" value="#fff" required="required" autocomplete="off" /><br>

          

        <div class="col-md-12">
            <input class="main_form_input btn-primary" name="submit" type="submit" value="Agregar">  
        </div>
    </form>
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
					url: "_image_upload.php",        // Url to which the request is send
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