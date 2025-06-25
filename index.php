<?php
$pagename = "Home";
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
background-attachment: fixed;
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
  
    <!-- Header Section -->

   <header id="header"> </header>

    <!-- Hero Slider -->
      <section id="hero">
        <div class="split-slideshow">
          <div class="slider-overlay"></div>
          <div class="slideshow">
            <div class="slider">
              <div class="item"><img src="images/hero-image/one.jpg" loading="lazy"/></div>
              <div class="item"><img src="img/web/two.jpg" loading="lazy"/></div>
              <div class="item"><img src="img/web/three.jpg" loading="lazy"/></div>
              <div class="item"><img src="img/web/four.jpg"loading="lazy" /></div>
            </div>
          </div>
        </div>
      </section>

    <!-- Core Services -->

<!-- Core Services Section -->
<section id="hero_avatar" style="background: url('your-background-image.jpg') no-repeat center center/cover; padding: 80px 0; font-family: 'Poppins', sans-serif;">
  <div class="container">
    <div class="row justify-content-center align-items-center text-center text-white">
      <div class="col-12 mb-5">
        <h2 style="color: var(--aquamarine); font-weight: 700; font-size: 2.5rem;">Explore Our Services</h2>
        <p style="color: #ffffffcc; font-size: 1.1rem;">From global studies to seamless medical travel, we simplify your journey abroad.</p>
      </div>

      <!-- Study Abroad -->
      <div class="col-6 col-md-3 mb-4">
        <a href="study.php" style="text-decoration: none;">
        <div class="service-icon" style="transition: transform 0.3s ease;">
          <i class="fa-solid fa-graduation-cap" style="font-size: 3rem; color: var(--cyan);"></i>
          <h4 style="margin-top: 15px; font-size: 1.2rem; color: #fff;">Study Abroad</h4>
        </div>
        </a>
      </div>

      <!-- Work Abroad -->
      <div class="col-6 col-md-3 mb-4">
        <a href="work.php" style="text-decoration: none;">
        <div class="service-icon">
          <i class="fa-solid fa-briefcase" style="font-size: 3rem; color: var(--cornflower-blue);"></i>
          <h4 style="margin-top: 15px; font-size: 1.2rem; color: #fff;">Work Abroad</h4>
        </div></a>
      </div>

      <!-- Medical Tourism -->
      <div class="col-6 col-md-3 mb-4">
        <a href="https://okworld.com.gh/" style="text-decoration: none;">
        <div class="service-icon">
          <i class="fa-solid fa-user-doctor" style="font-size: 3rem; color: var(--aquamarine);"></i>
          <h4 style="margin-top: 15px; font-size: 1.2rem; color: #fff;">Medical Tourism</h4>
        </div></a>
      </div>

      <!-- Flight Bookings -->
      <div class="col-6 col-md-3 mb-4">
        <a href="medical-tourism.html" style="text-decoration: none;">
        <div class="service-icon">
          <i class="fa-solid fa-plane-departure" style="font-size: 3rem; color: var(--cyan);"></i>
          <h4 style="margin-top: 15px; font-size: 1.2rem; color: #fff;">Merch</h4>
        </div></a>
      </div>
    </div>
  </div>
