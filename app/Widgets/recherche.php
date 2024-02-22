<?php
// Connexion à la base de données
include ($WidgetsPathing."connexion.php");
// Récupération de la recherche
$recherche = $_GET['search'];

// Préparation de la requête
$req = $bdd->prepare('SELECT * FROM articles WHERE produit LIKE :recherche');
$req->execute(array('recherche' => '%' . $recherche . '%'));

// Affichage des résultats
while ($donnees = $req->fetch()) {
    echo '<div class="product">';
    echo '<a class="product-link" href="index.php?page=produit_C&id=' . $donnees['produit'] . '">';
    echo '<img class="product-image" src="' . $donnees['img'] . '" alt="' . $donnees['img'] . '" />';
    echo '<div class="product-details">';
    echo '<h1 class="product-title">' . $donnees['produit'] . '</h1>';
    echo '<p class="product-price">Prix : ' . $donnees['prix'] . '</p>';
    echo '</div></a></div>';
}

$req->closeCursor();
?>