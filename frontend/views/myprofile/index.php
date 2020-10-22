<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\myprofileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Myprofiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="myprofile-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Myprofile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
         ['class' => 'yii\grid\SerialColumn'],

           'id',
            'number',
            'firstname',
            'middlename',
            'lastname',
            'passport',
            'country',
            'city',
            'town',
            'dob',
            'physicaladdress',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
