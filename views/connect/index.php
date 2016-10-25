<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ConnectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Теги статей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="connect-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить тегов', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            
            [ 'label' => 'ID статьи',
              'attribute' => 'ArticleID',
               
            ],
            [ 'label' => 'Статья',
              'attribute' => 'ArticleID',
                'value' => function (\app\models\Connect $model) {
                return $model->article->Tittle; }
            ],
            [ 'label' => 'Тег',
              'attribute' => 'TagID',
               'value' => function (\app\models\Connect $model) {
                return $model->tag->Tag; }
            ],
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
