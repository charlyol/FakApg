<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Product - <?= $product['title'] ?></title>
</head>
<body>
<div class="container">
    <h1 class="mt-4"><?= $product['title'] ?></h1>
    <div class="row">
        <div class="col-md-6">
            <img src="<?= $product['image'] ?>" class="img-fluid" alt="<?= $product['title'] ?>">
        </div>
        <div class="col-md-6">
            <h3>$<?= $product['price'] ?></h3>
            <p><?= $product['description'] ?></p>
            <p><strong>Category:</strong> <?= ucfirst($product['category']) ?></p>
            <a href="index.php" class="btn btn-secondary">Back to Home</a>
        </div>
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>