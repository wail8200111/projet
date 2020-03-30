<?php
include 'connexion.php';


    if(isset($_POST['auteur']) && isset($_POST['message'])){
       $auteur =  $_POST['auteur']; 
       $message = $_POST['message'];

      $Req = $link->prepare('INSERT INTO Chat(horaire,auteur,message) VALUES(now(),:auteur,:message)');

      $Req-> execute(array('auteur' => $auteur, 'message' => $message));

    } 
?>