<html>
    <form>
    <?php
    include ('connexion.php');
    ?>
    <?php
    $wLibel = $_POST["TLibel"];
    $wImage = $_POST["TImage"];

    $connexion->exec("insert into categorie(lib_cat,photo_cat) values( '$wLibel', '$wImage')");

    $LienImage = "ImagesCategorie/".$wImage;

    echo "<table border=2 width=75%>";
    echo "<tbody>";
    echo"<tr><td>Libellé</td><td>$wLibel</td></tr>";
    echo"<tr><td>Lien image</td><td>$LienImage</td></tr>";
    echo"<tr><td>Images</td><td><IMG SRC=$LienImage width=100 height=75 /></td></tr>";
    echo"</tbody>";
    echo"</table>";
    ?>
    </form>
    <p><h3> <a  href="Index.php">Retour Page d'accueil</a></h3></p>
</html>
