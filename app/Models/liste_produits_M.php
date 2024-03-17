<?php
include($WidgetsPathing . "connexion.php");
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM articles WHERE produit LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM articles";
}
$req = $dbh->prepare($sql);
$req->setFetchMode(PDO::FETCH_ASSOC);
$req->execute();
//$res = $req->fetchAll();

