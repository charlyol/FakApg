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
        $endpoint = "/products/category/{$category}";
        return $this->makeApiRequest($endpoint);
    }

    public function fetchProduct($id)
    {
        $endpoint = "/products/{$id}";
        return $this->makeApiRequest($endpoint);
    }

    public function fetchAllProducts()
    {
        $endpoint = '/products';
        return $this->makeApiRequest($endpoint);
    }

    private function makeApiRequest($endpoint)
    {
        $url = $this->baseUrl . $endpoint;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }
}