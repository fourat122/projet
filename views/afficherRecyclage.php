<?PHP
include "D:/wamp64/www/cc/core/recyclageP.php";
 $Recyclage1C=new RecyclageP();
 $listeProduit=$Recyclage1C->afficherRecyclage();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Id</td>
<td>Type</td>
<td>Description</td>
<td>Poids</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeProduit as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['type']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
	<td><?PHP echo $row['poids']; ?></td>
	 <td><form method="POST" action="supprimerRecycle.php"> 
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