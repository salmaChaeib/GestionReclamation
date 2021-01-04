<!DOCTYPE html>
<!--
Template Name: Pleeness
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>5M International</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<script language="javascript" src="controle.js">
		</script>
		
</head>

<body id="top">
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">5M International</a></h1>
    </div>
    <div id="search" class="fl_right">
      <form class="clear" method="post" action="#">
       
       
    
      </form>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->

<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="index.html">Accueil</a></li>
      <li><a class="drop" href="#">Nos produits</a>
        <ul>
          <li><a href="pages/gallery.html">Maquillage</a></li>
          <li><a href="pages/full-width.html">Parfums</a></li>
          <li><a href="pages/sidebar-left.html">Soins</a></li>
          <li><a href="pages/sidebar-right.html"></a></li>
          <li><a href="pages/basic-grid.html"></a></li>
        </ul>
		
      </li>
      <li><a class="drop" href="#">Actualités</a>
        <ul>
          <li><a href="#">Level 2</a></li>
          <li><a class="drop" href="#">Level 2 + Drop</a>
            <ul>
              <li><a href="#">Level 3</a></li>
              <li><a href="#">Level 3</a></li>
              <li><a href="#">Level 3</a></li>
            </ul>
          </li>
          <li><a href="#">Level 2</a></li>
        </ul>
      </li>
      <li><a href="#">Catalogue</a></li>
      <li><a href="#">Soldes</a></li>
      <li><a href="#">Idées cadeaux</a></li>
      <li><a href="#">Marques</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>

<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/121.jpg');">
  <div class="hoc container clear"> 
  
 <li><a href="pages/sidebar-left.html">logout</a></li>
<!-- ################################################################################################ -->
  
  
  </br>
  </br>
  </br>
    </br>
  </br>
  </br>
   </br>
  </br>
  
  <form class="overlay inspace-30 btmspace-30" >
<div>
<?php
include ("crudClient.php");
$cc=new crudClient();



if (isset($_GET['id']))
	$id_client=$_GET['id'];


?>






 
<h3>Espace personnel</h3>


</br>

</br>






      <div class="scrollable">
        <table style="background-color:transparent;">
          <thead>
            <tr>
		
              <th>login</th>
              <th>Email</th>
              <th>MDP</th>
			  <th>Nom</th>
              <th>Prenom</th>
              <th>Sexe</th>
		      <th>Date de naissance</th>
              <th>Telephone</th> 
			  <th>CIN </th>
			  <th>Adresse</th>
              <th>Code postal</th> 
			  <th>Ville</th>
              <th>Pays</th> 
			 
			  
              
            </tr>
          </thead>
		  
		  	<?php
		
			$list=$cc->recupererClient($id_client,$cc->conn);
	foreach ($list as $l){
            ?>
	<tbody>	
    <tr>     
	
	<td><?php echo $l['login'] ?></td>
	<td><?php echo $l['email_client'] ?></td>
	<td><?php echo $l['mot_passe']?></td>
	<td><?php echo $l['nom_client']?></td>
	<td><?php echo $l['prenom_client']?></td>
	<td><?php echo $l['sexe_client']?></td>
	<td><?php echo $l['datenaissance_client']?></td>
	<td><?php echo $l['tel_client']?></td>
	<td><?php echo $l['cin_client']?></td>
	<td><?php echo $l['adresse_client']?></td>
	<td><?php echo $l['codepostal_client']?></td>
	<td><?php echo $l['ville_client']?></td>
	<td><?php echo $l['pays_client']?></td>
	
	
	

	
	
	<td><center><button  style="color:white;text-align:center;background-color:#00BCDF;border-color:transparent;" ><a style="color:white;" href="modiferClient.php?login=<?php echo $l['login']; ?>" role="button"> Modifier</a></center>
	<center><form action="" method="POST">
	
	

	
	
	
	</center>
	</form></td></tr>
	 <?php

	}
	?>
	</tbody>
   
        </table>

</div>
	
</FORM>


	  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   
    <!-- ################################################################################################ -->
  
</div>
  </div>
</div>
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="../layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>
  
  
  