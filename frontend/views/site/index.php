<?php

/* @var $this yii\web\View */

$this->title = "Eras Bio";
?>

<div

header id="tg-header" class="tg-header tg-haslayout">
			<div class="tg-topbar tg-bglight tg-haslayout">
      <header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> 
        </div>
      <!--/.navbar-header-->
     

      <div class="chip">

      <a href="/bio/"><img src="/bio/image/9.png" alt="image description"></a>

            <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['/'])?>">Erastus</a> </li> 
        </div>
        <ul class="nav navbar-nav" id="mainNav" >
         <li ><a href="<?= Yii::$app->urlManager->createUrl(['/'])?>">Home</a></li>
           
           <li ><a href="<?= Yii::$app->urlManager->createUrl(['site/about'])?>">About</a></li>
           
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



    <!-- intro -->
    <div id="#top"></div>
<section id="home"> 
<!--
<div<img class="col-md-4 tileBox"> src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/im/7.jpg"?>" alt="image description" style="width:300px;height:300px;">        
  -->
  
  <div class="banner-container"> <img src="as/im/7.jpg" alt="banner" />
    <div class="container banner-content"> 
            <div class="row">
                <header class="centered">
                    <h1>Erastus Muriithi</h1>
                    <p>SOFTWARE ENGINEER</p>
                </header>
                <a href="/bio/site/contact "class="hireMe">HIRE ME</a>
              
            </div> 
  </div>
</section>
<section id="introText">
  <div class="container">
    <div>
       <h3 class="panel-title" style="text-align: center"> <strong>WElCOME</strong> </h3>  
         <P>
         I am Erastus MUriithi. A student at <a href="https://www.must.ac.ke/">  <img a src="/as/im/12.png" alt="Person" width="50" height="50" > (MUST)</a>
         where Iam undertaking a degree in Bachelor of science in Computer Science. <br>
         I am very determined that one day I will become one of the best programmer in the world. <br>
         I am 22 and I belive that within the next 5 to 7 years I will have my own company... 
         </P>
      <p> </p>
    </div>
  </div>
</section>
    <!-- end intro-->



</section>
<!--About-->
<section id="aboutUs">
  <div class="container">
    <div class="row"> 
      <!-- item -->

     <div class="col-md-4 tileBox"><img  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/im/2.jpg"?>" alt="image description" style="width:300px;height:300px;"></div>        
        
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
	<div class="col-md-12"> <h4>Dont just talk,show me the code!! <br>Aways remeber that KNOWLEDGE IS POWER!</h4></div>
      </div>
    </div>
    <!--/.container--> 
  </div>
</section>

<!--services-->
<section id="services"  class="page-section section appear clearfix secPad">
<div class="container">
  <div class="sec-title text-center">
   <h3 class="w3l-title">Services</h3>
   </div>
    <div class="service-block col-md-4">
   
    <h3>Main Services</h3>
    <p> <strong>OS INSTALLITATION</strong> </p> <br>
    <P>I install OS for both widows and <br> linux at an affordable cost</P>

    <p> <strong>HTML AND CSS</strong> </p>
    <P>I train HTML and CSS for begginers <br> to all the students who are getting <br> started to codding</P> <br>



   </div>
   <div class="col-md-4">
   <h3>Sub Main Services</h3>
   <p> <strong>laptops repair</strong> </p>
   <p>U got a broken laptop??Worry no more cause I have the solution, <br> 
    Just click contact below and talk to me. <li><a href="/bio/site/contact">Contact</a></li>
   </p>

   <p> <strong>Sale of electronics</strong> </p> 
   <p>I do sell electronic like laptops,phones,Tvs and a very affordable price</p>



  </div>

  <div class="col-md-4">
   <h3>Sub Main Services</h3>
   <p> <strong>Advices</strong> </p>
   <p>Almost every one need an advice,,for me I was very much advice... <br> 
    Why not advice you? Contact me for any kind of advice that you want. <li ><a  href="/bio/site/contact">Contact</a></li>
   </p>

   <p> <strong>Hackathons and Friday nights coding</strong> </p> 
   <p>I am in charge om making arragements for all hackathons in the school and anything to do with night codding.</p>



  </div>



  
</div>
</section>

<!-- services end-->




