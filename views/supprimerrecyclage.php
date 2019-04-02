<?PHP
include "D:/wamp64/www/cc/core/recyclageP.php";
$ProduitsC=new RecyclageP();
if (isset($_POST["id"])){
	$ProduitsC->supprimerRecycle($_POST["id"]);
	header('Location: afficherRecyclage.php');
}

?>