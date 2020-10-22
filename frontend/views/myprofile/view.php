<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Myprofile */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Myprofiles', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class>
<div class="myprofile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p> -->

    <div class="container">
      <div class="row">
       <div class="col-md-12"> 
        <div class="panel-body">
          <div class="col-md-4">
            <div>
             <h3 style="color: grey">PERSONAL INFORMATION</h3>
              <img  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/avartar.png"?>" alt="image description" width="200" height="200"> 
            </div>
          </div>
          <div  class="col-md-8" style="color: black">
            <p> 
            <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
         // 'id',
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
        
    ],
    
    ]) ?>
   
   

            </p>
          </div>
        </div>
       </div>
      </div>
    </div>
  
    <p  class="panel-title" style="text-align: center">
        <?= Html::a('Update My Profile', ['update', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Delete My Profile', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item? It Will Be deleted COMPLETELY',
                'method' => 'post',
            ],
        ]) ?>
        <a class="btn btn-primary"  style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/login'])?>">LOGIN</a>
    </p>

   


<!-- 
   <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
         // 'id',
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
        
    ],
    
    ]) ?>
    -->
   
    
  
    
</div>

</div>

<br> <br> 


