<?php

namespace app\models;

use Yii;
use yii2tech\ar\linkmany\LinkManyBehavior;

/**
 * This is the model class for table "objects".
 *
 * @property int $id
 * @property string $name
 * @property string $image
 *
 * @property ObjectsCategory[] $objectsCategories
 * @property Category[] $categories
 */
class Objects extends \yii\db\ActiveRecord
{
    public $upload_image;

    public function behaviors()
    {
        return [
            'linkGroupBehavior' => [
                'class' => LinkManyBehavior::className(),
                'relation' => 'categories',
                'relationReferenceAttribute' => 'category_ids',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'objects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
            ['category_ids', 'safe'],
            [['image'], 'file', 'extensions' => 'png, jpg'],
            [['upload_image'], 'file', 'extensions' => 'png, jpg', 'skipOnEmpty' => true],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'image' => 'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['id' => 'category_id'])->viaTable('objects_category', ['objects_id' => 'id']);
    }
}
