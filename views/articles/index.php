<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticlesSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Статьи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать статью', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            

            //'ID',
            [ 'label' => 'Автор',
              'attribute' => 'AutorID',
              'filter'=>\app\models\Autors::find()->select(['name','id'])->indexBy('id')->column(),
             'value' => function (\app\models\Articles $model) {
                return $model->autor->Name;
            },
            ],
            /*[ 'label' => 'Теги',
	     'value' => function ( $model) {
                          return implode(', ',  \yii\helpers\ArrayHelper::map(\app\models\Tags::find()->asArray()->all(), 'ID', 'ID'));}
 
            ],*/
            [ 'label' => 'Опубликовано',
              'attribute' => 'Published'
            ],
            [ 'label' => 'Заголовок',
                'attribute' => 'Tittle'
            ],
            //'Content:ntext',
            [ 'label' => 'Подпись',
              'attribute' => 'PreContent'
            ],
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
