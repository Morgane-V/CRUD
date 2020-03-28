<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Accueil</title>
</head>
<header>
<style type="text/css">
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


<div id="menu">
        <div class="crud"><a href="http://localhost/CRUD/" style="color: black;"><h1>Mon CRUD</h1></a></div>
        <div class="create"><a href="http://localhost/CRUD/Views/create.php" style="color: black;">Créer son compte</a></div>
        <div class="read"><a href="http://localhost/CRUD/Views/read.php" style="color: black">Visualiser ses informations</a></div>
        <div class="update"><a href="http://localhost/CRUD/Views/update.php" style="color: black">Modifier ses informations</a></div>
        <div class="delete"><a href="http://localhost/CRUD/Views/delete.php" style="color: black;">Effacer son compte</a></div>
    </div>
    
    
</header>
<body>


    <div class="texte">
    <p>Veuillez vous connecter pour effectuer des modifications ou voir vos informations.</p>
    <form method="POST" action="/CRUD/Views/profile.php">

        <div>
            <label class="texte" for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" placeholder="Pseudo"> 
        </div>
    
            <div>
                <label class="texte" for="mdp">Mot de passe</label>
                <input type="password" name="mdp" placeholder="Mot de Passe">
            </div>

            <input type="submit" value="Connexion">
    </form>
</div>
</body>
</html>

