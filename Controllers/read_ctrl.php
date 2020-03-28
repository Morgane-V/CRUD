<?php
session_start();

$id=$_SESSION['id'];
$pseudo = $_SESSION['pseudo'];
$mdp = $_SESSION['mot_de_passe'];
$desc = htmlspecialchars($_POST['ma_description']);


try{
//connexion
$db = new PDO('mysql:host=localhost;dbname=crud;charset=utf8','stagiaire','stagiairealaji');


//vérifie la co


if ($db->connect_error){
    die('Erreur :' .$db->connect_error);
}else{
    echo "Connexion au serv réussie.\n";
    echo $_SESSION['id'].'<br/>';
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
    