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
        <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
        <title>Sommaire</title>
    </head>

    <body class="sommaire">

            <!-- HEADER -->
        
        <div class="sommaire_titre">
               
             <h1>Gestionnaire des projets</h1>

        </div>

        <br><br><br><br><br>

            <!-- Section -->

        <section class="bienvenue">
       

            
           <span class="welcome">Bienvenue Anthony !</span>

          

        </section>

        <br><br><br><br><br><br><br><br>

        <section class="sommaire_button">

            <button><a href="formulaire.php"><h2>Ajouter un projet</h2></a></button>
            <button><a href="projet.php"><h2>Accéder aux projets</h2></a></button>

            <br>
            
        </section>

        <div class="logout">
            <a href="logout.php"><img src="IMG/logout.png"></a>

            </div>

    </body>

</html>