<!DOCTYPE html>
<html>
  
  <head>
    <title>
      Vizologi - AI-Powered Innovation Management Software
    </title>
    <meta name="keywords" content="Vizologi, AI">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script src="https://kit.fontawesome.com/8d309a73b1.js" crossorigin="anonymous"></script>
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script> -->
    <?php wp_head();?>
    <style>

      .time-heading {
        font-size:50px;
        font-weight:bold;
        color:#3c3c3c;
      }

      .time-para {
        font-size:30px;
      }

      .testimonial-para {
        font-size:30px;
      }

      #text-head{
        color:#3c3c3c;
        font-weight: bold;
        font-size: 65px;
        margin-bottom: 0px;
      }

      #text-para{
        color:black;
        font-size:27px;
        color:#3c3c3c;
      }

      .list-listings{
        font-size:20px;
      }

      .list-duration{
        font-size:20px;
      }

      .box{
        border-radius:12px;
      }

      .box-col{
        box-shadow: 3px 0 0 0 lightgrey;
      }

      #content-six-head {
        font-size:60px;
        color: #3c3c3c;
        font-weight:bold;
      }

      #content-six-para{
        color: #3c3c3c;
        font-size: 35px;
      }

      .btn-getstarted {
        font-size:20px;
        margin-right:25px;
        padding:20px 30px;
        background-color:#F47574;
        border-color:#F47574;
        color:#fff;
        font-weight:bold;
        font-family:"Roobert",sans-serif;
        padding:0 30px;
        border-radius:40px;
        z-index:8;
        height:70px;
        line-height:66px;
        width:375px;
      }

      .newtext {
        margin-right:25px;
        background:#fff;
        height:50px;
        line-height:50px;
        border:2px solid #3c3c3c;
        border-radius:35px;
        margin-bottom:20px;
        position:relative;
        text-align:left;
        font-size:20px;
        font-family:roobert,sans-serif;
        color:aliceblue;
        padding:20px 30px;
        width: 375px;
      }

      .btn-title.active {
        color:white;
      background-color:#6f42c1;
      border:1px solid #6f42c1;
      }
    </style>
    </head>

    <body>
    <div class="main-container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container-fluid logo-container">
          <img src="<?php echo get_template_directory_uri(); ?>/images/color-logo.png"
          width="150">
        </div>
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-dark fw-bold fs-5 active" aria-current="page"
              href="<?php echo site_url('')?>">
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark fw-bold fs-5" href="<?php echo site_url('/features')?>">
                Features
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark fw-bold fs-5" href="<?php echo site_url('/pricing')?>">
                Pricing
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark fw-bold fs-5" href="<?php echo site_url('/canvas')?>">
                Canvas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark fw-bold fs-5" href="<?php echo site_url('/services')?>">
                Services
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-dark fw-bold fs-5" href="<?php echo site_url('/login')?>">
                Login
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link fw-bold fs-5" id="nav-color" href="<?php echo site_url('/try it free')?>">
                Try it free
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>