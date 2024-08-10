<?php
$pageTitle = "Category -> " . htmlspecialchars($categoryName, ENT_QUOTES, 'UTF-8');
include 'partials/header.php';
?>
<div class="container">
    <h1 class="mt-4">Products in Category: <?= htmlspecialchars($categoryName, ENT_QUOTES, 'UTF-8') ?></h1>
    <div class="row">
        <?php if ($message): ?>
            <p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></p>
        <?php else: ?>
            <?php if ($products): ?>
                <?php foreach ($products as $product): ?>
                    <div class="col-md-6 mb-4">
                        <div class="card d-flex flex-column h-100">
                            <img src="<?= htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8') ?>"
                                 class="card-img-top"
                                 alt="<?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?>">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><?= htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8') ?></h5>
                                <p class="card-text">
                                    $<?= htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8') ?>
                                </p>
                                <a href="product.php?id=<?= htmlspecialchars($product['id'], ENT_QUOTES, 'UTF-8') ?>"
                                   class="btn btn-primary mt-auto">View Product</a>
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
<?php include 'partials/footer.php'; ?>
