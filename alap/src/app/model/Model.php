<?php

namespace app\model;

use db\Database as Db;

class Model
{


    public static function _findAll($table, $class)
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT * FROM `$table`");
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public static function _findOneById($table, $class, $id)
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT * FROM `$table` WHERE id = :id");
        $statement->execute([
            ':id' => $id,
        ]);
        return $statement->fetchObject($class);
    }

}