<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    <style type=text/css>
        textarea {
            /* Pour aligner les champs texte multi‑ligne avec leur étiquette */
            vertical-align: top;

            /* Pour donner assez de place pour écrire du texte */
            height: 10em;
            width: 25em;
        }
    </style>


</head>
<header>
<div id="menu">
        <div class="crud"><a href="http://localhost/CRUD/" style="color: black;"><h1>Mon CRUD</h1></a></div>
        <div class="create"><a href="http://localhost/CRUD/create.php" style="color: black;">Create</a></div>
        <div class="read"><a href="http://localhost/CRUD/read.php" style="color: black">Read</a></div>
        <div class="update"><a href="http://localhost/CRUD/update.php" style="color: black">Update</a></div>
        <div class="delete"><a href="http://localhost/CRUD/delete.php" style="color: black;">Delete</a></div>
    </div>
</header>
<body>
                <form method="POST" action="delete_ctrl.php">
    
                    <div>
                        <label class="texte" for="pseudo">Pseudo</label>
                        <input type="text" name="pseudo" placeholder="Pseudo"> 
                    </div>
                
                    <p><h1>Attention! En cliquand sur "Envoyer", vous allez supprimer votre compte.</h1></p>
            
                        <input type="submit" value="Envoyer">
                </form>
</body>
</html>