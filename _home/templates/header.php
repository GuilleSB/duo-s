<?php 
ob_start();
session_start();
require_once 'config.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="muni">
    <title>(<?php echo count(glob('./requests/{*.php}',GLOB_BRACE));?>) Administración</title>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">	
    <link href="css/login.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
 	</head>
 	<body>

    <!-- Static navbar -->
	<div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" data-toggle="collapse"
					data-target=".navbar-collapse" class="navbar-toggle collapsed">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="home.php">Inicio</a></li>
					<li><a href="invite.php">Invitar</a></li>
					<li><a href="database_feed.php">Ingresar empresa</a>
					</li>
					<li><a href="data_base.php">Empresas</a></li>
					<?php 
					
					$cant=count(glob('./requests/{*.php}',GLOB_BRACE));
					   $afs='Abraham';
					   if ($_SESSION['name']==$afs){
					       
					       if ($cant > 0) {
						       echo "<li><a href='requests.php'>Solicitudes <span style='color:#fff;background:red;padding:1px 5px;border-radius:20px;font-weight:600;'>" . $cant . "</span></a></li>";
					       }else{
					          echo "<li><a href='requests.php'>Solicitudes</a></li>"; 
					       }
						   
						   echo '<li><a href="register.php">Registrar</a></li>';
					   }
					?>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">
							Hola,  
							
						<?php if($_SESSION['logged_in']) { ?>
							<?php echo $_SESSION['name']; ?>
							<span class="caret"></span>
						</a>
						<ul role="menu" class="dropdown-menu">
							<li> <a href="account.php">Mi cuenta</a> </li>
							<li class="divider"></li>
						<li> <a href="logout.php">Salir</a> </li>
						</ul>
						<?php } ?>
					</li>
					
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>