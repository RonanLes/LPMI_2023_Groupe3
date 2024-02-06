<?php
    include ($WidgetsPathing."connexion.php");
    $req = $dbh->prepare("SELECT * FROM articles where produit='$_GET[id]'");
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $req->execute();

    $ligne = $req->fetch(PDO::FETCH_ASSOC); //fetch_row + fetch_assoc = fetch_array
    
    $article = $ligne["produit"];
    $image = $ligne["img"];
    $description = $ligne["description"];
    $prix = $ligne["prix"];
    $categorie = $ligne["categorie"];
    
?>