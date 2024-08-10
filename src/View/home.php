<?php
$pageTitle = "Welcome to the Fake Store";
include 'partials/header.php';
shuffle($products);
$selectedProducts = array_slice($products, 0, 12);
$featuredProducts = array_slice($selectedProducts, 0, 4);
$featuredListProducts = array_slice($selectedProducts, 4, 12);
?>
<style>
    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .carousel-item {
        height: 400px;
    }

    .carousel-item img {
        object-fit: cover;
        width: 100%;
        height: 100%;
        object-position: center;
    }
</style>
<div class="container mt-4">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php foreach ($featuredProducts as $index => $product): ?>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?= $index ?>" class="<?= $index === 0 ? 'active' : '' ?>" aria-current="<?= $index === 0 ? 'true' : 'false' ?>" aria-label="Slide <?= $index + 1 ?>"></button>
            <?php endforeach; ?>
        </div>
        <div class="carousel-inner">
            <?php foreach ($featuredProducts as $index => $product): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>" data-bs-interval="5000">
                    <a href="product.php?id=<?= htmlspecialchars($product['id'], ENT_QUOTES, 'UTF-8') ?>">
                        <img src="<?= htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8') ?>" class="d-block w-100" alt="<?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?>">
                        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center text-center">
                            <h5 class="text-primary"><?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?></h5>
                            <p class="text-primary">$<?= htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container mt-4">
    <h2>Featured Products</h2>
    <div class="row">
        <?php foreach ($featuredListProducts as $product): ?>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <img src="<?= htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8') ?>" class="card-img-top"
                         alt="<?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?>">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?></h5>
                        <p class="card-text">$<?= htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8') ?></p>
                        <a href="product.php?id=<?= htmlspecialchars($product['id'], ENT_QUOTES, 'UTF-8') ?>"
                           class="btn btn-primary mt-auto">View Product</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'partials/footer.php'; ?>
