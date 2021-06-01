
<?php

ob_start();
// if (!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['message'])) {

    $name=HTMLSpecialChars($_POST['name']);
    $mail=HTMLSpecialChars($_POST['mail']);
    $message=HTMLSpecialChars($_POST['message']);

?>

    <?php

    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['mail'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('a.simonneau@codeur.online', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['mail']);

            if($retour){
            echo '<p>Votre message a été envoyé.</p>';
            header('Refresh: 3; url="index.php#contact"');
            ob_flush();
        }

            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>






