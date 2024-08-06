<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controller\ProductController;

$controller = new ProductController();
$controller->index();