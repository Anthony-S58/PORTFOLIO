<!-- Avant tout on démarre la session -->

<?php
    session_start(); 
    if (!isset ($_SESSION['acces']))
    header('location:admin.php');
?>



<!DOCTYPE html>
<html lang="Fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body class="form_php">

    <?php

        include('database.php');

    ?>


    <div class="titre_php">

        <h1>Formulaire de gestion de projets</h1>

    </div>

    <form class="upload"action="add.php" method="POST">

        
            <input type="text" name="Nom" placeholder="Nom du projet"required>
                <br><br><br>

        
            <input type="text" name="Description" placeholder="Description" required>
                <br><br><br>

       
            <input type="text" name="Lien" placeholder="Lien du site" required>
                <br><br><br>

       
            <input type="file" name="Image" required>
                <br><br><br>

        <div>
            <label>Afficher :</label>
            <label><input name="Masquer" type="radio" checked value="oui">oui</label>
            <label><input name="Masquer" type="radio" value="non">non</label>
        </div>

                <br><br><br>
                     
        <button name="submit" type="submit" value="Valider">Valider</button>

    </form> 
    
    <div class="retour">
        <a href="projet.php">Accéder aux projets</a>

    </div>


</body>

</html>