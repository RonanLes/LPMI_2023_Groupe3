<style>
    /*liste produit*/
    #product-container {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 20px;
    }

    .form-container {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .form-container h2 {
        text-align: center;
    }

    input[type="text"],
    input[type="submit"] {
        padding: 10px;
        margin: 10px 0;
        width: 100%;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .product {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        background-color: #fff;
        text-align: center;
        transition: transform 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .product:hover {
        transform: scale(1.05);
        border: 2px solid grey;
    }

    .product-link {
        display: block;
        text-decoration: none;
        color: inherit;
        height: 100%;
    }

    .product-image {
        width: 100%;
        height: 75%;
        object-fit: cover;
        border-bottom: 1px solid #ddd;
    }

    .product-details {
        flex-grow: 1;
    }

    .product-title {
        font-size: 1em;
        color: #333;
    }

    .product-price {
        color: #777;
    }

</style>

<div id="product-container">
    <div class="form-container">
        <h2>Formulaire de Recherche</h2>
        <form method="get" action="">
            <input type="text" name="search" placeholder="Rechercher par produit">
            <input type="submit" value="Rechercher">
        </form>
    </div>

    <?php while ($ligne = $req->fetch(PDO::FETCH_ASSOC)): ?>
        <?php
        $article = $ligne["produit"];
        $image = $ligne["img"];
        $prix = $ligne["prix"];
        ?>

        <div class="product">
            <a class="product-link" href="index.php?page=produit_C&id=<?= $article ?>">
                <img class="product-image" src="<?= $image ?>" alt="<?= $article ?>" />
                <div class="product-details">
                    <h1 class="product-title">
                        <?= $article ?>
                    </h1>
                    <p class="product-price">Prix :
                        <?= $prix ?>
                    </p>
                </div>
            </a>
        </div>

    <?php endwhile; ?>
</div>