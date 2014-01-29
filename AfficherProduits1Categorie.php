<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title> Afficher tous les produits

        </title>
        <link rel="stylesheet" href="jouets.css" type="text/css">
    </head>
    <body>

        <p><h1>Liste des produits de la catégorie choisie</h1><br/></p>
        <?php
        include ('connexion.php');
// Récupération du champ TIdcat et vérification s'il a bien été saisi
        if (empty($_GET["TIdCat"])) { //Message d'erreur si la saisie n'a pas eu lieu 
            echo "PB : le code catégorie n' a pas été renseigné précédemment";
        } else {
            //Mémorisation du code  - ici dans la variable $ChoixIdCat  - si la saisie a bien eu lieu 
            $ChoixIdCat = $_GET["TIdCat"];
            echo "<h2>vous avez choisi la catégorie $ChoixIdCat</h2>";

            //Il faudrait vérifier son existence dans la table catégorie et afficher son libellé
            //*************   à vous de compléter ********************
            //Récupération des produits correspondants à $ChoixIdCat

            $listeProduits = $connexion->query("SELECT * FROM produit where id_cat = $ChoixIdCat");
            echo'<table><tr><th classe="id">identifiant</th><th classe="des">Libelle</th></tr>';
            foreach ($listeProduits as $produit)
            
             {
                echo '<tr>';
                echo '<td>' . $produit["id_prod"] . '</td>';
                echo '<td>' . $produit["lib_prod"] . '</td>';
                $chemin = "ImagesProduits/" . $produit["photo_prod"];
                echo "<td><img src= $chemin width='100' height='75'></td>";
                echo '</tr>';
            }
            echo '</table>';
        }
        ?>
        <p><h3> <a  href="index.php">Retour Page d'accueil</a></h3></p>
    </body>
</html>