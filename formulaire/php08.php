<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Liste des employés</title>
    </head>
    <body>
        <?
        include ("Connexion.php");
        $cpt = 0;
        echo "<h1>Liste nominative des employés</h1>";
        echo '<p /><table border=2 width="75%">';
        echo "<tr><th>NOM</th><th>PRENOM</th></tr>";
        $listeEmployes = $connexion->query("SELECT * FROM employe");
        while ($employe = $listeEmployes->fetch()) {
            echo "<tr><td>" . $employe["nom"] . "</td><td>" . $employe["prenom"] . "</td></tr>";
            $cpt++;
        }
        echo "</table><p />";
        echo "Il y a " . $cpt . " employés.";

        $connexion = null; //ferme la connexion à la base de données
        ?>
    </body>
</html>  

