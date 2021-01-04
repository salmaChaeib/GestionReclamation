<?PHP
//include ("../views/config.php");
class Votes
{

	public $conn;
	function __construct()
	{
		$c=new config();
		$this->conn=$c->getConnexion();
	}


	function insertlikes($clt,$conn){
		$req1="INSERT INTO likes(id_chef,user_id) VALUES ('".$clt->getIdChef()."','".$clt->getUser_id()."')";
		$conn->query($req1);
		
	}
	function insertdislikes($clt,$conn){
		$req1="INSERT INTO dislike(id_chef,user_id) VALUES ('".$clt->getIdChef()."','".$clt->getuser_id()."')";
		$conn->query($req1);
		
	}
	function affichechffgroupedbylike($conn)
	   {
		$req="SELECT `chef`.`id_chef`,`chef`.`nom_chef`,`chef`.`prenom_chef`,`chef`.`image`,`likes`.`user_id`,`clients`.`nom_client`,`clients`.`prenom_client` FROM `chef` inner join `likes` on `chef`.`id_chef`=`likes`.`id_chef` inner join `clients` on `likes`.`user_id`=`clients`.`id_client` order by `likes`.`user_id` ";
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	function affichechffgroupedbydislike($conn)
	   {
		$req="SELECT `chef`.`id_chef`,`chef`.`nom_chef`,`chef`.`prenom_chef`,`chef`.`image`,`dislike`.`user_id`,`clients`.`nom_client`,`clients`.`prenom_client` FROM `chef` inner join `dislike` on `chef`.`id_chef`=`dislike`.`id_chef` inner join `clients` on `dislike`.`user_id`=`clients`.`id_client` order by `dislike`.`user_id`";
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	
	/*function recupererlikes($id_chef,$conn){
		
		$req="SELECT COUNT(*) FROM likes WHERE id_chef=$id_chef";
        // $query = $this->db->prepare("SELECT COUNT(*) FROM likes WHERE id_chef=$id_chef");
        $query->execute($req);
        $count = $query->rowCount();
        return $count;		
 

	}
*/
	function topchef($id_chef,$conn)
	{
		$sql="SELECT `chef`.`id_chef`,`chef`.`nom_chef`,`chef`.`prenom_chef`,`chef`.`image`,(SELECT count(*) FROM `likes` WHERE `likes`.`id_chef`=$id_chef) AS number FROM `chef` inner join `likes` on `chef`.`id_chef`=`likes`.`id_chef`";
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
	function getCountdislikes($id_chef,$conn)
	{
		$sql = "SELECT count(*) FROM dislike WHERE id_chef=$id_chef";
		
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
	function supprimerlike($id_chef,$user_id)
	{
		$sql = "DELETE FROM likes where id_chef= :id_chef and user_id= :user_id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id_chef', $id_chef);
		$req->bindValue(':user_id', $user_id);
		try {
			$req->execute();
			// header('Location: index.php');
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function supprimerdislike($id_chef,$user_id)
	{
		$sql = "DELETE FROM dislike where id_chef= :id_chef and user_id= :user_id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id_chef', $id_chef);
		$req->bindValue(':user_id', $user_id);
		try {
			$req->execute();
			// header('Location: index.php');
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
function veriflike($id_chef,$user_id,$conn)
	{
		$sql = "SELECT count(*) FROM likes WHERE id_chef=$id_chef and user_id=$user_id ";
		
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

}
?>