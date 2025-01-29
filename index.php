<?php include 'includes/header.php'; ?>
<section class="hero">
  <h1>Bienvenue chez MAMA AFRICA</h1>
  <p>Frais, authentique, 100% africain.</p>
  <a href="catalog.php" class="btn">Voir le menu</a>
</section>
<section class="popular">
  <h2>Repas populaires</h2>
  <div class="products">
    <?php
    include 'includes/db.php';
    $query = "SELECT * FROM products LIMIT 4";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='product'>
                <img src='assets/images/{$row['image']}' alt='{$row['name']}'>
                <h3>{$row['name']}</h3>
                <p>{$row['price']} €</p>
                <a href='product.php?id={$row['id']}' class='btn'>Voir</a>
              </div>";
    }
    ?>
  </div>
</section>
<?php include 'includes/footer.php'; ?>

<form method="POST" action="">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name" required>

  <label for="email">Email:</label>
  <input type="email" name="email" id="email" required>

  <label for="date">Date:</label>
  <input type="date" name="date" id="date" required>

  <label for="message">Message:</label>
  <textarea name="message" id="message"></textarea>

  <button type="submit">Reserve</button>
</form>