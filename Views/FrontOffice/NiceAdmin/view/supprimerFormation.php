<?PHP
include "../cores/formationC.php";
$formationC=new formationC();
if (isset($_POST["codeF"])){
	$formationC->supprimerFormation($_POST["codeF"]);
	header('Location: AfficherFormation1.php');
}

?>