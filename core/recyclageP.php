<?PHP
include_once "../config.php";

class RecyclageP {

	function ajouterRecyclage($recycle ){
		$sql="insert into recyclage (type,description,poids) values ( :type,:description,:poids)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$recycle->getId();
        $type=$recycle->getType();
        $description=$recycle->getDescription();
        $poids=$recycle->getPoids();

		$req->bindValue(':type',$type);
		$req->bindValue(':description',$description);
		$req->bindValue(':poids',$poids);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherRecyclage(){
		
		$sql="SElECT * From recyclage";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	










	function supprimerRecycle($id){
		$sql="DELETE FROM recyclage where id= :id";
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

	





















	function recupererrecycle($id){
		$sql="SELECT * from recyclage where id=$id";
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