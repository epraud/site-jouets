<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <!--pour gérer les problèmes d’accents-->
        <link href="jouets.css" rel="stylesheet" media="all" type="text/css"/>
    </head>

    <body>
        <p>Choix d'une catégorie<br/>    
            <?php
            include ('connexion.php');

// Affichage de l'ensemble des catégories avec le lien
            $listeCategories = $connexion->query("SELECT * FROM categorie order by 1");

            echo "<p><h2>Catégories actuelles</font></h2>
<table  border = 1 width = 700>";
            while ($categorie = $listeCategories->fetch()) {
                $IdCat = $categorie ['id_cat'];
                $LibCat = $categorie ['lib_cat'];
                echo "<tr><td>$IdCat</td>
	<td>$LibCat</td>
	<td><a href='AfficherProduits1CatV2.php?choix=$IdCat'>Voir les produits associés</a></td></tr>";
            }
            echo"</table>";
            ?>

        <p><h3> <a  href="Index.php">Retour Page d'accueil</a></h3> </p>
</body>
</html>