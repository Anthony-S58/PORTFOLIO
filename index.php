<!DOCTYPE html>

<html lang="Fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
        <title>Accueil - Tête d'ampoule</title>
    </head>

    <body>

                <!-- Récupération message d'erreur si mauvais identifiants -->

            <?php
            if(!empty($_GET['message'])) {
            $message = $_GET['message'];
            $message = 'Nom d\'utilisateur ou Mot de passe invalide';
             echo $message;}
            ?>

            <!-- HEADER -->

            <div class="titre">
               
             <h1>Espace administrateur</h1>

            </div>

            <br>

            <!-- Section -->

                    <section>

                        <div class="connexion">

                            <form action="sommaire.php" method="Post">

                            <label>Nom d'utilisateur :</label>
                            <input type="text" name="user" required>

                            <label>Mot de passe :</label> 
                            <input type="password" name="password" required>

            <br><br>

                            <input class="user" type="submit" value="Connexion">


                        </div>
                    </section>
    </body>

</html>