<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controller\ProductController;

if (isset($_GET['id'])) {
    $controller = new ProductController();
    $controller->show($_GET['id']);
} else {
    echo "Product ID is missing.";
}