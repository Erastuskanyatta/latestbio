<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome-free-5.14.0-web/css/all.css">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
</head>
<body>

<?php $this->beginBody() ?>

<header id="tg-header" class="tg-header tg-haslayout">
			<div class="tg-topbar tg-bglight tg-haslayout">
      <header class="header" style="background-color: black">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> 
        </div>
      <!--/.navbar-header-->
     

      <div class="chip">
      <a href="<?= Yii::$app->urlManager->createUrl(['/'])?>"><img src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/image/9.png"?>" alt="image description"></a>

      <a href="<?= Yii::$app->urlManager->createUrl(['site/index'])?>">Erastus</a></li> 
        </div>
        <ul class="nav navbar-nav" id="mainNav" >
          <li ><a href="<?= Yii::$app->urlManager->createUrl(['/'])?>">Home</a></li>
           
           <li ><a href="<?= Yii::$app->urlManager->createUrl(['/bio/site/about'])?>">About</a></li>
           
           <li><a href="<?= Yii::$app->urlManager->createUrl(['site/services'])?>">Services</a></li>
           <li><a href="<?= Yii::$app->urlManager->createUrl(['skills/create'])?>">Skills</a></li>
           <li><a href="<?= Yii::$app->urlManager->createUrl(['site/projects'])?>">Projects</a></li>
           <li><a href="<?= Yii::$app->urlManager->createUrl(['gallery/create'])?>">Gallery</a></li>
           <li><a href="<?= Yii::$app->urlManager->createUrl(['site/contact'])?>">Contact</a></li>
           <li><a href="<?= Yii::$app->urlManager->createUrl(['site/signup'])?>">Sign In</a></li>
           <li><a href="<?= Yii::$app->urlManager->createUrl(['site/login'])?>">Login</a></li>
         

        </ul>
      </div>
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>
      </div>
 </header>     





<!-- content -->
<?=$content?>

<link rel="stylesheet" href="https://use.fontawesome-free-5.14.0-web/css/all.css">

<footer class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="w3l-title">
       <h3  class="panel-title" >About Me</h3>
        </div>
        <div class="panel-body">
         <p>Get to know me</p> <br>
         <div class="social-icons">
         <i clas="fa-linkedin">U have a question for me?</i> <br>
         <a href="<?= Yii::$app->urlManager->createUrl(['site/contact'])?>">Contact</a> <br>
         <i clas="fa-linkedin">My address</i> <br>
         <p>PO.BOX 292 NYERI <br> PO.BOX 345-10100 NYERI</p>
         </div>
         </div>  
        </div>
       <div class="col-md-3"> 
       <h3  class="panel-title" >My direct link to the pages</h3>

       <li class="active"><a href="#home" class="scroll-link">Home</a></li> 
       <li><a href="<?= Yii::$app->urlManager->createUrl(['site/about'])?>">About</a></li>
           <li><a href="<?= Yii::$app->urlManager->createUrl(['skills/create'])?>">Skills</a></li>
           <li><a href="<?= Yii::$app->urlManager->createUrl(['skills/projects'])?>">Projects</a></li>
          <li><a href="<?= Yii::$app->urlManager->createUrl(['gallery/create'])?>">Gallery</a></li>
          <li><a href="<?= Yii::$app->urlManager->createUrl(['site/contact'])?>">Contact</a></li>
      </div>
       <div class="col-md-3">
         
        <h3 class="panel-title">Join me today and start working together</h3> <br>
       
       To join me,just click sigh in and fill out very siple steps and ur all done <br>
       <li><a href="<?= Yii::$app->urlManager->createUrl(['site/signup'])?>">Sign In</a></li>
       </div>
        <div class="col-md-3">
         <h3 class=panel-title>My social meadia link</h3> <br>
         <i class=""></i>
         <a href="https://en-gb.facebook.com/"> <img a src="image/fb.jpg" alt="Person" width="20" height="20" > Facebook </a><br>
         <a href="https://www.instagram.com/"><img a src="image/insta.png" alt="Person" width="20" height="20" >Instagram </a><br>
         <a href="https://twitter.com/home?lang=en"><img a src="image/twitter.png" alt="Person" width="20" height="20" >Twitter  </a><br>
         <a href="https://www.google.com/"><img a src="image/g.jpg" alt="Person" width="20" height="20" > Google </a><br>
         <a href="https://web.whatsapp.com/"><img a src="image/wh.jpg" alt="Person" width="20" height="20" > Whatsapp </a><br>
      </div>
     
    <!-- / .row --> 
  </div>
  <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-up"></span></div>
  <div class="col-md-12"> <span class="pull-right">Copyright 2020 | All Rights Reserved  -- Template by <a href="<?= Yii::$app->urlManager->createUrl(['site/index'])?>">Sudo coders</a></span> </div>
    </div>
</footer>

<!--start styles -->
<style>

.panel-title, .panel-body, i{
    color: white;
}
li{
 style-text-aligh : none;
}
.pull-right{
  color: white;
  text-align: center;
  
}

</style>

<!-- chip-->
<style>
.chip {
  display: inline-block;
  padding: 0 25px;
  height: 50px;
  font-size: 16px;
  line-height: 50px;
  border-radius: 25px;
  background-color: #f1f1f1;
  float: left;
}

.chip img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
}
<!-- chip-->

<!--end styles-->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
