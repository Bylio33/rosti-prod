<?php
include 'includes/db.php';
include 'includes/header.php';

// Récupérer les catégories et produits
$categories = $pdo->query("SELECT * FROM categories")->fetchAll();
$products = $pdo->query("SELECT * FROM products LIMIT 6")->fetchAll();
?>

<div class="container mt-4">
    <h1>Bienvenue sur notre site e-commerce</h1>
    <h2>Catégories</h2>
    <div class="row">
        <?php foreach ($categories as $category): ?>
            <div class="col-md-4">
                <h3><?php echo $category['name']; ?></h3>
                <a href="categories.php?id=<?php echo $category['id']; ?>" class="btn btn-primary">Voir Produits</a>
            </div>
        <?php endforeach; ?>
    </div>

    <h2>Produits en vedette</h2>
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name']; ?></h5>
                        <p class="card-text"><?php echo $product['price']; ?> XAF</p>
                        <a href="products.php?id=<?php echo $product['id']; ?>" class="btn btn-success">Voir Détails</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
