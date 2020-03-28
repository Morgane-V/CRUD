<?php
session_start();

$id=$_SESSION['id'];
$pseudo = htmlspecialchars($_POST['pseudo']);
$mdp = htmlspecialchars($_POST['mdp']);
$desc = htmlspecialchars($_POST['desc']);

//connexion
$db = new PDO('mysql:host=localhost;dbname=crud;charset=utf8','stagiaire','stagiairealaji');


//vérifie la co


if ($db->connect_error){
    die('Erreur :' .$db->connect_error);
}else{
    echo "Connexion au serv réussie.";
    echo $_SESSION['id'];
}

//modification des informations

$sql = "UPDATE user SET pseudo='$pseudo', mot_de_passe='$mdp', ma_description='$desc' WHERE id='$id' ";

if ($db->query($sql) == TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: ";
}
session_unset();

header('Location:/CRUD/Views/read.php');

?>