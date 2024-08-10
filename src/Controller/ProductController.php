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
        $categories = $this->apiClient->fetchCategories();
        $products = $this->apiClient->fetchHomePageProducts();

        require __DIR__ . '/../View/home.php';
    }

    public function show($productId)
    {
        try {
            if (empty($productId)) {
                throw new \Exception('Product ID is missing.');
            }

            // Récupération des catégories
            $categories = $this->apiClient->fetchCategories();

            $product = $this->apiClient->fetchProduct($productId);

            if (!$product) {
                throw new \Exception('Product not found.');
            }

            require __DIR__ . '/../View/product.php';
        } catch (\Exception $e) {
            error_log("Error fetching product: " . $e->getMessage());
            require __DIR__ . '/../View/error.php';
        }
    }



}
