<?PHP
include "D:/wamp64/www/projet/core/produitsP.php";
 $Produits1C=new ProduitP();
 $listeProduit=$Produits1C->afficherProduits();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Id</td>
<td>Categorie</td>
<td>Prix</td>
<td>Quantite</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeProduit as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['categorie']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><?PHP echo $row['quantite']; ?></td>
	 <td><form method="POST" action="supprimerProduit.php"> 
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	 <td><form method="POST" action="modifierProduit.php"> 
	<input type="submit" name="modifier" value="modifier">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<!--<td><a href="modifierEmploye.php?id=<?PHP //echo $row['id']; ?>">
	Modifier</a></td>-->
	</tr>
	<?PHP
}
?>
</table>


