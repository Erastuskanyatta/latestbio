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
                        <li><a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/adminhome'])?>">Home</a> </li> 
                        
                        <li class="active">
                           <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/14mwangiprofile'])?>">14 Mwangi profile</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!--end header-->
            <!-- admin members contact start-->
    <!-- header-->
     <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Contacts</h2>
                    <ol class="breadcrumb">
                        <li><a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/adminhome'])?>">Admin home</a> </li> 
                        
                        <li class="active">
                           <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/14mugaiprofile'])?>">14 profile</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!--end header-->

            <!--body start-->
            <div class="wrapper wrapper-content">
                <div class="row animated fadeInRight">
                    <div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <h3 class="inbox-title" style="text-align: center">Profile Details</h3>
                        </div>
                        <div class="ibox-content no-padding border-left-right">
                             <img  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/21.jpeg"?>" alt="image description" width="340" height="350"> 
                        </div>
                        <div class="ibox-content profile-content">
                            <h4> Jeff Mwangi</h4> <br>
                            004 <strong>Naivasha</strong> <br> <br>
                            <h3 style: color: white;>About Me</h3> 
                            <p>Hi!Jeff Mwangi here. <br>I am a Cyber Security Expert..<br>
                            Besides that,I am a proffesional Camera man..I like and I enjoy what I do..</p> <br>
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
                                     <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/14.jpg"?>" alt="image description" width="50" height="50">
                                </div>
                                 <div class="media-body">
                             <small class="pull-right text-navy">1m ago</small>
                           <h5>
                           <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/14mwangiprofile'])?>">  You</a> 
                            started following 
                            <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/erasprofile'])?>">  Eras</a> 
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
                             <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/jeffmwangiprofile'])?>">  You</a>started following 
                             <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/twishprofile'])?>">  TWish</a> 
                             <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/t2.png"?>" alt="image description" width="50" height="50">
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
                           <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/jeffmwangi'])?>">  You</a> 
                            started following 
                            <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/erasprofile'])?>">  Eras</a> 
                            <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/Er.png"?>" alt="image description" width="50" height="50">
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
                                     <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/14.jpg"?>" alt="image description" width="50" height="50">
                                </div>
                                 <div class="media-body">
                             <small class="pull-right text-navy">15hours ago</small>
                           <h5>
                            <strong>
                                 <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/jeffmwangi'])?>">  You</a>Wrote a message to   
                              <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/jeffmugaiprofile'])?>">      Mungai</a>
                           </strong>  
                                     <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/jeff.jpg"?>" alt="image description" width="50" height="50">
                                
                                </h5> 
                           
                           <strong>
                            <small class="text-muted">yesterday 6:11 pm-07/11/2020</small> 
                           </strong>
                           <p>
                               Hi boy!!Photoshoot today .. <strong>Update me</strong>
                           </p>
                            <div class="pull-left">
                                     <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/jeff.jpg"?>" alt="image description" width="50" height="50">
                                </div>
                              <strong>
                                 <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/jeffmugaiprofile'])?>">  Mungai</a>replied to your message   
                              <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/jeffmwangiprofile'])?>">      You</a>
                           </strong>  
                                     <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/14.jpg"?>" alt="image description" width="50" height="50">
                                
                                </h5>
                                <p>
                                    Okay Twish,,copied,,see u at EC 06
                                </p>
                            </div>

                            

            </div>


       
                                                    
                                                

            <!--body ends-->