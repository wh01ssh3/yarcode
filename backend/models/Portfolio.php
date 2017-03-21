<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $image
 */
class Portfolio extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            [
                'class' => '\yiidreamteam\upload\FileUploadBehavior',
                'attribute' => 'image',
                'filePath' => '@webroot/../../frontend/web/uploadsPortfolio/[[pk]].[[extension]]',
                'fileUrl' => '/uploadsPortfolio/[[pk]].[[extension]]',
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['title', 'category', 'date', 'client'], 'string', 'max' => 255],
            [['image'], 'file']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
        ];
    }
}
