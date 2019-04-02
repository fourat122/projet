<?PHP
include "D:/wamp64/www/projet/core/produitsP.php";
$ProduitsC=new ProduitP();
if (isset($_POST["id"])){
	$ProduitsC->supprimerProduit($_POST["id"]);
	header('Location: afficherProduits.php');
}

?>