<?php
    $user = "root";
    $pass = "";
    $dbh = new PDO('mysql:host=localhost;dbname=php',$user,$pass);
    $dbh->setAttribute(PDO::ATTR_PERSISTENT, PDO::ERRMODE_EXCEPTION);
?>