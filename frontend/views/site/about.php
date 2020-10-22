<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About Eras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <!-- intro -->
   

<section id="introText">
  <div class="container">
    <div>
       <h3 class="panel-title" style="text-align: center"> <strong>WElCOME</strong> </h3> 
       <p>
         Hello. I am a front-end developer. I love learning new stuff and coding things.
         Also, I like playing football and every day I spent 1 hour in the field. <br>
         <P>
         Currently Iam In <a href="https://www.must.ac.ke/"> MERU UNIVERSITY OF SCIENCE AND TECNNOLOGY (MUST)</a>
         where Iam undertaking a degree in Bachelor of science in Computer Science. 
              </p> 
         
      <p> </p>
    </div>
  </div>
</section>

    <!-- end intro-->


<!-- about-->


<section id="aboutUs">
  <div class="container">
    <div class="row"> 
      <!-- item -->
      <img a src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/master/assets/images/2.png"?>" alt="Person" width="20" height="20" >
      <div class="col-md-4 tileBox"> <img src="image/2.jpg" alt=""> </div>
      <div class="col-md-8 tileBox">
        <div class="txtHead">
          <h2>HI!Am Erastus</h2>
          <h3> A Web developer student at Meru University</h3>
        </div>
        <p>I will not talk about myself as a great programmer for now(though that ma dream)but atlist I can make my-self a portfolio <br>that will describe me to the fullest<br/>
          <br/>
             No matter how codding becomes,always make sure that you have added a new line to your code. <br> Always learn something new</p>
      </div>
      <!-- end: --> 
    </div>
  </div>
</section>
<!--Quote-->
<section id="quote" class="bg-parlex">
  <div class="parlex-back">
    <div class="container">
     <div class="row">
	<div class="col-md-12"> <h4>Dont just talk,show me the code!!</h4></div>
      </div>
    </div>
    <!--/.container--> 
  </div>
</section>

<!-- end ubout-->



   
</div>
