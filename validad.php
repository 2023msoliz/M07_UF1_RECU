<?php

$llistaUsuaris = array("joan", "anna", "carlos", "maria", "carla");
$sessio_nomusuari = $_POST['usuari'];
$sessio_login = $_POST['login'] = true;
$sessio_accepta = assert($_POST['condicions']) ? 1 : 0;


for($i = 0; $i < count($llistaUsuaris); $i++) {
    if ($llistaUsuaris[$i] == $sessio_nomusuari) {
        header('Location: resultat.php');
    } else {
        include "login.html";
        echo "Usuari no trobat";
    }
}
?>