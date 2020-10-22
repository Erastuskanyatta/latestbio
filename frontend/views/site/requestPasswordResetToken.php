<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-request-password-reset">
    <h1><?= Html::encode($this->title) ?></h1>
    <br> <br>
    <p class="panel-title" style="text-align: center; color: white;">Please fill out your email. A link to reset password will be sent there. </p>
   <div class="container" id="login-wrapper">
    <div class="row">
      <div class="col-md-12 col-md-offset-4">
        <div class="col-lg-3">
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    
        
      </div>
    </div>
   </div>
     
   
        
   
</div>
<!--start style-->
<style>
html, body {
	background: black;
	-webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
	box-shadow: inset 0 0 100px rgba(0,0,0,.5);
	height: 100%;
	min-height: 100%;
	position: relative;
}
</style>

<!--end styles -->

