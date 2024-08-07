<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/assets/img/gallery/favicon.ico">
    <title>Home</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-4">Welcome to the Fake Store</h1>

    <h2 class="mt-4">Categories</h2>
    <div class="list-group">
        <?php foreach ($categories as $category): ?>
            <a href="category.php?name=<?= urlencode($category) ?>" class="list-group-item"><?= htmlspecialchars(ucfirst($category), ENT_QUOTES, 'UTF-8') ?></a>
        <?php endforeach; ?>
    </div>

    <h2 class="mt-4">Featured Products</h2>
    <div class="row">
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
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
