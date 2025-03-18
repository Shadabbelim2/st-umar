<?php
// Get the current URL path
$current_url = $_SERVER['REQUEST_URI'];

// Extract the last segment
$last_segment = basename($current_url);

// Format the last segment as a title
// Replace hyphens or underscores with spaces, and capitalize words
$page_title = ucwords(str_replace(['-', '_'], ' ', $last_segment));
if (empty($last_segment) || $last_segment === '/') {
  $page_title = 'Home';
} else {
  // Format the last segment as a title
  // Replace hyphens or underscores with spaces, and capitalize words
  $page_title = ucwords(str_replace(['-', '_'], ' ', $last_segment));
}
// Output the page title
define('SITE_URL', 'http://localhost/st-umar/');
define('PAGE_TITLE', $page_title);
?>

<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo SITE_URL; ?>static/upload/home-image/saint-umar-web-logo.png" type="image/png">
  <title>
    <?php echo PAGE_TITLE; ?> - Saint Umar Academy
  </title>
  <link rel="stylesheet" href="<?php echo SITE_URL; ?>static/plugins/goodlayers-core/plugins/combine/style.css"
    type="text/css" media="all" />
  <link rel="stylesheet" href="<?php echo SITE_URL; ?>static/plugins/goodlayers-core/include/css/page-builder.css"
    type="text/css" media="all" />
  <link rel="stylesheet" href="<?php echo SITE_URL; ?>static/plugins/revslider/public/assets/css/settings.css"
    type="text/css" media="all" />
  <link rel="stylesheet" href="<?php echo SITE_URL; ?>static/css/style-core.css" type="text/css" media="all" />
  <link rel="stylesheet" href="<?php echo SITE_URL; ?>static/css/kingster-style-custom.css" type="text/css"
    media="all" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
  <!-- <script src="static/script-chatbot.js" defer></script> -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700%2C400" rel="stylesheet" property="stylesheet"
    type="text/css" media="all">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CABeeZee%3Aregular%2Citalic&amp;subset=latin%2Clatin-ext%2Cdevanagari&amp;ver=5.0.3"
    type="text/css" media="all" />
</head>

