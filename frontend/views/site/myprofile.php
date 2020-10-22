<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\views\MyprofileForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>

    <br> <br> <br> <br> <br> <br>
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
                        <h3 style="text-align: center; color: DimGrey;">My Profile</h3>  
                        </div>
                        <div class="col-md-3">
                            <div>
                               <img  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/avartar.png"?>" alt="image description" width="200" height="200"> 
                            </div>
                        </div>
                        <div class="col-md-9">
                             <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                                <div class="col-sm-12">    
                                    <div class="col-sm-3"  style="padding-right:40px ;">
                                        Mobile number <br>
                                        <input type="number" name="number" required="true">
                                    </div> 
                                       <div class="col-sm-3"  style="padding-left:40px ;" >
                                        First Name <br>
                                        <input type="firstname" name="firstname" required="true">
                                    </div>
                                    <div class="col-sm-3"  style="padding-left:40px ;">
                                        Middle Name <br>
                                        <input type="middlename" name="middlename" required="true">
                                    </div>
                                    <div class="col-sm-3"  style="p;" >
                                        Lastname <br>
                                        <input type="lastname" name="lastname" required="true">
                                    </div>
                                    
                                </div>
                            

                        </div> <br> <br> <br> <br>
                       
                        <div class="col-md-9">
                                <div class="col-sm-12">    
                                    <div class="col-sm-3"  style="padding-right:40px ;">
                                        ID number/Passport <br>
                                        <input type="passport" name="passport" required="true">
                                    </div> 
                                       <div class="col-sm-3"  style="padding-left:40px ;" >
                                        Nationality <br>
                                        <select name="country">
                                    <option>choose Country</option>
                                            <option value="2">Afghanistan </option>
                                            <option value="14">Kenya</option>

<option value="3">Albania </option>
<option value="4">Algeria </option>
<option value="5">American Samoa</option>
<option value="6">Andorra</option>
<option value="7">Angola</option>
<option value="8">Anguilla </option>
<option value="9">Antarctica</option>
<option value="10">Antigua and Barbuda</option>
<option value="11">Argentina </option>
<option value="12">Armenia</option>
<option value="13">Aruba</option>
<option value="14">Australia</option>




                                        </select>
                                    </div>
                                    <div class="col-sm-3"  style="padding-left:40px ;">
                                        City  <br>
                                        <input type="middlename" name="City" required="true">
                                    </div>
                                    <div class="col-sm-3"  style="p;" >
                                        Town<br>
                                        <input type="lastname" name="town" required="true">
                                    </div>
                                    
                                </div>
                           

                        </div> <br> <br> <br> <br>
                        <div class="col-md-9">
                        
                                <div class="col-sm-12">    
                                    <div class="col-sm-3"  style="padding-right:40px ;">
                                        Date Of Birth <br>
                                        <input type="Date" name="dob" class="calendar" required="true">
                                    </div> 
                                       <div class="col-sm-3"  style="padding-left:40px ;" >
                                        Physical address <br>
                                        <input type="physicaladdress" name="pysicaladdress" required="true">
                                    </div>
                                    <div class="col-sm-3"  style="padding-left:40px ;">
                                        Passport Photo <br>
                                        <input type="file" name="passport">
                                    </div>
                                    <div class="col-sm-3"  style="p;" >
                                        Id Picture <br>
                                        <input type="file" name="idpic" >
                                    </div>
                                    
                                </div>
                                <div class="form-group">
        <button type="submit" class="btn btn-success btn-lg">Save</button>         <a class="btn btn-success" href="/applications/apply" title="view"><span class="fa fa-tachometer"></span>  Go To Application Dashboard</a> 
    </div>
                             <?php ActiveForm::end(); ?> <br> <br> <br>

                        </div>  
                    </div>

                </div>
            </div>


            <!--ends body-->
          <style>

                body {
                      background-image: url("as/image/gum.jpg");
                     }
          </style>

