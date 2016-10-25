<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Autors".
 *
 * @property integer $ID
 * @property string $Name
 * @property string $Email
 * @property string $about
 *
 * @property Articles[] $articles
 */
class Autors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Autors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Email', 'about'], 'required'],
            [['about'], 'string'],
            [['Name'], 'string', 'max' => 60],
            [['Email'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Name' => 'Name',
            'Email' => 'Email',
            'about' => 'About',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Articles::className(), ['AutorID' => 'ID']);
    }
}
