<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/gallery/favicon.ico">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-4">Products in Category: <?= htmlspecialchars($categoryName, ENT_QUOTES, 'UTF-8') ?></h1>

    <div class="row">
        <?php if ($message): ?>
            <p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></p>
        <?php else: ?>
            <?php if ($products): ?>
                <?php foreach ($products as $product): ?>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="<?= htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8') ?>" class="card-img-top" alt="<?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?></h5>
                                <p class="card-text">$<?= htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8') ?></p>
                                <a href="product.php?id=<?= htmlspecialchars($product['id'], ENT_QUOTES, 'UTF-8') ?>" class="btn btn-primary">View Product</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No products found for this category.</p>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
<div class="col-md-6">
    <a href="index.php" class="btn btn-secondary">Back to Home</a>
</div>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