</section>

   <!-- Crawler/TV -->
      <section class="tv-feature-section hero_bottom">
        <h2 class="section-title">WHAT'S NEW</h2>
        <div class="crawler">
          <div class="crawler-content"><a href="book.php">
            ✨ LIMITED TIME OFFERS ✨ 50% OFF ✨ LUXURY PACKAGES FROM $999 ✨ EARLY BIRD DISCOUNTS FOR SUMMER 2025 ✨
          </a></div>
        </div>
        <div class="video-slideshow">
          <video autoplay muted playsinline class="active-video" style="width: 100%; height: auto;">
            <source src="videos/video.mp4" type="video/mp4">
          </video>
          <video muted playsinline class="next-video" style="width: 100%; height: auto;">
            <source src="videos/video1.mp4" type="video/mp4">        
          </video>
          <video muted playsinline class="next-video" style="width: 100%; height: auto;">
            <source src="videos/video2.mp4" type="video/mp4">        
          </video>
          <video muted playsinline class="next-video" style="width: 100%; height: auto;">
            <source src="videos/video3.mp4" type="video/mp4">        
          </video>
          <video muted playsinline class="next-video" style="width: 100%; height: auto;">
            <source src="videos/vi.mp4" type="video/mp4">        
          </video>
        </div>
      </section> 

    <!-- Main -->
    <main class="main">
     <div class="popup-overlay" id="popupOverlay">
        <div class="popup-container">
            
            <div class="content-overlay">
                <button class="close-btn" onclick="closePopup()" title="Close">&times;</button>
                
                <div class="header-section" style="background-image:''">
                    <img src="img/ok.jpg" alt="OK World Travel" class="header-image">
                    
                    
                    <p><strong>Greetings from <img src="img/ok.png"></strong></p>
                        <p>As a musician, author, Made in Ghana Ambassador, and climate activist, I'm excited to share our passion for travel with you. We curate unforgettable experiences to Kenya, Dubai, UAE, UK, Singapore, China, South Korea, and beyond.</p>
                </div>

                <div class="form-section">
                    <h2 class="form-title">Join Our Journey</h2><img src="img/n.svg" alt="OK World Travel">
                    <form id="subscribeForm">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" required placeholder="Enter your full name">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required placeholder="Enter your email address">
                        </div>
                        
                        <button type="submit" class="subscribe-btn" id="submitBtn">Start Your Journey</button>
                        <div id="successMessage" style="display: none;"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>


      
 

       <script>
        document.addEventListener('DOMContentLoaded', function() {
            const videos = document.querySelectorAll('.video-slideshow video');
            let currentVideoIndex = 0;
            
            // Start the first video
            videos[currentVideoIndex].classList.add('active-video');
            videos[currentVideoIndex].play();
            
            // Add ended event listener to all videos
            videos.forEach((video, index) => {
                video.addEventListener('ended', function() {
                    // Hide current video
                    this.classList.remove('active-video');
                    
                    // Calculate next video index
                    currentVideoIndex = (index + 1) % videos.length;
                    
                    // Show and play next video
                    videos[currentVideoIndex].classList.add('active-video');
                    videos[currentVideoIndex].currentTime = 0;
                    videos[currentVideoIndex].play();
                });
            });
        });
    </script>

    <!-- About -->
      <section id="about_brief">
        <div class="container">
          <div class="row between no-gutters">
            <div class="at-column col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="item quality at-user">
                <div class="image"><i class="far fa-star"></i></div>
                  <h1 class="big_title at-user__name">Travel Quality</h1>
                    <p>We offer expertly curated tours and adventure, culture, and luxury at affordable prices.</p>
                      <a href="about.php" class="learn-more-btn">Learn More<i class="fas fa-chevron-circle-right"></i></a>                   
                </div>
              </div>
            <div class="at-column col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="item health at-user">
                <div class="image"><i class="fas fa-user-shield"></i></div>
                  <h1 class="big_title at-user__name">Medical Travel</h1>
                    <p>We handle medical trips end-to-end from flights to treatment, ensuring comfort, safety, and top-tier care.</p>
                     <a href="about.php#value_link" class="learn-more-btn">Learn More<i class="fas fa-chevron-circle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- Statistics -->
      <section class="section steps-section">
        <div class="container">
          <div class="steps-row">
            <div class="steps-column steps-column-steps">
              <img src="img/tra.svg" alt="" />
            </div>
            
            <div class="steps-column steps-column-card">
              <div class="step-card wow fadeInUp"data-wow-duration="1"data-wow-delay="0.5s">
                <a href="#">
                  <div class="step-card-header">
                    <img src="./img/web/IMG_8407.JPG" alt="" />
                  </div>
                  <div class="step-card-body">
                    <div class="step-card-title">Trip To Greece</div>
                    <div class="step-card-trip-details">
                      <div class="trip-date">14-29 June</div>
                      <div>|</div>
                      <div class="trip-by">by Stella Baiden</div>
                    </div>
                    <div class="step-card-icons">
                      <div class="step-card-icon"><i class="bx bx-leaf"></i></div>
                      <div class="step-card-icon"><i class="bx bx-map-alt"></i></div>
                      <div class="step-card-icon"><i class="bx bx-send"></i></div>
                    </div>
                    <div class="step-card-people"><i class="bx bx-group"></i>10 people going</div>
                  </div>
                </a>
              </div>

              <div class="step-card-small">
                <a href="#" class="wow fadeInUp"data-wow-duration="1"data-wow-delay="0.6s">
                  <div class="step-card-small-head">
                    <div class="step-card-small-image"><img src="./img/web/IMG_0796.jpg" alt="" /></div>
                    <div class="step-card-small-copy">
                      <div class="step-card-small-status">Ongoing</div>
                      <div class="step-card-small-title">Trip to Dubai</div>
                     <a href="book.php" class="learn-more-btn">Book<i class="fas fa-chevron-circle-right"></i></a>                    
                    </div>
                  </div>
                </a>
              </div>
              <div class="step-shadow"></div>
            </div>
          </div>
        </div>
      </section>
 
    <!-- Gallery -->
     <section id="home_services">
        <div class="fluid-container">
          <div class="section_title">
            <h1 class="big_title">Gallery</h1>
          </div>
          
          <div class="scroll-container">
            <div class="scroll-wrapper">
              <!-- First set of services -->
              <div class="service-item service-1">
                <img src="img/web/tour1.jpg" alt="" loading="lazy">               
              </div>

              <div class="service-item service-2">
              <img src="img/web/ga1.jpg" alt="" loading="lazy">
              </div>

              <div class="service-item service-3">
                <img src="img/web/ga2.jpg" alt="" loading="lazy">
               </div>

                <div class="service-item service-1">
                <img src="img/web/ga3.jpg" alt="" loading="lazy">
              </div>

              <div class="service-item service-2">
                <img src="img/web/ga4.jpg" alt="" loading="lazy">
              </div>

              <div class="service-item service-3">
                <img src="img/web/ga5.jpg" alt="" loading="lazy">
               </div>
                       <div class="service-item service-1">
                <img src="img/web/ga11.jpg" alt="" loading="lazy">               
              </div>

              <div class="service-item service-2">
              <img src="img/web/ga6.jpg" alt="" loading="lazy">
              </div>

              <div class="service-item service-3">
                <img src="img/web/ga7.jpg" alt="" loading="lazy">
               </div>

                <div class="service-item service-1">
                <img src="img/web/ga8.jpg" alt="" loading="lazy">
              </div>

              <div class="service-item service-2">
                <img src="img/web/ga9.jpg" alt="" loading="lazy">
              </div>

              <div class="service-item service-3">
                <img src="img/web/ga10.jpg" alt="" loading="lazy">
               </div>
              </div>
            </div>
            <div class="learn-more-section">
              <a href="galla.php" class="learn-more-btn">Learn More<i class="fas fa-chevron-circle-right"></i></a>
            </div>
        </div>
      </section>

    <!-- Testimonials -->
      <section class="section testimonials-section swiper">
        <div class="container">
          <div class="testimonials-row">
            <div class="testimonials-column">
              <div class="section-header">
                <div class="section-sub-heading wow fadeInUp"data-wow-duration="1"data-wow-delay="0.5s">
                  Testimonials
                </div>
                <h3 class="section-main-heading wow fadeInUp"data-wow-duration="1"data-wow-delay="0.6s">
                  What people say <br /> about Us.
                </h3>
              </div>
            </div>
            
            <div class="testimonials-column slider-column wow fadeIn"data-wow-duration="1"data-wow-delay="0.5s">
              <!-- Slider main container -->
              <div class="testimonials-swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="testimonials-card">
                      <div class="testimonials-avatar"><img src="img/web/IMG_8969.jpg"alt=""/></div>
                      <div class="testimonials-quote">
                        “South Korea blew my mind! That hidden temple we found? Absolutely unreal. Best trip ever.”
                      </div>
                      <div class="testimonials-person">Kobby Sarpong</div>
                      <div class="testimonials-info">Adventure Seeker</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonials-card">
                      <div class="testimonials-avatar"><img src="img/web/IMG_0094.jpg " alt=""/></div>
                      <div class="testimonials-quote">
                        “Swimming with manta rays in the Maldives? Worth every penny. Like a dream! Thank you OK World”
                      </div>
                      <div class="testimonials-person">Sarah Addo</div>
                      <div class="testimonials-info">Honeymooner</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonials-card">
                      <div class="testimonials-avatar"><img src="img/web/IMG_8940.jpg"alt=""/></div>
                      <div class="testimonials-quote">
                        “Ghana's waterfalls took my breath away. The people made it unforgettable. Can't wait to go back!”
                      </div>
                      <div class="testimonials-person">Mike Tagoe</div>
                      <div class="testimonials-info">Culture Lover</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonials-card">
                      <div class="testimonials-avatar"> <img src="img/web/IMG_9109.jpg"alt=""/>
                      </div>
                      <div class="testimonials-quote">
                        “At our age, we thought adventures were over. This proved us wrong - we're already planning our next trip!”
                      </div>
                      <div class="testimonials-person">Mr. & Mrs. Adjei</div>
                      <div class="testimonials-info">Retired Couple</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonials-card">
                      <div class="testimonials-avatar"><img src="img/web/IMG_9270.jpg"alt=""/></div>
                      <div class="testimonials-quote">
                        “Never felt safer exploring alone! The locals became instant friends. This trip changed how I see the world.”
                      </div>
                      <div class="testimonials-person">Mabel Osei</div>
                      <div class="testimonials-info">Solo Female Traveler</div>
                    </div>
                  </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination wow fadeIn" data-wow-duration="1"data-wow-delay="0.5s"></div>
                <!-- If we need navigation buttons -->
                <div class="testimonials-controls wow fadeIn"data-wow-duration="1"data-wow-delay="0.6s">
                  <div class="swiper-button-prev bx bx-chevron-up"></div>
                  <div class="swiper-button-next bx bx-chevron-down"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- Partners -->
      <section class="section logo-section">
        <div class="container">
          <div class="swiper logo-section-swiper">
            <div class="swiper-wrapper client-logo-slider">
              <a href="#" class="swiper-slide wow fadeInUp"data-wow-duration="1"data-wow-delay="0.5s">
                <img src="img/lla.png"alt="client-logo"/>
              </a>
              <a href="#" class="swiper-slide wow fadeInUp"data-wow-duration="1"data-wow-delay="0.6s">
                <img src="img/llb.png"alt="client-logo"/>
              </a>
              <a href="#"class="swiper-slide wow fadeInUp"data-wow-duration="1"data-wow-delay="0.7s">
                <img src="img/llc.png"alt="client-logo"/>
              </a>
              <a href="#"class="swiper-slide wow fadeInUp"data-wow-duration="1"data-wow-delay="0.8s">
                <img src="img/lld.png" alt="client-logo"/>
              </a>
              <a href="#"class="swiper-slide wow fadeInUp"data-wow-duration="1"data-wow-delay="0.9s">
                <img src="img/lle.png"alt="client-logo"/>
              </a>
              <a href="#"class="swiper-slide wow fadeInUp"data-wow-duration="1"data-wow-delay="0.5s">
                <img src="img/lla.png"alt="client-logo"/>
              </a>
              <a href="#"class="swiper-slide wow fadeInUp"data-wow-duration="1"data-wow-delay="0.6s">
                <img src="img/llb.png" alt="client-logo"/>
              </a>
              <a href="#"class="swiper-slide wow fadeInUp"data-wow-duration="1"data-wow-delay="0.7s">
                <img src="img/llc.png"alt="client-logo"/>
              </a>
              <a href="#" class="swiper-slide wow fadeInUp"data-wow-duration="1"data-wow-delay="0.8s">
                <img src="img/lld.png" alt="client-logo" />
              </a>
              <a href="#"class="swiper-slide wow fadeInUp"data-wow-duration="1"data-wow-delay="0.9s">
                <img src="img/lle.png"alt="client-logo" />
              </a>
            </div>
          </div>
        </div>
      </section>


    </main>



    <!-- WhatsApp Floating Button -->
    <button class="whatsapp-float" id="whatsappButton">
        <svg class="whatsapp-icon" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
        </svg>
    </button>

    <!-- WhatsApp Chat Widget -->
    <div class="whatsapp-chat" id="whatsappChat">
        <div class="chat-header">
            <div class="chat-header-info">
                <div class="chat-avatar">
                    <img src="logo/fav.svg" alt="Logo" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div style="display: none; width: 100%; height: 100%; align-items: center; justify-content: center;  background: white!important; font-weight: bold;">OT</div>
                </div>
                <div>
                    <h3 class="chat-title"><img src="logo/logo.svg" alt="" /></h3>
                    <p class="chat-subtitle" style="color:#f7f7f7!important">Replies within 24 hours</p>
                </div>
            </div>
            <button class="close-btn" id="closeChat">×</button>
        </div>
        
        <div class="chat-body">
            <div class="chat-time">Today</div>
            
            <div class="message received">
                <div class="message-bubble">
                    Hi there, welcome to Okworld Travel and Tour, How can i help you?
                </div>
                <div class="message-time">16:23</div>
            </div>
            
        </div>
        
        <div class="chat-footer">
            <div class="message-input-container">
                <textarea 
                    class="message-input" 
                    id="messageInput" 
                    placeholder="Type a message..."
                    rows="1"
                ></textarea>
                <button class="send-btn" id="sendBtn" disabled>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M2,21L23,12L2,3V10L17,12L2,14V21Z"/>
                    </svg>
                </button>
            </div>
         
        </div>
    </div>

  



<script
  src='https://cdn.jotfor.ms/agent/embedjs/0197a793f2f9739daab3cad8e0523d0a4492/embed.js?skipWelcome=1&maximizable=1'>
</script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
     <!--<script src="https://cdn.jsdelivr.net/gh/YT-PixelPerfectLabs/Youtube-Floating-Button/dist/script.js"></script>  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/swiper/8.4.5/swiper-bundle.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="js/video.js"></script>
    <script src="js/script.js"></script>
    <script src="js/whatsapp.js"></script>
    <script src="js/newsletter.js"></script>
    <?php include("footer.php"); ?>
