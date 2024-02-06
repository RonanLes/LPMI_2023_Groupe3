<?php

if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}

if (isset($_GET["deco"])) {
    if ($_GET["deco"] == "y") {
        $_SESSION = array();
        echo "Vous avez été déconnecter";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Vérifie les informations de connexion

    include( $WidgetsPathing."connexion.php");
    $req = $dbh->prepare("SELECT * FROM users WHERE username=:nom");
    $req->bindParam(":nom", $username);
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $req->execute();
    $ligne = $req->fetch(PDO::FETCH_ASSOC);

    if ($ligne["password"] == $password) {
        $_SESSION["user_id"] = $ligne["username"];
        $_SESSION["profil"] = $ligne["profil"];
        include ($Vpathing."acceuil.php");
        exit();
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }

}
?>