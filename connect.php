<?php

    session_start(); 

                if($_POST['user']=='Anthony' && $_POST['password']=='SpecialcharAS') {
                header('location:sommaire.php');
                    $_SESSION['acces'] = 'oui';
                }else header("location:admin.php?message=error");

?>