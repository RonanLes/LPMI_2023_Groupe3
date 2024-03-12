<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        /* Styles for product list */
        .product-list {
            display: flex;
            flex-direction: column;
            /* Afficher les éléments en colonne */
        }

        .product-item {
            border: 1px solid #ccc;
            margin-bottom: 20px;
            padding: 10px;
            display: flex;
            /* Utilisation de flexbox pour afficher les éléments sur une ligne */
        }

        .product-item img {
            max-width: 100px;
            max-height: 100px;
            margin-right: 20px;
        }

        .product-item-content {
            flex-grow: 1;
            /* Pour que le contenu prenne tout l'espace disponible */
        }

        .product-item-buttons {
            flex-shrink: 0;
            /* Pour que les boutons ne rétrécissent pas */
            margin-left: auto;
            /* Pour pousser les boutons à droite */
        }
    </style>
</head>

<body>
    <h1>Liste des Produits</h1>
    <button>Ajouter un produit</button>
    <div class="product-list">
        <?php include($WidgetsPathing . "connexion.php");
        $req = $dbh->prepare("SELECT * FROM articles");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute(); ?>
        <?php while ($ligne = $req->fetch(PDO::FETCH_ASSOC)): ?>
            <?php
            $article = $ligne["produit"];
            $image = $ligne["img"];
            $prix = $ligne["prix"];
            $description = $ligne["description"]
            ?>

            <div class="product-item">
                <img src="<?= $image ?>" alt="Product Image">
                <div class="product-item-content">
                    <h3>
                        <?= $article ?>
                    </h3>
                    <p>
                        <?= $description ?>
                    </p>
                </div>
                <div class="product-item-buttons">
                    <?= $prix ?>
                    €
                    <button>Edit</button><!--rediriger vers page de modif-->
                    <button>Delete</button><!--faire delete auto-->
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</body>

</html>