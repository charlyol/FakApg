<?php
$pageTitle = htmlspecialchars($product['title'] ?? 'Product', ENT_QUOTES, 'UTF-8');
include 'partials/header.php';
?>
    <div class="container">
        <h1 class="mt-4"><?= htmlspecialchars($product['title'] ?? 'Product Title') ?></h1>
        <div class="row">
            <div class="col-md-6">
                <img src="<?= htmlspecialchars($product['image'] ?? '#', ENT_QUOTES, 'UTF-8') ?>" class="img-fluid"
                     alt="<?= htmlspecialchars($product['title'] ?? 'Product Image') ?>">
            </div>
            <div class="col-md-6">
                <h3>$<?= htmlspecialchars($product['price'] ?? '0.00', ENT_QUOTES, 'UTF-8') ?></h3>
                <p><?= htmlspecialchars($product['description'] ?? 'No description available', ENT_QUOTES, 'UTF-8') ?></p>
                <p>
                    <strong>Category:</strong> <?= htmlspecialchars($product['category'] ?? 'Unknown', ENT_QUOTES, 'UTF-8') ?>
                </p>
                <a href="index.php" class="btn btn-dark">Buy it</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <a href="index.php" class="btn btn-secondary">Back to Home</a>
    </div>
<?php include 'partials/footer.php'; ?>