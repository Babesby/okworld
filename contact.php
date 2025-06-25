<?php
$pagename = "Contact";
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
    <section id="about" class="contact">

        <section id="inner_title">
            <div class="container-fluid top">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">

                    <div class="heading">
                            <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
  </ol>
</nav>
                            <h1 class="about_watermark">Contact Us</h1>
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

        <section class="inner_wrap form_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- <h2 class="big_title">Address</h2> -->

                <div class="item">
                    <p>
                        <strong>ACCRA HQ</strong>
                        <br>
                        Accra Tourist Information Center,
                        Opposite Afrikiko
                        <br>
                        Accra, Ghana
                    </p>
                </div>


                <div class="item">
                    <p>
                       <strong>EMAIL:</strong>
                       <br>
                       <a href="mailto:okworldtraveltour@gmail.com" class="">okworldtraveltour@gmail.com</a>
                    </p>
                </div>

                <div class="item">
                    <p>
                       <strong>Call 24/7:</strong>
                       <br>
                       +233 54 435 5777
                    </p>
                </div>

            </div>
            <div class="col-md-7"><grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL"></grammarly-extension>
                <div class="form_wrapper">
                <section class="get-in-touch">

                    
                        <?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $message = $_POST['message'];
        $from = $_POST['company']; 
        $to = 'info@ankor.com.gh';
        $subject = 'Website Form';
        
        $body ="From: $name\nE-mail: $email\nNumber: $number\n\nMessage:\n\n$message";

        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! Your message has been sent successfully</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please fill the form correctly.</div>';
    }
}
    }
?>
                    <div class="">
    <?php if (!empty($result)) echo $result; ?>
</div>


                        <div class="item">
                    <p>If you are seeking new challenges and want to join our talented and high performing team, please send your application together with your CV (and trade certificates where applicable) to
                    <a href="mailto:l:okworldtraveltour@gmail.com" class="">okworldtraveltour@gmail.com</a></p>
                </div>

                    <form class="contact-form row" role="form" method="post" action="">
                        <div class="form-field">
                            <input id="name" class="input-text js-input" name="name" type="text" required>
                            <label class="label" for="name">Name</label>
                        </div>
                        <div class="form-field">
                            <input id="company" class="input-text js-input" name="company" type="text" required>
                            <label class="label" for="company">Company</label>
                        </div>
                        <div class="form-field">
                            <input id="phone" class="input-text js-input" name="number" type="tel" required>
                            <label class="label" for="phone">Phone Number</label>
                        </div>
                        <div class="form-field">
                            <input id="email" class="input-text js-input" name="email" type="email" required>
                            <label class="label" for="email">Email</label>
                        </div>
                        <div class="form-field">
                            <textarea id="message" class="message input-text js-input" name="message" type="text" required></textarea>
                            <label class="message_label label" for="message">Message</label>
                        </div>
                        <div class="form-field">
                           <input name="submit" type="submit" value="Send" class="submit-btn" style="background: #0077cc; color: #f7f7f7; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer;">
  </div>
                    </form>
                </section>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="map_holder">
    <div class="container-fluid">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.9452500967127!2d-0.19027392469098184!3d5.575113233456516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9a62639d42a7%3A0xbd9b6a23e096bfa!2sAccra%20Tourist%20Information%20Centre!5e0!3m2!1sen!2sgh!4v1750874848094!5m2!1sen!2sgh" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</section>

    </section>

        <?php include("footer.php"); ?>