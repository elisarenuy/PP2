<?php
//--------- BDD
$mysqli = new mysqli("localhost", "root", "", "chope_ta_photo");
if ($mysqli->connect_error) die('Un problème est survenu lors de la tentative de connexion à la BDD : ' . $mysqli->connect_error);
// $mysqli->set_charset("utf8");
 
//--------- SESSION
session_start();
 
//--------- CHEMIN
define("RACINE_SITE","/null/");
 
//--------- VARIABLES
$contenu = '';
 
//--------- AUTRES INCLUSIONS
require_once("fonction.null.php");