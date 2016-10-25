<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Articles".
 *
 * @property integer $ID
 * @property integer $AutorID
 * @property string $Published
 * @property string $Tittle
 * @property string $Content
 * @property string $PreContent
 *
 * @property Autors $autor
 * @property TagsArticles[] $tagsArticles
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Articles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AutorID', 'Published', 'Tittle', 'Content', 'PreContent'], 'required'],
            [['AutorID'], 'integer'],
            [['Published'], 'safe'],
            [['Content', 'PreContent'], 'string'],
            [['Tittle'], 'string', 'max' => 200],
            [['AutorID'], 'exist', 'skipOnError' => true, 'targetClass' => Autors::className(), 'targetAttribute' => ['AutorID' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'AutorID' => 'Autor ID',
            'Published' => 'Published',
            'Tittle' => 'Tittle',
            'Content' => 'Content',
            'PreContent' => 'Pre Content',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAutor()
    {
        return $this->hasOne(Autors::className(), ['ID' => 'AutorID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTags()
    {
        return $this->hasMany(Tags::className(), ['id' => 'TagsID'])
			    ->viaTable(Connect::tableName(), ['AtricleID' => 'id']);
        
    }

    /**
     * @inheritdoc
     * @return \app\models\querry\ArticlesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\querry\ArticlesQuery(get_called_class());
    }
public function getItemsList()
{
    return \yii\helpers\ArrayHelper::map(Tags::find(), 'id', 'name');
}
   
}
