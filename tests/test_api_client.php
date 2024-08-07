<?php


require __DIR__ . '/../src/Model/ApiClient.php';


use App\Model\ApiClient;

$apiClient = new ApiClient();

$categories = $apiClient->fetchCategories();
echo "Categories:\n";
print_r($categories);

$products = $apiClient->fetchAllProducts();
echo "All Products:\n";
print_r($products);


$categoryProducts = $apiClient->fetchProductsByCategory('jewelery');
echo "Products in jewelery Category:\n";
print_r($categoryProducts);


$product = $apiClient->fetchProduct(7);
echo "Product with ID 7:\n";
print_r($product);

