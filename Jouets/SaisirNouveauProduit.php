<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <p><h1>Création d'un nouveau produit </h1></p><br/>
<?php
include ('connexion.php');
//préparation du formulaire de saisie des champs du nouveau produit avec la mise en place de la liste des catégories et l’alerte pour l’image

?>
<form  action = "TraitementNouveauProduit.php" method = "POST">
     <table>
         <p /><table border=2 width="75%">
	 <tbody>
       	 <tr><td>Libellé</td> <td> <input name=TLibel size=20 > </td></tr>
         <tr><td>Prix TTC</td> <td> <input name=TPrix size=30> </td></tr>
         <tr><td>Caractéristique</td> <td> <input name=Car_prod size=30> </td></tr>
       	 <tr><td>Intitulé image</td> <td> <input name=TImage size=30> </td></tr>
         <tr><td>Catégorie</td><td><select name="Id_cat" >
         <option value=1> Véhicules</option>
         <option value=2> Bascules,Porteurs</option>
         <option value=3> Trains</option>
         <option value=4> Instruments de musique</option>
         <option value=5> Mobiles</option>
         <option value=6> Jeux traditionnels</option>
         <option value=7> Marionnettes</option>
         </select></td></tr>


         

     </tbody>
	</table>
	<h3> Pensez à créer l'image dans le répertoire ImagesProduits avant de créer ce produit</h3>
	<br/>
	<input type="submit" value="Valider">
</form>
<p> <a  href="Index.php">Retour au menu</a></p><br/>
</html>
