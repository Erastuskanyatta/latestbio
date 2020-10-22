<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Coffee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container" style="padding-left: 350px;">
  <div class="row"> 
    <div class="col-lg-5">
     <div class="contact-box">
      <div class="panel-title">
      <h3 class="panel-title" style="text-align: center;color:blue;">Buy Me Coffee</h3>
      </div>
        <div class="panel body">
         <div class="col-sm-5">
         <div class="ibox-content no-padding border-left-right">
           <img  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/Coffee.jpg"?>" alt="image description" width="110" height="100">
           <p style="color:blue;">M-pesa<br> 0729096005 / 0706460492</p>
        </div>
         </div>
          <div class="col-sm-7">
           
<div class="coffee-form">
<?php if (Yii::$app->session->getFlash('error') == 1){ ?>
                    <div class="alert alert-danger"><?=  Yii::$app->session->getFlash('error'); ?></div>
                     <?php } ?>
                     <?php if (Yii::$app->session->getFlash('success') !== NULL){ ?>
                      <div class="alert alert-success"><?=  Yii::$app->session->getFlash('success'); ?></div>
                      <?php } ?>


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])  ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'send')->textInput() ?>

    <?= $form->field($model, 'pin')->passwordInput()  ?>
<!-- <?= Html::checkbox('reveal-password', false, ['id' => 'reveal-password']) ?> <?= Html::label('Show password', 'reveal-password') ?> -->
   

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

          </div>
        </div>
     </div>
    </div>
  </div>
</div>
