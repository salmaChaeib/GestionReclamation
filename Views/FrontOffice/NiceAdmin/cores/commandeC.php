<?PHP
include "C:/wamp/www/testvalidation/views/NiceAdmin/config.php";
class CommandeC {
function affichercommande ($commande){
		echo "numero commande: ".$commande->getidCommande()."<br>";
		echo "id_client: ".$commande->getid_client()."<br>";
		echo "date: ".$commande->getdateCommande()."<br>";
		echo "prix_total: ".$commandes->getprix_total()."<br>";
		echo "quantity: ".$commandes->getquantity()."<br>";
		
	}
	function ajoutercommandes($commande){
		$sql="insert into commande (id_client,dateCommande,prix_total) values (:id_client,:dateCommande,:prix_total)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_client=$commande->getid_client();
        $dateCommande=$commande->getdateCommande();
        $prix_total=$commande->getprix_total();
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':dateCommande',$dateCommande);
		$req->bindValue(':prix_total',$prix_total);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur (ajout): '.$e->getMessage();
        }
		
	}
	
	function affichercommandes(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From commande order by idCommande ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function supprimercommandes($idCommande){
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

        $sql=" DELETE FROM commande where idCommande= :idCommande";
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





	function modifieretat($id,$etat)
   {  
		$sql = "UPDATE commande SET etat='$etat' WHERE idCommande=:idCommande ";
	
	$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idCommande',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	
 }
	 
 


	function modifiercommandes($commande,$idCommande){
		$sql="UPDATE commande SET idCommande=:idCommandee, id_client=:id_client,dateCommande=:dateCommande,prix_total=:prix_total,quantity=:quantity,etat=:etat WHERE idCommande=:idCommande";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$idCommandee=$commande->getidCommande();
        $id_client=$commande->getid_client();
        $dateCommande=$commande->getdateCommande();
        $prix_total=$commande->getprix_total();
        $quantity=$commande->getquantity();
        $etat=$commande->getetat() ;
		$datas = array(':idCommandee'=>$idCommandee,':idCommande'=>$idCommande, ':id_client'=>$id_client, ':dateCommande'=>$dateCommande,':prix_total'=>$prix_total,':quantity'=>$quantity,':etat'=>$etat);
		$req->bindValue(':idCommandee',$idCommandee);
		$req->bindValue(':idCommande',$idCommande);
		$req->bindValue(':dateCommande',$dateCommande);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':prix_total',$prix_total);
		$req->bindValue(':quantity',$quantity);
	$req->bindValue(':etat',$etat);
            $s=$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercommandes(){
		$sql="SELECT * FROM commande ORDER BY idCommande DESC LIMIT 1;";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recherchercommandes($search_key)
	{   
		$sql="SELECT * FROM commande where idCommande like '%$search_key%' or id_client like '%$search_key%' or dateCommande like '%$search_key%' or prix_total like '%$search_key%'";
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

function afficherDESC()
     {
    $sql="select * from commande ORDER BY idCommande DESC";
    $db = config::getConnexion();
    return ($db->query($sql));
    
     }

   function afficherASC()
   {
    $sql="select * from commande ORDER BY idCommande ASC";
    $db = config::getConnexion();
    return ($db->query($sql));
    }
	
}

?>