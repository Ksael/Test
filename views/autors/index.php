<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AutorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Авторы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="autors-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать автора', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            
            
            //'ID',
             //'Name',
            //'Email:email',
            //'about:ntext',
            [ 'label' => 'Имя',
              'attribute' => 'Name',
                'filter'=>\app\models\Autors::find()->select(['name','id'])->indexBy('id')->column(),
            ],
            [ 'label' => 'Email',
              'attribute' => 'Email'
            ],
            [ 'label' => 'Описание',
              'attribute' => 'about'
            ],
           

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
