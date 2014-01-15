<HTML>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <?PHP
 include ('connexion.php');
?>
<HEAD>
	<link href="jouets.css" rel="stylesheet" media="all" type="text/css">
<BODY>
<?php
include ("connexion.php");
$listecategorie = $connexion->query("SELECT * FROM categorie" ); 
echo'<table><tr><th classe="id">identifiant</th><th classe="des">designation</th><th classe="photo">photo</th></tr>';

foreach ($listecategorie as $categorie)
{
    echo '<tr>';
    echo '<td>'.$categorie["id_cat"].'</td>';
    echo '<td>'.$categorie["lib_cat"].'</td>';
    $chemin = "ImagesCategorie/".$categorie["photo_cat"];
    echo "<td><img src= $chemin width='100' height='75'></td>";
    echo '</tr>'; 
}
  echo '</table>';
?>
</BODY>
</HEAD>
</HTML>