<body
  class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
  <div class="kingster-mobile-header-wrap">
    <div
      class="kingster-mobile-header kingster-header-background kingster-style-slide kingster-sticky-mobile-navigation "
      id="kingster-mobile-header">
      <div class="kingster-mobile-header-container kingster-container clearfix">
        <div class="kingster-logo  kingster-item-pdlr">
          <div class="kingster-logo-inner">
            <a class="" href="<?php echo SITE_URL; ?>"><img src="static/upload/home-image/saint-umar-logo.png"
                alt="" /></a>
          </div>
        </div>
        <div class="kingster-mobile-menu-right">
          <div class="kingster-mobile-menu"><a
              class="kingster-mm-menu-button kingster-mobile-menu-button kingster-mobile-button-hamburger"
              href="#kingster-mobile-menu"><span></span></a>
            <div class="kingster-mm-menu-wrap kingster-navigation-font" id="kingster-mobile-menu" data-slide="right">
              <ul id="menu-main-navigation" class="m-menu">
                <li class="menu-item menu-item-home menu-item-has-children">
                  <a href="<?php echo SITE_URL; ?>">Home</a>
                </li>
                <!-- Navigation bar -->
                <li class="menu-item menu-item-has-children">
                  <a href="about-us">About Us</a>

                  <ul class="sub-menu">
                    <li class="menu-item"><a href="about-us">About Us</a></li>
                    <li class="menu-item"><a href="saint-umar-vision-mission-core-value">Vision & Mission</a></li>
                    <li class="menu-item"><a href="saint-umar-president-message"">President's Message</a></li>
                        <li class=" menu-item"><a href="saint-umar-Principal-message">Principal's Message</a></li>
                    <li class="menu-item"><a href="explore-indore">Our Gallery</a></li>
                  </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                  <a href="#">Infrastructure</a>
                  <ul class="sub-menu">
                    <li class="menu-item"><a href="saint-umar-computer-lab">Computer Lab</a></li>
                    <li class="menu-item"><a href="saint-umar-science-lab">Science Lab</a></li>
                    <li class="menu-item"><a href="saint-umar-library">Library</a></li>
                    <li class="menu-item"><a href="saint-umar-smartclass-room">Smart Classroom</a></li>
                    <li class="menu-item"><a href="saint-umar-class-room">Classroom</a></li>
                  </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                  <a href="#">Academics</a>
                  <ul class="sub-menu">
                    <li class="menu-item"><a href="apply-to-saint-umar">Admission Procuder</a></li>
                    <li class="menu-item"><a href="saint-umar-fee-structure">Fee Structure</a></li>
                    <li class="menu-item"><a href="saint-umar-academic-staff">Academic Staff</a></li>
                  </ul>
                </li>

                <li class="menu-item menu-item-has-children">
                  <a href="#">Activities</a>
                  <ul class="sub-menu">
                    <li class="menu-item"><a href="saint-umar-music-room">Music Room</a></li>
                    <li class="menu-item"><a href="saint-umar-dance-room">⁠Dance Room</a></li>
                    <li class="menu-item"><a href="saint-umar-arts-room">Arts Room</a></li>
                    <li class="menu-item"><a href="saint-umar-play-ground">⁠Play Ground</a></li>
                    <li class="menu-item"><a href="saint-umar-events">Events</a></li>
                  </ul>
                </li>


                <li class="menu-item menu-item-has-children">
                  <a href="saint-umar-mandatory-disclosure>">Mandatory Disclosure</a>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Navigation bar End -->

  <!-- Top Header -->
  <div class="kingster-body-outer-wrapper ">
    <div class="kingster-body-wrapper clearfix  kingster-with-frame">
      <div class="kingster-top-bar">
        <div class="kingster-top-bar-background"></div>
        <div class="kingster-top-bar-container kingster-container ">
          <div class="kingster-top-bar-container-inner clearfix">
            <div class="kingster-top-bar-left kingster-item-pdlr">
              <a href="mailto:info@saintumaracademy.com">
                <i class="fa fa-envelope-open-o" id="i_fd84_0"></i>
                stumaracademy@gmail.com
              </a>
              <a href="static/upload/mandatory-disclosure/affliation.pdf">
                <i id="i_fd84_1"></i>Affiliation Status : Applied
              </a>
            </div>
            <div class="kingster-top-bar-right kingster-item-pdlr">
              <ul id="kingster-top-bar-menu" class="sf-menu kingster-top-bar-menu kingster-top-bar-right-menu">
                <!-- <li class="menu-item kingster-normal-menu"><a href="tender_list">E-Tender</a></li> -->
                <li class="menu-item kingster-normal-menu"><a href="https://www.facebook.com/Iksociety" target="_blank"
                    class="gdlr-core-social-network-icon" title="facebook"><i class="fa fa-facebook"></i></a></li>
                <li class="menu-item kingster-normal-menu"><a
                    href="https://www.linkedin.com/in/saint-umar-group-of-institution-441357252/" target="_blank"
                    class="gdlr-core-social-network-icon" title="linkedin"><i class="fa fa-linkedin"></i> </a> </li>
                <li class="menu-item kingster-normal-menu"><a href="https://www.instagram.com/saint-umar_society/"
                    target="_blank" class="gdlr-core-social-network-icon" title="instagram"><i
                      class="fa fa-instagram"></i> </a></li>
                <li class="menu-item kingster-normal-menu"><a
                    href="https://www.youtube.com/@saint-umargroupofinstitution5748" target="_blank"
                    class="gdlr-core-social-network-icon" title="youtube"><i class="fa fa-youtube"></i></a></li>
              </ul>

              <!-- End of Top Header -->

              <div class="kingster-top-bar-right-social"></div><a class="kingster-top-bar-right-button"
                href="apply-to-saint-umar" target="_blank">Admission Enquiry</a>
            </div>
          </div>
        </div>
      </div>
      <header
        class="kingster-header-wrap kingster-header-style-plain  kingster-style-menu-right kingster-sticky-navigation kingster-style-fixed"
        data-navigation-offset="75px">
        <div class="kingster-header-background"></div>
        <div class="kingster-header-container  kingster-container">
          <div class="kingster-header-container-inner clearfix">
            <div class="kingster-logo  kingster-item-pdlr">
              <div class="kingster-logo-inner">
                <a class="" href="<?php echo SITE_URL; ?>"><img src="static/upload/home-image/saint-umar-logo.png"
                    alt="" /></a>
              </div>
            </div>
            <div class="kingster-navigation kingster-item-pdlr clearfix ">
              <div class="kingster-main-menu" id="kingster-main-menu">
                <ul id="menu-main-navigation-1" class="sf-menu">
                  <li class="menu-item menu-item-home menu-item-has-children kingster-normal-menu">
                    <a href="<?php echo SITE_URL; ?>" class="sf-with-ul-pre">Home</a>
                  </li>
                  <li class="menu-item menu-item-has-children kingster-normal-menu">

                    <a href="about-us" class="sf-with-ul-pre">About Us</a>
                    <ul class="sub-menu">
                      <li class="menu-item" data-size="60"><a href="about-us">About Us</a></li>
                      <li class="menu-item" data-size="60"><a href="saint-umar-vision-mission-core-value">Vision &
                          Mission</a></li>
                      <li class="menu-item" data-size="60"><a href="saint-umar-president-message">President's
                          Message</a></li>
                      <li class="menu-item" data-size="60"><a href="saint-umar-Principal-message">Principal's
                          Message</a></li>
                      <li class="menu-item" data-size="60"><a href="saint-umar-gallery">Our Gallery</a></li>
                    </ul>
                  </li>

                  <li class="menu-item menu-item-has-children kingster-normal-menu">
                    <a href="#">Infrastructure</a>
                    <ul class="sub-menu">
                      <li class="menu-item"><a href="saint-umar-computer-lab">Computer Lab</a></li>
                      <li class="menu-item"><a href="saint-umar-science-lab">Science Lab</a></li>
                      <li class="menu-item"><a href="saint-umar-library">Library</a></li>
                      <li class="menu-item"><a href="saint-umar-smartclass-room">Smart Classroom</a></li>
                      <li class="menu-item"><a href="saint-umar-class-room">Classroom</a></li>
                    </ul>
                  </li>

                  <li class="menu-item menu-item-has-children kingster-normal-menu">
                    <a href="#">Academics</a>
                    <ul class="sub-menu">
                      <li class="menu-item"><a href="apply-to-saint-umar">Admission Procuder</a></li>
                      <li class="menu-item"><a href="saint-umar-fee-structure">Fee Structure</a></li>
                      <li class="menu-item"><a href="saint-umar-academic-staff">Academic Staff</a></li>
                    </ul>
                  </li>
                  <li class="menu-item menu-item-has-children kingster-normal-menu">
                    <a href="#">Activities</a>
                    <ul class="sub-menu">
                      <li class="menu-item"><a href="saint-umar-music-room">Music Room</a></li>
                      <li class="menu-item"><a href="saint-umar-dance-room">⁠Dance Room</a></li>
                      <li class="menu-item"><a href="saint-umar-arts-room">Arts Room</a></li>
                      <li class="menu-item"><a href="saint-umar-play-ground">⁠Play Ground</a></li>
                      <li class="menu-item"><a href="saint-umar-events">Events</a></li>

                    </ul>
                  </li>



                  <li class="menu-item menu-item-home menu-item-has-children kingster-normal-menu">
                    <a href="saint-umar-mandatory-disclosure" class="sf-with-ul-pre">Mandatory Disclosure</a>
                  </li>



                </ul>
                <div class="kingster-navigation-slide-bar" id="kingster-navigation-slide-bar"></div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- <button class="chatbot-toggler">
                <span class="toggle-text">Chat with Us!</span>
                <span class="material-symbols-rounded">mode_comment</span>

              </button>
              <div class="chatbot">
                <header>
                  <h3>AI Chatbot</h3>
                  <span class="close-btn material-symbols-outlined">close</span>
                </header>
                <ul class="chatbox">
                  <li class="chat incoming">
                    <span class="material-symbols-outlined">smart_toy</span>
                    <p>Hi there 👋<br>How can I help you today?<br>I am an AI-based chatbot. My information may sometimes be incorrect, but I am continually improving.</p>
                  </li>
                </ul>
                <div class="chat-input">
                  <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
                  <span id="send-btn" class="material-symbols-rounded">send</span>
                </div>
              </div> -->