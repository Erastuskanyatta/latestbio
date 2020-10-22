<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About Eras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <!-- intro -->
    <div id="#top"></div>
<section id="home">
  <div class="banner-container"> <img src="images/banner-bg.jpg" alt="banner" />
    <div class="container banner-content"> 
            <div class="row">
                <header class="centered">
                    <h1>Erastus Muriithi</h1>
                    <p>UPCOMING SOFTWARE ENGINEER</p>
                </header>
                <a href="<?= Yii::$app->urlManager->createUrl(['site/contact']) ?> "class="hireMe">HIRE ME</a>
                <a href="site/contact" class="hireMe">Hire Me</a>
            </div> 
  </div>
</section>
<section id="introText">
  <div class="container">
    <div>
       <h3 class="panel-title" style="text-align: center"> <strong>WElCOME</strong> </h3>  
         <P>
         I am Erastus Erastus MUriithi. A student at <a href="https://www.must.ac.ke/"> MERU UNIVERSITY OD SCIENCE AND TECNNOLOGY (MUST)</a>
         where Iam undertaking a degree in Bachelor of science in Computer Science. <br>
         I am very determined that one day I will become one of the best programmer in the world. <br>
         I am 22 and I belive that within the next 5 to 7 years I will have my own company... 
         </P>
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
