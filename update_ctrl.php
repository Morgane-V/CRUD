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
echo 'Connexion au serv réussie';

//modification des informations
$sql = "UPDATE user SET mot_de_passe='$mdp', ma_description='$desc' WHERE id=$id ";

$result=$db->prepare($sql);
$result->execute();
$id=$result;

echo 'Changements enregistré;';

//header('Location:index.php');

/*
$update = $db->prepare($select);
$update->execute();
echo "Enregistrement effectué";
echo $select; */