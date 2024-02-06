<style>
  /*produit*/

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
</style>
<div class="article-container">
  <div class="article-info">
    <h1>
      <?php echo $article; ?>
    </h1>
    <img src="<?php echo $image; ?>" alt="image" />
    <p>Catégorie:
      <?php echo $categorie; ?>
    </p>
  </div>
  <div class="article-details">
    <p>Description:
      <?php echo $description; ?>
    </p>
    <p>Prix:
      <?php echo $prix; ?>
    </p>
  </div>
</div>