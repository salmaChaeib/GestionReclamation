<?PHP
include "../../core/ProductService.php";

$productService=new ProductService();
$listProducts=$productService->recupererComment($_GET['id']) ;
$product=$productService->recupererProduct($_GET['id']);
?>
<?PHP
foreach($product as $row1)
{
	?>
<h1><?php echo $row1['nom'];?></h1>


<a>
  <img class="" src="<?php echo $row1['imageUrl'];?>" style="width: 300px; height:200px;">
</a>





<?PHP

foreach($listProducts as $row) //parcour
{
	?>
<fieldset style="width: 300px;">
<p>  <?php echo $row["description"]; ?></p>
  <form method="POST" action="supprimerCommentAdmin.php">
<input type="submit" name="supprimer" value="supprimer">   <!--bouton supp-->
<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">   <!--row kima l i boutton mkhobi id produit-->
<input type="hidden" value="<?PHP echo $row1['id']; ?>" name="idComment"> <!-- id comment -->
</form>
</fieldset>
	<?PHP
}}
?>
