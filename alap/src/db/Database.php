<?php


namespace db;


class Database
{
private static $conn = null;


    public static function getConnection()
    {
        if (null == self::$conn)
        {
            $conf = include ("config.php");

            self::$conn = new\PDO($conf["db"]["dsn"],$conf["db"]["user"],$conf["db"]["password"]);
        }
        return self::$conn;
    }
}