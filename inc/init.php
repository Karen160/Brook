<?php
// connexion à la base de données via la classe PDO
$host = 'mysql:host=localhost;dbname=brook';
$login = 'root';
$password = '';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);
$pdo = new PDO($host, $login, $password, $options);

// ouverture d'une $_SESSION  pour la connexion utilisateur
session_start();

// le chemin absolu
define('URL', 'http://localhost/site_brook/');
?>