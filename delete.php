<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.scss">
    <title>Supprimer</title>
</head>
<body>
    
</body>
</html>


<?php

include('database.php');

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Projet supprimé');
    window.location.href='projet.php';
    </script>");

?>


<?php

    $getid=$_GET['ID'];

    $bdd->exec ("DELETE FROM uploadprojet WHERE ID='$getid'");

?>