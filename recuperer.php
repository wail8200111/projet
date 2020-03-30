<?php
include 'connexion.php';
    

      $Req = $link->prepare('SELECT auteur,horaire,message FROM Chat ORDER BY horaire desc LIMIT 10 ');

      $Req-> execute();

	  $data = $Req->fetchAll();
				
	  echo json_encode($data);
    
?>
