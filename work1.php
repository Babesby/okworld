<?php
$pagename = "Work Abroad / Enquiries";
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
<section id="services" class="maintenance_management">
    <section id="inner_title">
        <div class="container-fluid top">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="heading">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="services.php">Services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Work Abroad</li>
                        </ol>
                    </nav>
                    <h1 class="about_watermark">Enquiries</h1>
                </div>

               
                <div class="page_header">
                    <img src="img/head/ba1.jpg" loading="lazy"/>
                </div>
            </div>
        </div>
    </section>


<?php include("footer.php"); ?>
