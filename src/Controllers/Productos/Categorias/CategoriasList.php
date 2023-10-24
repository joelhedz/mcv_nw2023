<?php

namespace Controllers\Productos\Categorias;

use Controllers\PublicController;
use DAO\Productos\Categoria;
use Views\Renderer;

class CategoriasList extends PublicController
{
    public function run(): void
    {
        $dataView = [];
        $dataView["categorias"] = Categoria::getCategorias();

        Renderer::render('productos/categorias/lista', $dataView);
    }
}
