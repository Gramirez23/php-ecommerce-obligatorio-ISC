<?php
	ini_set('display_errors',1);
	error_reporting(-1);
    define('DB_HOST', 'db');
    define('DB_USER', 'user');
    define('DB_PASSWORD', getenv('DB_PASSWORD')); # Se obtiene de un secret
    define('DB_DATABASE', 'obligatorio');
?>