<!-- projects-->
<!-- git-->
<div class="confi-w3l" style="baccolor: red;" >
  <div class="container">
    <div class="col-sm-4 s-1"></div>
      <h3 class="sec-title text-center" >Projects </h3>
      <p class="sec-title text-center"  style="color: white ; font-size: large" >Feel free to viev every part of my project in <a href="https://github.com/Erastuskanyatta?tab=repositories" >  <img a src="image/git.png" alt="Person" width="20" height="20" style="font-size: large" >GitHub </a><br> </a> </p>
	<p class="sec-title text-center" style="color: white  ; font-size: large"  >The projects are well organized according to the language used</p>
    </div>
  </div>
</div>
<!-- end git -->
<!--projects-->

<!--gallery-->
<!--gallery-->
<section1 id="gallery" class="page-section section appear clearfix secPad">
  <div class="container">
    <div class="heading"> 
      <!-- Heading -->
       
         <h3 class="sec-title text-center">My gallery</h3>
        
             <div class="panel-body">
             <div class="row">
             <div class="service-block col-md-4">
             <div class="flip-card">
           <div class="flip-card-inner">
        <div class="flip-card-front">
        <img class=" img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/im/4.jpg"?>" alt="image description" style="width:300px;height:300px;">        

       </div>
        <div class="flip-card-back">
      <h1>Place-Nyeri Primary</h1> 
      <p2>Had taken a whiskey</p2> 
      <p2>Was on onother earth</p2>
    </div>
  </div>
</div>
            </div>
            <div class="service-block col-md-4">
             <div class="flip-card">
           <div class="flip-card-inner">
        <div class="flip-card-front">
        <img class=" img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/im/10.png"?>" alt="image description" style="width:300px;height:300px;">        
  
       </div>
        <div class="flip-card-back">
      <h1>Place-2 RIVERS</h1> 
      <p2>Tour</p2> 
      <p2>Exting place that I visit every weak</p2>
    </div>
  </div>
</div>

      </div>
      <div class="service-block col-md-4">
             <div class="flip-card">
           <div class="flip-card-inner">
        <div class="flip-card-front">
        <img class=" img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/im/8.png"?>" alt="image description" style="width:300px;height:300px;">        
  
       </div>
        <div class="flip-card-back">
      <h1>Place-Meru Uni</h1> 
      <p2>Had gone for photoshoot</p2> 
      <p2>FOTO MOTO!</p2>
    </div>
  </div>
</div><br>
             </div>
      </div>
    </div>
  </div>
</section 1>


<section1 id="gallery" class="page-section section appear clearfix secPad">
  <div class="container">
    <div class="heading"> 
      <!-- Heading -->
       
        
             <div class="panel-body">
             <div class="row">
             <div class="service-block col-md-4">
             <div class="flip-card">
           <div class="flip-card-inner">
        <div class="flip-card-front">
        <img class=" img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/im/20.jpg"?>" alt="image description" style="width:300px;height:300px;">        

       </div>
        <div class="flip-card-back">
      <h1>Place-Uhuru park</h1> 
      <p2>Girl-friend visit</p2> <br>
      <p2>OPS!!My X..Sorry!</p2>
    </div>
  </div>
</div>
            </div>
            <div class="service-block col-md-4">
             <div class="flip-card">
           <div class="flip-card-inner">
        <div class="flip-card-front">
        <img class=" img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/im/2.jpg"?>" alt="image description" style="width:300px;height:300px;">        
     
       </div>
        <div class="flip-card-back">
      <h1>Place- HOme</h1> 
      <p2>Codding</p2>  <br>
      <p2>Completing a portifolio</p2>
    </div>
  </div>
</div>

      </div>
      <div class="service-block col-md-4">
             <div class="flip-card">
           <div class="flip-card-inner">
        <div class="flip-card-front">
        <img class=" img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/im/12.png"?>" alt="image description" style="width:300px;height:300px;">        

       </div>
        <div class="flip-card-back">
      <h1>Place-Meru-Maua Road</h1> 
      <p2>Hot Sunday afternoon</p2> <br> 
      <p2>nature walk</p2>
    </div>
  </div>
</div><br>
             </div>
      </div>
    </div>
  </div>
</section 1>



