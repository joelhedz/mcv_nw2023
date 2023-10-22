<?php

namespace  Controllers;

use \Dao\Productos\Products as ProductsDao;
use Utilities\Site;
use \Views\Renderer as Renderer;

class HomeController extends PublicController
{
    public function run(): void
    {
        $viewData = [];
        $viewData["productsOnSale"] = ProductsDao::getDailyDeals();
        $viewData["productsHighlighted"] = ProductsDao::getFeaturedProducts();
        $viewData["productsNew"] = ProductsDao::getNewProducts();
        Site::addLink("public/css/productStyle.css");
        Renderer::render("home", $viewData);
    }
}
