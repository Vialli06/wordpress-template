<!DOCTYPE html>
<html>
<head>
    <title>Vizologi - AI-Powered Innovation Management Software</title>
    <meta name="keywords" content="Vizologi, AI">
    <meta http-equiv="refresh" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>

    <style>

        body{
            background-color:white;
        }

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');


.container .box-container{
  max-width: 1200px;
  margin:0 auto;
  padding:20px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap:20px;
}

.container .box-container .box{
  background: #fff;
  box-shadow: 0 10px 15px rgba(0,0,0,.3);
}


.container .box-container .box .price.year{
  display: none;
}


.container .box-container .box .btn{
  margin:20px;
  display: block;
  font-size: 17px;
  background: #444;
  color:#fff;
  padding:10px;
}


.container .price-toggler{
  margin-top: 20px;
  display: inline-block;
  padding:5px;
  border:2px solid #000;
  background: #fff;
}

.container .price-toggler span{
  padding:7px 30px;
  cursor: pointer;
  color:#444;
  font-size: 20px;
  display: inline-block;
}

.container .price-toggler span.active{
  background: #444;
  color:#fff;
}

.content-one {
  margin-top: 56px;
  color: #3c3c3c;
  font-family: roobert, sans-serif;
}

.title {
  font-size: 55px;
  font-weight: bold;
}

#text-background-color {
  background-color: yellow;
}

.para-one {
  margin: 35px auto 60px;
  text-align: center;
  font-size: 20px;
  line-height: 25px;
}

.btn-google {
  margin-right: 25px;
  background: #518ef8;
  display: inline-flex;
  line-height: 25px;
  border: 2px solid #518ef8;
  border-radius: 35px;
  margin-bottom: 20px;
  position: relative;
  text-align: center;
  font-size: 20px;
  font-family: roobert, sans-serif;
  color: aliceblue;
  padding: 20px 30px;
}

.btn-email {
  display: inline-flex;
  line-height: 25px;
  background: #fff;
  border: 2px solid #3c3c3c;
  border-radius: 35px;
  margin-bottom: 20px;
  position: relative;
  text-align: center;
  font-size: 20px;
  padding: 20px 30px;
}

.dotted-border {
  height: 5px;
  background-image: linear-gradient(to right, #000 30%, rgba(255, 255, 255, 0) 0%);
  background-position: bottom;
  background-size: 13px 3px;
  background-repeat: repeat-x;
}

.btn-vizologi {
  background: #88c7a8;
  border: 2px solid #88c7a8;
  color: #fff;
  margin-right: 25px;
  height: 70px;
  line-height: 50px;
  border-radius: 35px;
  margin-bottom: 20px;
  position: relative;
  text-align: center;
  font-size: 20px;
  font-family: roobert, sans-serif;
  padding: 0px 30px;
}

.btn-vizologi:hover {
  background: lightcoral;
  border: 2px solid lightcoral;
}

.btn-features {
  border: 2px solid #645BC9;
  background: #645BC9;
  color: #fff;
  margin-right: 25px;
  height: 70px;
  line-height: 50px;
  border-radius: 35px;
  margin-bottom: 20px;
  position: relative;
  text-align: center;
  font-size: 20px;
  font-family: roobert, sans-serif;
  padding: 0px 30px;
}

.btn-title {
  font-size: 20px;
  border: 1px solid black;
  border-radius: 40px;
  border-color: grey;
  background-color: white;
  color: grey;
  width: 140px;
}

.btn-title:hover {
  color: white;
  background-color: #6f42c1;
  border: 1px solid #6f42c1;
}

.content-five {
  background-color: #fafafb;
}

.btn-free{
  height:50px;
  color: rgb(229, 114, 134);
  border: 2px solid rgb(229, 114, 134);
  background-color: white;
  font-size: 20px;
  border-radius: 40px;
  padding: 0 30px;
}

.btn-free:hover{
  color:white;
  background-color: rgb(229, 114, 134);
  border: 2px solid rgb(229, 114, 134);
}

.btn-getstarted {
  font-size: 20px;
  margin-right: 25px;
  padding: 20px 30px;
  background-color: #F47574;
  border-color: #F47574;
  color: #fff;
  font-weight: bold;
  font-family: "Roobert", sans-serif;
  padding: 0 30px;
  border-radius: 40px;
  z-index: 8;
  height: 70px;
  line-height: 66px;
  width: 330px;
}

.newtext {
  margin-right: 25px;
  background: #fff;
  height: 50px;
  line-height: 50px;
  border: 2px solid #3c3c3c;
  border-radius: 35px;
  margin-bottom: 20px;
  position: relative;
  text-align: center;
  font-size: 20px;
  font-family: roobert, sans-serif;
  color: aliceblue;
  padding: 20px 30px;
}

.content-seven {
  background-color: #fafafb;
}

.footer-class li {
  margin-bottom: 10px; 
}

.money {
    font-size:100px;
    font-weight: bolder;
} 

/* .navigation {
            display: flex;
            justify-content: flex-end;
            margin: 20px 0 200px 0;
        } */
</style>
</head>

<body>
    <div class="main-container">

        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
                <div class="container-fluid ">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/color-logo.png" width="150">
                </div>
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link text-dark fw-bold fs-5 active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark fw-bold fs-5" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark fw-bold fs-5" href="#">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark fw-bold fs-5" href="#">Canvas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark fw-bold fs-5" href="#">Services</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark fw-bold fs-5" href="#">Login</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link  fw-bold fs-5 new-tag" href="#">Try it free</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <header>
    </div>









