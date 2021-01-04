<?php
include('../cores/config.php');
include('../entities/event.php');

class eventCore
 {
    function ajouterevent($event)
    {     $reference= $event->getReference();
          $titre= $event->getTitre();
      		$description= $event->getDescription();
      		$type= $event->getType();
      		$dateevent= $event->getDateevent();
          $image=$event->getImage();
          
    	    
          $config=new config();
      		$bdd = $config->getConnexion();
       		$req=$bdd->prepare('INSERT INTO event(reference,titre,description,type,dateevent,photo)VALUES(:reference,:titre,:description,:type,:dateevent,:photo)');
	   		  $req->execute(array('reference'=>$reference,'titre'=>$titre,'description'=>$description,'type'=>$type,'dateevent'=>$dateevent,'photo'=>$image));
    }

    


    function afficher_return()
      {
        $config=new config();
        $bdd=$config->getConnexion();

       $response=$bdd->query('SELECT * FROM event');
        return $response;
      }

   function supprimerevent($reference)

  {     
        $config=new config();
        $bdd=$config->getConnexion();
        $req=$bdd->prepare('DELETE FROM event where reference=:reference');
        $req->execute(array('reference'=>$reference));
  }


function modifierevent($ancien_reference,$nv_reference,$nv_titre,$nv_description,$nv_type,$nv_dateevent,$nv_photo)
{   
          $config=new config();
         $bdd=$config->getConnexion();


         $reqq=$bdd->prepare('UPDATE event SET reference=:nv_reference,titre=:nv_titre,description=:nv_description,type=:nv_type,dateevent=:nv_dateevent,photo=:nv_photo WHERE reference=:ancien_reference');

         $reqq->execute(array('nv_reference'=>$nv_reference,'nv_titre'=>$nv_titre,'nv_description'=>$nv_description,'nv_type'=>$nv_type,'nv_dateevent'=>$nv_dateevent,'nv_photo'=>$nv_photo,'ancien_reference'=>$ancien_reference));
   
  }

 function rechercherevent($key)

  { 
    $config=new config();
    $bdd=$config->getConnexion();
    $response=$bdd->prepare('SELECT * FROM event WHERE reference=:key OR titre=:key OR description=:key OR type=:key OR dateevent=:key OR photo=:key');
    $response->execute(array('key'=>$key));
    return $response;
    

  } 




}

?>