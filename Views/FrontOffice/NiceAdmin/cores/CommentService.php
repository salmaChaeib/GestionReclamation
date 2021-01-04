<?PHP
include "../config.php" ;

class CommentService
{
	function AjouterComment($comment)
	{

		$sql = "insert into Comment (description,idProduct) values(:description,:idProduct)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;


			$req->BindValue(':description',$comment->getdescription()) ;
      $req->BindValue(':idProduct',$comment->getIdProduct()) ;
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

	function supprimerComment($id)
	{
		$sql="DELETE FROM Comment where id= :id";
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



}
?>
