<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Erastus | Mailbox</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
    
                <div class="col-lg-10">
                    <h2>Profile</h2>
                    <ol class="breadcrumb">
                    <li>
                        <li><a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/adminhome'])?>">Home</a></li>
                        </li>
                        
                        <li><a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/mailbox'])?>">Messages</a></li>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-content mailbox-content">
                        <div class="file-manager">
                            <a class="btn btn-block btn-primary compose-mail" href="mail_compose.html">Compose Mail</a>
                            <div class="space-25"></div>
                            <h5>Folders</h5>
                            <ul class="folder-list m-b-md" style="padding: 0">
                            
                            <li><a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/mailbox'])?>">Inbox <span class="label label-warning pull-right">16</span>  </a></li>
                            <li><a style="padding-right: 20px"  href="<?= Yii::$app->urlManager->createUrl(['site/mailbox'])?>">Send mail  </a></li>
                                <li><a href="mailbox.html"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
                                <li><a href="mailbox.html"> <i class="fa fa-certificate"></i> Important</a></li>
                                <li><a href="mailbox.html"> <i class="fa fa-file-text-o"></i> Drafts <span class="label label-danger pull-right">2</span></a></li>
                                <li><a href="mailbox.html"> <i class="fa fa-trash-o"></i> Trash</a></li>
                            </ul>
                            <h5>Categories</h5>
                            <ul class="category-list" style="padding: 0">
                                <li><a href="#"> <i class="fa fa-circle text-navy"></i> Work </a></li>
                                <li><a href="#"> <i class="fa fa-circle text-danger"></i> Documents</a></li>
                                <li><a href="#"> <i class="fa fa-circle text-primary"></i> Social</a></li>
                                <li><a href="#"> <i class="fa fa-circle text-info"></i> Advertising</a></li>
                                <li><a href="#"> <i class="fa fa-circle text-warning"></i> Clients</a></li>
                            </ul>

                            <h5 class="tag-title">Labels</h5>
                            <ul class="tag-list" style="padding: 0">
                                <li><a href=""><i class="fa fa-tag"></i> Family</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Work</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Home</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Children</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Holidays</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Music</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Photography</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Film</a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 animated fadeInRight">
            <div class="mail-box-header">

                <form method="get" action="index.html" class="pull-right mail-search">
                    <div class="input-group">
                        <input type="text" class="form-control input-sm" name="search" placeholder="Search email">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-sm btn-primary">
                                Search
                            </button>
                        </div>
                    </div>
                </form>
                <h2>
                    Inbox (10)
                </h2>
                <div class="mail-tools tooltip-demo m-t-md">
                    <div class="btn-group pull-right">
                        <button class="btn btn-white btn-sm"><i class="fa fa-arrow-left"></i></button>
                        <button class="btn btn-white btn-sm"><i class="fa fa-arrow-right"></i></button>

                    </div>
                    <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="Refresh inbox"><i class="fa fa-refresh"></i> Refresh</button>
                    <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as read"><i class="fa fa-eye"></i> </button>
                    <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as important"><i class="fa fa-exclamation"></i> </button>
                    <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>

                </div>
            </div>
                <div class="mail-box">

                <table class="table table-hover table-mail">
                <tbody>
                <tr class="unread">
                    <td class="check-mail">
                        <input type="checkbox" class="i-checks">
                    </td>
                    <td class="mail-ontact"><a href="mail_detail.html">Jeff Mwangi</a></td>
                    <td class="mail-subject"><a href="mail_detail.html">Hello.I will not be available today..Have a shoot to attend</a></td>
                    <td class=""><i class="fa fa-pap"></i></td>
                    <td class="text-right mail-date">  <strong>Sunday</strong>  2.00 AM</td>
                </tr>
                <tr class="unread">
                    <td class="check-mail">
                        <input type="checkbox" class="i-checks" checked>
                    </td>
                    <td class="mail-ontact"><a href="mail_detail.html">Twish</a></td>
                    <td class="mail-subject"><a href="mail_detail.html">Hello Eras.Can you help me with ua laptop tonyt??</a></td>
                    <td class=""></td>
                    <td class="text-right mail-date">  <strong>Yesterday</strong>  8.22 PM</td>
                </tr>
                <tr class="unread">
                    <td class="check-mail">
                        <input type="checkbox" class="i-checks">
                    </td>
                    <td class="mail-ontact"><a href="mail_detail.html">Facebook</a> <span class="label label-warning pull-right">Clients</span> </td>
                    <td class="mail-subject"><a href="mail_detail.html">Many desktop publishing packages and web page editors.</a></td>
                    <td class=""></td>
                    <td class="text-right mail-date">Jan 16</td>
                </tr>
                <tr class="unread">
                    <td class="check-mail">
                        <input type="checkbox" class="i-checks">
                    </td>
                    <td class="mail-ontact"><a href="mail_detail.html">Mailchip</a></td>
                    <td class="mail-subject"><a href="mail_detail.html">There are many variations of passages of Lorem Ipsum.</a></td>
                    <td class=""></td>
                    <td class="text-right mail-date">Mar 22</td>
                </tr>
                <tr class="read">
                    <td class="check-mail">
                        <input type="checkbox" class="i-checks">
                    </td>
                    <td class="mail-ontact"><a href="mail_detail.html">Alex T.</a> <span class="label label-danger pull-right">Documents</span></td>
                    <td class="mail-subject"><a href="mail_detail.html">Lorem ipsum dolor noretek imit set.</a></td>
                    <td class=""><i class="fa fa-paperclip"></i></td>
                    <td class="text-right mail-date">December 22</td>
                </tr>
                <tr class="read">
                    <td class="check-mail">
                        <input type="checkbox" class="i-checks">
                    </td>
                    <td class="mail-ontact"><a href="mail_detail.html">Damien Ritz</a></td>
                    <td class="mail-subject"><a href="mail_detail.html">Oor Lorem Ipsum is that it has a more-or-less normal.</a></td>
                    <td class=""></td>
                    <td class="text-right mail-date">Jun 11</td>
                </tr>
                <tr class="read">
                    <td class="check-mail">
                        <input type="checkbox" class="i-checks">
                    </td>
                    <td class="mail-ontact"><a href="mail_detail.html">Anna Smith</a></td>
                    <td class="mail-subject"><a href="mail_detail.html">Lorem ipsum dolor noretek imit set.</a></td>
                    <td class=""><i class="fa fa-paperclip"></i></td>
                    <td class="text-right mail-date">6.10 AM</td>
                </tr>
                <tr class="read">
                    <td class="check-mail">
                        <input type="checkbox" class="i-checks">
                    </td>
                    <td class="mail-ontact"><a href="mail_detail.html">Jack Nowak</a></td>
                    <td class="mail-subject"><a href="mail_detail.html">Aldus PageMaker including versions of Lorem Ipsum.</a></td>
                    <td class=""></td>
                    <td class="text-right mail-date">8.22 PM</td>
                </tr>
                <tr class="read">
                    <td class="check-mail">
                        <input type="checkbox" class="i-checks">
                    </td>
                    <td class="mail-ontact"><a href="mail_detail.html">Twish</a></td>
                    <td class="mail-subject"><a href="mail_detail.html">Hi!I got your missed call this morning,,how can I help Eras?.</a></td>
                    <td class=""></td>
                    <td class="text-right mail-date">Mar 22</td>
                </tr>
                <!-- <tr class="read">
                    <td class="check-mail">
                        <input type="checkbox" class="i-checks">
                    </td>
                    <td class="mail-ontact"><a href="mail_detail.html">Monica Ryther</a></td>
                    <td class="mail-subject"><a href="mail_detail.html">The standard chunk of Lorem Ipsum used.</a></td>
                    <td class=""></td>
                    <td class="text-right mail-date">Jun 12</td>
                </tr>
                <tr class="read">
                    <td class="check-mail">
                        <input type="checkbox" class="i-checks">
                    </td>
                    <td class="mail-ontact"><a href="mail_detail.html">Sandra Derick</a></td>
                    <td class="mail-subject"><a href="mail_detail.html">Contrary to popular belief.</a></td>
                    <td class=""></td>
                    <td class="text-right mail-date">May 28</td>
                </tr>
                <tr class="read">
                    <td class="check-mail">
                        <input type="checkbox" class="i-checks">
                    </td>
                    <td class="mail-ontact"><a href="mail_detail.html">Patrick Pertners</a> <span class="label label-info pull-right">Adv</span></td>
                    <td class="mail-subject"><a href="mail_detail.html">If you are going to use a passage of Lorem </a></td>
                    <td class=""></td>
                    <td class="text-right mail-date">May 28</td>
                </tr>
                <tr class="read">
                    <td class="check-mail">
                        <input type="checkbox" class="i-checks">
                    </td>
                    <td class="mail-ontact"><a href="mail_detail.html">Michael Fox</a></td>
                    <td class="mail-subject"><a href="mail_detail.html">Humour, or non-characteristic words etc.</a></td>
                    <td class=""></td>
                    <td class="text-right mail-date">Dec 9</td>
                </tr> -->
       
               <!-- <tr class="read">
                    <td class="check-mail">
                        <input type="checkbox" class="i-checks">
                    </td>
                    <td class="mail-ontact"><a href="mail_detail.html">Alex T.</a> <span class="label label-warning pull-right">Clients</span></td>
                    <td class="mail-subject"><a href="mail_detail.html">Lorem ipsum dolor noretek imit set.</a></td>
                    <td class=""><i class="fa fa-paperclip"></i></td>
                    <td class="text-right mail-date">December 22</td>
                </tr>
                <tr class="read">
                    <td class="check-mail">
                        <input type="checkbox" class="i-checks">
                    </td>
                    <td class="mail-ontact"><a href="mail_detail.html">Monica Ryther</a></td>
                    <td class="mail-subject"><a href="mail_detail.html">The standard chunk of Lorem Ipsum used.</a></td>
                    <td class=""></td>
                    <td class="text-right mail-date">Jun 12</td>
                </tr>
                <tr class="read">
                    <td class="check-mail">
                        <input type="checkbox" class="i-checks">
                    </td>
                    <td class="mail-ontact"><a href="mail_detail.html">Sandra Derick</a></td>
                    <td class="mail-subject"><a href="mail_detail.html">Contrary to popular belief.</a></td>
                    <td class=""></td>
                    <td class="text-right mail-date">May 28</td>
                </tr>
                <tr class="read">
                    <td class="check-mail">
                        <input type="checkbox" class="i-checks">
                    </td>
                    <td class="mail-ontact"><a href="mail_detail.html">Patrick Pertners</a> </td>
                    <td class="mail-subject"><a href="mail_detail.html">If you are going to use a passage of Lorem </a></td>
                    <td class=""></td>
                    <td class="text-right mail-date">May 28</td>
                </tr>
                <tr class="read">
                    <td class="check-mail">
                        <input type="checkbox" class="i-checks">
                    </td>
                    <td class="mail-ontact"><a href="mail_detail.html">Michael Fox</a></td>
                    <td class="mail-subject"><a href="mail_detail.html">Humour, or non-characteristic words etc.</a></td>
                    <td class=""></td>
                    <td class="text-right mail-date">Dec 9</td>
                </tr>
                <tr class="read">
                    <td class="check-mail">
                        <input type="checkbox" class="i-checks">
                    </td>
                    <td class="mail-ontact"><a href="mail_detail.html">Damien Ritz</a></td>
                    <td class="mail-subject"><a href="mail_detail.html">Oor Lorem Ipsum is that it has a more-or-less normal.</a></td>
                    <td class=""></td>
                    <td class="text-right mail-date">Jun 11</td>
                </tr> -->
                </tbody>
                </table>


                </div>
            </div>
        </div>
        </div>
        <div class="footer">
           
            <div>
                <strong>Desighned By</strong> Eras Muriithi &copy; 2020
            </div>
        </div>

        </div>
        </div>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>
</html>

   
        

