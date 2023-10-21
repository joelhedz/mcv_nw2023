<?php

namespace DAO\Version;

use Dao\Table;

class Version extends Table
{
    public static function createVersion($version, $description)
    {
        $InsertSQL = "INSERT INTO version (version,description,create_at) values (:version, :description, NOW())";

        $params = [
            "version" => $version,
            "description" => $description
        ];
        self::executeNonQuery($InsertSQL, $params);
    }

    public static function getAllVersion()
    {
        $SelQuery = "Select * from version;";
        return self::obtenerRegistros($SelQuery, []);
    }
}
