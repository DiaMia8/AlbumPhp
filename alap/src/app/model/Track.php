<?php


namespace app\model;


use db\Database;

class Track
{
    private $id;
    private $no;
    private $title;
    private $length;
    private $album_id;

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
    public function getNo()
    {
        return $this->no;
    }

    /**
     * @param mixed $no
     */
    public function setNo($no)
    {
        $this->no = $no;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return mixed
     */
    public function getAlbumId()
    {
        return $this->album_id;
    }

    /**
     * @param mixed $album_id
     */
    public function setAlbumId($album_id)
    {
        $this->album_id = $album_id;
    }

    public static function FindAll(){
        $db = Database::getConnection();
        $sql = "SELECT * FROM track";
        $statement = $db->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_CLASS,self::class);
    }
    public static function FindOneById($id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM track WHERE id = :id";
        $statement = $db->prepare($sql);
        $statement->execute();
        return $statement->fetchObject(self::class);
    }

    public static function findAllByAlbumId($id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM track WHERE album_id = :id";
        $statement = $db->prepare($sql);
        $statement->execute([":id" => $id]);
        return $statement->fetchAll(\PDO::FETCH_CLASS,self::class);
}
}