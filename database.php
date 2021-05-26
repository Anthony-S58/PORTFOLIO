<!DOCTYPE html>
<html>
    <head>
        <title>Base de données</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Base de données MySQL</h1>  
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            
            //On établit la connexion
            $conn = new PDO("mysql:host=$servername;dbname=projet4", $username, $password);

             //On vérifie la connexion
             if(!$conn){
                die('Erreur : ' .mysqli_connect_error());
            }

            echo ' Connexion réussie !';
        ?>
    </body>
</html>