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
        <?php

            $name=$_POST['user'];
            $password=$_POST['password'];

        ?>


        <div class="sommaire_titre">
               
             <h1>Gestionnaire des projets</h1>

        </div>

        <br><br><br><br><br>

            <!-- Section -->

        <section class="bienvenue">
       

            <?php

                if($name=='Anthony' && $password=='Admin') {
                ('location:formulaire.php');
                echo '<span class="welcome">Bienvenue '. $name. ' !</span>';

                }else header("location:index.php?message=error");

            ?>

        </section>

        <br><br><br><br><br><br><br><br>

        <section class="sommaire_button">

            <button><a href="formulaire.php"><h2>Ajouter un projet</h2></a></button>
            <button><a href="projet.php"><h2>Accéder aux projets</h2></a></button>

            <br>
            
        </section>

        <div class="logout">
            <a href="index.html"><img src="IMG/logout.png"></a>

            </div>

    </body>

</html>