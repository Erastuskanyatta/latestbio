<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Myprofile */

$this->title = 'Create Myprofile';
$this->params['breadcrumbs'][] = ['label' => 'Myprofiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="myprofile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
