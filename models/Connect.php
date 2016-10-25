<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Connect".
 *
 * @property integer $ID
 * @property integer $ArticleID
 * @property integer $TagID
 *
 * @property Tags $tag
 * @property Articles $article
 */
class Connect extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Connect';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ArticleID', 'TagID'], 'required'],
            [['ArticleID', 'TagID'], 'integer'],
            [['TagID'], 'exist', 'skipOnError' => true, 'targetClass' => Tags::className(), 'targetAttribute' => ['TagID' => 'ID']],
            [['ArticleID'], 'exist', 'skipOnError' => true, 'targetClass' => Articles::className(), 'targetAttribute' => ['ArticleID' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'ArticleID' => 'ArticleID',
            'TagID' => 'Tag ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTag()
    {
        return $this->hasOne(Tags::className(), ['ID' => 'TagID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticle()
    {
        return $this->hasOne(Articles::className(), ['ID' => 'ArticleID']);
    }
}
