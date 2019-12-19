<?php


namespace app\model;


use db\Database;

class Artist
{
private $id;
private $name;
private $image;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }


    public static function FindAll(){
        $db = Database::getConnection();
        $sql = "SELECT * FROM artist";
        $statement = $db->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_CLASS,self::class);
    }
    public static function FindOneById($id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM artist WHERE id = :id";
        $statement = $db->prepare($sql);
        $statement->execute([":id" => $id]);
        return $statement->fetchObject(self::class);
    }
}