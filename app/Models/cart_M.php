<?php
include($WidgetsPathing . "connexion.php");

foreach ($_SESSION['cart'] as $productId) {

}
$req = $dbh->prepare("SELECT * FROM articles");
$req->setFetchMode(PDO::FETCH_ASSOC);
$req->execute();

while ($ligne = $req->fetch(PDO::FETCH_ASSOC)):
    $article = $ligne["produit"];
    $image = $ligne["img"];
    $prix = $ligne["prix"];
endwhile;