<?php
		include('../cores/participantCore.php');	    
        
        $participantCore = new participantCore();
        $participantCore->modifierparticipant($_GET['an_id'],$_GET['nv_id'],$_GET['nv_nom'],$_GET['nv_prenom'],$_GET['nv_email'],$_GET['nv_pays']);
        header("location:../view/afficherparticipant.php");



?>