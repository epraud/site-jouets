<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title> Afficher tous les produits
            
        </title>
        <link rel="stylesheet" href="jouets.css" type="text/css">
    </head>
    <body>
          
    <p><h1>Liste des clients</font></h1><br/>
    <?php
    include('connexion.php');
    $listeClients = $connexion->query("SELECT * FROM client" ); 

    echo '<p><table border=2 width="75%">';
    echo "<tr><th>ID</th><th>nom</th><th>prenom</th><th>cp</th><th>actions</th></tr>";

// pour chaque enregistrement
    $nbclients=$listeClients->rowcount();
    for ($i = 0 ; $i < $nbclients; $i++)
    {
        $row = $listeClients -> fetch();
	$IdCli = $row['id_cli']; 
   	$nom =  $row['nom_cli'];

        $prenom = $row['prenom_cli'];
	$cp = $row['codepos_cli'];
     	echo "<tr><td>$IdCli</td><td>$nom</td><td>$prenom</td><td>$cp</td>
        <td><a href='AfficheUnClient.php?choixCli=$IdCli'>Voir le détail</a></td>
        <td><a href='SupprimeUnClient.php?choixCli=$IdCli'>Supprimer</a></td></tr>";
    }
 		
echo '</table>';    ?>

</body>
    
<p><h3> <a  href="Index.php">Retour Page d'accueil</a></h3></p>
</html>
