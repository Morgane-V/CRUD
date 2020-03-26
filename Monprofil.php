<?php

$pseudo = htmlspecialchars($_POST['pseudo']);
$mdp = htmlspecialchars($_POST['mdp']);
$desc = htmlspecialchars($_POST['desc']);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <div id="menu">
<div class="crud"><a href="http://localhost/CRUD/" style="color: black;"><h1>Mon CRUD</h1></a></div>
<div class="create"><a href="http://localhost/CRUD/create.php" style="color: black;">Créer son compte</a></div>
<div class="read"><a href="http://localhost/CRUD/read.php" style="color: black">Read</a></div>
<div class="update"><a href="http://localhost/CRUD/update.php" style="color: black">Update</a></div>
<div class="delete"><a href="http://localhost/CRUD/delete.php" style="color: black;">Delete</a></div>
</div>


</head>
<body>
    
</body>
</html>


<?php
session_start();
echo 'Vous êtes connecté. Votre id est le numéro : ';
echo $_SESSION['id'];
