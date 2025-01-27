<?php
include 'includes/db.php';
include 'includes/header.php';

$categoryId = $_GET['id'];
$products = $pdo->prepare("SELECT * FROM products WHERE category_id = ?");
$products->execute([$categoryId]);
$products = $products->fetchAll();
?>

<div class="container mt-4">
    <h1>Produits de la catégorie</h1>
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
