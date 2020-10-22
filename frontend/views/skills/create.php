<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Skills */

$this->title = 'Create Skills';
$this->params['breadcrumbs'][] = ['label' => 'Skills', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!--skills start-->

<div class="parlex-back"> 
  <div class="container">
    <div class="sec-title text-center">
      <h3>Skils</h3>
     </div>
      <div class="col-md-12">
       
         <div class="parlex-back">
         <p1 >As a Dev expert,I have some extray skills that I have gained experience for more than 2years. <br>
          I real sence,Being good with computers means that you have an above-average level of expertise in operating computer software and hardware
          I dont have that "big"skills in softwares and hardwares but I believe that with an extra effort,one day,
          I will become an adviser as far as softwares are concerned</p1> <br>
          <h3 class="sec-title text-center">Here are the few skills that I have</h3> <br>
          <!-- flip card-->
            <div class="container">
             <div class="col-md-4">
             <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                 <p>Database designer</p>
                </div>
                 <div class="flip-card-back">
                  <p2>A database is an organized collection of data, generally stored and accessed electronically ...
                  <br> <br>
                  I have the foolowing skills in database <br>
                  1)Knowledge of database queries. <br>
                  2) Knowledge of database theory. <br>
                  3)Knowledge of database design. <br>
                  4) Knowledge about the RDBMS itself, e.g. Microsoft SQL Server or MySQL. <br>
                  5)Knowledge of structured query language (SQL), e.g. SQL/PSM or Transact-SQL.
                  </p2> 
                 </div>
              </div>
            </div>
             </div>
             <div class="col-md-4">
             <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                 <p>Database designer</p>
                </div>
                 <div class="flip-card-back">
                  <p2>A database is an organized collection of data, generally stored and accessed electronically ...
                  <br> <br>
                  I have the foolowing skills in database <br>
                  1)Knowledge of database queries. <br>
                  2) Knowledge of database theory. <br>
                  3)Knowledge of database design. <br>
                  4) Knowledge about the RDBMS itself, e.g. Microsoft SQL Server or MySQL. <br>
                  5)Knowledge of structured query language (SQL), e.g. SQL/PSM or Transact-SQL.
                  </p2> 
                 </div>
              </div>
            </div>
             </div>
             <div class="col-md-4">
             <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                 <p>Database designer</p>
                </div>
                 <div class="flip-card-back">
                  <p2>A database is an organized collection of data, generally stored and accessed electronically ...
                  <br> <br>
                  I have the foolowing skills in database <br>
                  1)Knowledge of database queries. <br>
                  2) Knowledge of database theory. <br>
                  3)Knowledge of database design. <br>
                  4) Knowledge about the RDBMS itself, e.g. Microsoft SQL Server or MySQL. <br>
                  5)Knowledge of structured query language (SQL), e.g. SQL/PSM or Transact-SQL.
                  </p2> 
                 </div>
              </div>
            </div>
             </div>
            </div>
            <!-- end flip card-->
         </div>
     .</div>
  </div>
</div>

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
         <a href="#contactUs">Contact</a> <br>
         <i clas="fa-linkedin">My address</i> <br>
         <p>PO.BOX 292 NYERI <br> PO.BOX 345-10100 NYERI</p>
         </div>
         </div>  
        </div>
       <div class="col-md-3"> 
       <h3  class="panel-title" >My direct link to the pages</h3>

       <li class="active"><a href="#home" class="scroll-link">Home</a></li> 
          <li><a href="#aboutUs" class="scroll-link">About Us</a></li> 
          <li><a href="#skills" class="scroll-link">Skills</a></li> 
          <li><a href="#experience" class="scroll-link">Experience</a></li> 
          <li><a href="#portfolio" class="scroll-link">Portfolio</a></li> 
          <li><a href="#contactUs" class="scroll-link">Contact </a></li>
          
      </div>
       <div class="col-md-3">
         
        <h3 class="panel-title">Join me today and start working together</h3> <br>
       
       To join me,just click sigh in and fill out very siple steps and ur all done <br>
       <li><a href="<?= Yii::$app->urlManager->createUrl(['site/signup'])?>">Sign In</a></li>
       </div>
        <div class="col-md-3">
         <h3 class=panel-title>My social meadia link</h3> <br>
         <a href="https://en-gb.facebook.com/"><i class="fa fa-facebook"> Facebook</i> </a><br>
         <a href="https://www.instagram.com/"><i class="fa fa-instagram"> Instagram</i> </a><br>
         <a href="https://twitter.com/home?lang=en"><i class="fa fa-twitte"> Twitter</i> </a><br>
         <a href="https://www.google.com/"><i class="fa fa-google"> Google</i> </a><br>
      </div>
    <!-- / .row --> 
  </div>
  <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-up"></span></div>
  <div class="col-md-12"> <span class="pull-right">Copyright 2020 | All Rights Reserved  -- Template by <a href="#home">Sudo Coders</a></span> </div>
    </div>
</footer>





<!--skills end-->

</div>

<!-- styles-->
<style>
p{
    text-align: center;
   top: 45%;
   position: relative;

}
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {

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
  background-color: white;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}


<!-- end skills styles--> 
