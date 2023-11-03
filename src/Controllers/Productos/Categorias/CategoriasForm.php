<?php


namespace Controllers\Productos\Categorias;

use Controllers\PublicController;
use DAO\Productos\Categoria as CategoriaDao;
use Utilities\Site;
use Utilities\Validators;
use Views\Renderer;

class CategoriasForm extends PublicController
{
    private $listUrl = "index.php?page=Productos_Categorias_CategoriasList";
    private $mode = 'INS';
    private $viewData = [];
    private $error = [];
    private $xss_token = '';
    private $modes = [
        "INS" => "Creando nueva Categoria",
        "UPD" => "Editando %s (%s)",
        "DEL" => "Eliminando %s (%s)",
        "DSP" => "Detalle de %s (%s)"
    ];
    private $categorias = [
        "id" => -1,
        "name" => "",
        "status" => "AC",
        "create_time" => ""
    ];

    public function run(): void
    {
        $this->init();
        if ($this->isPostBack()) {
            if ($this->validateFormData()) {
                $this->categorias["name"] = $_POST["name"];
                $this->categorias["status"] = $_POST["status"];
                $this->processAction();
            }
        }
        $this->prepareViewData();
        $this->render();
    }

    private function init()
    {
        if (isset($_GET["mode"])) {
            /*busca en el arreglo modes cual mode se va ejecutar */
            if (isset($this->modes[$_GET["mode"]])) {
                $this->mode = $_GET["mode"];
                if ($this->mode !== "INS") {
                    if (isset($_GET["id"])) {
                        $this->categorias = CategoriaDao::getCategoriabyId(
                            intval($_GET["id"])
                        );
                    }
                }
            } else {
                $this->handleError("Oops, el programa no encuentra el modo solicitado, intente de nuevo.");
            }
        } else {
            $this->handleError("Oops, el programa fallo, intente de nuevo");
        }
    }

    private function validateFormData()
    {
        //Validar cross site scripting
        if (isset($_POST["xss_token"])) {
            $this->xss_token = $_POST["xss_token"];
            if ($_SESSION["xss_token_categoria_form"] !== $this->xss_token) {
                error_log("CategoriaForm: Validación de xss Fallo");
                $this->handleError("Error al procesar la petición");
                return false;
            }
        } else {
            error_log("CategoriaForm: Validación de xss Fallo");
            $this->handleError("Error al procesar la petición");
            return false;
        }

        //Si el nombre no esta vació
        if (Validators::IsEmpty($_POST["name"])) {
            $this->error["name_error"] = "Campo es requerido!";
        }
        //Sean las opciones correctas
        if (!in_array($_POST["status"], ["INA", "AC"])) {
            $this->error["status_error"] = "Estado de la categoría es inválido.";
        }
        return count($this->error) == 0;
    }

    private function processAction()
    {
        switch ($this->mode) {
            case 'INS':
                if (CategoriaDao::crearCategorias(
                    $this->categorias["name"],
                    $this->categorias["status"]
                )) {
                    Site::redirectToWithMsg($this->listUrl, "Categoria registrada exitosamente!");
                }
                break;
            case 'UPD':
                if (CategoriaDao::actualizarCategoria(
                    $this->categorias["id"],
                    $this->categorias["name"],
                    $this->categorias["status"]
                )) {
                    Site::redirectToWithMsg($this->listUrl, "Categoria actualizada exitosamente!");
                }
                break;
            case 'DEL':
                if (CategoriaDao::deleteCategorias(
                    $this->categorias["id"]
                )) {
                    Site::redirectToWithMsg($this->listUrl, "Categoria eliminada exitosamente!");
                }
                break;
        }
    }

    private function prepareViewData()
    {
        $this->viewData["mode"] = $this->mode;
        $this->viewData["categorias"] =  $this->categorias;
        if ($this->mode == "INS") {
            $this->viewData["modedsc"] = $this->modes[$this->mode];
        } else {
            $this->viewData["modedsc"] = sprintf(
                $this->modes[$this->mode],
                $this->categorias["name"],
                $this->categorias["id"]
            );
        }
        /*setting category to root*/
        $this->viewData["categorias"][$this->categorias["status"] . "_selected"] = 'selected';
        //add errors Form input

        foreach ($this->error as $key => $error) {
            $this->viewData["categorias"][$key] = $error;
        }

        $this->viewData["readonly"] = in_array($this->mode, ["DSP", "DEL"]) ? 'readonly' : '';
        $this->viewData["showConfirm"] = $this->mode !== "DSP";

        //protegiendo de cross site scripting 
        $this->xss_token = md5("categoriaForm" . date('Ymdhisu'));
        $_SESSION["xss_token_categoria_form"] = $this->xss_token;
        $this->viewData["xss_token"] = $this->xss_token;
    }

    private function render()
    {
        Renderer::render("productos/categorias/form", $this->viewData);
    }

    private function handleError($errMsg)
    {
        Site::redirectToWithMsg("index.php?page=Productos_Categorias_CategoriasList", $errMsg);
    }
}
