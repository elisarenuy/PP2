<?php require_once("null/null.php");
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
if($_POST)
{
    $verif_caractere = preg_match('#^[a-zA-Z0-9._-]+$#', $_POST['pseudo']); 
    if(!$verif_caractere && (strlen($_POST['pseudo']) < 1 || strlen($_POST['pseudo']) > 20) ) // 
    {
        $contenu .= "<div class='erreur'>Le pseudo doit contenir entre 1 et 20 caractères. <br> Caractère accepté : Lettre de A à Z et chiffre de 0 à 9</div>";
    }
    else
    {
        $uers = executeRequete("SELECT * FROM users WHERE pseudo='$_POST[pseudo]'");
        if($uers->num_rows > 0)
        {
            $contenu .= "<div class='erreur'>Pseudo indisponible. Veuillez en choisir un autre svp.</div>";
        }
        else
        {
            // $_POST['mdp'] = md5($_POST['mdp']);
            foreach($_POST as $indice => $valeur)
            {
                $_POST[$indice] = htmlEntities(addSlashes($valeur));
            }
            executeRequete("INSERT INTO users (pseudo, mdp, nom, prenom, email, civilite, ville, code_postal, adresse) VALUES ('$_POST[pseudo]', '$_POST[mdp]', '$_POST[nom]', '$_POST[prenom]', '$_POST[email]', '$_POST[civilite]', '$_POST[ville]', '$_POST[code_postal]', '$_POST[adresse]')");
            $contenu .= "<div class='validation'>Vous êtes inscrit à notre site web. Vous pouvez donc vous connecter</div>";
        }
    }
}
//--------------------------------- AFFICHAGE HTML ---------------------------------//
?>
 <link rel="stylesheet" href="./CSS/inscription.css">
<?php require_once("null/menu.null.php"); ?>
<?php echo $contenu; ?>
<h1>FORMULAIRE D'INSCRIPTION</h1>
<form method="post" action=""> 

    	<div class="leftcontact">
			<div class="form-group">
				 <label for="pseudo">Pseudo</label><br>
				<input type="text" id="pseudo" name="pseudo" maxlength="20" placeholder="votre pseudo" pattern="[a-zA-Z0-9-_.]{1,20}" title="caractères acceptés : a-zA-Z0-9-_." required="required"><br><br>
			</div> 

  			<div class="form-group">
			   <label for="prenom">Prénom</label><br>
	    		<input type="text" id="prenom" name="prenom" placeholder="votre prénom"><br><br>
			</div>

			<div class="form-group">
			   	<label for="nom">Nom</label><br>
  				<input type="text" id="nom" name="nom" placeholder="votre nom"><br><br>
			</div>	

			<div class="form-group">
				 <label for="email">Email</label><br>
   				 <input type="email" id="email" name="email" placeholder="exemple@gmail.com"><br><br>
			</div>	
		</div>

		<div class="rightcontact">	

			<div class="form-group">
			   <label for="mdp">Mot de passe</label><br>
    			<input type="password" id="mdp" name="mdp" required="required"><br><br>
			</div>

			<div class="form-group">
			    <label for="civilite">Civilité</label><br>
			    <input name="civilite" value="m" checked="" type="radio">Homme
			    <input name="civilite" value="f" type="radio">Femme<br><br>
			</div>

			<div class="form-group">
				<label for="ville">Ville</label><br>
	    		<input type="text" id="ville" name="ville" placeholder="votre ville" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés : a-zA-Z0-9-_."><br><br>
			</div>

			<div class="form-group">
				 <label for="cp">Code Postal</label><br>
    			<input type="text" id="code_postal" name="code_postal" placeholder="code postal" pattern="[0-9]{5}" title="5 chiffres requis : 0-9"><br><br>
			</div>

			<div class="form-group">
			 	<label for="adresse">Adresse</label><br>
    			<textarea id="adresse" name="adresse" placeholder="votre dresse" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés :  a-zA-Z0-9-_."></textarea><br><br>
			</div>
        </div>
	</div>
          
    <input type="submit" name="inscription" value="S'inscrire">
</form>