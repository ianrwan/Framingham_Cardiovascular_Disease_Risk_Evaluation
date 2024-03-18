<?php
    session_start();
    require_once("php_function/admin.php");
    getWord("Framingham Cardiovascular Disease Risk Evaluation");
    header("location: ".$_SESSION["current_page"]);
?>
