<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tags".
 *
 * @property integer $ID
 * @property string $Tag
 *
 * @property TagsArticles[] $tagsArticles
 */
class Tags extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Tags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tag'], 'required'],
            [['Tag'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Tag' => 'Tag',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTagsArticles()
    {
        return $this->hasMany(TagsArticles::className(), ['TagID' => 'ID']);
    }
}
