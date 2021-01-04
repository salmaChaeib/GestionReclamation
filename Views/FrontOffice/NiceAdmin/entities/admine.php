<?php

//include 'config.php';// include "config.php dkika barke "

class admine
{
  private $id_admin;
  private $nom;
  private $login;
  private $password ;
  private $DB;


function __construct($id_admin,$nom,$login,$password){
            
      $this->id_admin=$id_admin ;
      $this->nom=$nom ;
      $this->login=$login ;
      $this->password =$password ;
 
  }






  function getid_admin(){
    return $this->id_admin;
    
  }
  
  function getLogin(){
    return $this->login;
  }
  
  function getNom(){
    return $this->nom;
  }
  
  function getPrenomClient(){
    return $this->prenom_client;
  }
  
  function getMotPasse(){
    return $this->password;
  }
  function setid_admin ($id_admin)
  {
    $this->id_admin=$id_admin;
  }
  
  
  function setnom ($nom)
  {
    $this->nom=$nom;
  }
  
  
  function setlogin ($login)
  {
    $this->login=$login;
  }
  
  
  function setCinClient ($cin_client)
  {
    $this->password=$password;
  }

public function Logedin($conn,$login,$password)
  {
    $req="select * from admine where login='$login' && password='$password'";
    $rep=$conn->query($req);
    return $rep->fetchAll();
  }





}
?>


