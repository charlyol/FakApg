<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Category - Fake Store</title>
</head>
<body>
<div class="container">
    <h1 class="mt-4"><?= ucfirst($categoryName) ?> Products</h1>

    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?= $product['image'] ?>" class="card-img-top" alt="<?= $product['title'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['title'] ?></h5>
                        <p class="card-text">$<?= $product['price'] ?></p>
                        <a href="product.php?id=<?= $product['id'] ?>" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>