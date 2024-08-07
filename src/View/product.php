<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/img/gallery/favicon.ico">
    <title>Product - <?= htmlspecialchars($product['title'] ?? 'Product') ?></title>
</head>
<body>
<div class="container">
    <h1 class="mt-4"><?= htmlspecialchars($product['title'] ?? 'Product Title') ?></h1>
    <div class="row">
        <div class="col-md-6">
            <img src="<?= htmlspecialchars($product['image'] ?? '#', ENT_QUOTES, 'UTF-8') ?>" class="img-fluid" alt="<?= htmlspecialchars($product['title'] ?? 'Product Image') ?>">
        </div>
        <div class="col-md-6">
            <h3>$<?= htmlspecialchars($product['price'] ?? '0.00', ENT_QUOTES, 'UTF-8') ?></h3>
            <p><?= htmlspecialchars($product['description'] ?? 'No description available', ENT_QUOTES, 'UTF-8') ?></p>
            <p><strong>Category:</strong> <?= htmlspecialchars($product['category'] ?? 'Unknown', ENT_QUOTES, 'UTF-8') ?></p>
            <a href="index.php" class="btn btn-secondary">Back to Home</a>
        </div>
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
