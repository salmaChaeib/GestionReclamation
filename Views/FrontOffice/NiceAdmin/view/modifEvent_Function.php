<?php
		include('../cores/eventCore.php');	    
        
        $eventCore = new eventCore();
        $eventCore->modifierevent($_GET['an_ref'],$_GET['nv_ref'],$_GET['nv_titre'],$_GET['nv_description'],$_GET['nv_type'],$_GET['nv_dateevent'],$_GET['nv_photo']);
        header("location:../view/afficherevent.php");



?>