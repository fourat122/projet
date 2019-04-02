<?PHP


include "D:/wamp64/www/cc/entities/recyclage.php";
include "D:/wamp64/www/cc/core/recyclageP.php";

if (isset($_POST['type']) and isset($_POST['description'])  and isset($_POST['poids'])){
$recyclage1=new recyclage($_POST['type'],$_POST['description'],$_POST['poids']);
//Partie2

var_dump($recyclage1);
//}

//Partie3
$recyclage1P=new RecyclageP();
$recyclage1P->ajouterRecyclage($recyclage1);






header('Location: afficherRecyclage.php');
	
}else{
	echo "vérifier les champs";
}




















