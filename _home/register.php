<?php require_once 'config.php'; ?>
<?php 
	if(!empty($_POST)){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->registration( $_POST );
			if($data)$success = USER_REGISTRATION_SUCCESS;
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
	}
?>
    <?php require_once 'templates/header.php';?>
	<div class="container"><br><br><br>
		<?php require_once 'templates/ads.php';?>
		<div class="login-form">
			<?php require_once 'templates/message.php';?>
			
			
			<div class="form-header">
				<i class="fa fa-user"></i>
			</div>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-register" role="form" id="register-form">
				<div>
					<input name="name" id="name" type="text" class="form-control" placeholder="Nombres"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="email" id="email" type="email" class="form-control" placeholder="Correo electrónico" > 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="password" id="password" type="password" class="form-control" placeholder="Contraseña"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="confirm_password" id="confirm_password" type="password" class="form-control" placeholder="Confirmar Contraseña"> 
					<span class="help-block"></span>
				</div>
				<button class="btn btn-block bt-login" type="submit" id="submit_btn" data-loading-text="Registrando....">Registrar un administrador</button>
			</form>
			<div class="form-footer">
				<div class="row">
					<!--
					    <div class="col-xs-6 col-sm-6 col-md-6">
					    	<i class="fa fa-lock"></i>
					    	<a href="forget_password.php"> Olvidó su contraseña? </a>					    
					    </div>
					
					    <div class="col-xs-6 col-sm-6 col-md-6">
					    	<i class="fa fa-check"></i>
					    	<a href="index.php">  Iniciar sesión  </a>
					    </div>
	                -->
				</div>
			</div>
		</div>
	</div>
	<!-- /container -->
    <?php //require_once 'templates/footer.php';?>	
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/register.js"></script>