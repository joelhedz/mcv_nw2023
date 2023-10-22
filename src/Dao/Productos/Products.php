<?php

namespace Dao\Productos;


class Products
{
    public static function getAllProducts()
    {
        return array(
            array(
                "productId" => 101,
                "productName" => "Ipad Pro",
                "productDescription" => "Descripción del producto 1",
                "img_url" => "https://placehold.co/300x220?text=Panadol",
                "price" => 100,
                "bar_code" => "00001"
            ),
            array(
                "productId" => 102,
                "productName" => "Iphone 11 Pro max",
                "productDescription" => "Descripción del producto 2",
                "img_url" => "https://placehold.co/300x220?text=Panadol",
                "price" => 100,
                "bar_code" => "00001"
            ),
            array(
                "productId" => 103,
                "productName" => "Laptop Dell i7",
                "productDescription" => "Descripción del producto 3",
                "img_url" => "https://placehold.co/300x220?text=Panadol",
                "price" => 100,
                "bar_code" => "00001"
            ),
        );
    }

    public static function getProductByid($id)
    {
        $product = array();
        $products = self::getAllProducts();

        foreach ($products as $proid) {
            if ($proid["productId"] === $id) {
                $product = $proid;
                break;
            }
        }
        return $product;
    }

    public static function getFeaturedProducts()
    {
        return array(
            array(
                "productId" => 1,
                "productName" => "Panadol",
                "productDescription" => "Descripción del producto 1",
                "img_url" => "https://placehold.co/300x220?text=Panadol",
                "price" => 100,
                "bar_code" => "00001"
            ),
            array(
                "productId" => 2,
                "productName" => "Panadol Ultra",
                "productDescription" => "Descripción del producto 2",
                "img_url" => "https://placehold.co/300x220?text=Panadol",
                "price" => 100,
                "bar_code" => "00001"
            ),
            array(
                "productId" => 3,
                "productName" => "Panadol Gripe y Tos",
                "productDescription" => "Descripción del producto 3",
                "img_url" => "https://placehold.co/300x220?text=Panadol",
                "price" => 100,
                "bar_code" => "00001"
            ),
        );
    }

    public static function getNewProducts()
    {
        return array(
            [
                "productId" => 99,
                "productName" => "Producto 99",
                "productDescription" => "Descripción del producto nuevo 99",
                "img_url" => "https://via.placeholder.com/150",
                "price" => 50.00,
                "bar_code" => "10001"
            ],
            [
                "productId" => 100,
                "productName" => "Producto 100",
                "productDescription" => "Descripción del producto nuevo 100",
                "img_url" => "https://via.placeholder.com/150",
                "price" => 130.00,
                "bar_code" => "10002"
            ]
        );
    }

    public static function getDailyDeals()
    {
        return [
            [
                "productId" => 73,
                "productName" => "Producto 73",
                "productDescription" => "Descripción del producto 73",
                "img_url" => "https://via.placeholder.com/150",
                "price" => 10.00,
                "bar_code" => "11002"
            ],
            [
                "productId" => 15,
                "productName" => "Producto 15",
                "productDescription" => "Descripción del producto 15",
                "img_url" => "https://via.placeholder.com/150",
                "price" => 13.00,
                "bar_code" => "11002"
            ],
            [
                "productId" => 10,
                "productName" => "Producto 10",
                "productDescription" => "Descripción del producto 10",
                "img_url" => "https://via.placeholder.com/150",
                "price" => 20.00,
                "bar_code" => "11002"
            ]
        ];
    }
}
