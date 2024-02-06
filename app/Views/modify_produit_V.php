<style>
    /*modify*/

    form {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    form label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    form input,
    form select,
    form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    form textarea {
        height: 100px;
    }

    form input[type="submit"] {
        background-color: #28a745;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        cursor: pointer;
    }

    form input[type="submit"]:hover {
        background-color: #00703c;
    }
</style>

<form action="/index.php?page=modify_produit" method="post">
    <label for="nom">Nom du Produit:</label>
    <?php if (isset($_GET["id"])): ?>
        <input type="text" id="nom" name="nom" value="<?= $article ?>" required><br>
        <input type="hidden" id="produit_id" name="produit_id" value="<?= $article_id ?>" required><br>
    <?php else: ?>
        <select id="nom" name="nom" required onchange="redirectOnChange()">
            <option value="" disabled selected> </option>
            <?php while ($ligne = $req->fetch(PDO::FETCH_ASSOC)): ?>
                <option value="<?= $ligne["produit"] ?>">
                    <?= $ligne["produit"] ?>
                </option>
            <?php endwhile; ?>
        </select><br>
    <?php endif; ?>

    </select><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required><?= $description ?></textarea><br>

    <label for="prix">Prix:</label>
    <input type="number" id="prix" name="prix" step="0.01" value="<?= $prix ?>" required><br>

    <label for="categorie">Catégorie:</label>
    <input id="categorie" name="categorie" value="<?= $categorie ?>" required>

    <label for="lien_image">Lien de l'image:</label>
    <input type="text" id="lien_image" name="image" value="<?= $image ?>" required><br>

    <input type="submit" value="Modifier le Produit">
</form>