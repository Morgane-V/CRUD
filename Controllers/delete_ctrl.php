<?php

$pseudo = htmlspecialchars($_POST['pseudo']);
$mdp = htmlspecialchars($_POST['mdp']);
$desc = htmlspecialchars($_POST['desc']);

//connexion
$db = new PDO('mysql:host=localhost;dbname=crud;charset=utf8','stagiaire','stagiairealaji');

//vérifie la co
if ($db->connect_error){
    die('Erreur :' .$db->connect_error);
}
echo 'Connexion réussie';

//delete
$select = "DELETE * FROM user WHERE id=$id ";
$delete = $db->prepare($select);
$delete->execute();

//header('Location:index.php');