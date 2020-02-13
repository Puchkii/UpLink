
<?php
    if(isset($_POST['logout']))
    {
        $_SESSION['current'] = "";
        $_SESSION['wachtwoordCheck'] = "";
        reloadPost();
    }
 ?>
