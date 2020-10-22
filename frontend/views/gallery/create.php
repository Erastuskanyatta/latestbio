<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Gallery */

$this->title = 'Create Gallery';
$this->params['breadcrumbs'][] = ['label' => 'Galleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="gallery-create">

   

   
<!--gallery-->
<section1 id="gallery" class="page-section section appear clearfix secPad">
  <div class="container">
    <div class="heading"> 
      <!-- Heading -->
       
         <h3 class="sec-title text-center">My gallery</h3>
        
             <div class="panel-body">
             <div class="row">
             <div class="service-circle col-md-4">
             <div class="flip-card">
           <div class="flip-card-inner">
        <div class="flip-card-front">
        <img  src="as/image/9.jpg" alt="Avatar" style="width:300px;height:300px;">
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
        <img src="as/im/10.png" alt="Avatar" style="width:300px;height:300px;">
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
        <img src="as/im/8.png" alt="Avatar" style="width:300px;height:300px;">
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
        <img src="as/im/20.jpg" alt="Avatar" style="width:300px;height:300px;">
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
        <img src="as/im/2.jpg" alt="Avatar" style="width:300px;height:300px;">
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
        <img src="as/im/12.png" alt="Avatar" style="width:300px;height:300px;">
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
        <img src="as/im/16.jpg" alt="Avatar" style="width:300px;height:300px;">
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
        <img src="as/im/15.jpg" alt="Avatar" style="width:300px;height:300px;">
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
        <img src="as/im/18.jpg" class="w3-circle" alt="Avatar" style="width:300px;height:300px;">
       </div>
        <div class="flip-card-back" >
      <h1 class="w3-circle" >Place-Church</h1> 
      <p2 class="w3-circle" >Youth week</p2> <br> 
      <p2 class="w3-circle" >With bestee</p2>
    </div>
  </div>
</div><br>
             </div>
      </div>
    </div>
  </div>

  







<!-- gallery styles-->
<style>
.panel-body:after {
  content: "";
  display: table;
  clear: both;
}
section1 {

  
  backgroundcolor: red;
  
}
p2{
  color: white;
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

</div>
