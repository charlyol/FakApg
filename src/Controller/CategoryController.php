<?php

namespace App\Controller;

use App\Model\ApiClient;

class CategoryController
{
    private $apiClient;

    public function __construct()
    {
        $this->apiClient = new ApiClient();
    }

    public function index($categoryName)
    {
        // Liste des produits par catégorie
        $products = $this->apiClient->fetchProductsByCategory($categoryName);

        require __DIR__ . '/../View/category.php';
    }
}