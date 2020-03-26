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

//insert
$select = "INSERT INTO user (pseudo, mot_de_passe, ma_description) VALUE('$pseudo','$mdp','$desc')";
$insertion = $db->prepare($select);
$insertion->execute();

header('Location:index.php');
