<?php
ini_set('display_errors', 1);
//error_reporting(E_ALL); 
error_reporting(E_ALL ^ E_NOTICE);

session_start();
require_once 'config.php';


if (isset($_REQUEST['logout'])) {
  unset($_SESSION['google_token_array']);               // company
  unset($_SESSION['user_email_gmail']);                 // company
  unset($_SESSION['google_tokenUser']);                 // company
  unset($_SESSION['transactionId']);                    // company
  unset($_SESSION['uniqueTokenId']);                    // company
  unset($_SESSION['WEBAPP_PATH']);                              // company

  unset($_SESSION['WIDGET_PATH']);                              // company config
  unset($_SESSION['extUserId']);                                // company config

  unset($_SESSION['sessionKey']);                               // WIDGET !!
  unset($_SESSION['url_time4user']);                    // WIDGET !!
  unset($_SESSION['devices']);                                  // WIDGET !!
  unset($_SESSION['company_info']);                                     // WIDGET !!
}



<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Time4eID DEMO</title>

<link href="serv/css/bootstrap.css" rel="stylesheet">
<link href="serv/css/stili.css" rel="stylesheet" media="screen">        

<script src="serv/js/jquery.js"></script>
<script src="serv/js/bootstrap.min.js"></script>
<?php
if ($_SESSION['google_token_array']!='') header("Location: serv/homepage.php");
?>
</head>
  <body data-twttr-rendered="true">

  <?php include 'serv/menu.php'; ?>
        <div class="containerFix center">


        <div class="jumbotron home index">
      <div class="container">
                <div class="col-md-8 col-sm-7 col-xs-12">
                <h1>DESIGN SOLUTIONS</h1>
        </div>

        <div class="col-md-4 col-sm-5 col-xs-12">
            <button type="button" class="btn btn-face btn-md" onClick="window.location.href='<?php echo $authUrl;?>'" >
                <span class="iconGoogle"></span><span class="icontextGoogle">Login Google</span>
            </button>

            <button type="button" class="btn btn-face btn-md noCursor">
                <span class="iconFace"></span><span class="icontextFace">Login Facebook</span>
            </button>

            <p class="fixW">OR</p>

            <div class="form-group fixW">
                <input type="text" placeholder="EMAIL" disabled class="form-control">
            </div>
            <div class="form-group fixW">
                <input type="text" placeholder="PASSWORD" disabled class="form-control">
            </div>
            <div class="form-group fixW">
                <input type="text" placeholder="LOGIN" disabled class="form-control buttonSubmit">
            </div>

      </div>
      </div>

    </div>

    <div class="container center">
        <div id="ribbon"></div>
    <h4 class="pageSubTitle hr">WE CREATE IMPACT THROUGH DESIGN</h4>

                        <div class="col-md-4 col-sm-4 col-xs-12 disabledColor">
                          <img src="serv/img/icon_space.png" style="opacity: 0.5;">
                           <h2 class="pageSubTitle">PORTFOLIO</h2>
                           <p class="minibox">LÖS is an award-winning brand design consultancy with a diverse portfolio of clients from around the world. Our multi-disciplinary teams have been creating innovative solutions for over 20 years.</p>
        </div><!-- /.col-lg-4 -->
                        <div class="col-md-4 col-sm-4 col-xs-12 disabledColor">
                          <img src="serv/img/icon_lampadina.png" style="opacity: 0.5;">
                          <h2 class="pageSubTitle">FORUM</h2>
                          <p class="minibox">LÖS Forum is the best source for help, troubleshooting tips, and buying advice from a community of experts. Chat with other members, exchange ideas and tips, create groups, or ask us questions online.</p>
        </div><!-- /.col-lg-4 -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                           <img src="serv/img/icon_pagina.png" style="opacity: 0.5;">
                          <h2 class="pageSubTitle">CLIENTS</h2>
                          <p class="minibox">There are a number of services that we offer clients via this website. You can access your account information and find out more about how we work, our services and our support.</p>
              <p class="minibox small"><img src="serv/img/icon_download.png">DOWNLOAD TIME4ID APP</p>
        </div><!-- /.col-lg-4 -->

    </div>

</div>
</body>
</html>



<!doctype html>
<html lang="en">

<body>

Welcome To Demo 

</body>
</html>
