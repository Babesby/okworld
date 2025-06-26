<?php
  $projectname = "Ok World Travel and Tour";

  // function to get the current page name
  function PageName() {
    return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
  }

  $current_page = PageName();
?>
<!doctype html>
<html lang="en">
<head>
    <title>Explore the World with OK World Travel & Tour</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/svg+xml" href="logo/fav.svg">
   
    <!-- Your existing meta tags here -->
    
    <!-- CSS -->
     <!-- Font Awesome (latest) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" !important/>
<!-- Boxicons -->
 <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700;900&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

  <!-- ✅ Fixed Font Awesome (v6.5.0) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-yH9rrnYqBFyCnphVhOonFhfv3i9X2+nGP2qzKRU3o5TQgMPtbRWbcnGuHwIhGlf3GgMk6uO/IsnIv4pSsdzO3A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- ✅ Boxicons -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" !important>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>
    <link rel="stylesheet" href="css/gallerryy.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/newsletter.css">
    <link rel="stylesheet" href="css/whatsapx.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/video.css">
    <link rel="stylesheet" href="./css/response.css" />
    
    <style>* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


    /* Navigation Styles */
    .ankor-navbar {
    background: rgba(255, 255, 255, 0.98); /* More opaque white */
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    padding: 15px 0;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
    /* Add these properties to ensure solid background */
    -webkit-backdrop-filter: blur(30px); /* Optional: for frosted glass effect */
    backdrop-filter: blur(30px); /* Optional: for frosted glass effect */
    }
    
    .ankor-nav-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    margin: 0 auto; /* Optional: for better content alignment */
    padding: 0 20px; /* Optional: for better content alignment */
    }
    
    .ankor-logo img {
        height: 50px;
    }
    
    /* Desktop Menu */
    .ankor-desktop-menu {
        display: flex;
        align-items: center;
    }
    
    .ankor-main-menu {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .ankor-menu-item {
        position: relative;
        margin: 0 15px;
    }
    
    .ankor-menu-item > a {
        color: #333;
        text-decoration: none;
        font-weight: 500;
        padding: 10px 0;
        position: relative;
        transition: all 0.3s;
    }
    
    .ankor-menu-item > a:hover {
        color: #00FFFF;
    }
    
    /* Dropdown Menu */
    .ankor-submenu {
        position: absolute;
        top: 100%;
        left: 0;
        background: #fff;
        min-width: 220px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s;
        z-index: 1001;
        list-style: none;
        padding: 10px 0;
        margin: 0;
        border-radius: 4px;
    }
    
    .ankor-menu-item:hover .ankor-submenu {
        opacity: 1;
        visibility: visible;
    }
    
    .ankor-submenu li a {
        display: block;
        padding: 8px 20px;
        color: #333;
        transition: all 0.3s;
    }
    
    .ankor-submenu li a:hover {
        background: #f5f5f5;
        color: #00FFFF;
    }
    
    /* Mega Menu (Services) */
    .ankor-megamenu {
        width: 800px;
        left: 50%;
        transform: translateX(-50%);
        padding: 20px;
        display: flex;
        flex-wrap: wrap;
    }
    
    .ankor-megamenu-column {
        flex: 1;
        min-width: 200px;
        padding: 0 15px;
    }
    
    .ankor-megamenu-title {
        font-weight: 600;
        margin-bottom: 10px;
        padding-bottom: 5px;
        border-bottom: 1px solid #eee;
    }
    
    /* Mobile Menu Toggle */
    .ankor-mobile-toggle {
        display: none;
        background: none;
        border: none;
        font-size: 24px;
        color: #333;
        cursor: pointer;
    }
    
    /* Mobile Menu */
    .ankor-mobile-menu {
        position: fixed;
        top: 0;
        right: -100%;
        width: 320px;
        height: 100vh;
        background: #fff;
        box-shadow: -5px 0 15px rgba(0,0,0,0.1);
        transition: all 0.3s;
        z-index: 1002;
        overflow-y: auto;
        padding: 20px;
    }
    
    .ankor-mobile-menu.active {
        right: 0;
    }
    
    .ankor-mobile-menu-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #eee;
    }
    
    .ankor-mobile-menu-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .ankor-mobile-menu-item {
        border-bottom: 1px solid #eee;
    }
    
    .ankor-mobile-menu-item > a {
        display: block;
        padding: 12px 0;
        color: #333;
        text-decoration: none;
    }
    
    .ankor-mobile-menu-item.has-submenu > a {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .ankor-mobile-submenu-toggle {
        font-size: 14px;
    }
    
    .ankor-mobile-submenu {
        list-style: none;
        padding: 0;
        margin: 0;
        display: none;
        padding-left: 15px;
    }
    
    .ankor-mobile-submenu li a {
        display: block;
        padding: 8px 0;
        color: #666;
    }
    
    .ankor-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        z-index: 1001;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s;
    }
    
    .ankor-overlay.active {
        opacity: 1;
        visibility: visible;
    }
    
    /* Active State */
    .ankor-menu-item.active > a,
    .ankor-mobile-menu-item.active > a {
        color: #00FFFF;
    }
    
    /* Responsive Styles */
    @media (max-width: 991px) {
        .ankor-desktop-menu {
            display: none;
        }
        
        .ankor-mobile-toggle {
            display: block;
        }
    }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="ankor-navbar">
        <div class="container ankor-nav-container">
            <div class="ankor-logo">
                <a href="index.php"><img src="logo/logo.gif" alt="logo"></a>
            </div>
            
            <!-- Desktop Menu -->
            <div class="ankor-desktop-menu">
                <ul class="ankor-main-menu">
                    <li class="ankor-menu-item <?php echo $current_page == 'index.php' ? 'active' : ''; ?>">
                        <a href="index.php">Home</a>
                    </li>
                    
                    <li class="ankor-menu-item <?php echo in_array($current_page, ['about.php', 'quality.php', 'sustainability.php']) ? 'active' : ''; ?>">
                        <a href="about.php">About Us</a>
                        <ul class="ankor-submenu">
                            <li><a href="about.php">About OK World</a></li>
                            <li><a href="about.php#value_link">Core Values</a></li>
                            <li><a href="about.php#vision_link">Vision & Mission</a></li>
                        </ul>
                    </li>
                    
                    <li class="ankor-menu-item <?php echo strpos($current_page, 'services') !== false || in_array($current_page, [
                         'study.php', 'study1.php','work.php', 'work1.php', 'med.php',  'med1.php'
                    ]) ? 'active' : ''; ?>">
                        <a href="services.php">Services</a>
                        <ul class="ankor-submenu ankor-megamenu">
                            <div class="ankor-megamenu-column">
                                <div class="ankor-megamenu-title">Study Abroad</div>
                                <ul>
                                    <li><a href="study.php">Expert guidance</a></li>
                                    <li><a href="study1.php">Enquires & Bookings</a></li>
                                  
                                </ul>
                            </div>
                            
                            <div class="ankor-megamenu-column">
                                <div class="ankor-megamenu-title">Work Abroad</div>
                                <ul>
                                    <li><a href="work.php">Opportunities</a></li>
                                    <li><a href="work1.php">Enquires & Bookings</a></li>
                                   
                                </ul>
                            </div>
                            
                            <div class="ankor-megamenu-column">
                                <div class="ankor-megamenu-title">Medical Tour</div>
                                <ul>
                                    <li><a href="med.php">Procedure</a></li>
                                    <li><a href="med1.php">Get In Touch</a></li>
                                 
                                </ul>
                            </div>
                            
                         
                        </ul>
                    </li>

                    <li class="ankor-menu-item <?php echo $current_page == 'https://okworld.com.gh/' ? 'active' : ''; ?>">
                        <a href="https://okworld.com.gh/">Merch</a>
                    </li>
                    
                    <li class="ankor-menu-item <?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            
            <!-- Mobile Menu Toggle -->
            <button class="ankor-mobile-toggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>
    
    <!-- Mobile Menu -->
    <div class="ankor-overlay"></div>
    <div class="ankor-mobile-menu">
        <div class="ankor-mobile-menu-header">
            <div class="ankor-logo">
                <a href="index.php"><img src="logo/logo.gif" alt="Ok World" style="height: 40px;"></a>
            </div>
            <button class="ankor-mobile-close">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <ul class="ankor-mobile-menu-list">
            <li class="ankor-mobile-menu-item <?php echo $current_page == 'index.php' ? 'active' : ''; ?>">
                <a href="index.php">Home</a>
            </li>
            
            <li class="ankor-mobile-menu-item has-submenu <?php echo in_array($current_page, ['about.php', 'quality.php', 'sustainability.php']) ? 'active' : ''; ?>">
                <a href="about.php">About Us <span class="ankor-mobile-submenu-toggle"><i class="fas fa-chevron-down"></i></span></a>
                <ul class="ankor-mobile-submenu">
                    <li><a href="about.php">About OK World</a></li>
                    <li><a href="about.php#value_link">Core Values</a></li>
                    <li><a href="about.php#vision_link">Vision & Mission</a></li>
                   
                </ul>
            </li>
            
            <li class="ankor-mobile-menu-item has-submenu <?php echo strpos($current_page, 'services') !== false || in_array($current_page, [
                'study.php', 'study1.php','work.php', 'work1.php', 'med.php',  'med1.php'
            ]) ? 'active' : ''; ?>">
                <a href="services.php">Services <span class="ankor-mobile-submenu-toggle"><i class="fas fa-chevron-down"></i></span></a>
                 <ul class="ankor-mobile-submenu">
                    <li><a href="work.php">Work Abroad</a></li>
                    <li><a href="study.php">Study Abroad</a></li>
                    <li><a href="med.php">Medical Tour</a></li>
                   
                </ul>
            </li>
            <li class="ankor-mobile-menu-item <?php echo $current_page == 'https://okworld.com.gh/' ? 'active' : ''; ?>">
                <a href="https://okworld.com.gh/">Merch</a>
            </li>
            <li class="ankor-mobile-menu-item <?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">
                <a href="contact.php">Contact</a>
            </li>
        </ul>
        
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    
    <script>
    $(document).ready(function() {
        // Mobile menu toggle
        $('.ankor-mobile-toggle').click(function() {
            $('.ankor-mobile-menu').addClass('active');
            $('.ankor-overlay').addClass('active');
            $('body').css('overflow', 'hidden');
        });
        
        $('.ankor-mobile-close, .ankor-overlay').click(function() {
            $('.ankor-mobile-menu').removeClass('active');
            $('.ankor-overlay').removeClass('active');
            $('body').css('overflow', 'auto');
        });
        
        // Mobile submenu toggle
        $('.ankor-mobile-menu-item.has-submenu > a').click(function(e) {
            if ($(window).width() < 992) {
                e.preventDefault();
                $(this).parent().toggleClass('active');
                $(this).find('.ankor-mobile-submenu-toggle i').toggleClass('fa-chevron-down fa-chevron-up');
                $(this).siblings('.ankor-mobile-submenu').slideToggle();
            }
        });
        
        // Close mobile menu when clicking a link
        $('.ankor-mobile-menu a').click(function() {
            if (!$(this).parent().hasClass('has-submenu')) {
                $('.ankor-mobile-menu').removeClass('active');
                $('.ankor-overlay').removeClass('active');
                $('body').css('overflow', 'auto');
            }
        });
        
        // Handle window resize
        $(window).resize(function() {
            if ($(window).width() >= 992) {
                $('.ankor-mobile-menu').removeClass('active');
                $('.ankor-overlay').removeClass('active');
                $('body').css('overflow', 'auto');
                $('.ankor-mobile-submenu').hide();
                $('.ankor-mobile-submenu-toggle i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
            }
        });
    });
    </script>
    
    <div id="page_content_wrapper">
        <!-- Your page content goes here -->