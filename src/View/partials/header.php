<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/public/assets/img/gallery/favicon.ico">
    <?php
    if (!empty($categoryName)) {
        $pageTitle = htmlspecialchars($categoryName, ENT_QUOTES, 'UTF-8');
    } elseif (!empty($product['title'])) {
        $pageTitle = htmlspecialchars($product['title'], ENT_QUOTES, 'UTF-8');
    } else {
        $pageTitle = 'Home Page';
    }
    ?>
    <title><?= $pageTitle ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#">Fake Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <?php
                $currentPage = basename($_SERVER['PHP_SELF']);
                ?>
                <?php if ($currentPage !== 'index.php'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Back home <span class="sr-only"></span></a>
                    </li>
                <?php endif; ?>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php foreach ($categories as $category): ?>
                            <li><a class="dropdown-item" href="category.php?name=<?= rawurlencode($category) ?>">
                                    <?= htmlspecialchars($category, ENT_QUOTES, 'UTF-8') ?>
                                </a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
            <form class="d-flex ms-auto me-5" action="search.php" method="GET">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
