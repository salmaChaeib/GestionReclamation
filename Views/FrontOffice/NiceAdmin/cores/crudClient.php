<?php
//Pour insérer un chauffeur dans la base de données, une classe contenant les crud est crée
//en instanciant un objet de cette classe, la cnx avec la base de données est établie 
include ("../view/config.php");
include ("../entities/client.php");
class crudClient{
	public $conn;
	function __construct()
	{
		$c=new config();
		$this->conn=$c->getConnexion();
	}
	function insertClient($clt,$conn){
		
		
		
	
	
	
		
		$req1="INSERT INTO clients(login,nom_client,prenom_client,mot_passe,email_client,sexe_client,datenaissance_client,tel_client,cin_client,adresse_client,codepostal_client,ville_client,pays_client) VALUES ('".$clt->getLogin()."','".$clt->getNomClient()."','".$clt->getPrenomClient()."','".$clt->getMotPasse()."','".$clt->getEmailClient()."','".$clt->getSexeClient()."','".$clt->getdatenaissance_client()."',".$clt->getTelClient().",".$clt->getCinClient().",'".$clt->getAdresseClient()."',".$clt->getcodepostal_client().",'".$clt->getVilleClient()."','".$clt->getPaysClient()."')";
		$conn->query($req1);
		
	}
	
	function recherclient($key,$conn)
	{
		$sql = "SELECT * FROM clients WHERE login LIKE '%$key%' OR nom_client LIKE '%$key%' OR cin_client LIKE '%$key%' OR ville_client LIKE '%$key%'";
		//$db = config::getConnexion();
		try {
			$liste = $conn->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	
	
	
	
	
	
	function updateclient($id_client,$login,$nom_client,$prenom_client,$mot_passe,$email_client,$sexe_client,$datenaissance_client,$tel_client,$cin_client,$adresse_client,$codepostal_client,$ville_client,$pays_client,$conn)
	{
		$req1="Update clients set login='$login',nom_client='$nom_client',prenom_client='$prenom_client',mot_passe='$mot_passe',email_client='$email_client',sexe_client='$sexe_client',datenaissance_client='$datenaissance_client',tel_client='$tel_client',cin_client='$cin_client',adresse_client='$adresse_client',codepostal_client='$codepostal_client',ville_client='$ville_client',pays_client='$pays_client' where id_client='$id_client'";
		$conn->query($req1);
	
	}
	
		function afficheClient($conn)
	   {
		$req="SELECT * FROM clients";
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	function afficheClientactive($conn)
	   {
		$req="SELECT * FROM clients where etat=1";
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	function afficheClientdesactive($conn)
	   {
		$req="SELECT * FROM clients where etat=0";
		$liste=$conn->query($req);
		return $liste->fetchAll();	
		
	}
	
	
	function recupererClient($id_client,$conn){
		
		$req="SELECT login,nom_client,prenom_client,mot_passe,email_client,sexe_client,datenaissance_client,tel_client,cin_client,adresse_client,codepostal_client,ville_client,pays_client FROM clients WHERE clients.login='$id_client'";
		
		$clt=$conn->query($req);
		return $clt->fetchAll();
	}
	
	
	
	
		function supprimerClient($id_client,$conn)
		{
			
		$req1="DELETE FROM clients where id_client=".$id_client ;
		
				echo "Error: " . $req1 . "<br>" . $conn->error;
		

		$conn->exec($req1);
		

		
		}
	
	
	
	function verifier_compte($login,$conn){
		$req="SELECT count(*) FROM clients WHERE login='".$login."'";
		$liste=$conn->query($req);
		return ($liste->fetchAll()) ;
	}
	

	
	function recherche_client($id_client,$conn){
		
		$req="SELECT * FROM clients WHERE id_client='".$id_client."'";
		
		$liste=$conn->query($req);
		
		return ($liste->fetchAll());
	}
	


function desac($DB,$id_client)
{
  $req="UPDATE clients set etat=0 where id_client=".$id_client."";
  $stmt = $DB->prepare($req);
  $stmt->execute();

}




	function activeClient($DB,$id_client)
{
  $req="UPDATE clients set etat=1 where login='$id_client'";
  $stmt = $DB->prepare($req);
  $stmt->execute();

 // $req2="DELETE FROM personnel where cin=".$cin;
}
function active($DB,$id_client)
{
  $req="UPDATE clients set etat=1 where id_client='$id_client'";
  $stmt = $DB->prepare($req);
  $stmt->execute();

 // $req2="DELETE FROM personnel where cin=".$cin;
}	
	
}
	
	
	
	
	
	



if (isset($_GET['id_client'])&& $_GET['id']==1)
{
	
	
	$cc=new crudClient();
	$cc->supprimerClient($_GET['id_client'],$cc->conn);
				header("Location: ../view/affichageDesClients.php");
				
			die();	

	
}





if (isset($_GET['id'])&& $_GET['id']==3)
{
	$loginx="";
	
	if (isset($_GET['loginx']))
		$loginx=$_GET['loginx'];
	
	$login="";

	if (isset($_POST['login']))
	$login=$_POST['login'];
		
		
	echo $login;
	$nom_client="";
	if (isset($_POST['nom_client']))
	$nom_client=$_POST['nom_client'];

   $prenom_client="";
	if (isset($_POST['prenom_client']))
	$prenom_client=$_POST['prenom_client'];

$mot_passe="";
	if (isset($_POST['mot_passe']))
	$mot_passe=$_POST['mot_passe'];


$email_client="";
	if (isset($_POST['email_client']))
	$email_client=$_POST['email_client'];



$sexe_client="";
	if (isset($_POST['sexe_client']))
	$sexe_client=$_POST['sexe_client'];

$datenaissance_client=0;
	if (isset($_POST['datenaissance_client']))
	$datenaissance_client=$_POST['datenaissance_client'];

$tel_client="";
	if (isset($_POST['tel_client']))
	$tel_client=$_POST['tel_client'];

$cin_client="";
	if (isset($_POST['cin_client']))
	$cin_client=$_POST['cin_client'];

$adresse_client="";
	if (isset($_POST['adresse_client']))
	$adresse_client=$_POST['adresse_client'];


$codepostal_client="";
	if (isset($_POST['codepostal_client']))
	$codepostal_client=$_POST['codepostal_client'];

$ville_client="";
	if (isset($_POST['ville_client']))
	$ville_client=$_POST['ville_client'];

$pays_client='';
	if (isset($_POST['pays_client']))
	$pays_client=$_POST['pays_client'];




	
	$cc=new crudClient();
	
	$cc->updateclient($login,$nom_client,$prenom_client,$mot_passe,$email_client,$sexe_client,$datenaissance_client,$tel_client,$cin_client,$adresse_client,$codepostal_client,$ville_client,$pays_client,$loginx,$cc->conn);
	header('location:afficheClient.php?id='.$login);


	
}



?>