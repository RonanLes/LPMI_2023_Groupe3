<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Produit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .article-container {
            display: flex;
            justify-content: space-between;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .article-info {
            width: 50%;
        }

        .article-info h1 {
            color: #333;
        }

        .article-info img {
            max-width: 70%;
            height: auto;
            border-radius: 4px;
            margin-top: 10px;
        }

        .article-details {
            width: 50%;
        }

        .article-details p {
            color: #555;
            margin-bottom: 10px;
        }

        .add-to-cart-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="article-container">
    <div class="article-info">
        <h1><?= $article ?></h1>
        <img src="<?= $image ?>" alt="image" />
        <p>Catégorie: <?= $categorie ?></p>
        <button class="add-to-cart-btn" onclick="window.location.href='/index.php?page=produit_C&id=<?= $article ?>&cart=true'">Ajouter au panier</button>
    </div>
    <div class="article-details">
        <p>Description: <?= $description ?></p>
        <p>Prix: <?= $prix ?></p>
    </div>
</div>

</body>
</html>
