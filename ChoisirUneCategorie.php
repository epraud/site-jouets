<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <?php
    include ('connexion.php');
    ?>
    <p>Choix d'une catégorie<BR/>
    <?php
            $listeCategories = $connexion->query("SELECT * FROM categorie order by 1");
            echo'<table><tr><th classe="id">identifiant</th><th classe="des">Libelle</th></tr>';
            foreach ($listeCategories as $categorie) {
                echo '<tr>';
                echo '<td>' . $categorie["id_cat"] . '</td>';
                echo '<td>' . $categorie["lib_cat"] . '</td>';
                echo '</tr>';
        }
        echo '</table>';
    ?>

        <!-- Saisie du code catégorie souhaité et envoie à la page AfficheProduits1Categ -->
        <!-- Mise en place d’un formulaire avec une zone de saisie pour le code  -->

    <form- action = 'AfficheProduits1Categorie.php' method = 'GET'>
Entrer le code catégorie </p>  <input type ="text" name = "TIdCat" size = "2"> 
    <input type ='submit' value = 'Voir les produits associés'>

    </form>

    <p><h3> <a  href="index.php">Retour Page d'accueil</a></h3></p>


    </html>
