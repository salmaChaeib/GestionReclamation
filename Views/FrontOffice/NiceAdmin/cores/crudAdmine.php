<?php
//Pour insérer un chauffeur dans la base de données, une classe contenant les crud est crée
//en instanciant un objet de cette classe, la cnx avec la base de données est établie 
include ("config.php");
include ("../entities/admine.php");
class crudadmine{
	



function ajouteradmin($DB)
{
    $req=" INSERT INTO admin (id_admin,nom,login,password) VALUES (".$this->id_admin.", '".$this->nom."', '".$this->login."','".$this->password."')";
    $DB->query($req);
}


function afficheradmin($DB)
{
$req="SELECT * FROM admin";
    $liste=$DB->query($req);
    return $liste->fetchAll();  


  /*$req="SELECT * FROM client";
    $stmt = $DB->prepare($req);
    $stmt->execute();
    $DB->query($req);
    while ($donnees = $stmt->fetch())
    {
      echo '
        <tr>
      <td >' .$donnees[0].' </td>
      <td >' .$donnees[1].' </td>
      <td >' .$donnees[2].' </td>
      <td >' .$donnees[3].' </td>
      <td >' .$donnees[4].' </td>
      <td >' .$donnees[5].' </td>
      <td >' .$donnees[6].' </td>
      <td >' .$donnees[7].' </td>
      <td >' .$donnees[8].' </td>
      <td >' .$donnees[9].' </td>
          </tr>
      '; 
    }
    // $liste=$conn->query($req);
    //return $liste->fetchAll();  
  */
}

function supprimeradmine($DB,$id_admin)
{
  $req="DELETE FROM admin where id_admin=".$id_admin."";
  $stmt = $DB->prepare($req);
  $stmt->execute();
}




function modifieradmin($DB,$id_admin,$nom,$login,$password)
{
    $req1=$DB->prepare("UPDATE admin SET nom=?,login=?,password=? WHERE id_admin=?");
//$req1="UPDATE admin SET nom='".$chauf->getnom()."',login='".$chauf->getlogin()."',password='".$chauf->getpassword()."' WHERE mail='".$id_admin->getid_admin()."'";
    $req1->bindParam(1,$nom,PDO::PARAM_INT);
    $req1->bindParam(2,$login,PDO::PARAM_INT);
    $req1->bindParam(3,$password,PDO::PARAM_INT);
    $req1->bindParam(4,$id_admin,PDO::PARAM_INT);
    /*$req1->bindParam(':nom',$nom,PDO::PARAM_INT);
    $req1->bindParam(':login',$login,PDO::PARAM_INT);
    $req1->bindParam(':password',$password,PDO::PARAM_INT);
    $req1->bindParam(':id_admin',$id_admin,PDO::PARAM_INT);*/
    $req1->execute();

}
/*function modifieradmin($DB)
{
  $req="DELETE FROM admin where id_admin=".$id_admin."";
  $stmt = $DB->prepare($req);
  $stmt->execute();
  $req=" INSERT INTO admin (id_admin,nom,login,password) VALUES (".$this->id_admin.", '".$this->nom."', '".$this->login."','".$this->password."')";
  $DB->query($req);
}*/

function rechercheradmin($DB,$id_admin)
{
  $req="SELECT id_admin,nom,login,password from admin  WHERE id_admin=".$id_admin."";
  $stmt = $DB->prepare($req);
  $stmt->execute();
  echo ' <table border="1">
<tr>
<td>Nom</td>
<td>login</td>
<td>password</td>
</tr>
<tr>';
    while ($donnees = $stmt->fetch())
    {
      echo '
        <tr>
      <td >' .$donnees[1].' </td>
      <td >' .$donnees[2].' </td>
      <td >' .$donnees[3].' </td>
        </tr>
      ';
     }
echo '</tr>
</table>';
  
}


function recupereradmin($DB,$id_admin)
{
  $req="SELECT id_admin,nom,login,password from admin WHERE id_admin=".$id_admin."";
  $stmt = $DB->prepare($req);
   
  $stmt->execute();
   return($stmt->fetchall());
}


  function login($login,$password)
    {
        $toConnectUser = null;

        $db = config::getConnexion();
        $sql = "SELECT * FROM admine WHERE login='$login' AND password='$password'";


        try {
            //$liste = $db->query($sql);
            $liste = $db->query($sql);

            $arrayUsers = array();
            foreach ($liste as $row) {
                $user = new user($row['login'], $row['password']);
               // $user->setId($row['id_admine']);
                
                array_push($arrayUsers, $user);
            }
            if (count($arrayUsers) > 0) {
                $toConnectUser = $arrayUsers[0];
            }
            return $toConnectUser;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



/*
function recupererClient ($mail,$conn)
{
    
    $req="SELECT pseudo,adresse,motdepasse FROM client  WHERE mail='".$mail."'";
    $cont=$conn->query($req);
    return $cont->fetchAll();
  }
  
  function modifierClient($chauf,$conn){
        
        $req1="UPDATE client SET pseudo='".$chauf->getPseudo()."',adresse='".$chauf->getAdresse()."',motdepasse='".$chauf->getMotdepasse()."' WHERE mail='".$chauf->getMail()."'";
    $conn->exec($req1);
}*/
}
?>