<section1 id="gallery" class="page-section section appear clearfix secPad">
  <div class="container">
    <div class="heading"> 
      <!-- Heading -->
       
        
             <div class="panel-body">
             <div class="row">
             <div class="service-block col-md-4">
             <div class="flip-card">
           <div class="flip-card-inner">
        <div class="flip-card-front">
        <img class=" img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/im/16.jpg"?>" alt="image description" style="width:300px;height:300px;">        
        
       </div>
        <div class="flip-card-back">
      <h1>Place-School</h1> 
      <p2>After lecture</p2> <br>
      <p2>Twish Bestee</p2>
    </div>
  </div>
</div>
            </div>
            <div class="service-block col-md-4">
             <div class="flip-card">
           <div class="flip-card-inner">
        <div class="flip-card-front">
        <img class=" img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/im/15.jpg"?>" alt="image description" style="width:300px;height:300px;">        
  
       
       </div>
        <div class="flip-card-back">
      <h1>Place- Home</h1> 
      <p2>Works</p2>  <br>
      <p2>Leavinf for the office</p2>
    </div>
  </div>
</div>

      </div>
      <div class="service-block col-md-4">
             <div class="flip-card">
           <div class="flip-card-inner">
        <div class="flip-card-front">
        <img class=" img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/im/19.jpg"?>" alt="image description" style="width:300px;height:300px;">        
  
       </div>
        <div class="flip-card-back">
      <h1>Place-school</h1> 
      <p2>Happy moments</p2> <br> 
      <p2>With bestee</p2>
    </div>
  </div>
</div><br>
             </div>
      </div>
    </div>
  </div>
</section 1>

<!-- gallery styles-->
<style>
.panel-body:after {
  content: "";
  display: table;
  clear: both;
}
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}

</style>
<!-- end styles-->
<!--end gallery-->




 <!--Contact -->
 <section id="contactUs" class="page-section secPad">
  <div class="container">
    <div>
      <div class="row">
      <div class="heading"> 
        <!-- Heading -->
        <div class="panel-title" style="text-align: center">
        <h3>Welcome <br> Feel free to contact me..I will give you the feedback immediately</h3>
        </div>

        <!-- headind ends-->
      
      </div>
    </div>
    <div class="container" id="login-wrapper">
      <form method="post" action="" id="contactfrm" role="form">
        <div class="col-md-4 col-md-offset-4">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address">
          </div>
        
          <div class="form-group">
            <label for="subject"> <p>Subject</p></label>
            <input type="subject" class="form-control" name="subject" id="subject" placeholder="subject" title="Please enter your subject">
          </div>
          <div class="form-group">
            <label for="body">    Message</label>
            <textarea name="body" class="form-control" id="body" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
          </div>
          
          <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Submit</button>
          <div class="result"></div>
        </div>
        
      </form>
      
    </div>
    </div>
  </div> 
  <!--/.container--> 
</section>


</div>

<!--start style-->
<style>
html, body {
	background: white;
	-webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
	box-shadow: inset 0 0 100px rgba(0,0,0,.5);
	height: 100%;
	min-height: 100%;
	position: relative;
}
</style>


<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 
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
         <a href="/bio/site/contact">Contact</a> <br>
         <i clas="fa-linkedin">My address</i> <br>
         <p>PO.BOX 292 NYERI <br> PO.BOX 345-10100 NYERI</p>
         </div>
         </div>  
        </div>
       <div class="col-md-3"> 
       <h3  class="panel-title" >My direct link to the pages</h3>

       <li class="active"><a href="#home" class="scroll-link">Home</a></li> 
       <li><a href="/bio/site/about">About</a></li>
           <li><a href="/bio/skills/create">Skills</a></li>
           <li><a href="/bio/skills/projects">Projects</a></li>
          <li><a href="/bio/gallery/create">Gallery</a></li>
          <li><a href="/bio/site/contact">Contact</a></li>
      </div>
       <div class="col-md-3">
         
        <h3 class="panel-title">Join me today and start working together</h3> <br>
       
       To join me,just click sigh in and fill out very siple steps and ur all done <br>
       <li><a href="/bio/site/signup">Sign In</a></li>
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
  <div class="col-md-12"> <span class="pull-right">Copyright 2020 | All Rights Reserved  -- Template by <a href="/bio/site/index">Sudo coders</a></span> </div>
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