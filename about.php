<?php
$pagename = "About";
include("header.php");

?>
<style>

.footer-section
{
   background: rgba(255, 255, 255, 0.98); /* More opaque white */
    /* Add these properties to ensure solid background */
    -webkit-backdrop-filter: blur(30px); /* Optional: for frosted glass effect */
    backdrop-filter: blur(30px); /* Optional: for frosted glass effect */
}

/* === Global Base === */
*, 
body, 
main, 
section, 
div, 
span, 
ul, 
li {
  color: #4A4A4A !important;
  background-color: transparent;
}

/* Page-level background */
main {
  background-image: url('img/xboom4.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}


/* === Headings === */
h1, h3, 
.big_title, 
.at-user__name, 
.section-main-heading, 
.step-title, 
.service-title, 
.testimonials-person {
  font-family: 'Poppins', sans-serif !important;
  color: #5FCCB3 !important;
}

h2, 
.section-title, 
.section-sub-heading, 
.step-card-title, 
.testimonials-info {
  font-family: 'Poppins', sans-serif !important;
  color: #2D7D7D !important;
}

/* === Interactive Elements === */
a, 
button, 
.learn_more, 
.service-more, 
.at-social a, 
.crawler-content a, 
.swiper-button-prev, 
.swiper-button-next {
  font-family: 'Poppins', sans-serif !important;
  color: #5FCCB3 !important;
}

a:hover, 
button:hover, 
.service-item:hover .service-more {
  color: #2D7D7D !important;
}

/* === Cards & Containers === */
.item, 
.step-card, 
.testimonials-card, 
.service-item {
  background-color: white !important;
}

/* === Icons === */
.fas, 
.far, 
.bx {
  color: #5FCCB3 !important;
}

/* === Special Cases === */
.slider-overlay {
  background-color: rgba(45, 125, 125, 0.1) !important; /* 2D7D7D with 10% opacity */
}

.crawler-content a {
  color: #5FCCB3 !important;
}
</style>
    <section id="about" class="about_us">

        <section id="inner_title">
            <div class="container-fluid top">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">

                    <div class="heading">
                            <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">About Us</li>
  </ol>
</nav>
                            <h1 class="about_watermark">About OK World</h1>
                        </div>

  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/head/ba1.jpg" class="d-block w-100" alt="..." loading="lazy">
    </div>
  </div>
</div>

                <div class="row justify-content-center">
                    <div class="col-md-10 col-sm-6">
                        
                    </div>
                </div>
            </div>
        </section>

        <section id="content_p_list">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-sm-6">
                        <div class="section_text">

                            <p>We specialize in affordable flights, comfortable accommodations, customized vacation packages, and
medical tourism services tailored to your needs.</p>
                            <br>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="core_values" style="background-image: url('img/xboom4.jpg'); background-attachment: fixed; background-size: cover; background-position: center; padding: 60px 0;">

            <a id="value_link" name="value_link"></a>
        <div class="container">
            <div class="section_title">
                <h2>Core Values</h2>
            </div>
            <div class="row between no-gutters">

     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">                         
    <div class="item">                             
        <div><i class="fas fa-handshake"></i></div>                             
        <div class="text">                                 
            <h3>INTEGRITY:</h3>                                 
            <p>We are committed to Trust, Transparency, Honesty</p>                             
        </div>                         
    </div>                 
</div>                  

<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">                         
    <div class="item">                             
        <div><i class="fas fa-award"></i></div>                             
        <div class="text">                                 
            <h3>EXCELLENCE:</h3>                                 
            <p>Quality, Professionalism, Precision</p>                             
        </div>                         
    </div>                 
</div>                  

<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">                         
    <div class="item">                             
        <div><i class="fas fa-dollar-sign"></i></div>                             
        <div class="text">                                 
            <h3>AFFORDABILITY:</h3>                                 
            <p>Accessible, Reasonable, Value-driven</p>                             
        </div>                         
    </div>                 
</div>

            </div>

        </div>
    </section>


        <section id="purpose">
            <a id="vision_link" name="vision_link"></a>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="item" style="margin-top: 70px;">
                        <span><i class="fas fa-low-vision"></i></span>
                        <h3 class="small_title">Vision</h3>
                        <p>To be the most trusted travel partner in Africa, transforming how the world experiences Ghana and how Ghanaians experience the world</p>
                    </div>

                    
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="mid_image">
                        <img src="img/ok.jpg" loading="lazy">
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="item marg">
                        <span><i class="fas fa-bullseye"></i></span>
                        <h3 class="small_title">Mission</h3>
                        <p>To provide world-class, affordable travel experiences rooted in Ghanaian hospitality, connecting cultures and creating lasting memories through personalized service and uncompromising integrity</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    </section>

        <?php include("footer.php"); ?>