<?php
use yii\helpers\Url;

$this->title = $info->title;
?>
<div class="row">
    <div class="col-md-8">
        <p><?=$info->title?></p>
    </div>
    <div class="col-md-12">
        <?=$info->content?>

    <div class="row">
        <div class="col-md-3"></div>
        <?if($prev):?>
        <div class="col-md-3">
            <a href="<?=Url::to(['site/article', 'bid' => $bid, 'aid' => $prev['id']])?>">上一页</a>
        </div>
        <?endif;?>

        <div class="col-md-3">
            <a href="<?=Url::to(['site/book', 'id' => $bid])?>">目录</a>
        </div>
        <div class="col-md-3">
            <?if($next):?>
                <a href="<?=Url::to(['site/article', 'bid' => $bid, 'aid' => $next['id']])?>">下一页</a>
            <?endif;?>
        </div>
    </div>
    </div>

</div>