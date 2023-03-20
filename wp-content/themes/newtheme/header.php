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
    <?php wp_head();?>
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
              <a class="nav-link text-dark fw-bold fs-5" href="<?php echo site_url('/try it free')?>">
                Try it free
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
