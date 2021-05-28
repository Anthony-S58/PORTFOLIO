<?php

include('database.php');

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Projet modifié avec succès !');
    window.location.href='projet.php';
    </script>");

?>


<?php

$getid=$_GET['ID'];
$nom = $_POST['Nom'];
$description = $_POST['Description'];
$lien = $_POST['Lien'];
$image = $_POST['Image'];
$masquer = $_POST['Masquer'];


$bdd->exec
("UPDATE uploadprojet SET
 Nom='$nom', Description='$description', Lien='$lien', Image='$image', Masquer='$masquer'
WHERE ID=$getid");

?>