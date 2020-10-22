<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
<br> <br> <br>
<div class="card">
    <h3 class="panel-title" style="text-align: center; color: white;">Please fill the detais below to login.  </h3>

<div class="container" id="login=wrapper">
  <div class="col-md-12 col-md-offset-4">
  <div class="row">
    <div class="col-lg-5" class="gray-bg">
    <div>



</div>
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

      <!--   <div class="field-wrap">
          <label for="">
           email address <span class="req">*</span>
          </label>
         <input type="email" requared autocomplete="off" name="email"/>
        </div> -->

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div class="container">
              <div class="col-md-4" style="color: red;">
              Forgot password?? <?= Html::a('reset it', ['site/request-password-reset']) ?>
              </div > 
              <div class="col-md-4"   style="color: maroon; font-weight: bold;">
              Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
              </div>
              
                <br>
                
            </div>

            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

        <?php ActiveForm::end(); ?>
    </div>
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

   
