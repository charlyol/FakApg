<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controller\CategoryController;

if (isset($_GET['name'])) {
    $controller = new CategoryController();
    $controller->index($_GET['name']);
} else {
    echo "Category name is missing.";
}