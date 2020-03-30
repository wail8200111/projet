<?php
try

{

    $link = new PDO('mysql:host=localhost;dbname=Chat','root', '');

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());

}

?>