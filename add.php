<!-- connexion à la base de donnée -->

<?php

 include('database.php');

  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Ajout effectué avec succès !');
    window.location.href='formulaire.php';
    </script>");
    
?> 


<?php

$nom = $_POST['Nom'];
$description = $_POST['Description'];
$lien = $_POST['Lien'];
$image = $_POST['Image'];
$afficher = $_POST['Afficher'];


$bdd->exec
("INSERT INTO uploadprojet(Nom, Description, Lien, Image, Masquer)
VALUES('$nom', '$description', '$lien', '$image', '$masquer')");

?>