<?PHP
include "commandeC.php";
class lignecommandeC {

	function ajouterlignecommandes($lignecommande){
		$sql="insert into lignecommande (quantiteCommande,prixUnitaire,idCommande,id_produit) values(:quantiteCommande,:prixUnitaire,:idCommande,:id_produit)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idCommande=$lignecommande->getidCommande();
        $id_produit=$lignecommande->getid_produit();
        $prixUnitaire=$lignecommande->getprixUnitaire();
        $quantiteCommande=$lignecommande->getquantite();
        
		$req->bindValue(':idCommande',$idCommande);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':prixUnitaire',$prixUnitaire);
		$req->bindValue(':quantiteCommande',$quantiteCommande);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur (ajout): '.$e->getMessage();
        }
		
	}

	function supprimercommandes($idCommande)
	{
		$sql=" DELETE FROM lignecommande where idCommande= :idCommande";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idCommande',$idCommande);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
	function affichecommande()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From lignecommande order by idCommande ASC";
		$db = config::getConnexion();
		try
		{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function recherchercommandes($search_key)
	{   
		$sql="SELECT * FROM lignecommande where idCommande like '%$search_key%' or id_produit like '%$search_key%' or prixUnitaire like '%$search_key%'";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		try{
		$req->execute();
		return $req;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	

}

?>