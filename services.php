<?php
$pagename = "Services";
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
    <section id="services" class="services_page">

        <section id="inner_title">
            <div class="container-fluid top">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">

                    <div class="heading">
                            <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Services</li>
  </ol>
</nav>
                            <h1 class="about_watermark">Services</h1>
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

                <div class="row justify-content-center">
                    <div class="col-md-10 col-sm-6">
                        
                    </div>
                </div>
            </div>
        </section>

       <section class="services_section">
        <div class="container">
            <!-- Flight Bookings & Reservations -->
            <div class="row service_row">
                <div class="col-md-6">
                    <div class="services_image">
                        <img src="img/serv/se1.jpg" alt="Flight Bookings" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service_content">
                        <h3>Flight Bookings & Reservations</h3>
                        <p class="service_description">Seamless flight booking services with access to global airlines, competitive pricing, and 24/7 support for all your travel needs.</p>
                        <a href="book.php" class="learn-more-btn">Learn More<i class="fas fa-chevron-circle-right"></i></a> 
                    </div>
                </div>
            </div>

            <!-- Group Tours & Packages -->
            <div class="row service_row">
                <div class="col-md-6 order-md-2">
                    <div class="services_image">
                        <img src="img/serv/ga3.jpg" alt="Group Tours" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="service_content">
                        <h3>Group Tours & Packages</h3>
                        <p class="service_description">Carefully curated group travel experiences featuring popular destinations, expert guides, and all-inclusive packages for memorable adventures.</p>
                       <a href="book.php" class="learn-more-btn">Learn More<i class="fas fa-chevron-circle-right"></i></a> 
                    </div>
                </div>
            </div>

            <!-- Corporate Retreats & Seminars -->
            <div class="row service_row">
                <div class="col-md-6">
                    <div class="services_image">
                        <img src="img/serv/se7.jpg" alt="Corporate Retreats" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service_content">
                        <h3>Corporate Retreats & Seminars</h3>
                        <p class="service_description">Professional event planning for corporate retreats, team building activities, and business seminars in inspiring locations worldwide.</p>
                        <a href="book.php" class="learn-more-btn">Learn More<i class="fas fa-chevron-circle-right"></i></a> 
                    </div>
                </div>
            </div>

            <!-- Luxury Car Rentals -->
            <div class="row service_row">
                <div class="col-md-6 order-md-2">
                    <div class="services_image">
                        <img src="https://images.unsplash.com/photo-1544636331-e26879cd4d9b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2074&q=80" alt="Luxury Car Rentals" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="service_content">
                        <h3>Luxury Car Rentals</h3>
                        <p class="service_description">Premium vehicle rental services featuring luxury cars, SUVs, and exotic vehicles with professional chauffeur options available.</p>
                       <a href="book.php" class="learn-more-btn">Learn More<i class="fas fa-chevron-circle-right"></i></a> 
                    </div>
                </div>
            </div>

            <!-- Passport & Visa Assistance -->
            <div class="row service_row">
                <div class="col-md-6">
                    <div class="services_image">
                        <img src="img/serv/se3.jpg" alt="Passport & Visa Services" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service_content">
                        <h3>Passport & Visa Assistance</h3>
                        <p class="service_description">Complete documentation support including passport renewals, visa applications, and travel document processing for hassle-free international travel.</p>
                        <a href="book.php" class="learn-more-btn">Learn More<i class="fas fa-chevron-circle-right"></i></a> 
                    </div>
                </div>
            </div>

            <!-- Travel Consultancy -->
            <div class="row service_row">
                <div class="col-md-6 order-md-2">
                    <div class="services_image">
                        <img src="img/serv/se5.jpg" alt="Travel Consultancy" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="service_content">
                        <h3>Travel Consultancy</h3>
                        <p class="service_description">Expert travel advice and personalized itinerary planning with insider knowledge to create unforgettable travel experiences tailored to your preferences.</p>
                        <a href="book.php" class="learn-more-btn">Learn More<i class="fas fa-chevron-circle-right"></i></a>  
                      </div>
                </div>
            </div>

            <!-- Food Tourism -->
            <div class="row service_row">
                <div class="col-md-6">
                    <div class="services_image">
                        <img src="img/serv/se6.jpg" alt="Food Tourism" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service_content">
                        <h3>Food Tourism</h3>
                        <p class="service_description">Culinary adventures featuring local cuisine, cooking classes, food tours, and authentic dining experiences in destinations around the world.</p>
                        <a href="book.php" class="learn-more-btn">Learn More<i class="fas fa-chevron-circle-right"></i></a> 
                    </div>
                </div>
            </div>

            <!-- Medical Tourism -->
            <div class="row service_row">
                <div class="col-md-6 order-md-2">
                    <div class="services_image">
                        <img src="img/serv/se8.jpg" alt="Medical Tourism" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="service_content">
                        <h3>Medical Tourism</h3>
                        <p class="service_description">Comprehensive medical travel services connecting you with world-class healthcare facilities and wellness retreats for treatments and recovery.</p>
                       <a href="book.php" class="learn-more-btn">Learn More<i class="fas fa-chevron-circle-right"></i></a> 
                    </div>
                </div>
            </div>

            <!-- Bespoke Confidential Services -->
            <div class="row service_row">
                <div class="col-md-6">
                    <div class="services_image">
                        <img src="img/serv/se0.jpg" alt="Bespoke Services" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service_content">
                        <h3>Bespoke Confidential Services</h3>
                        <p class="service_description">Exclusive, personalized travel arrangements with complete discretion and privacy for high-profile clients requiring specialized attention and security.</p>
                        <a href="book.php" class="learn-more-btn">Learn More<i class="fas fa-chevron-circle-right"></i></a> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    </section>

        <?php include("footer.php"); ?>