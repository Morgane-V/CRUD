<?php
session_start();

$id=$_SESSION['id'];
$pseudo = $_SESSION['pseudo'];
$mdp = $_SESSION['mot_de_passe'];
$desc = $_SESSION['ma_description'];


try{
//connexion
$db = new PDO('mysql:host=localhost;dbname=crud;charset=utf8','stagiaire','stagiairealaji');
?>









<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <style type=text/css>
#menu{
    height: 8em;
    width: auto;
    margin: auto;
    background-color: #FF9E00;
    display: flex;
    justify-content: space-around;
    font-size: large;
    margin-bottom: 5%;
    align-items: center;
    font-family : "maFonte", Helvetica, Arial, sans-serif;
    
}

.texte{
    text-align:center;
}
</style>

</head>
<header>

<div id="menu">
        <div class="crud"><a href="http://localhost/CRUD/" style="color: black;"><h1>Mon CRUD</h1></a></div>
        <div class="create"><a href="http://localhost/CRUD/Views/create.php" style="color: black;">Créer son compte</a></div>
        <div class="read"><a href="http://localhost/CRUD/Views/read.php" style="color: black">Visualiser ses informations</a></div>
        <div class="update"><a href="http://localhost/CRUD/Views/update.php" style="color: black">Modifier ses informations</a></div>
        <div class="delete"><a href="http://localhost/CRUD/Views/delete.php" style="color: black;">Effacer son compte</a></div>
    </div>
</header>
<body>
</body>
</html>










<?php
//vérifie la co
if ($db->connect_error){
    die('Erreur :' .$db->connect_error);
}else{
    //echo "Connexion au serv réussie".'<br/>';
    //echo $_SESSION['id'].'<br/>';
}



//affichage infos

    $sql = " SELECT  * FROM user WHERE id='$id' ";
    


    
    $req = $db->query($sql);
    while($result = $req->fetch(PDO::FETCH_ASSOC)) : {
    
    if($req == TRUE){
        echo 'Votre pseudo est : '.$pseudo.'<br/>';
        echo 'Votres mot des passe est : '.$mdp.'<br/>';
        echo 'Votres descprion est : '.$desc;
    }else{
        echo 'Erreur';
    }
    
    }


    endwhile;

    }catch (PDOException $e){
        echo $e->getMessage();
    }
    