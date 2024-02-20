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
    $req = $dbh->prepare("SELECT * FROM admin WHERE login=:nom");
    $req->bindParam(":nom", $username);
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $req->execute();
    $ligne = $req->fetch(PDO::FETCH_ASSOC);

    if ($ligne["password"] == $password) {
        $_SESSION["user_id"] = $ligne["login"];
        $_SESSION["profil"] = true;
        include ($Vpathing."acceuil.php");
        exit();
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }

}
?>