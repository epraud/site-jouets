<html>
    <p><h1>Information sur le produit enregistré</h1></p>
<form>
    <?php
    include ('connexion.php');
    ?>

    <?php
    $wLibel = $_POST["TLibel"];
    $wPrix = $_POST["TPrix"];
    $wImage = $_POST["TImage"];
    $wCat = $_POST["Id_cat"];

    $connexion->exec("insert into produit(lib_prod,prix_ttc_prod,photo_prod,id_cat) values( '$wLibel','$wPrix','$wImage','$wCat')");

    $LienImage = "ImagesProduits/" . $wImage;


    echo"<table>";
    echo"<tbody>";
    echo"<tr><td>Libellé</td><td>$wLibel</td></tr>";
    echo"<tr><td>Prix TTC</td><td>$wPrix</td></tr>";
    echo"<tr><td>Image</td><td>$wImage</td></tr>";
    echo"<tr><td>Id catégorie</td><td>$wCat</td></tr>";
    echo"</tbody>";
    echo"</table> ";
    ?>
<form/>                                                                                    >Autre création</a></p><br/>
<p> <a  href="Index.php">Retour au menu</a></p><br/>
</body>
</html>
