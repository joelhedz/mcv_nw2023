<?php

namespace DAO\Productos;

use Dao\Table;

class Categoria extends Table
{
    public static function getCategorias()
    {
        $sqlQuery = "SELECT * FROM categorias";
        return self::obtenerRegistros($sqlQuery, []);
    }

    public static function getCategoriabyId($id)
    {
        $sqlQuery = "SELECT * from categorias where id=:id;";
        $params = ["id" => $id];
        return self::obtenerUnRegistro($sqlQuery, $params);
    }

    public static function crearCategorias($name, $status)
    {
        $params = [
            "name" => $name,
            "status" => $status
        ];
        $sqlQuery = "INSERT INTO categorias (name,status,create_time) values(:name,:status,NOM());";
        return self::executeNonQuery($sqlQuery, $params);
    }

    public static function actualizarCategoria($id, $name, $status)
    {
        $sqlQuery = "UPDATE categorias set name=:name,status=:status where id=:id;";
        $params = [
            "name" => $name,
            "status" => $status,
            "id" => $id
        ];
        return self::executeNonQuery($sqlQuery, $params);
    }

    public static function deleteCategorias($id)
    {
        $sqlQuery = "DELETE * FROM categorias where id = :id;";
        $params = ["id" => $id];
        return self::executeNonQuery($sqlQuery, $params);
    }
}
