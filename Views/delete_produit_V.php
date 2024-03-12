<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression de Produit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

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

        form select,
        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

<form action="/index.php?page=delete_produit" method="post">
    <label for="nom">Nom du Produit:</label>
    <?php if (isset($_GET["sel"])): ?>
        <input type="text" value="<?= $nom ?>" required><br>
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

    <input type="submit" value="Détruire le Produit">
</form>

</body>
</html>
