 <?php


    $address = get_theme_mod("address_text", "2005 Old Spartanburg Rd, South Carolina, USA");
    $email_id = get_theme_mod("email_id", "(+864) 292-6100");

    $fb_url = get_theme_mod("fb_url", "#");
    $ins_url = get_theme_mod("ins_url", "#");
    $wp_url = get_theme_mod("wp_url", "#");
    $yu_url = get_theme_mod("yu_url", "#");


    ?>


 <!-- Top bar Start -->
 <div id="topbar">
     <div class="container">
         <div class="topbar_wrapper">
             <div class="contact">

                 <?php if (!empty($email_id)) : ?>
                     <a href="tel:+8801755001122" class="call">
                         <i class="fa-solid fa-phone"></i>
                         <p><?php echo $email_id; ?></p>
                     </a>
                 <?php endif; ?>

                 <?php if (!empty($address)) : ?>
                     <span>|</span>
                     <div class="location">
                         <i class="fa-solid fa-location-dot"></i>
                         <p> <?php echo $address; ?> </p>
                     </div>
                 <?php endif; ?>

             </div>
             <div class="social_wrapper">
                 <div class="time">
                     <i class="fa-solid fa-clock"></i>
                     <p>Mon - Sat: 8:00am to 5:30pm</p>
                 </div>
                 <span>|</span>
                 <div class="social">
                     <?php bricksland_header_social(); ?>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Top bar end -->

 <!-- Navbar Start -->
 <header class="header" id="header">
     <div class="container">
         <div class="wrapper">
             <a href="./index.html" class="logo"><img src="<?php echo get_template_directory_uri(); ?>  /assets/img/navbar-logo.svg" alt="" /></a>
             <span class="overlay"></span>
             <nav id="navbar" class="navbar">
                 <ul class="menu" id="menu">
                     <li class="menu-item">
                         <a href="./index.html" class="menu-link active"><span>Home</span></a>
                     </li>
                     <li class="menu-item">
                         <a href="./products.html" class="menu-link"><span>Products</span></a>
                     </li>
                     <li class="menu-item">
                         <a href="./about.html" class="menu-link"><span>About Us</span></a>
                     </li>
                     <li class="menu-item menu-dropdown">
                         <span class="discover_link" data-toggle="submenu">Pages<i
                                 class="fa-solid fa-angle-down dropdown_icon"></i></span>
                         <ul class="submenu">
                             <li class="submenu-item">
                                 <a href="./product-single.html" class="submenu-link"><span>Product Single</span></a>
                             </li>
                             <li class="submenu-item">
                                 <a href="./blog-single.html" class="submenu-link"><span>Blog Single</span></a>
                             </li>
                             <li class="submenu-item">
                                 <a href="#" class="submenu-link"><span>Privacy Policy</span></a>
                             </li>
                             <li class="submenu-item">
                                 <a href="#" class="submenu-link"><span>Terms & Conditions</span></a>
                             </li>
                             <li class="submenu-item">
                                 <a href="./brick-dimensions-guide.html" class="submenu-link"><span>Brick Dimensions
                                         Guide</span></a>
                             </li>
                             <li class="submenu-item">
                                 <a href="./brick-test-result.html" class="submenu-link"><span>Brick Test
                                         Result</span></a>
                             </li>
                             <li class="submenu-item">
                                 <a href="./career.html" class="submenu-link"><span>Careers</span></a>
                             </li>
                         </ul>
                     </li>
                     <li class="menu-item">
                         <a href="./blog.html" class="menu-link"><span>Blog</span></a>
                     </li>
                     <li class="menu-item">
                         <a href="./gallery.html" class="menu-link"><span>Gallery</span></a>
                     </li>
                 </ul>
                 <div class="contact_us_btn_1">
                     <a href="./contact.html" class="contact_btn_2"><span>Contact Us</span></a>
                 </div>
                 <div class="close-icon" id="close-icon">
                     <span class="close-line"></span>
                     <span class="close-line"></span>
                 </div>
             </nav>
             <div class="contact_us_btn">
                 <a href="./contact.html" class="contact_btn_1"><span>Contact Us</span></a>
             </div>
             <div class="burger" id="burger">
                 <span class="burger-line"></span>
                 <span class="burger-line"></span>
                 <span class="burger-line"></span>
             </div>
         </div>
     </div>
 </header>
 <!-- Navbar End -->




 <h1> <?php echo esc_html__('This is Siam', 'bricksland'); ?> </h1>
 <input type="text" placeholder="<?php echo esc_attr__('Your Name', 'bricksland'); ?>">

 <h2><?php echo esc_html($address); ?></h2>

 <a href=" <?php echo esc_url($url); ?>">Button Text</a>