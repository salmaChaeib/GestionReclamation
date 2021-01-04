<?PHP
include "../../core/ProductService.php";

$productService=new ProductService();
$listProducts=$productService->afficherProduct() ;
?>
<table border="1">
<tr>
<th> Code Formation </th>
<th> Nom Product</th>
<th> Description </th>
<th>Image</th>
<th>Supprimer</th>
<th>Modifier</th>
<th>List Des Commentaires</th>

</tr>

<?PHP
foreach($listProducts as $row)
{
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
  <td><a><img class="" src="<?php echo $row['imageUrl'];?>" style="width: 100px; height:100px;"></a></td>
	<td><form method="POST" action="supprimerProductAdmin.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierProductAdmin.php?id=<?PHP echo $row['id']; ?>">Modifier</a></td>
	<td><a href="afficherComment.php?id=<?PHP echo $row['id']; ?>">Afficher</a></td>
	</tr>
	<?PHP
}
?>

</table>
