<style>
    /*create produit*/
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
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        cursor: pointer;
    }

    form input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<form action="/index.php?page=create_produit" method="post">
    <label for="nom">Nom du Produit:</label>
    <input type="text" id="nom" name="nom" required><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea><br>

    <label for="prix">Prix:</label>
    <input type="number" id="prix" name="prix" step="0.01" required><br>

    <label for="categorie">Catégorie:</label>
    <input type="text" id="categorie" name="categorie" required><br>

    <label for="lien_image">Lien de l'image:</label>
    <input type="text" id="lien_image" name="image" required><br>


    <input type="submit" value="Ajouter le Produit">
</form>