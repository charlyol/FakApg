<?php

namespace App\Controller;

use App\Model\ApiClient;

class ProductController
{
    private $apiClient;

    public function __construct()
    {
        $this->apiClient = new ApiClient();
    }

    public function index()
    {
        // Page d'accueil
        $categories = $this->apiClient->fetchCategories();
        $products = $this->apiClient->fetchProductsByCategory('jewelery');

        require __DIR__ . '/../View/home.php';
    }

    public function show($productId)
    {
        // Afficher un produit spécifique
        $product = $this->apiClient->fetchProduct($productId);

        require __DIR__ . '/../View/product.php';
    }
}