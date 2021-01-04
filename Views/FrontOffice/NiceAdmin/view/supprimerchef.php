<?PHP
include "../cores/crudChef.php";
$c=new chefC();
if (isset($_POST["id_chef"])){
	$c->supprimerChef($_POST["id_chef"]);
	header('Location: afficherChef.php');
}

?>