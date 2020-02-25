
<?php
    if(isset($_POST['zoeken'])){
        $_SESSION['zoekWoord'] = $_POST['zoekWoord'];
        if(basename($_SERVER['PHP_SELF']) == "search.php"){
            reloadPost();
        }
        else{
            header('Location: search.php');//ga naar zoek pagina
        }
    }
 ?>
