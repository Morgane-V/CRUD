<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<header>
<div id="menu">
        <div class="crud"><a href="http://localhost/CRUD/" style="color: black;"><h1>Mon CRUD</h1></a></div>
        <div class="create"><a href="http://localhost/CRUD/Views/create.php" style="color: black;">Create</a></div>
        <div class="read"><a href="http://localhost/CRUD/Views/read.php" style="color: black">Read</a></div>
        <div class="update"><a href="http://localhost/CRUD/Views/update.php" style="color: black">Update</a></div>
        <div class="delete"><a href="http://localhost/CRUD/Views/delete.php" style="color: black;">Delete</a></div>
    </div>
</header>
<body>
    
    <form method="POST" action="">
    
        <div class="infos pseudo">
            <label class="texte" for="pseudo">Votre pseudo</label>
            <input type="text" name="pseudo" placeholder="Pseudo"> 
        </div>
    </form>
    
</body>
</html>