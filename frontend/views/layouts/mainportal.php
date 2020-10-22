<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\PortalAsset;
use common\widgets\Alert;

PortalAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="nav-md"   >
<?php $this->beginBody() ?>
<div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu" >
                    <li class="nav-header" >
                        <div class="dropdown profile-element"> <span>
   
                        <img class="img-circle" src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/image/12.png"?>" alt="image description" width="40" height="40">        
                            
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Erastus Muriithi</strong>
                             </span> <span class="text-muted text-xs block">Admin Boss <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/erasprofile'])?>">Profile</a> </li>
                                 <li>
                                    <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/admincontact'])?>">Contact</a>
                                 </li>
                   
                                <li><a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/mailbox'])?>">Messages</a> </li> 
                                <li class="divider"></li>
                                <li><a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/login'])?>">Log out</a> </li> 
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                      <li class="active">
                         
                        <ul class="nav nav-second-level">
                           
                         
                           <!-- <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                            <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                            <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                            <li><a href="dashboard_5.html">Dashboard v.5 </a></li> -->
                        </ul>
                    </li> 
                    <li class="active">  
                            <a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/adminhome'])?>"> <i class="fa-pied-piper"></i> <span class="nav-label"> Home </span> <span class="fa arrow"></span> </a>
                          </li>

                      <li class="active">
                      <a href="index.html"><i class="fa-pied-piper"></i> <span class="nav-label">Projects</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           
                             <li><a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['projects/create'])?>">Add  Project</a></li>
                            <li><a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['projects/index'])?>">Manage Project</a> </li> 
                        </ul>
                      </li>

                      <li class="active">
                      <a href="index.html"><i class="fa-pied-piper"></i> <span class="nav-label">Gallery</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           
                             <li><a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['gallery/create'])?>">Add  Picture</a></li>
                            <li><a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['gallery/index'])?>">Manage Pictures</a> </li> 
                        </ul>
                      </li>

                      <ul class="nav nav-second-level">
                          
                             <li><a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['team/create'])?>">Team</a></li>
                            
                        </ul>


                      </li>
                   
                    

                    <div class="container">
                       <li  class="btn btn-info" data-toggle="collapse" data-target="#demo">Profiles</li>
                     <div id="demo" class="collapse" >
                       <a style="padding-right: 20px;color: white"  href="<?= Yii::$app->urlManager->createUrl(['site/twishprofile'])?>">Twish Profile</a> <br>
                       <a style="padding-right: 20px;color: white"  href="<?= Yii::$app->urlManager->createUrl(['site/jeffmwangiprofile'])?>">Jeff Mwangi Profile</a> <br>
                       <a style="padding-right: 20px;color: white"  href="<?= Yii::$app->urlManager->createUrl(['site/jeffmugaiprofile'])?>">Jeff Mungai Profile</a> <br>
                       <a style="padding-right: 20px;color: white"  href="<?= Yii::$app->urlManager->createUrl(['site/gachokiprofile'])?>">Gachoki Profile</a>
                          </div> 


                   </div>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span><span class="fa arrow"></span></a>

                        <!-- <ul class="nav nav-second-level collapse"> -->
                     <!--<li><a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/graph_chartjs.php'])?>">Add  Project</a></li> 
                        
                           <li><a href="graph_chartjs.php">Flot Charts</a></li>
                            <li><a href="graph_morris.html">Morris.js Charts</a></li>
                            <li><a href="graph_rickshaw.html">Rickshaw Charts</a></li>
                            <li><a href="graph_chartjs.html">Chart.js</a></li>
                            <li><a href="graph_chartist.html">Chartist</a></li>
                            <li><a href="c3.html">c3 charts</a></li>
                            <li><a href="graph_peity.html">Peity Charts</a></li>
                            <li><a href="graph_sparkline.html">Sparkline Charts</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="label label-warning pull-right">16/24</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="mailbox.html">Inbox</a></li>
                            <li><a href="mail_detail.html">Email view</a></li>
                            <li><a href="mail_compose.html">Compose email</a></li>
                            <li><a href="email_template.html">Email templates</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="metrics.html"><i class="fa fa-pie-chart"></i> <span class="nav-label">Metrics</span>  </a>
                    </li>
                    <li>
                        <a href="widgets.html"><i class="fa fa-flask"></i> <span class="nav-label">Widgets</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="form_basic.html">Basic form</a></li>
                            <li><a href="form_advanced.html">Advanced Plugins</a></li>
                            <li><a href="form_wizard.html">Wizard</a></li>
                            <li><a href="form_file_upload.html">File Upload</a></li>
                            <li><a href="form_editors.html">Text Editor</a></li>
                            <li><a href="form_autocomplete.html">Autocomplete</a></li>
                            <li><a href="form_markdown.html">Markdown</a></li>
                        </ul>
                    </li> -->
                  <!--  <li>
                        <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">App Views</span>  <span class="pull-right label label-primary">SPECIAL</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="profile_2.html">Profile v.2</a></li>
                            <li><a href="contacts_2.html">Contacts v.2</a></li>
                            <li><a href="projects.html">Projects</a></li>
                            <li><a href="project_detail.html">Project detail</a></li>
                            <li><a href="teams_board.html">Teams board</a></li>
                            <li><a href="social_feed.html">Social feed</a></li>
                            <li><a href="clients.html">Clients</a></li>
                            <li><a href="full_height.html">Outlook view</a></li>
                            <li><a href="vote_list.html">Vote list</a></li>
                            <li><a href="file_manager.html">File manager</a></li>
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="issue_tracker.html">Issue tracker</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="article.html">Article</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="timeline.html">Timeline</a></li>
                            <li><a href="pin_board.html">Pin board</a></li>
                        </ul>
                    </li>-->
                    <li>
                        <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="search_results.html">Search results</a></li>
                            <li><a href="lockscreen.html">Lockscreen</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="login_two_columns.html">Login v.2</a></li>
                            <li><a href="forgot_password.html">Forget password</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="500.html">500 Page</a></li>
                            <li><a href="empty_page.html">Empty page</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Miscellaneous</span><span class="label label-info pull-right">NEW</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="toastr_notifications.html">Notification</a></li>
                            <li><a href="nestable_list.html">Nestable list</a></li>
                            <li><a href="agile_board.html">Agile board</a></li>
                            <li><a href="timeline_2.html">Timeline v.2</a></li>
                            <li><a href="diff.html">Diff</a></li>
                            <li><a href="pdf_viewer.html">PDF viewer</a></li>
                            <li><a href="i18support.html">i18 support</a></li>
                            <li><a href="sweetalert.html">Sweet alert</a></li>
                            <li><a href="idle_timer.html">Idle timer</a></li>
                            <li><a href="truncate.html">Truncate</a></li>
                            <li><a href="spinners.html">Spinners</a></li>
                            <li><a href="tinycon.html">Live favicon</a></li>
                            <li><a href="google_maps.html">Google maps</a></li>
                            <li><a href="datamaps.html">Datamaps</a></li>
                            <li><a href="social_buttons.html">Social buttons</a></li>
                            <li><a href="code_editor.html">Code editor</a></li>
                            <li><a href="modal_window.html">Modal window</a></li>
                            <li><a href="clipboard.html">Clipboard</a></li>
                            <li><a href="forum_main.html">Forum view</a></li>
                            <li><a href="validation.html">Validation</a></li>
                            <li><a href="tree_view.html">Tree view</a></li>
                            <li><a href="loading_buttons.html">Loading buttons</a></li>
                            <li><a href="chat_view.html">Chat view</a></li>
                            <li><a href="masonry.html">Masonry</a></li>
                            <li><a href="tour.html">Tour</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI Elements</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="draggable_panels.html">Draggable Panels</a></li> <li><a href="resizeable_panels.html">Resizeable Panels</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="video.html">Video</a></li>
                            <li><a href="tabs_panels.html">Panels</a></li>
                            <li><a href="tabs.html">Tabs</a></li>
                            <li><a href="notifications.html">Notifications & Tooltips</a></li>
                            <li><a href="helper_classes.html">Helper css classes</a></li>
                            <li><a href="badges_labels.html">Badges, Labels, Progress</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="table_basic.html">Static Tables</a></li>
                            <li><a href="table_data_tables.html">Data Tables</a></li>
                            <li><a href="table_foo_table.html">Foo Tables</a></li>
                            <li><a href="jq_grid.html">jqGrid</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="ecommerce_products_grid.html">Products grid</a></li>
                            <li><a href="ecommerce_product_list.html">Products list</a></li>
                            <li><a href="ecommerce_product.html">Product edit</a></li>
                            <li><a href="ecommerce_product_detail.html">Product detail</a></li>
                            <li><a href="ecommerce-cart.html">Cart</a></li>
                            <li><a href="ecommerce-orders.html">Orders</a></li>
                            <li><a href="ecommerce_payments.html">Credit Card form</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="basic_gallery.html">Lightbox Gallery</a></li>
                            <li><a href="slick_carousel.html">Slick Carousel</a></li>
                            <li><a href="carousel.html">Bootstrap Carousel</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="#">Second Level Item</a></li>
                            <li>
                                <a href="#">Second Level Item</a></li>
                            <li>
                                <a href="#">Second Level Item</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS Animations </span><span class="label label-info pull-right">62</span></a>
                    </li>
                    <li class="landing_link">
                        <a target="_blank" href="landing.html"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning pull-right">NEW</span></a>
                    </li>
                    <li class="special_link">
                        <a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Eras admin dashboard</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                <img class=" img-circle" style="height:60px; width: 60px"  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/fatty.jpg"?>" alt="image description" width="40" height="40" style="border: top: 30px;">    <br>        
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">48 hrs ago</small>
                                    <strong>Waithaka john</strong> started following <strong>Erastus muriithi and Sudo coders team</strong>. <br>
                                    <small class="text-muted">2 days ago at 7:58 pm - 04.10.2020</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                <img class=" img-circle" style="height:60px; width: 60px"  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/terry.jpg"?>" alt="image description" width="40" height="40" style="border: top: 30px;">    <br>        
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">2hrs ago</small>
                                    <strong>Terry Njeri</strong> started following <strong>Erastus muriithi and Sudo coders team</strong>. <br>
                                    <small class="text-muted">today 11:21 am - 06.10.2020</small>
                                </div>
                            </div>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                <img class=" img-circle" style="height:60px; width: 60px"  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/betty.jpg"?>" alt="image description" width="40" height="40" style="border: top: 30px;">    <br>        
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">2months ago</small>
                                    <strong>Betty Okum</strong> started following <strong>Erastus muriithi and Sudo coders team</strong>. <br>
                                    <small class="text-muted">monday 11:21 am - 06.08.2020</small>
                                </div>
                            </div>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                <img class=" img-circle" style="height:60px; width: 60px"  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/craz.jpg"?>" alt="image description" width="40" height="40" style="border: top: 30px;">    <br>        
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">10hrs ago</small>
                                    <strong>Cyrus Nderitu</strong> started following <strong>Erastus muriithi and Sudo coders team</strong>. <br>
                                    <small class="text-muted">yesterday 11:50 pm - 05.10.2020</small>
                                </div>
                            </div>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                <img class=" img-circle" style="height:60px; width: 60px"  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/k.jpg"?>" alt="image description" width="40" height="40" style="border: top: 30px;">    <br>        
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">1 years ago</small>
                                    <strong>Authur Kibicho</strong> started following <strong>Erastus muriithi and Sudo coders team</strong>. <br>
                                    <small class="text-muted">monday 03:21 pm - 06.10.2019</small>
                                </div>
                            </div>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                <img class=" img-circle" style="height:60px; width: 60px"  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/rose.jpg"?>" alt="image description" width="40" height="40" style="border: top: 30px;">    <br>        
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">2hrs ago</small>
                                    <strong>Roseline Waweru</strong> started following <strong>Erastus muriithi and Sudo coders team</strong>. <br>
                                    <small class="text-muted">now 11:21 am - 06.10.2020</small>
                                </div>
                            </div>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                <img class=" img-circle" style="height:60px; width: 60px"  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/unic.jpg"?>" alt="image description" width="40" height="40" style="border: top: 30px;">    <br>        
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">3days ago</small>
                                    <strong>Eunice Wangari</strong> started following <strong>Erastus muriithi and Sudo coders team</strong>. <br>
                                    <small class="text-muted">monday 08:21 am - 03.10.2020</small>
                                </div>
                            </div>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                
                                <img class=" img-circle" style="height:60px; width: 60px"  src="<?= Yii::$app->getUrlManager()->getBaseUrl()."/as/edith.jpg"?>" alt="image description" width="40" height="40" style="border: top: 30px;">    <br>        
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Edith Maina</strong> started following  <strong>Erastus muriithi and Sudo coders team</strong>. <br>
                                    <small class="text-muted">now at 03:30 pm - 06.10.2020</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                <a  style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/mailbox'])?>"><strong>Read All Messages</strong></a>
                                    <i class="fa fa-envelope"></i> 
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                        <a href="<?= Yii::$app->urlManager->createUrl(['site/mailbox'])?>"><strong> <i class="fa fa-envelope fa-fw"></i> You have 16 messages <pre>4 minutes ago </pre></strong></a>
                           <!-- <a href="mailbox.html" href="<?= Yii::$app->urlManager->createUrl(['site/mailbox'])?>"><strong> <i class="fa fa-envelope fa-fw"></i> You have 16 messages <pre>4 minutes ago </pre></strong>
                           -->
                                <div>
                                   
                                    <span class="pull-right text-muted small"></span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                     <!--   <a href="<?= Yii::$app->urlManager->createUrl(['site/followers'])?>">followers</a> -->
                        <a href="<?= Yii::$app->urlManager->createUrl(['site/followers'])?>"><strong> <i class="fa fa-envelope fa-fw"></i>3 New Followers <pre>2 days ago </pre></strong></a>
                                <div>
                                 <!--   <i class="fa fa-twitter fa-fw"></i> 3 New Followers -->
                                 <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                <li><a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/login'])?>">log out</a> </li> 
                </li> <br>
                <li>
                <li><a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['/'])?>">   <strong>Main Home</strong> </a> </li> 
                </li>
                <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-tasks"></i>
                    </a>
                </li>
            </ul>

        </nav>
        </div>





        

<?= $content ?>

<!--
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
      </div> -->
     
    <!-- / .row --> 
  
  <!-- </div>
  <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-up"></span></div>
  <div class="col-md-12"> <span class="pull-right">Copyright 2020 | All Rights Reserved  -- Template by <a href="<?= Yii::$app->urlManager->createUrl(['site/index'])?>">Sudo coders</a></span> </div>
    </div>
</footer> -->

<!--start styles -->


<!--
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
    .nav-header{
        position: fixed;
    }
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