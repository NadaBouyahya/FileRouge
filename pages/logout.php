<?php 
    session_start();
    $_SESSION["id_donor"] = "";

    header ("location: homePage.php");
?>