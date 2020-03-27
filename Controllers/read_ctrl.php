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
    echo "Connexion au serv réussie.\n";
    echo $_SESSION['id'];
}

//modification des informations

$sql = "SELECT * FROM user WHERE id='$id' ";

$result=mysql_query($db,$sql);

while ($info=mysql_fetch_assoc($result)){
    echo $info['pseudo'];
    echo $info['mot_de_passe'];
}


/*
if ($db->query($sql)) {
    echo ' Demande enregistrée <br/>';
    echo 'Votre pseudo est : '.$pseudo.' Viefisdbv :'.$mdp.'<br/>';
    echo 'Votre mot de passe est : '.$mdp.'<br/>';
    echo 'Votre description est : '.$desc.'<br/>';
} else {
    echo "Error updating record : " . $conn->error;
}
