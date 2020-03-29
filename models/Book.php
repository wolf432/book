<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $name
 * @property string $author
 * @property string $introduction
 * @property int $finish 0连载,1完结
 * @property int $origin_id 抓取网站的id
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['finish', 'origin_id'], 'integer'],
            [['origin_id'], 'required'],
            [['name'], 'string', 'max' => 100],
            [['author'], 'string', 'max' => 30],
            [['introduction'], 'string', 'max' => 500],
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
            'name' => '书名',
            'author' => '作者',
            'introduction' => '简介',
            'finish' => '连载状态',
            'origin_id' => '源id',
        ];
    }
}
