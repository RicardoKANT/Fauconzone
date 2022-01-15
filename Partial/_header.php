<?php
   include('include/constant.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>
    <?php
        echo isset($title) ? $title.'-'.WEBSITE_NAME : WEBSITE_NAME .'Revolution';
    ?>
   

</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" href="images/fevicon/FAUC.jpg" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<!-- Site css -->
<link rel="stylesheet" href="css/style.css" />
<!-- responsive css -->
<link rel="stylesheet" href="css/responsive.css" />
<!-- colors css -->
<link rel="stylesheet" href="css/colors1.css" />
<!-- custom css -->
<link rel="stylesheet" href="css/custom.css" />
<!-- wow Animation css -->
<link rel="stylesheet" href="css/animate.css" />
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />
<link rel="stylesheet" type="text/css" href="revolution/css/layers.css" />
<link rel="stylesheet" type="text/css" href="revolution/css/navigation.css" />


<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body id="default_theme" class="it_service" >
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="images/loaders/FAUC.jpg" alt="#" /> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight">540 Lorem Ipsum New York, AB 90218</span> </li>
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:info@yourdomain.com">www.esfbenin.net</a></span> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 right_section_header_top">
          <div class="float-left">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
          <div class="float-right">
            <div class="make_appo"> <a class="btn white_btn" href="conexion.php">Espace Administrateur</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="index.php"><img src="images/logos/FAUC.jpg" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a class="active" href="index.php">Acceuil</a>
                </li>
                <li><a href="it_about.html">A propos</a></li>
                <li> <a href="it_service.html">Service</a>
                  <ul>
                    <li><a href="it_service_list.html">Services list</a></li>
                    <li><a href="it_service_detail.html">Services Detail</a></li>
                  </ul>
                </li>
                <li> <a href="it_blog.html">Blog</a>
                  <ul>
                    <li><a href="it_blog.html">Blog List</a></li>
                    <li><a href="it_blog_grid.html">Blog Grid</a></li>
                    <li><a href="it_blog_detail.html">Blog Detail</a></li>
                  </ul>
                </li>
                <li> <a href="#">Pages</a>
                  <ul>
                    <li><a href="it_career.html">Career</a></li>
                    <li><a href="it_price.html">Pricing</a></li>
                    <li><a href="it_faq.html">Faq</a></li>
                    <li><a href="it_privacy_policy.html">Privacy Policy</a></li>
                    <li><a href="it_error.html">Error 404</a></li>
                  </ul>
                </li>
                <li> <a href="connexion2.php">Connexion</a>
                  
                </li>
                <li> <a href="it_contact.html">Contact</a>
                  <ul>
                    <li><a href="it_contact.html">Contact Page 1</a></li>
                    <li><a href="it_contact_2.html">Contact Page 2</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="search_icon">
              <ul>
                <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
<!-- end header -->