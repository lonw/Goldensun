<?php require_once '../inc/config.php'; ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Basic Page Needs
  ================================================== -->
    <title><?php echo $page_title; ?> - Golden Sun Capital Inc.</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <!--All Css-->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/icon-font.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <!--Revolution slider-->
    <link rel="stylesheet" href="css/settings.css" type="text/css" />
    <link rel="stylesheet" href="css/dynamic-captions.css" type="text/css" />
    <link rel="stylesheet" href="css/static-captions.css" type="text/css" />
    <!--Portfolio-->
    <link rel="stylesheet" href="css/featherlight.min.css" type="text/css" />
    <link rel="stylesheet" href="css/spsimpleportfolio.css" type="text/css" />
    <!--Owl Carousel-->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.transitions.css" type="text/css" />
    <link rel="stylesheet" href="css/sp-flickr-gallery.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <?php if ($current_page=='real_estate'): ?>
      <link rel="stylesheet" type="text/css" href="css/style2.css">
      <link rel="stylesheet" type="text/css" href="css/shouye.css">
      <link rel="stylesheet" type="text/css" href="css/real_estate.css">
    <?php endif; ?>
    <!--Jquery-->
    <script src="js/jQuery.js" type="text/javascript"></script>
</head>

<body>
  <div class="body-innerwrapper">
      <!--Top Contact info-->
      <section id="sp-top-info">
          <div class="container">
              <div class="row">
                  <div class="col-xs-12 top-base no-padding">
                      <div class="col-xs-6 top-block">
                          <p><i class="fa fa-map-marker"><i class="hidden">address</i></i> 7270 Woodbine Ave, Suite 203, Markham</p>
                      </div>
                      <div class="col-xs-6 top-block text-right">
                          <ul class="social-icons">
                            <?php
                            $url=$_SERVER['PHP_SELF'];
                            $endofurl = strrchr(parse_url($url, PHP_URL_PATH),'/');
                            if (((isset($_GET['title']) && $_GET['title'] != '')?sanitize($_GET['title']):'')||((isset($_GET['category']) && $_GET['category'] != '')?sanitize($_GET['category']):'')) {
                               echo '<li><a target="_parent" style="text-decoration:none;" href="../zh-cn'.$endofurl.'?title='.$_GET['title'].'&category='.$_GET['category'].'"><b>中</b></a></li>';
                          }
                          elseif (((isset($_GET['id']) && $_GET['id'] != '')?sanitize($_GET['id']):'')) {
                              echo '<li><a target="_parent" style="text-decoration:none;" href="../zh-cn'.$endofurl.'?id='.$_GET['id'].'"><b>中</b></a></li>';
                            }
                            else {
                            echo '<li><a target="_parent" style="text-decoration:none;" href="../zh-cn'.$endofurl.'"><b>中</b></a></li>';
                          }
                            echo '<li><a target="_parent" style="text-decoration:none;" href="#"><b>EN</b></a></li>';
                              ?>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--Top bar-->
      <section id="sp-top-bar">
          <div class="container">
              <div class="row">
                  <div id="sp-logo" class="col-sm-3 col-md-3">
                      <a class="logo" href=""><h1><img class="img-responsive sp-default-logo" src="/images/logo.png" alt="Golden Sun Capital"></h1></a>
                  </div>
                  <div id="sp-top2" class="col-sm-9 col-md-9 hidden-xs">
                      <ul class="sp-contact-info">
                          <li class="sp-contact-time"><i class="ti-timer"></i>
                              <p class="contact-content"> <span class="contact-title">Contact Time:</span> <span class="time">Mon-Fri: 10:00-18:00</span></p>
                          </li>
                          <li class="sp-contact-phone"><i class="icon-call-in"></i>
                              <p class="contact-content"> <span class="contact-title">Phone Number:</span> <span>+1 905-604-5622</span></p>
                          </li>
                          <li class="sp-contact-email"><i class="icon-envelope-letter"></i>
                              <p class="contact-content"> <span class="contact-title">Contact Mail:</span> <span>info@goldensunca.com</span></p>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </section>
