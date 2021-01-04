<?PHP
include "../config.php" ;

class ProductService
{
	function AjouterProduct($product)
	{
		$sql = "insert into Product (nom,description,imageUrl) values(:nom,:description,:imageUrl)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;

			$req->BindValue(':nom',$product->getNom()) ;
			$req->BindValue(':description',$product->getdescription()) ;
      $req->BindValue(':imageUrl',$product->getImageUrl()) ;
			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}
  function AfficherProduct()
  {
    $sql="SElECT * From Product";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }
  function modifierProduct($product,$id)
{
		$sql="UPDATE Product SET nom=:nom ,description=:description ,imageUrl=:imageUrl WHERE id=:id";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
        $nom=$product->getnom();
        $description=$product->getdescription();
        $imageUrl=$product->getImageUrl();

		$datas = array(':id'=>$id,':nom'=>$nom ,':description'=>$description ,':imageUrl'=>$imageUrl);
    $req->bindValue(':id',$id);
  	$req->bindValue(':nom',$nom);
		$req->bindValue(':description',$description);
		$req->bindValue(':imageUrl',$imageUrl);



            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

	}

	function supprimerProduct($id)
	{
		$sql="DELETE FROM Product where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function recupererProduct($codeF){
		$sql="SELECT * from Product where id=$codeF";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
  function recupererComment($codeF){
    $sql="SELECT * from Comment where idProduct=$codeF";
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
    $sql="select * from Product ORDER BY nom DESC";
    $db = config::getConnexion();
    return ($db->query($sql));
    
     }

   function afficherASC()
   {
    $sql="select * from Product ORDER BY nom ASC";
    $db = config::getConnexion();
    return ($db->query($sql));
    }
}
?>
