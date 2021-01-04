<?php 
include ("../entities/admine.php");
include_once 'config.php';
//$log="admin";
//$pwd="admin";
/*$servername="localhost";
	$username="root";
	$password="";
	$dbname="dblogin";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
	$username, $password);
	$req="select * from users where user_name='$login' && user_pass='$pwd'";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/
$c=new config();
$conn=$c->getConnexion();
$clt=new admine('','',$_POST['login'],$_POST['password']);
$u=$clt->Logedin($conn,$_POST['login'],$_POST['password']);

	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=$_POST['password'];
$vide=false;
if (!empty($_POST['login']) && !empty($_POST['password'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['login']==$_POST['login'] && $t['password']==$_POST['password'] ){
		
		session_start();
		$_SESSION['l']=$_POST['login'];
		
		
		header("location:index.php");
		
		}
		
		


			
	
}

}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="login.html">Retour au formulaire</a>	 <?php 
}  


?> 
