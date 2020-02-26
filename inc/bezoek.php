<?php

    $button = $_POST['bezoek'];

    if(isset($button)){
        header('Location: profile.php');
        $_SESSION['bezoekPagina'] = $button;
    }

 ?>
