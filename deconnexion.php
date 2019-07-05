<?php
try{
	$bdd = new PDO('mysql:host=mysql-super.alwaysdata.net;dbname=super_nationsounds;charset=utf8', 'super_charline', 'Char-line!');
	 }
	 catch (Exception $e){
		 die('Erreur : ' . $e->getMessage());
         }

session_start();
session_unset();
session_destroy();
header('Location: connexion.php');
exit();
?>
