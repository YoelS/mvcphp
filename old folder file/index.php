<?php 

error_reporting(E_ALL); /* untuk menghenadle error jika ingin menghiden error ganti menjadi error_reporting(E_ERROR); */

/* Seting pemisah direktori/folder pada unix untuk konsistensi  */
define('ROOT', str_replace("\\", "/", realpath(dirname(__FILE__))) . '/');

	include_once("controller/Controller.php");

	$controller = new Controller();
	$controller->panggilclass();

?>