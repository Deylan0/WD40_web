<?php 
    session_start();
    $login = $_POST["login"];
    $_SESSION["login"] = $login;
    $conn = new mysqli("localhost","root", "","WD40");
    $sql = "SELECT login FROM Logins;";
    $result = $conn->query($sql);
    $row = $result->fetch_all();
?>