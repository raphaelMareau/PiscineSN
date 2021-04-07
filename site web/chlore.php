<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=piscine_connecter;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>