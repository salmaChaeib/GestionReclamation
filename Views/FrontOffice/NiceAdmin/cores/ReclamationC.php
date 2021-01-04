<?PHP
include "../config.php";
class ReclamationC {

    function ajouterReclamation($Reclamation){
		$sql="insert into reclamation (id,nom,email,subject,message)values(:id,:nom,:email,:subject,:message)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$Reclamation->getId();
        $nom=$Reclamation->getNom();
        $email=$Reclamation->getEmail();
        $subject=$Reclamation->getSubject();
        $message=$Reclamation->getMessage();
        
        $req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':email',$email);
		$req->bindValue(':subject',$subject);
		$req->bindValue(':message',$message);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	 	function recupererFormateur(){
		$req="SELECT * FROM formateur ";
		$db = config::getConnexion();
		$clt=$db->query($req);
		return $clt->fetchAll();
	}
	function recupererFormation(){
		
		$req="SELECT * FROM formation ";
		$db = config::getConnexion();
		$clt=$db->query($req);
		return $clt->fetchAll();
	}
	function recupererReclamation(){
		
		$req="SELECT * FROM reclamation ";
		$db = config::getConnexion();
		$clt=$db->query($req);
		return $clt->fetchAll();
	}
	function supprimerReclamation($Id)
	{
		$sql="DELETE FROM reclamation where Id= :Id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id',$Id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function validerReclamation($Id)
	{
		$sql="UPDATE reclamation SET etat=:Val where Id= :Id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id',$Id);
		$req->bindValue(':Val',1);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}