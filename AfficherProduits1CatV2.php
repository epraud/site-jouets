<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <!--pour gérer les problèmes d’accents-->
        <link href="jouets.css" rel="stylesheet" media="all" type="text/css"/>
    </head>

    <body>

        <p><h1>Liste des produits de la catégorie choisie</h1><br/>
        <!-- Cette page fait suite à la page ChoisirUneCategorieV2-->
        <!-- elle récupère en méthode Get le champ IdCat de l'URL choisie-->
        <!-- elle affiche tous les produits correspondant à ce numéro catégorie -->
        <?php
        include ('connexion.php');
//Mémorisation du code  - ici dans le paramètre  choix 
        $ChoixCat = $_GET["choix"];

// Il serait judicieux d'afficher également le libellé catégorie correspondant 
        $listeCategorie = $connexion->query("SELECT * FROM categorie where id_cat = $ChoixCat ");
        $categorie = $listeCategorie->fetch();
        $LibCat = $categorie["lib_cat"];
        echo "<h2>vous avez choisi la catégorie $LibCat</h2>";
//Récupération des produits correspondant  à $ChoixCat
        $listeProduits = $connexion->query("SELECT * FROM produit where id_cat = $ChoixCat ");

//Et affichage dans un tableau du résultat
        echo'<table><tr><th classe="id">identifiant</th><th classe="des">Libelle</th></tr>';
        foreach ($listeProduits as $produit) {
            echo '<tr>';
            echo '<td>' . $produit["id_prod"] . '</td>';
            echo '<td>' . $produit["lib_prod"] . '</td>';
            $chemin = "images/" . $produit["photo_prod"];
            echo "<td><img src= $chemin width='100' height='75'></td>";
            echo '</tr>';
        }
        echo '</table>';
        ?>
        <p><h3> <a  href="Index.php">Retour Page d'accueil</a></h3></p>
</html>