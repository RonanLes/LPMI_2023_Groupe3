<?php
if (isset($_SESSION["profil"])) {
    if ($_SESSION["profil"] != true) {
        include "403.php";
        exit();
    } else {


        include($WidgetsPathing."connexion.php");
        $req = $dbh->prepare("SELECT produit FROM articles");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute();

        if (isset($_GET["sel"])) {
            $req = $dbh->prepare("SELECT id FROM articles WHERE produit=:nom");
            $nom = $_GET["sel"];
            $req->bindParam(":nom", $nom);
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $req->execute();
            $sel = $req->fetch(PDO::FETCH_ASSOC);
            
            $req = $dbh->prepare("SELECT * FROM articles WHERE id=:id");
            $req->bindParam(":id", $sel["id"]);
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $req->execute();
            $pre = $req->fetch(PDO::FETCH_ASSOC);
            $article_id = $pre["id"];
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $article_id = $_POST["produit_id"];

            $delete = $dbh->prepare("DELETE FROM articles WHERE id = :id");

            $delete->bindParam(":id", $article_id);


            $delete->execute();
        }
    }
}
?>