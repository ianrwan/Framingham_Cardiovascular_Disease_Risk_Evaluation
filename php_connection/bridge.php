<?php
    session_start();
    require_once "../php_main/php_function/admin.php";

    $_SESSION["user"] = $_SESSION["username"];
    $_SESSION["status"] = array("login"=>$_SESSION["loggedin"], "user"=>$_SESSION["user"]);

    $chooseChar = getSpecificDataFromMySQLWithUser($_SESSION["user"], "account", "choose_char");
    $_SESSION["choose_char"] = $chooseChar[0]["choose_char"];
    
    // echo "<script>alert(".$_SESSION["choose_char"].")</script>";

    if($_SESSION["choose_char"] == 1)
    {
        $data = getSpecificDataFromMySQLWithUser($_SESSION["user"], "personal_data", "character");
        $_SESSION["character"] = $data[0]["character"];
        header("location: ../php_main/personal_page.php");
    }
    else
    {
        header("location: ../php_main/select_char.php");
    }
?>
