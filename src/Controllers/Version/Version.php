<?php

namespace Controllers\Version;

use Controllers\PublicController;
use DAO\Version\Version as VersionDAO;
use Views\Renderer;

class Version extends PublicController
{
    public function run(): void
    {
        $versions = VersionDAO::getAllVersion();
        $viewData = [];
        $viewData["version"] = $versions;
        $viewData["hasVersionRows"] = count($versions) && true;
        Renderer::render("version/version", $viewData);
    }
}
