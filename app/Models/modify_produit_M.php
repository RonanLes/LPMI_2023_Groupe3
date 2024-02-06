<?php
if (isset($_SESSION["profil"])) {
    if ($_SESSION["profil"] != true) {
        include "403.php";
        exit();
    } else {
        $article = "";
        $image = "";
        $description = "";
        $prix = "";
        $categorie = "";

        include($WidgetsPathing."connexion.php");
        $req = $dbh->prepare("SELECT produit FROM articles");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute();

        if (isset($_GET["sel"])) {
            $req = $dbh->prepare("SELECT id FROM articles WHERE produit=:nom");
            $req->bindParam(":nom", $_GET["sel"]);
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $req->execute();
            $sel = $req->fetch(PDO::FETCH_ASSOC);
            header("Location: http://" . $_SERVER['HTTP_HOST'] . "/index.php?page=modify_produit&id=" . strval($sel["id"]));
            exit;

        }
        if (isset($_GET["id"])) {
            $req = $dbh->prepare("SELECT * FROM articles WHERE id=:id");
            $req->bindParam(":id", $_GET["id"]);
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $req->execute();
            $pre = $req->fetch(PDO::FETCH_ASSOC);
            $article_id = $pre["id"];
            $article = $pre["produit"];
            $image = $pre["img"];
            $description = $pre["description"];
            $prix = $pre["prix"];
            $categorie = $pre["categorie"];
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $article_id = $_POST["produit_id"];
            $nom = $_POST["nom"];
            $description = $_POST["description"];
            $prix = $_POST["prix"];
            $img = $_POST["image"];

            $update = $dbh->prepare("UPDATE articles SET produit = :nom, img = :img, prix = :prix, description = :descr WHERE id = :id");

            $update->bindParam(":id", $article_id);
            $update->bindParam(":nom", $nom);
            $update->bindParam(":img", $img);
            $update->bindParam(":prix", $prix);
            $update->bindParam(":descr", $description);

            $update->execute();
        }
    }
}
?>