<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $link
 * @property string $image
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'link'], 'required'],
            [['description'], 'string'],
            [['title', 'link'], 'string', 'max' => 255],
            [['image'],'file', 'extensions'=>['png', 'jpg', 'jpeg']]
        ];
    }

    public function upload()
    {
        if ($this->validate() and $this->image->baseName) {
            $this->image->saveAs(Yii::$app->basePath.'/web/uploads/' . $this->image->baseName . '.' . $this->image->extension);
            return true;
        } else {
            return false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Nomi',
            'description' => 'Haqida',
            'link' => 'Link',
            'image' => 'Rasm',
        ];
    }
}
