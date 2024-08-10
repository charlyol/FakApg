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
        try {
            $categories = $this->apiClient->fetchCategories();

            $products = $this->apiClient->fetchProductsByCategory($categoryName);

            if (empty($products)) {
                $message = "No products found for this category.";
            } else {
                $message = null;
            }

            require __DIR__ . '/../View/category.php';
        } catch (\Exception $e) {
            $message = "An error occurred while fetching products: " . $e->getMessage();
            require __DIR__ . '/../View/error.php';
        }
    }
}
