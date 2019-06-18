
<?php
require_once("null/null.php");
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
if(!internauteEstConnecte()) header("location:connexion.php");
$contenu .= '<h2 class="centre">Bonjour <strong>' . $_SESSION['users']['pseudo'] . '</strong></h2>';
$contenu .= '<div class="cadre"><h2>vos informations </h2>';
$contenu .= '<p> votre email est : ' . $_SESSION['users']['email'] . '<br>';
$contenu .= 'votre ville est : ' . $_SESSION['users']['ville'] . '<br>';
$contenu .= 'votre cp est : ' . $_SESSION['users']['code_postal'] . '<br>';
$contenu .= 'votre adresse est : ' . $_SESSION['users']['adresse'] . '</p></div><br><br>';
//--------------------------------- AFFICHAGE HTML ---------------------------------//
?>
<?php require_once("null/menu.null.php"); ?>
<link rel="stylesheet" href=" css/profil.css">
<?php echo $contenu; ?>
