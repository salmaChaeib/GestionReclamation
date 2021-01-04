<?PHP
include "../config.php" ;
class formationC
{
	function AjouterFormation($formation)
	{
		$sql = "insert into formation (codeF,nomS,nomF,chef,prix,description,dateD,dateF,imagef) values(:codeF,:nomS,:nomF,:chef,:prix,:description,:dateD,:dateF,:imagef)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;
			$req->BindValue(':codeF',$formation->getcodeF()) ;
			$req->BindValue(':nomS',$formation->getnomS()) ;
			$req->BindValue(':nomF',$formation->getnomF()) ;
			$req->BindValue(':chef',$formation->getchef()) ;
			$req->BindValue(':prix',$formation->getprix()) ;
			$req->BindValue(':description',$formation->getdescription()) ;
			$req->BindValue(':dateD',$formation->getdateD()) ;
			$req->BindValue(':dateF',$formation->getdateF()) ;
			$req->BindValue(':imagef',$formation->getimagef()) ;
			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}
	
	function AfficherFormations($formation)
	{
		echo "codeF: ".$formation->getcodeF()."<br>";
		echo "nomS: ".$formation->getnomS()."<br>";
		echo "nomF: ".$formation->getnomF()."<br>";
		echo "chef: ".$formation->getchef()."<br>";
		echo "prix: ".$formation->getprix()."<br>";
		echo "description: ".$formation->getdescription()."<br>";
		echo "dateD: ".$formation->getdateD()."<br>";
		echo "dateF: ".$formation->getdateF()."<br>";
		echo "imagef: ".$formation->getimagef()."<br>";
	}
	
	function AfficherFormation()
	{
		$sql="SElECT * From formation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function modifierFormation($formation,$codeF)
{
		$sql="UPDATE formation SET codeF=:codeFF, nomS=:nomS ,nomF=:nomF ,chef=:chef,prix=:prix ,description=:description ,dateD=:dateD ,dateF=:dateF,imagef=:imagef WHERE codeF=:codeF";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$codeFF=$formation->getcodeF();
        $nomS=$formation->getnomS();
        $nomF=$formation->getnomF();
        $chef=$formation->getchef();
        $prix=$formation->getprix();
        $description=$formation->getdescription();
        $dateD=$formation->getdateD();
        $dateF=$formation->getdateF();
        $imagef=$formation->getimagef();

		$datas = array(':codeFF'=>$codeFF, ':codeF'=>$codeF, ':nomS'=>$nomS,':nomF'=>$nomF ,':chef'=>$chef,':prix'=>$prix ,':description'=>$description ,':dateD'=>$dateD ,':dateF'=>$dateF, ':imagef'=>$imagef);

		$req->bindValue(':codeFF',$codeFF);
		$req->bindValue(':codeF',$codeF);
		$req->bindValue(':nomS',$nomS);
		$req->bindValue(':nomF',$nomF);
		$req->bindValue(':chef',$chef);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':description',$description);
		$req->bindValue(':dateD',$dateD);
		$req->bindValue(':dateF',$dateF);
		$req->bindValue(':imagef',$imagef);

		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	
	function supprimerFormation($codeF)
	{
		$sql="DELETE FROM formation where codeF= :codeF";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':codeF',$codeF);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function recupererFormation($codeF){
		$sql="SELECT * from formation where codeF=$codeF";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeFormation($nomF){
		$sql="SELECT * from formation where nomF=$nomF";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function experience()
	{
		$sql="SELECT * FROM formation ORDER BY prix DESC LIMIT 5";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function soon()
	{
		$sql="SELECT * FROM formation ORDER BY dateD ASC  LIMIT 3";
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