<?php

namespace Controllers;

use Views\Renderer;

class FichaDev extends PublicController
{
    private $viewData = array();
    public function run(): void
    {
        $this->viewData["nombre"] = "Joel Humberto Hernandez";
        $this->viewData["correo"] = "joelhumberto334@gmail.com";
        Renderer::render("fichadev", $this->viewData);
    }
}
