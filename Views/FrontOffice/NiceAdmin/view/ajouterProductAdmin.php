<?PHP
include "../entities/Product.php" ;
include "../cores/ProductService.php";



$product=new Product($_GET['nom'],$_GET['description'],$_GET['imageUrl']);
$productC=new ProductService() ;
$productC->AjouterProduct($product);
header('Location:afficherProductAdmin1.php')





?>
