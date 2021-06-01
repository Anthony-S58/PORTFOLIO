<?php
    session_start(); 
    if (!isset ($_SESSION['acces']))
    header('location:admin.php');
?>



<!DOCTYPE html>
<html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.scss">
            <title>Document</title>
        </head>

    <body class="php_modif">
    
        <!-- Connexion à la base de données -->

        <?php

            include('database.php');

        ?>

        <!-- Récupération des valeurs de l'URL via GET + déclaration des variables -->

        <?php

            $getid=$_GET['ID'];
            $getnom=$_GET['Nom'];
            $getdescription=$_GET['Description'];
            $getlien=$_GET['Lien'];
            $getimage=$_GET['Image'];
           


            $reponse = $bdd->query("SELECT * FROM uploadprojet WHERE ID = $getid");

        ?>

        <!-- HTML -->

        <!-- formulaire de modification -->
        
            <h1>Projet à modifier</h1>
            

            <div class="projets">
                    
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front" style="background-image:url(IMG/<?php echo $getimage?>)"></div>
                            <div class="flip-box-back">
                                <h3><?php echo $getnom.'</h3><br>'?><br>
                                <p><?php echo $getdescription?></p><br>
                                <a href="<?php echo $getlien?>" target="_blank"><button>Visiter</button></a>
                            </div>
                        </div>
                        <br>                       
                    </div>
                            
        
                </div>
        
        

        <div class="formulaire_modif">

            <form class="upload" method="POST" action="update.php?ID=<?php echo $getid?>">

                
                <input type="text" name="Nom" value="<?php echo $getnom?>" required>
                <br><br><br>
                

                
                <input type="text" name="Description" value="<?php echo $getdescription?>" required>
                <br><br><br>
               

                
                <input type="text" name="Lien" value="<?php echo $getlien?>" required>
                <br><br><br>
                

                
                <input type="file" name="Image" value="<?php echo $getimage?>" required>
                <br><br><br>
               

                <div>
                    <label>Afficher :</label>
                    <label><input name="Afficher" type="radio" value="oui">oui </label>
                    <label><input name="Afficher" type="radio" value="non">non</label>
                </div>

                <br><br><br>
                
                <button name="submit" type="submit" value="Valider">Modifier</button>
                <button class="return"><a href="projet.php">Retour</a></button>

                <br><br><br>

            </form> 
        </div>

        <!-- visuel du projet à modifier -->

       
    </body>

</html>
