<?php
$root = 'D:/xampp/htdocs/solvato-code/';
$loader = require $root.'/vendor/autoload.php';
$loader->add('', $root.'/classes/');
$pixie = new \App\Pixie();
$pixie->bootstrap($root)->handle_http_request();
?>
