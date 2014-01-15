<HTML>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?PHP
            include('connexion.php');
    ?>
   <p>Choix d'une catégorie<BR/>
   <?php
         $listeCategorie=$connexion->query("SELECT * FROM categorie order by 1");
         echo'<table><th classe="id">identifiant</th><th classe="des">libelle</th></tr>';
         foreach($listeCategorie as $categorie)
         {
             echo '<tr>';
             echo '<td>'.$categorie["id_cat"].'</td>';
             echo '<td>'.$cat["lib_cat"].'</td>';
             echo '</tr>'; 
         }
         echo '</table>';
    ?>
   <FORM action = 'AfficheProduits1Categorie.php' method='get'>
        <p> <input type="text" NAME="TldCat" SIZE="2"></p>
        <input type='submit' value='Voir les produis associés'>
   </FORM>
   <p><H3> <A href="index.php"> </A> </H3></p>
</HTML>