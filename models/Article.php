<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property int $book_id
 * @property string $content
 * @property int $origin_id 抓取网站的id
 * @property string $title
 * @property string $create_time
 * @property int $status 0:未抓取,1已抓取
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['book_id', 'content', 'origin_id'], 'required'],
            [['book_id', 'origin_id', 'status'], 'integer'],
            [['content'], 'string'],
            [['create_time'], 'safe'],
            [['title'], 'string', 'max' => 200],
            [['origin_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'book_id' => 'Book ID',
            'content' => 'Content',
            'origin_id' => '抓取网站的id',
            'title' => 'Title',
            'create_time' => 'Create Time',
            'status' => '0:未抓取,1已抓取',
        ];
    }
}
