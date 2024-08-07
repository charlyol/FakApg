<?php

namespace App\Model;

class ApiClient
{
    private $baseUrl;

    public function __construct()
    {
        $this->baseUrl = 'https://fakestoreapi.com';
    }

    public function fetchCategories()
    {
        $endpoint = '/products/categories';
        return $this->makeApiRequest($endpoint);
    }

    public function fetchProductsByCategory($category)
    {
        $encodedCategory = rawurlencode($category); // Encodage de la catégorie
        $endpoint = "/products/category/{$encodedCategory}";
        $response = $this->makeApiRequest($endpoint);

        if (is_array($response) && !empty($response)) {
            return $response;
        } else {
            throw new \Exception("API request failed or returned empty for category: {$category}");
        }
    }

    public function fetchHomePageProducts()
    {
        $categories = $this->fetchCategories();
        $products = [];

        foreach ($categories as $category) {
            try {
                $categoryProducts = $this->fetchProductsByCategory($category);

                if ($categoryProducts === null || empty($categoryProducts)) {
                    continue;
                }

                shuffle($categoryProducts);
                $selectedProducts = array_slice($categoryProducts, 0, 2);
                $products = array_merge($products, $selectedProducts);
            } catch (\Exception $e) {
                // Log the exception or handle it
                error_log($e->getMessage());
                continue;
            }
        }
        shuffle($products);
        return $products;
    }
    public function fetchProduct($id)
    {
        $endpoint = "/products/{$id}";
        return $this->makeApiRequest($endpoint);
    }

    private function makeApiRequest($endpoint)
    {
        $url = $this->baseUrl . $endpoint;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
            curl_close($ch);
            throw new \Exception("cURL error: {$error_msg}");
        }

        curl_close($ch);
        return json_decode($response, true);
    }
}
