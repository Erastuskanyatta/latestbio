<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Coffee */

$this->title = 'Update Coffee: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Coffees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="coffee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
