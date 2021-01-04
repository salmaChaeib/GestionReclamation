<?PHP
include "../cores/specialiteC.php";
$specialiteC=new specialiteC();
if (isset($_POST["codeS"])){
	$specialiteC->supprimerSpecialite($_POST["codeS"]);
	header('Location: AfficherSpecialite1.php');
}

?>