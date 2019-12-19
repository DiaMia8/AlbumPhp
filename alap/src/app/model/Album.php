<?php


namespace app\model;


use db\Database;

class Album
{
    private $id;
    private $artist_id;
    private $title;
    private  $released;
    private $genere;
    private $tcc;
    private $sales;
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
    public function getArtistId()
    {
        return $this->artist_id;
    }

    /**
     * @param mixed $artist_id
     */
    public function setArtistId($artist_id)
    {
        $this->artist_id = $artist_id;
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
    public function getReleased()
    {
        return $this->released;
    }

    /**
     * @param mixed $released
     */
    public function setReleased($released)
    {
        $this->released = $released;
    }

    /**
     * @return mixed
     */
    public function getGenere()
    {
        return $this->genere;
    }

    /**
     * @param mixed $genere
     */
    public function setGenere($genere)
    {
        $this->genere = $genere;
    }

    /**
     * @return mixed
     */
    public function getTcc()
    {
        return $this->tcc;
    }

    /**
     * @param mixed $tcc
     */
    public function setTcc($tcc)
    {
        $this->tcc = $tcc;
    }

    /**
     * @return mixed
     */
    public function getSales()
    {
        return $this->sales;
    }

    /**
     * @param mixed $sales
     */
    public function setSales($sales)
    {
        $this->sales = $sales;
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

   public static function findAll(){
        $db = Database::getConnection();
       $sql = "SELECT * FROM album";
       $statement = $db->prepare($sql);
       $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_CLASS,self::class);
   }
   public static function findOneById($id){
       $db = Database::getConnection();
       $sql = "SELECT * FROM album WHERE id = :id";
       $statement = $db->prepare($sql);
       $statement->execute([":id" => $id]);
       return $statement->fetchObject(self::class);
   }

   public function getTracks(){
        return Track::findAllByAlbumId($this->id);

   }

   public function getArtist(){
        return Artist::FindOneById($this->id);
   }
}