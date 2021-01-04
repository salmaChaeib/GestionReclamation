<?PHP
include "../config.php" ;
class specialiteC
{
	function AjouterSpecialite($specialite)
	{
		$sql = "insert into specialite (codeS,image,nomS,description) values(:codeS,:image,:nomS,:description)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;

			$req->BindValue(':codeS',$specialite->getcodeS()) ;
			$req->BindValue(':image',$specialite->getimage()) ;
			$req->BindValue(':nomS',$specialite->getnomS()) ;
			$req->BindValue(':description',$specialite->getdescription()) ;
			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}
	
	function AfficherSpecialites($specialite)
	{
		echo "codeS: ".$specialite->getcodeS()."<br>";
		echo "image: ".$specialite->getimage()."<br>";
		echo "nomS: ".$specialite->getnomS()."<br>";
		echo "description: ".$specialite->getdescription()."<br>";
	}
	
	function AfficherSpecialite()
	{
		$sql="SElECT * From specialite";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function modifierSpecialite($specialite,$codeS)
{
		$sql="UPDATE specialite SET codeS=:codeSS,image=:image, nomS=:nomS,description=:description WHERE codeS=:codeS";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$codeSS=$specialite->getcodeS();
		$image=$specialite->getimage();
        $nomS=$specialite->getnomS();
        $description=$specialite->getdescription();

		$datas = array(':codeSS'=>$codeSS, ':codeS'=>$codeS, ':image'=>$image, ':nomS'=>$nomS,':description'=>$description);

		$req->bindValue(':codeSS',$codeSS);
		$req->bindValue(':codeS',$codeS);
		$req->bindValue(':image',$image);
		$req->bindValue(':nomS',$nomS);
		$req->bindValue(':description',$description);
		
		
            $s=$req->execute();
			  // header('Location: index.php');

        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	
	function supprimerSpecialite($codeS)
	{
		$sql="DELETE FROM specialite where codeS= :codeS";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':codeS',$codeS);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function recupererSpecialite($codeS){
		$sql="SELECT * from specialite where codeS=$codeS";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeSpecialite($nomS){
		$sql="SELECT * from specialite where nomS=$nomS";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function afficherDESC()
     {
    $sql="select * from specialite ORDER BY codeS DESC";
    $db = config::getConnexion();
    return ($db->query($sql));
    
     }

   function afficherASC()
   {
    $sql="select * from specialite ORDER BY codeS ASC";
    $db = config::getConnexion();
    return ($db->query($sql));
    }

}
?>