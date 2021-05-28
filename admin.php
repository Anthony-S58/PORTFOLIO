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
                echo $message;
            }
        ?>

        <!-- HTML -->

        <div class="admin_space">
               
            <h1>Espace Administrateur</h1>

        </div>

        <br>

        <!-- Section -->

        <section class="connect">

            <div class="connexion">

                <form action="sommaire.php" method="Post">

                    <label>Nom d'utilisateur :</label>
                    <input type="text" name="user" required>
                    <br><br><br>
                    <label>Mot de passe :</label> 
                    <input type="password" name="password" required>

                    <br><br>
                    <br><br>
                    <br><br>

                    <input class="user" type="submit" value="Connexion">

                </form>


            </div>

        </section>

    </body>

</html>