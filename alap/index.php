<?php
spl_autoload_register(function($class) {
    include './src/' . str_replace('\\', '/', $class) . '.php';
});

use app\model\Album;
use db\Database;
//$valami =Album::findAll();
//var_dump($valami);
//die();

use app\controller\AlbumController;

$conf = include('config.php');

$controllerName = ucfirst((isset($_GET['controller']))?$_GET['controller']:"album") . "Controller";
$actionName = "action" . ucfirst( (isset($_GET['action']))?$_GET['action']:"index");

if($controllerName == 'AlbumController'){
    $controller = new AlbumController();

}



if($actionName == 'actionView'){
    $content = $controller->$actionName($_GET['id']);
}
else {
    $content = $controller->$actionName();
}








?>
<!DOCTYPE html>
<html lang="<?= $conf['language']?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $controller->title; ?> - <?= $conf['site-name'];?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/kepregeny.css">
</head>
<body>

<?php include('menu.php') ?>



<?= $content; ?> 

 <script src="js/jquery-3.3.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>
