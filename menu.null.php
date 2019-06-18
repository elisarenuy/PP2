<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>chope ta photo</title>
            <link rel="icon" type="image/png" href="logo.png" />
            <!--css-->
            <link rel="stylesheet" href=" css/Header.css">
			<link rel="stylesheet" href=" css/menu.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <!--Java-->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </head>  
                
        <body>
            <div class="icon"><img src="img/camera.png" alt=""/></div>
            <h1>CHOPE TA PHOTO</h1>
			<nav>
			<?php
			 if(internauteEstConnecteEtEstAdmin())
					{ // la page si on est admin
						echo '<a href="admin/gestion_membre.php">Gestion des membres</a>';
						echo '<a href="admin/gestion_commande.php">Gestion des commandes</a>';
						echo '<a href="admin/gestion_produit.php">Gestion de la boutique</a>';
					}
					if(internauteEstConnecte()) // membre et admin
					{
						echo '<a href="profil.php">Voir votre profil</a>';
						echo '<a href="boutique.php">Accès à la boutique</a>';
						echo '<a href="panier.php">Voir votre panier</a>';
						echo '<a href="connexion.php?action=deconnexion">Se déconnecter</a>';
					}
					else // si on est visiteur
					{
						echo '<a href="inscription.php">Inscription</a>';
						echo '<a href="connexion.php">Connexion</a>';
						echo '<a href="boutique.php">Accès à la boutique</a>';
						echo '<a href="panier.php">Voir votre panier</a>';
					}			
			?>
			</nav>
            <header>                      
                    <div class="banner"></div>
                    <div class="iron"></div>
            </header>
		</body>
</html>
