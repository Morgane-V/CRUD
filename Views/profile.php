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
    $_SESSION['mot_de_passe'];
    $_SESSION['ma_description'];
    set_time_limit(300);
    header('Location:read.php');
}


?>

<!DOCTYPE html>
<p>Pseudo et/ou mot de passe incorrect, soit innexistant !</p>
</html>