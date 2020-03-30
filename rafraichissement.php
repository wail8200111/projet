<?php
include 'connexion.php';
    

      $Req = $link->prepare('Select ');

      $Req-> execute();

	  $data = $Req->fetchAll();
				
	  echo json_encode($data);

?>