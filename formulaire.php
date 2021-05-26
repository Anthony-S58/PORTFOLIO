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

<form class="upload"action="upload.php" method="POST" enctype="multipart/form-data">

                <label>Nom du projet :</label>
                <input type="text" id="nom_projet">
                <br>
                <br>
                <br>

                <label>Description :</label>
                <input type="text" id="description">
                <br>
                <br>
                <br>

                <label>Lien du site :</label>
                <input type="text" id="lien_site">
                <br>
                <br>
                <br>

                <label>Insérer l'image</label>
                <input type="file" id="image_upload">
                <br>
                <br>
                <br>
                
                
                
                <button name="submit" type="submit" value="Valider">Valider</button>





            </form> 

</body>
</html>