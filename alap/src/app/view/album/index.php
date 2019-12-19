<?php

use app\model\Album;

?>


<?php /** @var $albums Album */ ?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>List of best-selling albums</h1>
        </div>
    </div>
    <div class="row">
        <?php for($i=0;$i<count($albums);$i++): ?>
        <div class="col-md-4 mt-3">
             <h2 class="mx-2"><?= $albums[$i] -> getTitle()?></h2>
            <img class="img-fluid" src="../img/<?= $albums[$i] -> getImage()?>" alt="cover: <?= $albums[$i] -> getTitle()?>">
            <a href="index.php?controller=album&action=view&id=<?=$albums[$i] -> getId()?>" class="btn btn-primary mx-2 btn-block"> <?= $albums[$i] -> getTitle()?></a>
        </div>
    <?php endfor;?>
    </div>
</div>