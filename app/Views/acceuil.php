<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>

<body>
    <?php
    include("../Widgets/connexion.php");
    $req = $dbh->prepare("SELECT * FROM categorie");
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $req->execute();
    ?>
    <form id="search-form">
        <input type="text" name="keyword" placeholder="Mot-clé">
        <select name="category">
            <option value="">Toutes catégories</option>
            <?php while ($ligne = $req->fetch(PDO::FETCH_ASSOC)): ?>
                <option value="<?= $ligne["id"] ?>">
                    <?= $ligne["nom"] ?>
                </option>
            <?php endwhile; ?>
            <!--
        <option value="1">abi</option>
        <option value="2">mangé</option>
        <option value="3">joujou</option>
        <option value="4">itech</option>
        <option value="5">outi</option>
        <option value="6">film</option>
        <option value="7">gourde</option>
        <option value="8">mat</option>
        <option value="9">colié</option>
        <option value="10">animal</option>
    -->
        </select>
        <input type="number" name="min_price" placeholder="Prix min">
        <input type="number" name="max_price" placeholder="Prix max">
        <button type="submit">Rechercher</button>
    </form>
    <?php
    // Connexion à la base de données
    $mysqli = new mysqli('localhost', 'root', '', 'php');

    // Vérifier la connexion
    if ($mysqli->connect_error) {
        die('Erreur de connexion à la base de données : ' . $mysqli->connect_error);
    }

    // Construire la requête SQL en fonction des critères de recherche
    $sql = "SELECT * FROM articles WHERE 1=1"; // La condition 1=1 permet de construire dynamiquement la requête
    
    if (!empty($_GET['keyword'])) {
        $sql .= " AND produit LIKE '%" . $mysqli->real_escape_string($_GET['keyword']) . "%'";
    }

    if (!empty($_GET['category'])) {
        $sql .= " AND categorie = '" . $mysqli->real_escape_string($_GET['category']) . "'";
    }

    if (!empty($_GET['min_price'])) {
        $sql .= " AND prix >= " . intval($_GET['min_price']);
    }

    if (!empty($_GET['max_price'])) {
        $sql .= " AND prix <= " . intval($_GET['max_price']);
    }

    // Exécuter la requête SQL
    $result = $mysqli->query($sql);

    // Afficher les résultats
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div>';
            echo '<h2>' . htmlspecialchars($row['produit']) . '</h2>';
            echo '<p>' . htmlspecialchars($row['description']) . '</p>';
            echo '<p>Prix: $' . htmlspecialchars($row['prix']) . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>Aucun produit trouvé.</p>';
    }

    // Fermer la connexion à la base de données
    $mysqli->close();
    ?>



    <?php
    echo "Accueil";
    ?>

</body>

</html>