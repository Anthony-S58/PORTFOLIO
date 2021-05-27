<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.scss">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php
include('database.php');

?>

<?php

$reponse = $bdd->query('SELECT * FROM uploadprojet');
// $reponse = $bdd->query("SELECT * FROM uploadprojet WHERE Masquer = 'oui'");




?>






<h1>Gestion des projets</h1>

<?php

while ($donnees = $reponse ->fetch()) {

?>

<div class="projets">
                    
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front" style="background-image:url(IMG/<?php echo $donnees['Image']?>)">
                            </div>
                            <div class="flip-box-back">
                            <h3><?php echo $donnees['Nom'].'</h3><br>'?><br>
                                <p><?php echo $donnees['Description']?></p><br>
                                <a href="<?php echo $donnees['Lien']?>" target="_blank"><button>Visiter</button></a>

                            </div>
                        </div>
                        <br>
                        
                        <a href="modif.php"><button>Modifier</button></a>
                    <a href="delete.php"><button>Supprimer</button></a>
                    </div>
                    

</div>
<?php
}
?>