<?php
require_once 'messages.php';

//define( 'BASE_PATH', 'https://duos.com/_home/');//Ruta base donde se encuentra
//define( 'DB_HOST', 'localhost' );//Servidor de la base de datos
//define( 'DB_USERNAME', 'u804060989_duos');//Usuario de la base de datos
//define( 'DB_PASSWORD', 'king1914KING1914Asterisco*');//Contraseña de la base de datos
//define( 'DB_NAME', 'u804060989_duos');//Nombre de la base de datos

define( 'DB_HOST', 'localhost' );//Servidor de la base de datos
define( 'DB_USERNAME', 'root');//Usuario de la base de datos
define( 'DB_PASSWORD', '');//Contraseña de la base de datos
define( 'DB_NAME', 'login');//Nombre de la base de datos

function my_autoloader($class) {
    $parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}

spl_autoload_register('my_autoloader');