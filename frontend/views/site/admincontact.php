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
                            <strong>Contacts</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <!--end header-->

            <!-- main body strt-->
            <!-- section-->
            <div class="wrapper wrapper-content animated fadeInRight">
            	<div class="row">
            		<div class="col-lg-4">
            			<div class="contact-box">
            				<a href="profile.html">
                    <div class="col-sm-5">
                        <div class="text-center">
                            <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/12.png"?>" alt="image description" width="100" height="100">
                            <div class="m-t-xs font-bold">Founder Sudo coders</div>
                        </div>  </a>
                    </div>
                    <div class="col-sm-7">
                        <h3><strong>Eras</strong></h3>
                        	<a href=""> <strong>Twitter</strong> </a>
                            <a href=""> <strong>Facebook</strong> </a> <br>
                            <abbr title="Phone">P:</abbr> +254 729096005
                             <br> <br>
                         <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/profile'])?>">
                              <address>
                              	294 <strong>Nyeri</strong> <br>
                              	454 <strong>Nairobi</strong> 
                              </address>
                         </a>
                    </div>
                    <div class="clearfix"></div>
                       
            			</div>
            		</div>
            		  <div class="col-lg-4">
            			<div class="contact-box">
            				<a href="profile.html">
                    <div class="col-sm-5">
                        <div class="text-center">
                            <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/6.jpg"?>" alt="image description" width="100" height="100">
                            <div class="m-t-xs font-bold">Website Desighner </div>
                        </div>  </a>
                    </div>
                    <div class="col-sm-7">
                        <h3><strong>Jeff Mungai</strong></h3>
                          <a href=""> <strong>Twitter</strong> </a>
                            <a href=""> <strong>Facebook</strong> </a> <br>
                            <abbr title="Phone">P:</abbr> +254 103938432
                             <br> <br>
                             <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/profile'])?>">
                              <address>
                              	56777-100 <strong>Kiambu</strong> <br>
                              	45569 <strong>Nairobi</strong> 
                              </address>
                         </a>
                    </div>
                    <div class="clearfix"></div>
                       
            			</div>
            		</div>
            		 
            		 <div class="col-lg-4">
            			<div class="contact-box">
            				<a href="profile.html">
                    <div class="col-sm-5">
                        <div class="text-center">
                            <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/e.jpg"?>" alt="image description" width="100" height="100">
                            <div class="m-t-xs font-bold">Android Master</div>
                        </div>  </a>
                    </div>
                    <div class="col-sm-7">
                        <h3><strong>Mr Gachoki</strong></h3>
                          <a href=""> <strong>Twitter</strong> </a>
                            <a href=""> <strong>Facebook</strong> </a> <br>
                            <abbr title="Phone">P:</abbr> +254 723541234
                             <br> <br>
                             <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['projects/create'])?>">
                              <address>
                              	55656 <strong>Kiriyanga</strong>
                              	 <br>
                              	45985 <strong>Nairobi</strong> 
                              </address>
                         </a>
                    </div>
                    <div class="clearfix"></div>
                       
            			</div>
            		</div>


            		<div class="col-lg-4">
            			<div class="contact-box">
            				<a href="profile.html">
                    <div class="col-sm-5">
                        <div class="text-center">
                            <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/14.jpg"?>" alt="image description" width="100" height="100">
                            <div class="m-t-xs font-bold">CEO</div>
                        </div>  </a>
                    </div>
                    <div class="col-sm-7">
                        <h3><strong>Jeff Mwangi</strong></h3>
                        	<a href=""> <strong>Twitter</strong> </a>
                            <a href=""> <strong>Facebook</strong> </a> <br>
                            <abbr title="Phone">P:</abbr> +254 701823465
                             <br> <br>
                         <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['projects/create'])?>">
                              <address>
                              	29487 <strong>Kisumu</strong> <br>
                              	55454 <strong>Nairobi</strong> 
                              </address>
                         </a>
                    </div>
                    <div class="clearfix"></div>
                       
            			</div>
            		</div>
            		  <div class="col-lg-4">
            			<div class="contact-box">
            				<a href="profile.html">
                    <div class="col-sm-5">
                        <div class="text-center">
                            <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/1.jpg"?>" alt="image description" width="100" height="100">
                            <div class="m-t-xs font-bold">Marketer </div>
                        </div>  </a>
                    </div>
                    <div class="col-sm-7">
                        <h3><strong>Miss Twish</strong></h3>
                          <a href=""> <strong>Twitter</strong> </a>
                            <a href=""> <strong>Facebook</strong> </a> <br>
                            <abbr title="Phone">P:</abbr> +254 123219065
                             <br> <br>
                             <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/twishprofile'])?>">
                              <address>
                              	<p>
                              		5655-100 <strong>Meru</strong> <br>
                              	My profile
                              	</p>
                              </address> <br>
                         </a>
                    </div>
                    <div class="clearfix"></div>
                       
            			</div>
            		</div>
            		   <div class="col-lg-4">
            			<div class="contact-box">
            				<a href="profile.html">
                    <div class="col-sm-5">
                        <div class="text-center">
                            <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/edith.jpg"?>" alt="image description" width="100" height="100">
                            <div class="m-t-xs font-bold">Member</div>
                        </div>  </a>
                    </div>
                    <div class="col-sm-7">
                        <h3><strong>Meldy</strong></h3>
                        	<a href=""> <strong>Twitter</strong> </a>
                            <a href=""> <strong>Facebook</strong> </a> <br>
                            <abbr title="Phone">P:</abbr> +254 729096005
                             <br> <br>
                         <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['projects/create'])?>">
                              <address>
                              	294 <strong>Nyeri</strong> <br>
                              	454 <strong>Nairobi</strong> 
                              </address>
                         </a>
                    </div>
                    <div class="clearfix"></div>
                       
            			</div>
            		</div>

            		<div class="col-lg-4">
            			<div class="contact-box">
            				<a href="profile.html">
                    <div class="col-sm-5">
                        <div class="text-center">
                            <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/unic.jpg"?>" alt="image description" width="100" height="100">
                            <div class="m-t-xs font-bold">Member</div>
                        </div>  </a>
                    </div>
                    <div class="col-sm-7">
                        <h3><strong>Eunice</strong></h3>
                        	<a href=""> <strong>Twitter</strong> </a>
                            <a href=""> <strong>Facebook</strong> </a> <br>
                            <abbr title="Phone">P:</abbr> +254 729096005
                             <br> <br>
                         <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['projects/create'])?>">
                              <address>
                              	294 <strong>Nyeri</strong> <br>
                              	454 <strong>Nairobi</strong> 
                              </address>
                         </a>
                    </div>
                    <div class="clearfix"></div>
                       
            			</div>
            		</div>
            		  <div class="col-lg-4">
            			<div class="contact-box">
            				<a href="profile.html">
                    <div class="col-sm-5">
                        <div class="text-center">
                            <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/betty.jpg"?>" alt="image description" width="100" height="100">
                            <div class="m-t-xs font-bold">Web designer</div>
                        </div>  </a>
                    </div>
                    <div class="col-sm-7">
                        <h3><strong>Betty</strong></h3>
                          <a href=""> <strong>Twitter</strong> </a>
                            <a href=""> <strong>Facebook</strong> </a> <br>
                            <abbr title="Phone">P:</abbr> +254 103938432
                             <br> <br>
                             <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['projects/create'])?>">
                              <address>
                              	56777-100 <strong>Kiambu</strong> <br>
                              	45569 <strong>Nairobi</strong> 
                              </address>
                         </a>
                    </div>
                    <div class="clearfix"></div>
            		 </div>
            		 </div> 
            		 <div class="col-lg-4">
            			<div class="contact-box">
            				<a href="profile.html">
                    <div class="col-sm-5">
                        <div class="text-center">
                            <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/terry.jpg"?>" alt="image description" width="100" height="100">
                            <div class="m-t-xs font-bold">Member </div>
                        </div>  </a>
                    </div>
                    <div class="col-sm-7">
                        <h3><strong>Terry Njeri</strong></h3>
                          <a href=""> <strong>Twitter</strong> </a>
                            <a href=""> <strong>Facebook</strong> </a> <br>
                            <abbr title="Phone">P:</abbr> +254 103938432
                             <br> <br>
                             <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['projects/create'])?>">
                              <address>
                              	56777-100 <strong>Kiambu</strong> <br>
                              	45569 <strong>Nairobi</strong> 
                              </address>
                         </a>
                    </div>
                    <div class="clearfix"></div>

            	</div>

            </div>
            <div class="col-lg-4">
            			<div class="contact-box">
            				<a href="profile.html">
                    <div class="col-sm-5">
                        <div class="text-center">
                            <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/k.jpg"?>" alt="image description" width="100" height="100">
                            <div class="m-t-xs font-bold">Hacker</div>
                        </div>  </a>
                    </div>
                    <div class="col-sm-7">
                        <h3><strong>Eras</strong></h3>
                        	<a href=""> <strong>Twitter</strong> </a>
                            <a href=""> <strong>Facebook</strong> </a> <br>
                            <abbr title="Phone">P:</abbr> +254 729096005
                             <br> <br>
                         <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['projects/create'])?>">
                              <address>
                              	294 <strong>Nyeri</strong> <br>
                              	454 <strong>Nairobi</strong> 
                              </address>
                         </a>
                    </div>
                    <div class="clearfix"></div>
                       
            			</div>
            		</div>
            		<div class="col-lg-4">
            			<div class="contact-box">
            				<a href="profile.html">
                    <div class="col-sm-5">
                        <div class="text-center">
                            <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/craz.jpg"?>" alt="image description" width="100" height="100">
                            <div class="m-t-xs font-bold">Member</div>
                        </div>  </a>
                    </div>
                    <div class="col-sm-7">
                        <h3><strong>Eras</strong></h3>
                        	<a href=""> <strong>Twitter</strong> </a>
                            <a href=""> <strong>Facebook</strong> </a> <br>
                            <abbr title="Phone">P:</abbr> +254 729096005
                             <br> <br>
                         <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['projects/create'])?>">
                              <address>
                              	294 <strong>Nyeri</strong> <br>
                              	454 <strong>Nairobi</strong> 
                              </address>
                         </a>
                    </div>
                    <div class="clearfix"></div>
                       
            			</div>
            		</div>
            		<div class="col-lg-4">
            			<div class="contact-box">
            				<a href="profile.html">
                    <div class="col-sm-5">
                        <div class="text-center">
                            <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/rose.jpg"?>" alt="image description" width="100" height="100">
                            <div class="m-t-xs font-bold">Member</div>
                        </div>  </a>
                    </div>
                    <div class="col-sm-7">
                        <h3><strong>Rose Mwenda</strong></h3>
                        	<a href=""> <strong>Twitter</strong> </a>
                            <a href=""> <strong>Facebook</strong> </a> <br>
                            <abbr title="Phone">P:</abbr> +254 729096005
                             <br> <br>
                         <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['projects/create'])?>">
                              <address>
                              	294 <strong>Nyeri</strong> <br>
                              	454 <strong>Nairobi</strong> 
                              </address>
                         </a>
                    </div>
                    <div class="clearfix"></div>
                       
            			</div>
            		</div>





            <!--section ends-->

            <!--section-->

            <!-- section ends-->
            <!-- main body ends-->

    <!-- admin members contacts end -->