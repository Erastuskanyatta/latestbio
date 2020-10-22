<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\Vi */
/* @var $model frontend\models\Myprofile */
/* @var $form yii\widgets\ActiveForm */
?>

<br> <br> 
    <!-- header profile-->
    <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-12">
                    
                    <ol class="breadcrumb" style="background-color: DimGrey;" >
                        <li style="font-size: 46px; color: white;">My Profile</li>

                        <li style="padding-left: 580px"><a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['/'])?>">Home</a> </li> 
                        <li>My Application</li>
                        <li>My Profile</li>
                        
                    </ol>
                </div>
            </div>
            <!--end header-->

            <!-- body starts-->

 <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-heading">
                        <h3 style="text-align: center; color: DimGrey;">Fill the following details to create your  <strong>Profile</strong> </h3>  
                        </div>
                        <div class="col-md-3">
                            <div>
                               <img  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/avartar.png"?>" alt="image description" width="200" height="200"> 
                            </div>
                        </div>
                        <div class="col-md-9">
                             <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                                <div class="col-sm-12">    
                                <div class="col-sm-3" style="padding-right:40px ;">
             <?= $form->field($model, 'number')->textInput(['placeholder'=>'Enter your number'])->label(false) ?>
            
        </div>
                                    
                                    <div class="col-sm-3" >
             <?= $form->field($model, 'firstname')->textInput(['placeholder'=>'Enter your firstname'])->label(false) ?>
            
        </div>
        
        <div class="col-sm-3" style="padding-right:40px ;">
             <?= $form->field($model, 'middlename')->textInput(['placeholder'=>'Enter your middlename'])->label(false) ?>
            
        </div>
        <div class="col-sm-3" style="padding-right:40px ;">
             <?= $form->field($model, 'lastname')->textInput(['placeholder'=>'Enter your lastname'])->label(false) ?>
            
        </div>
                                    
                                </div>
                            

                        </div> <br> <br> <br> <br>
                       
                        <div class="col-md-9">
                                <div class="col-sm-12">    
                                <div class="col-sm-3" style="padding-right:40px ;">
             <?= $form->field($model, 'passport')->textInput(['placeholder'=>'passport'])->label(false) ?>
            
        </div>
        <div class="col-sm-3" style="padding-right:40px ;">
        <!-- array dispaying all this country,,the first name appears on the frontend while the 2nd one is saved in the DB -->
        <?php $listData=[
        'Uganda'=>'Uganda',
        'Malawi'=>'Malawi',
        'South Africa'=>'South Africa',   
        'Afghanistan'=>'Afghanistan',
        'Albania'=>'Albania',
        'Algeria'=>'Algeria' ,
        'American Samoa'=>'American Samoa',
        'Andorra'=>'Andorra',
        'Angola'=>'Angola',
        'Kenya'=>'Kenya',
        'China'=>'China',
        'Somalia'=>'Somalia',   
        'Sudan'=>'Sudan',
        'Ghana'=>'Ghana',
        'Nigeria'=>'Nigeria' ,
        'Chad'=>'Chad',
        'Chile'=>'Chile',
        'England'=>'England',


     ];

         echo $form->field($model, 'country')->dropDownList(
       $listData,
       ['prompt'=>'Select...']);
?>
        </div>
                                    <div class="col-sm-3" style="padding-right:40px ;">
             <?= $form->field($model, 'city')->textInput(['placeholder'=>'city'])->label(false) ?>
            
        </div>
        <div class="col-sm-3" style="padding-right:40px ;">
             <?= $form->field($model, 'town')->textInput(['placeholder'=>'town'])->label(false) ?>
            
        </div>
                                    
                                </div>
                           

                        </div> <br> <br> <br> <br>
                        <div class="col-md-9">
                        
                                <div class="col-sm-12">    
                                <div class="col-sm-3" style="padding-right:40px ;" class="date">
             <?= $form->field($model, 'dob')->textInput(['placeholder'=>'date of birth'])->label(false) ?>
            
        </div>
                                       <div class="col-sm-3" style="padding-right:40px ;">
             <?= $form->field($model, 'physicaladdress')->textInput(['placeholder'=>'physicalsddress'])->label(false) ?>
            
        </div>
                                    <div class="col-sm-3" style="padding-right:40px ;">
             <?= $form->field($model, 'passport')->textInput(['placeholder'=>'passport'])->label(false) ?>
            
        </div> 
        <br> <br> <br>
                                    
        <div class="form-group" style="text-align: center">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
                             <?php ActiveForm::end(); ?> 
                             <p style="text-align: center; color: maroon">U have an a/c already?
                             <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/login'])?>">LOGIN</a> 
                             
                             </p>

                        </div>  
                    </div>

                </div>
            </div>

<!-- <div class="myprofile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'number')->textInput(['minlength' => true]) ?>


    <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="form-group">
             <?= $form->field($model, 'firstname')->textInput(['placeholder'=>'Enter your name'])->label(false) ?>
            
        </div>
        
    </div> <br>

    <div class="form-group">
             <?= $form->field($model, 'middlename')->textInput(['placeholder'=>'middlename'])->label(false) ?>
            
        </div>

    <div class="form-group">
             <?= $form->field($model, 'lastname')->textInput(['placeholder'=>'lastname'])->label(false) ?>
            
        </div>

    <div class="form-group">
             <?= $form->field($model, 'passport')->textInput(['placeholder'=>'passport'])->label(false) ?>
            
        </div>

    <div class="form-group">
             <?= $form->field($model, 'country')->textInput(['placeholder'=>'Enter your name'])->label(false) ?>
            
        </div>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'town')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dob')->textInput() ?>

    <?= $form->field($model, 'physicaladdress')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div> -->
