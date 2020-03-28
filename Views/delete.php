<!DOCTYPE html>
<html lang="en">
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



<?php
session_start();
//echo "Vous êtes connecté. Votre id est le numéro : ";
//echo$_SESSION['id'];
?>




<body>
<div class="texte">
    <p>Veuillez cliquer sur "Effacer" pour supprimer votre compte.</p>
    <form method="POST" action="/CRUD/Controllers/delete_ctrl.php">
            <input type="submit" value="Efaccer">
    </form>
    </div>
</body>
</html>