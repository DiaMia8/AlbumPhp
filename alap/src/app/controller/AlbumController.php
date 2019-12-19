<?php
namespace app\controller;

use app\model\Album;

class AlbumController extends MainController
{
    protected $controllerName = 'album';


    public function actionIndex()
    {
        $albums = Album::findAll();
        return $this->render('index', [
            'albums' => $albums,
        ]);

    }

    public function actionView($id)
    {
        $album = Album::findOneById($id);
        $tracks = $album->getTracks();
        $artist = $album->getArtist();

    return $this->render('view', [
        'album' => $album,
        'tracks' => $tracks,
        'srtist' => $artist,
    ]);
    }
}