<?php

namespace Controllers\Productos;

use Controllers\PublicController;
use Dao\Productos\Products;
use Utilities\Site;
use Views\Renderer;

class NewProds extends PublicController
{
    public function run(): void
    {
        $viewData["productos"] = Products::getAllProducts();
        Site::addLink("public/css/cards.css");
        Renderer::render("productos/newprods", $viewData);
    }
}
