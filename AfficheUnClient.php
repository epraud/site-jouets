<html>
    <!-- Cette page fait suite à la page ChoisirUneProduitSurID-->
    <!-- elle récupère en méthode Get le champ TIdProd du formulaire de saisie-->
    <!-- elle affiche le produit correspondant à ce numéro identifiant -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <!--pour gérer les problèmes d’accents-->
        <link href="jouets.css" rel="stylesheet" media="all" type="text/css"/>
    </head>

    <body>
        <p><h1>Affiche un client choisi</h1><br/>

        <?php
        include ('connexion.php');
//Mémorisation du code  - ici dans la variable $ChoixIdCli  
        $ChoixIdCli = $_GET["choixCli"];
        echo "<h2>vous avez choisi le pclient $ChoixIdCli</h2>";
        $listeClient = $connexion->query("SELECT * FROM client where id_cli = $ChoixIdCli");
        $client = $listeClient->fetch();
        echo 'Identifiant: ' . $client["id_cli"] . '<br/>';
        echo 'Nom ' . $client["nom_cli"] . '<br/>';
        echo 'Prénom ' . $client["prenom_cli"] . '<br/>';
        echo 'Rue ' . $client["rue_cli"] . '<br/>';
        echo 'code postal ' . $client["codepos_cli"] . '    ville: ' . $client["ville_cli"] . '<br/>';
        echo 'Téléphone ' . $client["tel_cli"] . '<br/>';
        echo 'Mail ' . $client["mail_cli"] . '<br/>';
        // echo 'Date dernière commande '.$client["datedercde_cli"].'<br/>';
        echo 'Mot de passe ******** <br/>';
        ?>
        <p><h3> <a  href="AfficheTousClients.php">Retour à la visualisation de tous les clients</a></h3></p>
    <p><h3> <a  href="Index.php">Retour Page d'accueil</a></h3></p>
</body>
</html>

