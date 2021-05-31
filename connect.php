<?php

    session_start(); 

                if($_POST['user']=='Anthony' && $_POST['password']=='Admin') {
                header('location:sommaire.php');
                    $_SESSION['acces'] = 'oui';
                }else header("location:admin.php?message=error");

?>