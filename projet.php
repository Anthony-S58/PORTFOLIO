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









    <div class="titre_modif"><h1>Gestion des Projets</h1></div>

    <h2>Projets à afficher</h2>
    <div class="modif_projet">
    

            

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
                        
                        <button onclick="return confirm('voulez-vous modifier?')"><a href="modif.php?ID=<?php echo $donnees['ID']?>&Nom=<?php echo $donnees['Nom']?>&Description=<?php echo $donnees['Description']?>&Lien=<?php echo $donnees['Lien']?>&Image=<?php echo $donnees['Image']?>&Masquer=<?php echo $donnees['Masquer']?>">Modifier</a></button>
                    <button onclick="return confirm('voulez-vous supprimer?')"><a href="delete.php?ID=<?php echo $donnees['ID']?>">Supprimer</a></button>
                    </div>
                    

</div>
<?php
}
?>

</div>


<h2>Projets à cacher</h2>
<div class="modif_projet">


        

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
                    
                    <button onclick="return confirm('voulez-vous modifier?')"><a href="modif.php?ID=<?php echo $donnees['ID']?>&Nom=<?php echo $donnees['Nom']?>&Description=<?php echo $donnees['Description']?>&Lien=<?php echo $donnees['Lien']?>&Image=<?php echo $donnees['Image']?>&Masquer=<?php echo $donnees['Masquer']?>">Modifier</a></button>
                <button onclick="return confirm('voulez-vous supprimer?')"><a href="delete.php?ID=<?php echo $donnees['ID']?>">Supprimer</a></button>
                </div>
                

</div>
<?php
}
?>

</div>
</body>
</html>

