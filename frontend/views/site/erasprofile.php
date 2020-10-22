<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <!-- admin members contact start-->
    <!-- header-->
     <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Contacts</h2>
                    <ol class="breadcrumb">
                        <li><a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/adminhome'])?>">Admin Home</a> </li> 
                        
                        <li class="active">
                           <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/erasprofile'])?>">Eras profile</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!--end header-->
            <!-- admin members contact start-->
    

            <!--body start-->
            <div class="wrapper wrapper-content">
                <div class="row animated fadeInRight">
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <h3 class="inbox-title" style="text-align: center">Profile Details</h3>
                        </div>
                        <div class="ibox-content no-padding border-left-right">
                             <img  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/Er.png"?>" alt="image description" width="340" height="350"> 
                        </div>
                        <div class="ibox-content profile-content">
                            <h4> Erastus Muriithi </h4> <br>
                            1010010-112 <strong>Nyeri</strong> <br> <br>
                            <h3 style: color: white;>About Me</h3> 
                            <p>Hello!Am Erastus Muriithi..<br>Chief Founder of Sudo Coders<br>
                            I am a Software Engineer at Copy Cat Company Kenya..<br>Besides that,am a student at Meru University of science and Technology where Iam undertaking <br> 
                            Bachelor of Science In Computer science.  <br>
                            Sudo coders is formed by<a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['team/create'])?>"> 4 students</a>(including me)who are from meru university.
                            <br>Since we formed this group,we have benefitted alot in terms of codding and we believe that within the next 5years
                            </p> <br>
                            <div class="row m-t-lg">
                                <div class="col-md-4">
                                   <div class="col-md-4">
                                        <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                                        <h5><strong>28</strong> Following</h5>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="user-button">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-success btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-coffee"></i>
                                            <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['coffee/create'])?>">Buy me coffee</a> 
                                             </button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="ibox float-e-margins">
                            <div class="ibox float-e-margins">
                            <h3 class="inbox-title" style="text-align: center">Activities</h3>
                        </div>
                        </div>
                        <div class="ibox-content">
                            <div class="feed-activity-list">
                                <div class="pull-left">
                                     <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/t.jpg"?>" alt="image description" width="50" height="50">
                                </div>
                                 <div class="media-body">
                             <small class="pull-right text-navy">1m ago</small>
                           <h5>
                           <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/twishprofile'])?>">  Twish</a> 
                            started following 
                            <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/erasprofile'])?>">  You</a> 
                            <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/Er.png"?>" alt="image description" width="50" height="50">
                             </h5> <br>
                           <strong>
                               <small class="text-muted">Today 12:11 pm-09/12/2020</small> <br>
                           </strong>
                           
                               <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> like</a>
                                            
                                                <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> love </a>               
                          
                            </div>

                                    
                        </div>
                       
                        </div>

                        <div class="ibox-content">
                            <div class="feed-activity-list">
                                <div class="pull-left">
                                     <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/14.jpg"?>" alt="image description" width="50" height="50">
                                </div>
                                 <div class="media-body">
                             <small class="pull-right text-navy">1m ago</small>
                           <h5>
                             <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/jeffmwangiprofile'])?>">  Jeff Mwangi</a>started following 
                             <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/erasprofile'])?>">  You</a> 
                             <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/9.jpg"?>" alt="image description" width="50" height="50">
                            </h5> <br>
                            <strong>
                                 <small class="text-muted">Today 12:11 pm-09/12/2020</small> <br>
                            </strong>

                               <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> like</a>
                                            
                                                <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> love </a>               
                          
                            </div>
                        
                    </div>
                </div>
                <div class="ibox-content">
                            <div class="feed-activity-list">
                                <div class="pull-left">
                                     <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/t.jpg"?>" alt="image description" width="50" height="50">
                                </div>
                                 <div class="media-body">
                             <small class="pull-right text-navy">1m ago</small>
                           <h5>
                           <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/twishprofile'])?>">  Twish</a> 
                            started following 
                            <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/erasprofile'])?>">  You</a> 
                            <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/9.jpg"?>" alt="image description" width="50" height="50">
                             </h5> <br>
                           <small class="text-muted">Today 12:11 pm-09/12/2020</small> <br>
                           
                               <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> like</a>
                                            
                                                <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> love </a>               
                          
                            </div>

                                    
                        </div>
                       
                        </div>



                <div class="ibox-content">
                            <div class="feed-activity-list">
                                <div class="pull-left">
                                     <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/9.jpg"?>" alt="image description" width="50" height="50">
                                </div>
                                 <div class="media-body">
                             <small class="pull-right text-navy">15hours ago</small>
                           <h5>
                            <strong>
                                 <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/erasprofile'])?>">  You</a>Wrote a message to   
                              <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/twishprofile'])?>">      Twish</a>
                           </strong>  
                                     <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/t.jpg"?>" alt="image description" width="50" height="50">
                                
                                </h5> 
                           
                           <strong>
                            <small class="text-muted">yesterday 6:11 pm-07/11/2020</small> 
                           </strong>
                           <p>
                             Hae,,Qst for u ,,how do we call a model in yii2,,?<strong>kindly help..Am stuck </strong>
                           </p>
                            <div class="pull-left">
                                     <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/t.jpg"?>" alt="image description" width="50" height="50">
                                </div>
                              <strong>
                                 <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/twishprofile'])?>">  Twish</a>replied to your message   
                              <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/erasprofile'])?>">      You</a>
                           </strong>  
                                     <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/9.jpg"?>" alt="image description" width="50" height="50">
                                
                                </h5>
                               <div class="" style="color: grey">
                               <p >
                                    Very easy Eras....lets create a simple action..lets say action contact <br>
                                    Public function actionContact() <br>
                                    { <br>
                                        $model = new ContactForm; <br>
                                        $contacts = new \frontend\models\Contact();

                                    } <br>
                                    in this example I have call $model and $Contacts...
                                </p>
                               </div>
                            </div>

                            

            </div>


       
                                                    
                                                

            <!--body ends-->