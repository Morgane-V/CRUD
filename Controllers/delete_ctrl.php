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


$sql = "DELETE FROM user WHERE id=:id";


$del=$db->prepare($sql);
$del->bindParam(":id",$id,PDO::PARAM_INT);
$del->execute();








/*
//delete
$sql = "DELETE * FROM user WHERE id='$id' ";
$result = $db->prepare($sql);
$result->execute();


*/



header('Location:/CRUD/index.php');

