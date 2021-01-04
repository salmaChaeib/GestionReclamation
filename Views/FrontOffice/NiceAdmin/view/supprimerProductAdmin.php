<?PHP
include "../cores/ProductService.php";
$productService=new ProductService();
if (isset($_POST["id"])){
	$productService->supprimerProduct($_POST["id"]);

	header('Location: afficherProductAdmin1.php');
}

?>