<?php
//initialisation des variables de connection bdd
$db_host="localhost";
$db_name="formulaire";
$db_user="root";
$db_password="";
// création de mon objet PDO
$pdo=new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8",$db_user,$db_password);
// option d'erreur PDO 
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);