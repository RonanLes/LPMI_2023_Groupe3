<?php
include($WidgetsPathing."connexion.php");
$req = $dbh->prepare("SELECT * FROM articles");
$req->setFetchMode(PDO::FETCH_ASSOC);
$req->execute();
//$res = $req->fetchAll();
?>