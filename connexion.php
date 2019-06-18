<?php require_once("null/null.php");
//--------------------------------- TRAITEMENTS PHP ---------------------------------//

if(isset($_GET['action']) && $_GET['action'] == "deconnexion")
{
    session_destroy();
}
if(internauteEstConnecte())
{
    header("location:profil.php");
}if($_POST)
{
	
    // $contenu .=  "pseudo : " . $_POST['pseudo'] . "<br>mdp : " .  $_POST['mdp'] . "";
    $resultat = executeRequete("SELECT * FROM users WHERE pseudo='$_POST[pseudo]'");
    if($resultat->num_rows != 0)
    {
        // $contenu .=  '<div style="background:green">pseudo connu!</div>';
        $users = $resultat->fetch_assoc();
        if($users['mdp'] == $_POST['mdp'])
        {
            //$contenu .= '<div class="validation">mdp connu!</div>';
            foreach($users as $indice => $element)
            {
                if($indice != 'mdp')
                {
                    $_SESSION['users'][$indice] = $element;
                }
            }
            header("location:profil.php");
        }
        else
        {
            $contenu .= '<div class="erreur">Erreur de MDP</div>';
        }       
    }
    else
    {
        $contenu .= '<div class="erreur">Erreur de pseudo</div>';
    }
}
//--------------------------------- AFFICHAGE HTML ---------------------------------//
?>
 <link rel="stylesheet" href="./CSS/connection.css">
<?php require_once("null/menu.null.php"); ?>
<?php echo $contenu; ?>

 <h1> CONNEXION</h1>
<form method="post" action=""> 
    <label for="pseudo">Pseudo</label><br>
    <input type="text" id="pseudo" name="pseudo"><br> <br>
         
    <label for="mdp">Mot de passe</label><br>
    <input type="password" id="mdp" name="mdp"><br><br>
 
     <input type="submit" value="Se connecter">
</form>
