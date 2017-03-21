<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $image
 */
class About extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            [
                'class' => '\yiidreamteam\upload\FileUploadBehavior',
                'attribute' => 'image',
                'filePath' => '@webroot/../../frontend/web/uploadsAbout/[[pk]].[[extension]]',
                'fileUrl' => '/uploadsAbout/[[pk]].[[extension]]',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
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
