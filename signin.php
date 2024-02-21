<?php 
    session_start();
    $login = $_POST["login"];
    $conn = new mysqli("localhost","root", "","WD40");
    $sql = "SELECT login FROM Logins;";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if($row["login"] == $login){
        $_SESSION["permission"] = true;
        header("Location: IndexCzlonek");
        exit();
    }else{
        header("Location: signinForm");
        exit();
    }
?>