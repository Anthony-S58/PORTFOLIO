<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.scss">
    <title>Document</title>
</head>
<body>
    <php?
        include connect.php
?>
<div class="titre_php">
<h1>Formulaire de gestion de projets</h1>
</div>

<form class="upload"action="add.php" method="POST">

                <label>Nom du projet :</label>
                <input type="text" name="Nom">
                <br>
                <br>
                <br>

                <label>Description :</label>
                <input type="text" name="Description">
                <br>
                <br>
                <br>

                <label>Lien du site :</label>
                <input type="text" name="Lien">
                <br>
                <br>
                <br>

                <label>Insérer l'image :</label>
                <input type="file" name="Image">
                <br>
                <br>
                <br>

                <div>
                <label>Masquer :</label>
                <label><input name="Masquer" type="radio" value="oui">oui</label><br><br>
                <label><input name="Masquer" type="radio" value="non">non</label>
                </div>


                <br>
                <br>
                <br>
                
                
                
                <button name="submit" type="submit" value="Valider">Valider</button>





            </form> 

</body>
</html>