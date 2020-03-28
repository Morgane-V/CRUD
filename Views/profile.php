<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion échouée</title>
    <style type=text/css>

.texte{
    text-align:center;
}
</style>
</head>
<body>
    
</body>
</html>




<?php

$pseudo = htmlspecialchars($_POST['pseudo']);
$mdp = htmlspecialchars($_POST['mdp']);
$desc = htmlspecialchars($_POST['desc']);

try{
//connexion
$db = new PDO('mysql:host=localhost;dbname=crud;charset=utf8','stagiaire','stagiairealaji');
}
catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
}


$sql = "SELECT * FROM `user` WHERE pseudo='$pseudo' AND mot_de_passe='$mdp'";
$result=$db->prepare($sql);
$result->execute();
$tableau=$result->fetch();
$id=$result;

if($result->rowCount() > 0){
    session_start();
    $_SESSION['id']=$tableau['id'];
    $_SESSION['pseudo'] = $pseudo;
    $_SESSION['mot_de_passe'] = $mdp;
    $_SESSION['ma_description'] = $tableau['ma_description'];
    set_time_limit(300);
    header('Location:read.php');
}


?>

<!DOCTYPE html>
<div class="texte">
<p>Pseudo et/ou mot de passe incorrect, soit innexistant !</p>
    <p>Veuillez cliquer sur "Retour à l'accueil" pour retourner sur la page d'accueil.</p>
    <form method="POST" action="/CRUD/Controllers/delete_ctrl.php">
            <input type="submit" value="Retour à l'accueil">
    </form>
    </div>
</html>