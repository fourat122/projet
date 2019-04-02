<?PHP
include_once "../config.php";

class ProduitP {

	function ajouterProduit($Produit ){
		$sql="insert into Produits (categorie,prix,quantite) values ( :categorie,:prix,:quantite)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$Produit->getId();
        $categorie=$Produit->getCategorie();
        $prix=$Produit->getPrix();
        $quantite=$Produit->getQuantite();

		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherProduits(){
		
		$sql="SElECT * From Produits";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
public function modifier($id)
  {
      $sql = 'UPDATE Produits SET categorie="'.$id->getCategorie().'",prix="'.$id->getPrix().'",quantite="'.$id->getQuantite().'" WHERE id="'.$id->getId().'"';
     $db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}











	function supprimerProduit($id){
		$sql="DELETE FROM produits where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	





















	function recupererProduit($id){
		$sql="SELECT * from produits where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }
        }
	
	


            ?>