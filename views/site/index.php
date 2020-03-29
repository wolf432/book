<?php
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = '小说';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <? foreach($list as $book):?>
            <div class="col-lg-4">
                <h2><?=$book->name?></h2>

                <p><?=$book->introduction?></p>

                <p><a class="btn btn-default" href="<?=Url::to(['site/book', 'id'=>$book->id])?>">目录</a></p>
            </div>
            <?endforeach;?>
        </div>

    </div>
</div>
