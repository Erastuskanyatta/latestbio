<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <br> <br>
    <div container="container"  id="login-wrapper">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="panel-panel default">
           <div class="panel-heading" style="color: white">
               <h3 class="w3-title" style="text-align: center">Contact Me</h3>
               <p style="color: white">
                 For any question I will be available to help you any time..
               </p>
           </div>  
            <div panel-body style="color: white">
              <div class="col-lg-12" style="color: white">
                <?php if (Yii::$app->session->getFlash('error') == NULL){ ?>
                    <div class="alert alert-danger"><?=  Yii::$app->session->getFlash('error'); ?></div>
                     <?php } ?>
                     <?php if (Yii::$app->session->getFlash('success') !== NULL){ ?>
                      <div class="alert alert-success"><?=  Yii::$app->session->getFlash('success'); ?></div>
                      <?php } ?>

            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?= $form->field($model, 'name')->textInput(['maxlength' => true])?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <?php //$form->field($model, 'verifyCode')->widget(Captcha::className(), [
                //     'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                // ]) 
                ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>

<style>html, body {
  background: black;
  -webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
  box-shadow: inset 0 0 100px rgba(0,0,0,.5);
  height: 100%;
  min-height: 100%;
  position: relative;
}
#login-wrapper {
  position: relative;
  top: 30%;
}
#login-wrapper .registration-block {
  margin-top: 15px;
}</style>
 