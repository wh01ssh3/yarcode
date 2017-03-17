<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $image
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'team';
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

    public function behaviors()
    {
        return [
            [
                'class' => '\yiidreamteam\upload\FileUploadBehavior',
                'attribute' => 'image',
                'filePath' => '@webroot/../../frontend/web/uploads/[[pk]].[[extension]]',
                'fileUrl' => '/uploads/[[pk]].[[extension]]',
            ],
        ];
    }
}
