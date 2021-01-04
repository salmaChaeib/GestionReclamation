<?PHP
include ("../view/config.php");
class chefC
{

	public $conn;
	function __construct()
	{
		$c=new config();
		$this->conn=$c->getConnexion();
	}

	function ajouterchef($chef)
	{
		$sql = "INSERT INTO chef (nom_chef,prenom_chef,age_chef,domaine_chef,salaire_chef,image) values (:nom_chef, :prenom_chef, :age_chef, :domaine_chef, :salaire_chef, :image) ";
		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);

			$nom_chef = $chef->getNomChef();
			$prenom_chef = $chef->getPrenomChef();
			$age_chef = $chef->getAgeChef();
			$domaine_chef = $chef->getDomaineChef();
			$salaire_chef = $chef->getSalaireChef();
			$image = $chef->getImage();
			
			
			
			$req->bindValue(':nom_chef', $nom_chef);
			$req->bindValue(':prenom_chef', $prenom_chef);
			$req->bindValue(':age_chef', $age_chef);
			$req->bindValue(':domaine_chef', $domaine_chef);
			$req->bindValue(':salaire_chef', $salaire_chef);
			$req->bindValue(':image', $image);
			

			
			$req->execute();
		} catch (Exception $e) {
			echo 'erreur: ' . $e->getMessage();
		}
	}


function recherchechef($key,$conn)
	{
		$sql = "SELECT * FROM chef WHERE nom_chef LIKE '%$key%' OR prenom_chef LIKE '%$key%' OR domaine_chef LIKE '%$key%' OR id_chef LIKE '%$key%'";
		//$db = config::getConnexion();
		try {
			$liste = $conn->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function insertChef($clt,$conn){
		$req1="INSERT INTO chef(nom_chef,prenom_chef,age_chef,domaine_chef,salaire_chef,image) VALUES ('".$clt->getNomChef()."','".$clt->getPrenomChef()."','".$clt->getAgeChef()."','".$clt->getDomaineChef()."','".$clt->getSalaireChef()."','".$clt->getImage()."')";
		$conn->query($req1);
		
	}
	function affichechff($conn)
	   {
		$req="SELECT * FROM chef";
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	function affichechffsalaire($conn)
	   {
		$req="SELECT * FROM chef order by salaire_chef DESC LIMIT 3";
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	function getallid($conn)
	   {
		$req="SELECT id_chef FROM chef";
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	function getCountlike($id_chef,$conn)
	{
		$sql = "SELECT count(*) FROM likes WHERE id_chef=$id_chef";
		
		try {
			$count = $conn->query($sql);
			foreach ($count as $row) { 
				$num =  $row[0];
			}
			return $num;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function topchef($id_chef,$conn)
	{
		
		$sql="SELECT DISTINCT `chef`.`id_chef`,`chef`.`nom_chef`,`chef`.`prenom_chef`,`chef`.`image`,(SELECT count(*) FROM `likes` WHERE `likes`.`id_chef`=$id_chef) AS number FROM `chef` inner join `likes` on `chef`.`id_chef`=`likes`.`id_chef`order by number limit 3 ";
		$liste=$conn->query($sql);
		return $liste->fetchAll();
	}
function afficherChef()
	{
		$sql = "SELECT * FROM chef";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function supprimerChef($id_chef)
	{
		$sql = "DELETE FROM chef where id_chef= :id_chef";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id_chef', $id_chef);
		try {
			$req->execute();
			// header('Location: index.php');
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	
	
	public function findVetById($id)
	{
		$sql = "SELECT * FROM veterinaire WHERE id=:id";
		$db = config::getConnexion();
		try {
			$req->bindParam(":id", $id, PDO::PARAM_INT);
			$req->execute();
			return $req->fetch(PDO::FETCH_OBJ);
		} catch (Execption $e) {
			die("Erreur : " . $e->getMessage());
		}
	}
	function recupererChef($id_chef,$conn){
		
		$req="SELECT * FROM chef WHERE id_chef=$id_chef";
		
		$clt=$conn->query($req);
		return $clt->fetchAll();
	}
	/*function recupererChef($id_chef)
	{
		$sql = "SELECT * from chef where id_chef=$id_chef";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}*/
	function updateclient($id_chef,$nom_chef,$prenom_chef,$age_chef,$domaine_chef,$salaire_chef,$image,$conn)
	{
		$req1="Update chef set nom_chef='$nom_chef',prenom_chef='$prenom_chef',age_chef='$age_chef',domaine_chef='$domaine_chef',salaire_chef='$salaire_chef',image='$image' where id_chef='$id_chef'";
		$conn->query($req1);
	
	}

function modifierchef($chef,$id_chef)
    {
        $sql = "UPDATE chef SET nom_chef=:nom_chef,prenom_chef=:prenom_chef,age_chef=:age_chef,domaine_chef=:domaine_chef,salaire_chef=:salaire_chef WHERE id_chef=:id_chef";

        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $nom_chef = $chef->getNomChef();
            $prenom_chef = $chef->getPrenomChef();
            $age_chef = $chef->getAgeChef();
            $domaine_chef = $chef->getDomaineChef();
            $salaire_chef = $chef->getSalaireChef();
            
            $datas = array(':nom_chef' => $nom_chef, ':prenom_chef' => $prenom_chef, ':age_chef' => $age_chef, ':domaine_chef' => $domaine_chef, ':salaire_chef' => $salaire_chef);
            $req->bindValue(':nom_chef', $nom_chef);
            $req->bindValue(':prenom_chef', $prenom_chef);
            $req->bindValue(':age_chef', $age_chef);
            $req->bindValue(':domaine_chef', $domaine_chef);
            $req->bindValue(':salaire_chef', $salaire_chef);
            


            $s = $req->execute();
        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
            echo " Les datas : ";
            print_r($datas);
        }
    }









	
	
}
