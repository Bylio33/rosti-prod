<?php
include 'includes/db.php';
include 'includes/header.php';

$productId = $_GET['id'];
$product = $pdo->prepare("SELECT * FROM products WHERE id = ?");
$product->execute([$productId]);
$product = $product->fetch();
?>

<div class="container mt-4">
    <h1><?php echo $product['name']; ?></h1>
    <img src="images/<?php echo $product['image']; ?>" class="img-fluid" alt="<?php echo $product['name']; ?>">
    <p><?php echo $product['description']; ?></p>
    <p><?php echo $product['price']; ?> XAF</p>
    <a href="cart.php?id=<?php echo $product['id']; ?>" class="btn btn-primary">Ajouter au Panier</a>
</div>

<?php include 'includes/footer.php'; ?>
