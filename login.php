<?php 
    session_start();
    $conn = new mysqli("localhost","root", "","WD40");
    $sql = "SELECT login FROM Logins;";
    $result = $conn->query($sql);
    $row = $result->fetch_all();
    
?>