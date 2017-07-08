<?php
/*
** formulaire de deconnexion  
*/
if(!isset($_SESSION))
	{
	session_start(); 
	}
//mise a jour
session_destroy();
// Suppression des cookies de connexion automatique
setcookie('login', '');
setcookie('pass_hache', '');
require'../views/connexion.php';
?>
