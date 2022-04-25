<?php
/*
 * TP1 PHP
 * 
 * Auteur : Zahira
 *
 */

 require_once 'vendor/autoload.php';

 $page = 'home';
 if(isset($_GET['p'])){
	$page = $_GET['p'];
 }
 //rendu du template
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => 'cache',
    'auto_reload' => true,
]);


if($page = 'home'){
	echo $twig->render('home.twig');
}
?>