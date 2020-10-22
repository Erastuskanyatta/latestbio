<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buy me cofeee</title>
</head>
<body>
<br> 
  <div class="wrapper wrapper-content" id="login-wrapper">
    <div class="row animated fadeInRight">
      <div class="col-lg-5">
      <div class="contact-box" >
      <div class="panel-heading">                        
        <h3 class="panel-title" style="text-align: center;color:blue;">Buy Me Coffee</h3>
	 </div>
      <div class="panel-body">
      <div class="col-sm-5"> 
        <div class="ibox-content no-padding border-left-right">
           <img  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/Coffee.jpg"?>" alt="image description" width="110" height="100">
           <p style="color:blue;">M-pesa<br> 0729096005 / 0706460492</p>
        </div>
       </div>
       <div class="col-sm-5">
           <form action="contact.php" >
           <label for="fname"><i class="fa fa-user"></i> Name</label>
            <input type="text" id="fname" name="name" placeholder="your ame" required='true'>
            <label for="email"><i class="fa fa-envelope"></i> Amount</label>
            <input type="text" id="amount" name="amount" placeholder="Ksh" required='true'>
            <label for="email"><i class="fa fa-envelope"></i> Send To</label>
            <input type="text" id="send" name="send" placeholder="enter the number to send money to" required='true'>
            <label for="adr"><i class="fa fa-address-card-o"></i> M-pesa pin</label>
            <input type="password" id="pin" name="pin" placeholder="your m-pesa" required='true'> <br> <br>
            <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/coffee'])?>"><input class="submitButton" type="submit" value="Send" class="btn"></a> 
           </form>
       </div>
      </div>
      </div>
      </div>
    </div>
  </div>
</body>
</html>
<style>
#login-wrapper {
	position: relative;
	top: 30%;
}
#login-wrapper .registration-block {
	margin-top: 15px;
}</style>