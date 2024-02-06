<?php

if (isset($_SESSION["profil"])) {
    if ($_SESSION["profil"] != true) {
        include "403.php";
        exit();
    } else {
        include($WidgetsPathing."connexion.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = $_POST["nom"];
            $description = $_POST["description"];
            $prix = $_POST["prix"];
            $categorie = $_POST["categorie"];
            $img = $_POST["image"];

            $insert = $dbh->prepare("INSERT INTO articles(produit, img, prix, categorie, description) VALUES (:nom, :img, :prix,:categorie, :descr)");

            $insert->bindParam(":nom", $nom);
            $insert->bindParam(":img", $img);
            $insert->bindParam(":prix", $prix);
            $insert->bindParam(":categorie", $categorie);
            $insert->bindParam(":descr", $description);

            $insert->execute();
        }
    }
}
?>