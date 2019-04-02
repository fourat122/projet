<?PHP


include "D:/wamp64/www/projet/entities/produits.php";
include "D:/wamp64/www/projet/core/produitsP.php";

if (isset($_POST['categorie']) and isset($_POST['prix'])  and isset($_POST['quantite'])){
$produit1=new produits($_POST['categorie'],$_POST['prix'],$_POST['quantite']);
//Partie2

var_dump($produit1);
//}

//Partie3
$produit1P=new ProduitP();
$produit1P->ajouterProduit($produit1);






header('Location: index.html');
	
}else{
	echo "vérifier les champs";
}
























?>