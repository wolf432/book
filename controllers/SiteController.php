<?php

namespace app\controllers;

use app\models\Article;
use app\models\Book;
use Yii;
use yii\web\Controller;

class SiteController extends Controller
{

    public function actionIndex(){
        $bookModel = new Book();
        $list   = $bookModel->find()->orderBy('id desc')->all();
        return $this->render('index', ['list' => $list]);
    }

    public function actionBook($id){
        $book = Book::find($id)->one();
        $articleModel = new Article();
        $list = $articleModel->find(['book_id' => $id])->select('title, id, create_time')->all();
        return $this->render('book', ['list' => $list, 'book' => $book]);
    }

    public function actionArticle($bid, $aid){
        $info = Article::find()->where(['id' => $aid])->one();

        //上一页
        $prev = Yii::$app->db->createCommand("select id from article where id < {$aid} order by id desc limit 1")->queryOne();
        //下一页
        $next = Yii::$app->db->createCommand("select id from article where id > {$aid} limit 1")->queryOne();

        //删除抓取网站的信息
        $info->content = preg_replace("/http[s]:\/\/.*/", '', $info->content);

        return $this->render('article', ['info' => $info, 'prev' => $prev, 'next' => $next, 'bid' => $bid]);
    }
}
