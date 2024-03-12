<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    button {
        background-color: #007bff;
        color: #fff;
        border-radius: 4px;
        font-size: 150%;
    }
</style>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site de vente</title>

    <script src="script.js" defer></script>
</head>

<body>
    <?php
    if (session_status() != PHP_SESSION_ACTIVE) {
        session_start();
    }
    $pathingPublic = ""; //"/app/public/"
    ?>
    <div id="menu" style="display: flex; justify-content: space-between;padding-bottom: 10px;">
        <?php
        echo '<button type="button" onclick="window.location.href=\'' . $pathingPublic . 'index.php?page=liste_produits\'">Liste produits</button>';
        if (!isset($_SESSION["profil"])) {
            echo '<button type="button" onclick="window.location.href=\'' . $pathingPublic . 'index.php?page=login\'">Se connecter</button>';
        } else {
            if ($_SESSION["profil"]) {
                echo '<button type="button" onclick="window.location.href=\'' . $pathingPublic . 'index.php?page=create_produit\'">Ajouter produit</button>';
                echo '<button type="button" onclick="window.location.href=\'' . $pathingPublic . 'index.php?page=modify_produit\'">Modifier produit</button>';
                echo '<button type="button" onclick="window.location.href=\'' . $pathingPublic . 'index.php?page=delete_produit\'">Désintégrer un produit</button>';
            }
            echo '<button type="button" onclick="window.location.href=\'' . $pathingPublic . 'index.php?page=cart_C\'">Panier</button>';
            echo '<button type="button" onclick="window.location.href=\'' . $pathingPublic . 'index.php?page=login&deco=y\'">Se Déconnecter</button>';
            
        }
        echo '<button type="button" onclick="window.location.href=\'' . $pathingPublic . 'index.php?page=CRUD\'">CRUD</button>';
        ?>
    </div>


    <?php
    if (isset($_GET["page"])) {
        include("../Controlers/" . $_GET["page"] . ".php");
    } else {
        include("../Views/acceuil.php");
    }


