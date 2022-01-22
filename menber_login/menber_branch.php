<?php
session_start();
session_regenerate_id(true);
if(isset($_SESSION["login"]) === false) {
    print "ログインしていません。<br><br>";
    print "<a href='staff_login.html'>ログイン画面へ</a>";
    exit();
}



if(isset($_POST["delete"]) === true) {
    if(isset($_POST["code"]) === false) {
        header("Location:menber_ng.php");
        exit();
    } 
    $code = $_POST["code"];
    header("Location:menber_delete.php?code=".$code);
    exit();
}
?>