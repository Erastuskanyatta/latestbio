<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\Searchcoffee */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Coffees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coffee-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Coffee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'amount',
            'send',
            'pin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
