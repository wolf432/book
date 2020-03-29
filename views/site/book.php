<?php
use yii\helpers\Url;

$this->title = $book->name;
?>

<div class="row">
    <?foreach($list as $article):?>
    <div class="col-md-4">
        <p><a href="<?=Url::to(['site/article', 'bid' => $book->id, 'aid' => $article->id])?>"><?=$article->title?></a></p>
    </div>
    <?endforeach;?>
</div>
