<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- --FavIcon-- -->
  <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
  <link rel="manifest" href="icons/site.webmanifest">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
  <!-- Bootstrap ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" />
  <!-- --OWL CAROUSEL-- -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
  <!-- --ChosenJS for Form search Box-- -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" rel="stylesheet">
  <!-- --EXTERNAL CSS-- -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
  <!-- --GOOGLE FONTS-- -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap"
    rel="stylesheet" />
  @yield('title')
</head>
<body>
  <header>
    <!-- Back to top button -->
    <a id="back-to-top" href="#"><i class="bi bi-arrow-bar-up"></i></a>
    <!-- ----TOP-NAVBAR--- -->
    <div class="top-nav py-2">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <a href="mailto:info@baagdi.com" class="topnav-contact mr-md-5 mr-3 d-sm-inline-flex d-none">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="emailsvg mr-2">
                <g clip-path="url(#clip0_164_314)">
                  <path d="M10.6064 8.08195L16.0004 11.492V4.52795L10.6064 8.08195Z" fill="white" />
                  <path d="M0 4.52795V11.492L5.394 8.08195L0 4.52795Z" fill="white" />
                  <path
                    d="M15.0003 2.5H1.00027C0.501274 2.5 0.105273 2.872 0.0302734 3.351L8.00027 8.602L15.9703 3.351C15.8953 2.872 15.4993 2.5 15.0003 2.5Z"
                    fill="white" />
                  <path
                    d="M9.69023 8.68606L8.27523 9.61806C8.19123 9.67306 8.09623 9.70006 8.00023 9.70006C7.90423 9.70006 7.80923 9.67306 7.72523 9.61806L6.31023 8.68506L0.0322266 12.6561C0.109227 13.1311 0.503227 13.5001 1.00023 13.5001H15.0002C15.4972 13.5001 15.8912 13.1311 15.9682 12.6561L9.69023 8.68606Z"
                    fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0_164_314">
                    <rect width="16" height="16" fill="white" />
                  </clipPath>
                </defs>
              </svg>info@baagdi.com</a>
              <a href="tel:918764458899" class="topnav-contact"><svg class="mr-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_164_330)">
                  <path
                    d="M15.5643 11.7424L13.3315 9.50954C12.534 8.71209 11.1784 9.0311 10.8594 10.0678C10.6202 10.7855 9.82272 11.1842 9.10501 11.0247C7.51012 10.626 5.35702 8.5526 4.9583 6.87797C4.71906 6.16024 5.19753 5.36279 5.91523 5.12359C6.95191 4.80461 7.27089 3.44895 6.47344 2.65151L4.2406 0.418659C3.60264 -0.139553 2.64571 -0.139553 2.08749 0.418659L0.572347 1.93381C-0.9428 3.5287 0.731836 7.75516 4.47983 11.5032C8.22783 15.2511 12.4543 17.0056 14.0492 15.4106L15.5643 13.8955C16.1226 13.2575 16.1226 12.3006 15.5643 11.7424Z"
                    fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0_164_330">
                    <rect width="16" height="16" fill="white" />
                  </clipPath>
                </defs>
              </svg>+91 8764458899</a>

          </div>
          <div class="col-6 text-right">
            <ul class="list-unstyled loginsign d-inline-flex mb-0">
              <li><a href="#">Login</a></li>
              <li><a href="#">Sign Up</a></li>
            </ul>
          </div>
        </div>        
      </div>
    </div>
    <!-- ----TOP-NAVBAR----->
    <!-- ----MAIN-NAVBAR----->
    <div class="container">
      <nav class="navbar navbar-expand-md p-0">
        <a class="navbar-brand p-0" href="index.html">
          <img src="{{ asset('assets/images/logo.svg') }}" width="150" height="61" class="img-fluid" alt="BAAGDI SOLUTIONS"/>
        </a>
        <button class="navbar-toggler p-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list border px-2 rounded"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Service</a>
            </li>
            <li class="nav-item dropdown position-static" >
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown"
                role="button">Work</a>
              <ul class="dropdown-menu megamenu" data-hover="dropdown">
                <div class="row">
                  <li class="col-md-2 mt-sm-3">
                    <ul>
                      <h6 class="list-header">WEBSITE DEVELOPMENT</h6>
                      <hr>
                      <li>
                        <a href="./Websitedevelopment/Wordpress.html"> Wordpress</a>
                      </li>
                      <li>
                        <a href="./Websitedevelopment/codeigniter.html">Codeigniter</a>
                      </li>
                      <li>
                        <a href="./Websitedevelopment/PHP.html">PHP</a>
                      </li>
                      <li>
                        <a href="./Websitedevelopment/JavaScript.html"> JavaScript</a>
                      </li>
                      <li>
                        <a href="./Websitedevelopment/ecommerce.html"> E-Commerce</a>
                      </li>
                      <li>
                        <a href="./Websitedevelopment/opencart.html">OpenCart</a>
                      </li>
                    </ul>
                  </li>
                  <li class="col-md-2 mt-sm-3">
                    <ul>
                      <h6 class="list-header">UI/UX DESIGNING</h6>
                      <hr>
                      <li>
                        <a href="./UI-UX-Designing/website-design.html">Website Design Ipsum</a>
                      </li>
                      <li>
                        <a href="./UI-UX-Designing/web-app-designing.html">Web App Designing</a>
                      </li>
                      <li>
                        <a href="./UI-UX-Designing/">Parallax Web Design</a>
                      </li>
                      <li>
                        <a href="./UI-UX-Designing/iphone-app-design.html">IPhone App</a>
                      </li>
                      <li>
                        <a href="./UI-UX-Designing/email-signature.html">Email Template</a>
                      </li>
                      <li>
                        <a href="./UI-UX-Designing/business-proposals.html">Business Proposals</a>
                      </li>
                      <li>
                        <a href="./UI-UX-Designing/android-app-design.html">Android App</a>
                      </li>
                      <li>
                        <a href="./UI-UX-Designing/wireframe-design.html">Wireframe Designing</a>
                      </li>
                      <li>
                        <a href="./UI-UX-Designing/ipad-and-tablet-design.html">IPad & Tablet App Design</a>
                      </li>

                    </ul>
                  </li>
                  <li class="col-md-2 mt-sm-3">
                    <ul class="mb-0">
                      <h6 class="list-header">GRAPHICS</h6>
                      <hr>
                      <li>
                        <a href="./Graphics/infographics.html">Infographics</a>
                      </li>
                      <li>
                        <a href="./Graphics/Flyers.html">Flyer</a>
                      </li>
                      <li>
                        <a href="./Graphics/illustrations.html">Illustrations</a>
                      </li>
                      <li>
                        <a href="./Graphics/banner-ads.html">Banner & Ads</a>
                      </li>
                      <li>
                        <a href="./Graphics/Poster.html">Posters</a>
                      </li>
                      <li>
                        <a href="./Graphics/letter-heads.html">Letter Heads</a>
                      </li>
                      <li>
                        <a href="./Graphics/Icons.html">Icons</a>
                      </li>
                      <li>
                        <a href="./Graphics/fb-and-google-ads-design.html">Fb & Google Ad Design</a>
                      </li>
                      <li>
                        <a href="./Graphics/table-tent.html">Table Tents</a>
                      </li>
                      <li>
                        <a href="./Graphics/404-page-design.html">404 Page Design</a>
                      </li>

                    </ul>
                  </li>
                  <li class="col-md-2 mt-sm-3">
                    <ul>
                      <h6 class="invisible">...</h6>
                      <hr class="invisible">
                      <li>
                        <a href="./Graphics/hand-art-illustration.html">Hand Art</a>
                      </li>
                      <li>
                        <a href="./Graphics/logo-and-branding.html">Logo & Branding</a>
                      </li>
                      <li>
                        <a href="./Graphics/packaging.html">Packaging</a>
                      </li>
                      <li>
                        <a href="./Graphics/seal-stamp.html">Seal/Stamp</a>
                      </li>
                      <li>
                        <a href="./Graphics/business-card.html">Business Cards</a>
                      </li>
                      <li>
                        <a href="./Graphics/book-coverdesignmagazine.html">Magazine</a>
                      </li>
                      <li>
                        <a href="./Graphics/Brochure.html">Brochure</a>
                      </li>
                      <li>
                        <a href="./Graphics/Instruction-booklet.html">Instruction Booklet</a>
                      </li>
                      <li>
                        <a href="./Graphics/stationary-kit-design.html">Stationary Kit Design</a>
                      </li>
                      <li> <a href="./Graphics/fb-and-google-ads-design.html">Fb & Google Ad Design</a>
                      </li>
                    </ul>
                  </li>
                  <li class="col-md-2 mt-sm-3">
                    <ul>
                      <h6 class="list-header">FRONTEND DEVELOPMENT</h6>
                      <hr>
                      <li>
                        <a href="./Frontend-development/psdtohtml.html">PSD To HTML5</a>
                      </li>
                      <li>
                        <a href="./Frontend-development/SMACSS.html">SMACSS</a>
                      </li>
                      <li>
                        <a href="./Frontend-development/twitterbootstrap.html">Twitter Bootstrap</a>
                      </li>
                      <li>
                        <a href="./Frontend-development/parallax.html">Parallax</a>
                      </li>
                      <li>
                        <a href="./Frontend-development/emailtemplate.html">Email Template</a>
                      </li>
                      <li>
                        <a href="./Frontend-development/psdtowordpress.html">PSD To Wordpress</a>
                      </li>
                      <li>
                        <a href="./Frontend-development/angularjs.html">AngularJS</a>
                      </li>
                      <li>
                        <a href="./Frontend-development/WEBAPP.html">WebApp</a>
                      </li>
                      <li>
                        <a href="./Frontend-development/themecustomization.html">Theme Customization</a>
                      </li>
                    </ul>
                  </li>
                  <li class="col-md-2 mt-sm-3">
                    <ul>
                      <h6 class="list-header">SEO & PROMOTION</h6>
                      <hr>
                      <li>
                        <a href="./seo/seo-promotions.html">On Page Seo</a>
                      </li>
                      <li>
                        <a href="./seo/seo-promotions.html">Keyword Ranking</a>
                      </li>
                      <li>
                        <a href="./seo/seo-promotions.html">Conversion Optimization</a>
                      </li>
                      <li>
                        <a href="./seo/seo-promotions.html">Traffic Increase</a>
                      </li>
                      <li>
                        <a href="./seo/seo-promotions.html">Link Building</a>
                      </li>
                      <li>
                        <a href="./seo/seo-promotions.html">Social Media Optimization</a>
                      </li>
                      <li>
                        <a href="./seo/seo-promotions.html">Content Writing</a>
                      </li>
                      <li>
                        <a href="./seo/seo-promotions.html">Load Speed Optimization</a>
                      </li>
                      <li>
                        <a href="./seo/seo-promotions.html">Social Media Image Creation</a>
                      </li>
                      <li>
                        <a href="./seo/seo-promotions.html">Fb & Google Ads</a>
                      </li>
                      <li>
                        <a href="./seo/seo-promotions.html">Advance Analytics Report</a>
                      </li>
                    </ul>
                  </li>
                </div>
              </ul>
            </li>
            <li class="nav-item">
              <a href="training.html" class="nav-link">Training</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">Case Studies</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">About Us</a>
            </li>
          </ul>

          <button class="btn d-inline d-md-none d-lg-inline" type="button">Contact Us
            <div class="text-center">IST 11am-8pm</div>
          </button>
        </div>
      </nav>
    </div>
    <!-- ----MAIN-NAVBAR----->
  </header>
  <!-- ---HEAD-BANNER--- -->
  <section class="head-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-7 pr-lg-4">
          <h1 class="text-white">
            A Creative Agency converting your Ideas into Digital Solutions
          </h1>
          <p class="m-0 text-white my-2 my-md-3">
            We design premium mobile apps to help your enterprise reach a
            wider audience. Our mobility solutions are tailored as per the
            needs of the clients.
          </p>

          <button type="button" class="btn btn-1 mr-3 ">
            Let&apos;s Talk
          </button>
          <button type="button" class="btn btn-2 ">Portfolio</button>
        </div>
        <div class="col-md-5 d-none d-md-inline">
          <img src="{{ asset('assets/images/head-img.svg') }}" width="467" height="348" class="img-fluid" alt="head image" />
        </div>
      </div>
    </div>
  </section>
 <!-- ---HOME-SERVICES-LIST--- -->
 <section class="home-service-list">
  <div class="container">
    <div class="row">
      <div class="home-service-list-slider owl-carousel owl-theme">
        <div class="item">
          <a href="website-development.html" class="d-flex justify-content-center align-items-center px-4" target="_blank">
            <figure class="mr-2 mb-0"><img src="{{ asset('assets/icons/web-development.svg') }}" width="48" height="48" class="w-auto" alt="WEB" /></figure>Website Development
          </a>
        </div>
        <div class="item">
          <a href="web-and-mobile-uiux-designing.html" target="_blank"
            class="d-flex justify-content-center align-items-center px-4">
            <figure class="mr-2 mb-0"><img src="{{ asset('assets/icons/UI-UX.svg') }}" width="48" height="48" class="w-auto" alt="UI/UX" />
            </figure>UI/UX Designing
          </a>
        </div>
        <div class="item">
          <a href="graphics-vector-print-media.html" target="_blank"
            class="d-flex justify-content-center align-items-center px-4">
            <figure class="mr-2 mb-0"><img src="{{ asset('assets/icons/graphic-design.svg') }}" width="48" height="48" class="w-auto"
                alt="GRAPHIC" /></figure>
            Graphic Designing
          </a>
        </div>
        <div class="item">
          <a href="frontend-development.html" target="_blank" class="d-flex justify-content-center align-items-center px-4">
            <figure class="mr-2 mb-0"><img src="{{ asset('assets/icons/frontend.svg') }}" width="48" height="48" class="w-auto"
                alt="FRONT" /></figure>Frontend Development
          </a>
        </div>
        <div class="item">
          <a href="seo-promotions.html" target="_blank" class="d-flex justify-content-center align-items-center px-4">
            <figure class="mr-2 mb-0"><img src="{{ asset('assets/icons/seo.svg') }}" width="48" height="48" class="w-auto" alt="SEO" />
            </figure>
            SEO & Promotion
          </a>
        </div>
      </div>
    </div>
  </div>
</section> 
  <!-- ---TOP-CAROUSEL--- -->
  <section class="service-carousel-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="service-carousel owl-carousel owl-theme">
            <div class="items">
              <a href="#" class="service-items d-flex justify-content-center align-items-center">
                <figure class="mb-0"><img src="{{ asset('assets/icons/whatsapp.svg') }}" width="28" height="28" alt="WA" class="w-auto"></figure>
                Whatsapp
              </a>
            </div>
            <div class="items">
              <a href="#" class="service-items d-flex justify-content-center align-items-center">
                <figure class="mb-0"><img src="{{ asset('assets/icons/social-media.svg') }}" width="28" height="28" alt="SOCIAL" class="w-auto"></figure>
                Social Media
              </a>
            </div>
            <div class="items">
              <a href="#" class="service-items d-flex justify-content-center align-items-center">
                <figure class="mb-0"><img src="{{ asset('assets/icons/chatbot.svg') }}" width="28" height="28" alt="CHAT" class="w-auto"></figure>
                ChatBot Service
              </a>
            </div>
            <div class="items">
              <a href="#" class="service-items d-flex justify-content-center align-items-center">
                <figure class="mb-0"><img src="{{ asset('assets/icons/laravel.svg') }}" width="28" height="28" alt="LARA." class="w-auto"></figure>
                Laravel
              </a>
            </div>
            <div class="items">
              <a href="#" class="service-items d-flex justify-content-center align-items-center">
                <figure class="mb-0"><img src="{{ asset('assets/icons/wordpress.svg') }}" width="28" height="28" alt="WP" class="w-auto"></figure>
                WordPress
              </a>
            </div>
            <div class="items">
              <a href="#" class="service-items d-flex justify-content-center align-items-center">
                <figure class="mb-0"><img src="{{ asset('assets/icons/youtube.svg') }}"  width="28" height="28" alt="YT" class="w-auto"></figure>
                YouTube
              </a>
            </div>
            <div class="items">
              <a href="#" class="service-items d-flex justify-content-center align-items-center">
                <figure class="mb-0"><img src="{{ asset('assets/icons/ads.svg') }}" width="25" height="24" alt="A. C." class="w-auto"></figure>
                Ads Champion
              </a>
            </div>
            <div class="items">
              <a href="#" class="service-items d-flex justify-content-center align-items-center">
                <figure class="mb-0"><img src="{{ asset('assets/icons/Keyword Ranking.svg') }}"  width="25" height="24" alt="KEY." class="w-auto"></figure>
                Keyword Ranking
              </a>
            </div>
            <div class="items">
              <a href="#" class="service-items d-flex justify-content-center align-items-center">
                <figure class="mb-0"><img src="{{ asset('assets/icons/video.svg') }}" width="25" height="24" alt="VID." class="w-auto"></figure>
                Video
              </a>
            </div>
            <div class="items">
              <a href="#" class="service-items d-flex justify-content-center align-items-center">
                <figure class="mb-0"><img src="{{ asset('assets/icons/e-commerce.svg') }}"  width="24" height="24" alt="EC" class="w-auto"></figure>
                E-commerce
              </a>
            </div>
            <div class="items">
              <a href="#" class="service-items d-flex justify-content-center align-items-center">
                <figure class="mb-0"><img src="{{ asset('assets/icons/product design.svg') }}" width="24" height="24" alt="P D" class="w-auto"></figure>
                Product Design
              </a>
            </div>
          </div>
        </div>
      </div>
      
    </div>

  </section>
   @include('notification') 
  @yield('content')
  <!-- ---FOOTER--- -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md">
          <div class="row row-cols-2">
            <div class="col">
              <h5 class="mb-3">Services</h5>
              <ul class="p-0">
                <li><a href="website-development.html">Website Development</a></li>
                <li><a href="web-and-mobile-uiux-designing.html">UI / UX Designing</a></li>
                <li><a href="graphics-vector-print-media.html">Graphic Designing</a></li>
                <li><a href="frontend-development.html">Frontend Development</a></li>
                <li><a href="seo-promotions.html">SEO & Promotion</a></li>
                <li><a href="">Video & Animation</a></li>
              </ul>
            </div>
            <div class="col pl-md-4">
              <h5 class="invisible mb-3">...</h5>
              <ul class="p-0">
                <li><a href="">Website Development</a></li>
                <li><a href="">Video & Animation</a></li>
                <li><a href="">Digital Marketing</a></li>
                <li><a href="">Video & Animation</a></li>
                <li><a href="">UI / UX Designing</a></li>
                <li><a href="">Business</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="row row-cols-2">
            <div class="col pl-lg-4">
              <h5 class="mb-3">Quick Links</h5>
              <ul class="p-0">
                <li><a href="./">Home</a></li>
                <li><a href="#">Service & Work</a></li>
                <li><a href="hiring.html" class="hiretext"><span>We are <b>HIRING</b></span></a></li>
                <li><a href="./industrial-training-graphics-designing.html">Industrial Training</a></li>
                <li><a href="">About Us</a></li>
              </ul>
            </div>
            <div class="col  pl-lg-4">
              <h5 class="invisible mb-3">...</h5>
              <ul class="p-0">
                <li><a href="./contact.html">Contact Us</a></li>
                <li><a href="./case-study-for-mobile-app.html">Case Studies</a></li>
                <li><a href="./privacy-policy.html">Privacy Policy</a></li>
                <li><a href="./terms-of-service.html">Terms of Service</a></li>
                <li><a href="./return-refund-policy.html">Return & Refund Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg">
          <div class="row">
            <div class="col col-sm pl-lg-4 pl-xl-5 footer-5 mt-4 mt-lg-0">
              <h5 class="mb-2 mb-lg-3">Let's Discuss <span>your Project</span></h5>
              <p class="m-0">Lorem Ipsum has been the industry's standard dummy text ever since.</p>
              <div class="d-flex mt-3 mt-lg-4 mb-2 mb-lg-3 footer-email">
                <a href="mailto:info@baagdi.com"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                  class="emailsvg mr-3">
                  <g clip-path="url(#clip0_164_314)">
                    <path d="M10.6064 8.08195L16.0004 11.492V4.52795L10.6064 8.08195Z" fill="white" />
                    <path d="M0 4.52795V11.492L5.394 8.08195L0 4.52795Z" fill="white" />
                    <path
                      d="M15.0003 2.5H1.00027C0.501274 2.5 0.105273 2.872 0.0302734 3.351L8.00027 8.602L15.9703 3.351C15.8953 2.872 15.4993 2.5 15.0003 2.5Z"
                      fill="white" />
                    <path
                      d="M9.69023 8.68606L8.27523 9.61806C8.19123 9.67306 8.09623 9.70006 8.00023 9.70006C7.90423 9.70006 7.80923 9.67306 7.72523 9.61806L6.31023 8.68506L0.0322266 12.6561C0.109227 13.1311 0.503227 13.5001 1.00023 13.5001H15.0002C15.4972 13.5001 15.8912 13.1311 15.9682 12.6561L9.69023 8.68606Z"
                      fill="white" />
                  </g>
                  <defs>
                    <clipPath id="clip0_164_314">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>info@baagdi.com</a>
              </div>
              <div class="d-flex footer-phone">
                <a href="tel:918764458899"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                  class=" mr-3">
                  <g clip-path="url(#clip0_164_330)">
                    <path
                      d="M15.5643 11.7424L13.3315 9.50954C12.534 8.71209 11.1784 9.0311 10.8594 10.0678C10.6202 10.7855 9.82272 11.1842 9.10501 11.0247C7.51012 10.626 5.35702 8.5526 4.9583 6.87797C4.71906 6.16024 5.19753 5.36279 5.91523 5.12359C6.95191 4.80461 7.27089 3.44895 6.47344 2.65151L4.2406 0.418659C3.60264 -0.139553 2.64571 -0.139553 2.08749 0.418659L0.572347 1.93381C-0.9428 3.5287 0.731836 7.75516 4.47983 11.5032C8.22783 15.2511 12.4543 17.0056 14.0492 15.4106L15.5643 13.8955C16.1226 13.2575 16.1226 12.3006 15.5643 11.7424Z"
                      fill="white" />
                  </g>
                  <defs>
                    <clipPath id="clip0_164_330">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>+91 8764458899</a>
              </div>
              <ul class="list-unstyled d-inline-flex social-media-logos mt-md-5 mt-3">
              <li><a href="" target="_blank" title="some text"><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path class="bg" opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M0 17C0 7.61116 7.61116 0 17 0C26.3888 0 34 7.61116 34 17C34 26.3888 26.3888 34 17 34C7.61116 34 0 26.3888 0 17Z" fill="white"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M17.001 7.93359C14.5386 7.93359 14.2296 7.94436 13.2625 7.98837C12.2972 8.03257 11.6384 8.18539 11.0619 8.4096C10.4656 8.64118 9.9597 8.95096 9.45574 9.45511C8.9514 9.95907 8.64162 10.4649 8.40929 11.0611C8.18451 11.6377 8.03151 12.2968 7.98806 13.2616C7.94481 14.2288 7.93347 14.538 7.93347 17.0004C7.93347 19.4627 7.94443 19.7708 7.98825 20.7379C8.03264 21.7032 8.18545 22.362 8.40948 22.9385C8.64125 23.5348 8.95103 24.0407 9.45518 24.5447C9.95895 25.049 10.4648 25.3595 11.0607 25.5911C11.6376 25.8153 12.2967 25.9681 13.2617 26.0123C14.2288 26.0563 14.5377 26.0671 16.9999 26.0671C19.4624 26.0671 19.7705 26.0563 20.7376 26.0123C21.7029 25.9681 22.3625 25.8153 22.9393 25.5911C23.5355 25.3595 24.0406 25.049 24.5443 24.5447C25.0487 24.0407 25.3585 23.5348 25.5908 22.9387C25.8137 22.362 25.9667 21.703 26.012 20.7381C26.0555 19.771 26.0668 19.4627 26.0668 17.0004C26.0668 14.538 26.0555 14.2289 26.012 13.2618C25.9667 12.2966 25.8137 11.6377 25.5908 11.0612C25.3585 10.4649 25.0487 9.95907 24.5443 9.45511C24.04 8.95077 23.5357 8.64099 22.9388 8.4096C22.3608 8.18539 21.7015 8.03257 20.7363 7.98837C19.7692 7.94436 19.4613 7.93359 16.9982 7.93359H17.001ZM16.1876 9.56747C16.429 9.5671 16.6983 9.56747 17.001 9.56747C19.4218 9.56747 19.7087 9.57616 20.6647 9.61961C21.5487 9.66003 22.0285 9.80774 22.3481 9.93184C22.7712 10.0962 23.0728 10.2926 23.39 10.61C23.7073 10.9273 23.9038 11.2295 24.0685 11.6526C24.1926 11.9719 24.3405 12.4516 24.3807 13.3357C24.4242 14.2914 24.4336 14.5786 24.4336 16.9983C24.4336 19.4179 24.4242 19.7051 24.3807 20.6608C24.3403 21.5449 24.1926 22.0246 24.0685 22.3439C23.9042 22.767 23.7073 23.0683 23.39 23.3854C23.0727 23.7027 22.7714 23.8992 22.3481 24.0635C22.0288 24.1882 21.5487 24.3355 20.6647 24.3759C19.7089 24.4194 19.4218 24.4288 17.001 24.4288C14.5799 24.4288 14.293 24.4194 13.3372 24.3759C12.4532 24.3351 11.9734 24.1874 11.6536 24.0633C11.2305 23.899 10.9283 23.7026 10.611 23.3852C10.2936 23.0679 10.0972 22.7664 9.93247 22.3431C9.80836 22.0239 9.66046 21.5441 9.62023 20.6601C9.57678 19.7043 9.56809 19.4172 9.56809 16.996C9.56809 14.5748 9.57678 14.2892 9.62023 13.3334C9.66065 12.4494 9.80836 11.9696 9.93247 11.65C10.0968 11.2269 10.2936 10.9247 10.611 10.6073C10.9283 10.29 11.2305 10.0935 11.6536 9.92882C11.9732 9.80415 12.4532 9.65682 13.3372 9.61621C14.1736 9.57843 14.4978 9.5671 16.1876 9.56521V9.56747ZM21.8407 11.0729C21.24 11.0729 20.7527 11.5597 20.7527 12.1606C20.7527 12.7612 21.24 13.2486 21.8407 13.2486C22.4414 13.2486 22.9287 12.7612 22.9287 12.1606C22.9287 11.5599 22.4414 11.0729 21.8407 11.0729ZM17.001 12.3442C14.4296 12.3442 12.3448 14.429 12.3448 17.0003C12.3448 19.5717 14.4296 21.6555 17.001 21.6555C19.5724 21.6555 21.6564 19.5717 21.6564 17.0003C21.6564 14.429 19.5724 12.3442 17.001 12.3442ZM17.001 13.9781C18.67 13.9781 20.0232 15.3311 20.0232 17.0003C20.0232 18.6694 18.67 20.0226 17.001 20.0226C15.3317 20.0226 13.9787 18.6694 13.9787 17.0003C13.9787 15.3311 15.3317 13.9781 17.001 13.9781Z" fill="white"/>
                  </svg>
              </a></li>
              <li><a href="https://dribbble.com/baagdi" target="_blank" title="some text"><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="bg" opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M0 17C0 7.61116 7.61116 0 17 0C26.3888 0 34 7.61116 34 17C34 26.3888 26.3888 34 17 34C7.61116 34 0 26.3888 0 17Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.0635 16.9877C26.0635 17.6008 26.0011 18.2132 25.8785 18.81C25.7589 19.3927 25.5818 19.9648 25.3499 20.5116C25.1232 21.0488 24.8421 21.5665 24.5135 22.0492C24.1899 22.5289 23.8171 22.979 23.4076 23.3892C22.9972 23.7977 22.5456 24.1695 22.0661 24.4944C21.5818 24.8207 21.0634 25.1014 20.5259 25.3291C19.9782 25.5599 19.4049 25.7367 18.8227 25.8561C18.225 25.979 17.6105 26.0417 16.9964 26.0417C16.3819 26.0417 15.7674 25.979 15.1706 25.8561C14.5876 25.7367 14.0142 25.5599 13.467 25.3291C12.9295 25.1014 12.4106 24.8207 11.9263 24.4944C11.4468 24.1695 10.9952 23.7977 10.5857 23.3892C10.1757 22.979 9.80294 22.5289 9.47887 22.0492C9.15213 21.5665 8.87053 21.0488 8.64298 20.5116C8.41097 19.9648 8.23346 19.3927 8.11347 18.81C7.99217 18.2132 7.93018 17.6008 7.93018 16.9877C7.93018 16.3741 7.99214 15.7604 8.11351 15.1649C8.23349 14.5822 8.411 14.0093 8.64302 13.4633C8.87057 12.9257 9.15216 12.4076 9.4789 11.9248C9.80298 11.4447 10.1758 10.9955 10.5857 10.5848C10.9953 10.1763 11.4468 9.80543 11.9263 9.48093C12.4107 9.15332 12.9296 8.87263 13.467 8.64449C14.0142 8.41323 14.5876 8.23597 15.1707 8.11751C15.7675 7.9955 16.382 7.93359 16.9965 7.93359C17.6105 7.93359 18.225 7.9955 18.8227 8.11751C19.4049 8.23601 19.9782 8.41326 20.5259 8.64449C21.0634 8.87259 21.5818 9.15332 22.0662 9.48093C22.5456 9.80543 22.9973 10.1763 23.4076 10.5848C23.8172 10.9955 24.19 11.4447 24.5136 11.9248C24.8421 12.4076 25.1232 12.9258 25.3499 13.4633C25.5818 14.0093 25.7589 14.5822 25.8785 15.1649C26.0011 15.7604 26.0635 16.3741 26.0635 16.9877ZM13.6927 9.99418C11.5335 11.0124 9.92197 12.9991 9.41947 15.3935C9.62359 15.3953 12.8502 15.4359 16.5678 14.4496C15.2277 12.072 13.7959 10.1317 13.6927 9.99418ZM17.2093 15.6402C13.2226 16.832 9.39689 16.7463 9.25966 16.741C9.25742 16.8241 9.25345 16.9045 9.25345 16.9877C9.25345 18.974 10.0039 20.7848 11.2373 22.154C11.2347 22.15 13.3536 18.3962 17.5321 17.0469C17.633 17.0133 17.7358 16.9833 17.8376 16.9541C17.6432 16.5147 17.4311 16.0743 17.2093 15.6402ZM22.11 11.1848C20.7468 9.98445 18.9568 9.25637 16.9964 9.25637C16.3673 9.25637 15.7567 9.33241 15.1719 9.47299C15.2879 9.62863 16.7423 11.5552 18.0665 13.9832C20.9881 12.8895 22.0909 11.213 22.11 11.1848ZM18.3654 18.2353C18.3481 18.241 18.3309 18.2459 18.314 18.2521C13.7455 19.8424 12.2537 23.0474 12.2375 23.0824C13.552 24.1032 15.2007 24.719 16.9965 24.719C18.0687 24.719 19.0901 24.501 20.0194 24.1063C19.9047 23.4307 19.4549 21.0629 18.3654 18.2353ZM21.3232 23.3998C23.0618 22.2283 24.2966 20.368 24.641 18.2131C24.4816 18.1618 22.3154 17.477 19.8161 17.8771C20.8318 20.6641 21.2444 22.9338 21.3232 23.3998ZM18.6625 15.1353C18.8422 15.504 19.0162 15.8793 19.1769 16.2564C19.234 16.3917 19.2898 16.5244 19.3442 16.657C22.0042 16.3227 24.6247 16.8851 24.7367 16.9081C24.719 15.0752 24.0624 13.393 22.976 12.076C22.9614 12.0968 21.7195 13.8886 18.6625 15.1353Z" fill="white"/>
                </svg></a></li>
              <li><a href="https://www.linkedin.com/company/baagdi" target="_blank" title="some text"><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="bg" opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M0 17C0 7.61116 7.61116 0 17 0C26.3888 0 34 7.61116 34 17C34 26.3888 26.3888 34 17 34C7.61116 34 0 26.3888 0 17Z" fill="white"/>
                <g clip-path="url(#clip0_892_9616)">
                <path d="M24.6455 24.6498V24.6492H24.6493V19.0379C24.6493 16.2928 24.0583 14.1782 20.8492 14.1782C19.3064 14.1782 18.2711 15.0248 17.8485 15.8274H17.8038V14.4345H14.7611V24.6492H17.9294V19.5912C17.9294 18.2595 18.1819 16.9717 19.8311 16.9717C21.4561 16.9717 21.4803 18.4915 21.4803 19.6767V24.6498H24.6455Z" fill="white"/>
                <path d="M9.6018 14.4353H12.774V24.65H9.6018V14.4353Z" fill="white"/>
                <path d="M11.1867 9.34985C10.1724 9.34985 9.34943 10.1729 9.34943 11.1871C9.34943 12.2014 10.1724 13.0416 11.1867 13.0416C12.201 13.0416 13.024 12.2014 13.024 11.1871C13.0233 10.1729 12.2003 9.34985 11.1867 9.34985V9.34985Z" fill="white"/>
                </g>
                <defs>
                <clipPath id="clip0_892_9616">
                <rect width="15.3" height="15.3" fill="white" transform="translate(9.34943 9.34985)"/>
                </clipPath>
                </defs>
                </svg></a></li>
              <li><a href="https://www.behance.net/baagdi" target="_blank" title="some text">
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="bg" opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M0 17C0 7.61116 7.61116 0 17 0C26.3888 0 34 7.61116 34 17C34 26.3888 26.3888 34 17 34C7.61116 34 0 26.3888 0 17Z" fill="white"/>
                <g clip-path="url(#clip0_892_9622)">
                <path d="M17.0389 19.2887C17.0389 17.9973 16.4242 17.0427 15.1541 16.6849C16.0808 16.244 16.564 15.5759 16.564 14.5368C16.564 12.4879 15.031 11.9883 13.2623 11.9883H8.39246V22.2754H13.3986C15.2758 22.2754 17.0389 21.3788 17.0389 19.2887ZM10.6627 13.7444H12.793C13.6119 13.7444 14.3491 13.9736 14.3491 14.9198C14.3491 15.7933 13.7756 16.1448 12.9643 16.1448H10.6627V13.7444ZM10.662 20.5284V17.6954H13.1364C14.1358 17.6954 14.768 18.1105 14.768 19.1643C14.768 20.2034 14.0134 20.5284 13.0895 20.5284H10.662Z" fill="white"/>
                <path d="M21.538 22.4703C23.3243 22.4703 24.481 21.6688 25.0377 19.9651H23.2249C23.0298 20.601 22.2255 20.9372 21.6017 20.9372C20.398 20.9372 19.7658 20.2349 19.7658 19.0413H25.1601C25.3308 16.6528 23.9992 14.6172 21.5373 14.6172C19.2581 14.6172 17.711 16.3237 17.711 18.5591C17.711 20.8792 19.1769 22.4703 21.538 22.4703ZM21.4737 16.1629C22.5053 16.1629 23.0242 16.7667 23.1109 17.7541H19.7686C19.8364 16.7751 20.489 16.1629 21.4737 16.1629Z" fill="white"/>
                <path d="M19.3497 12.5283H23.5376V13.5416H19.3497V12.5283Z" fill="white"/>
                </g>
                <defs>
                <clipPath id="clip0_892_9622">
                <rect width="16.7852" height="16.7713" fill="white" transform="translate(8.39246 8.84351)"/>
                </clipPath>
                </defs>
                </svg></a></li>
              <li><a href="" target="_blank" title="some text"><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="bg" opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M0 17C0 7.61116 7.61116 0 17 0C26.3888 0 34 7.61116 34 17C34 26.3888 26.3888 34 17 34C7.61116 34 0 26.3888 0 17Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.0858 11.1552C24.8661 11.3693 25.4806 12.0002 25.6891 12.8013C26.068 14.2533 26.068 17.2828 26.068 17.2828C26.068 17.2828 26.068 20.3122 25.6891 21.7642C25.4806 22.5654 24.8661 23.1962 24.0858 23.4104C22.6718 23.7994 17.0014 23.7994 17.0014 23.7994C17.0014 23.7994 11.3309 23.7994 9.91679 23.4104C9.13654 23.1962 8.52207 22.5654 8.31353 21.7642C7.93469 20.3122 7.93469 17.2828 7.93469 17.2828C7.93469 17.2828 7.93469 14.2533 8.31353 12.8013C8.52207 12.0002 9.13654 11.3693 9.91679 11.1552C11.3309 10.7661 17.0014 10.7661 17.0014 10.7661C17.0014 10.7661 22.6718 10.7661 24.0858 11.1552ZM15.3014 14.7327V20.3994L19.8347 17.5662L15.3014 14.7327Z" fill="white"/>
                </svg></a></li>
              </ul>
                
                
                
                
              
            </div>
          </div>
        </div>
      </div>

      <div class="row copyright-section">
        <div class="col-12 col-xl-6">
          <p class="text-center text-xl-left">Copyright &copy; 2009-2022 <a href="https://baagdi.com/"
              target="_blank">Baagdi Solutions Pvt Ltd</a>, All
            rights reserved.</p>
        </div>
        <div class="col-12 col-xl-6">
          <p class="text-center text-xl-right">A Website Development Company TEAM from Sri Ganganagar, Rajasthan,
            (India)</p>
        </div>
      </div>

    </div>
    </div>
  </footer>
  <!--  Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- --OWL CAROUSEL-- -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- --ChosenJS for Form search Box-- -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js">
  </script>
  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>  
  <script type="text/javascript">
    // Carousels
    var owl1 = $('.home-service-list-slider');
    owl1.owlCarousel({
      loop: false,
      autoplay: false,      
      nav: true,
      navText: [
        "<i class='bi bi-arrow-left'></i>",
        "<i class='bi bi-arrow-right'></i>",
      ],      
      dots: false,
      responsive: {
        0: {
          items: 1,
          loop: true,
          autoplay:true,
        },
        576: {
          items: 2,
          loop: true,
          autoplay:true,
        },
        767: {
          loop:true,
          items: 3,
          stagePadding:32,
          autoplay:true,
        },
        991: {
          items:4,
          loop: true,
          autoplay:true,
        },
        1300: {
          items:5,
          nav:true,
          loop: false,
        }
      }
    })
</script>
    <script type="text/javascript">
    var owl2 = $('.service-carousel');
    owl2.owlCarousel({
      loop: true,
      autoplay: true,
      autoplayTimeout: 3000,
      nav: true,
      navText: [
        "<i class='bi bi-arrow-left'></i>",
        "<i class='bi bi-arrow-right'></i>",
      ],
      dots:false,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        360: {
          items: 1,
          margin: 30,
          autoWidth: false,
        },
        576: {
          items: 2,
          margin: 30
        },
        768: {
          items: 3,
          margin: 30,
          stagePadding:32,
        },
        992: {
          items: 5
        },
        1200: {
          items: 6,
          nav: false,
        },
        1300: {
          items:6,
          nav: true,
        }
      }
    })
  </script>
    <script type="text/javascript">
    var owl3 = $('.trusted-countries-cards');
    owl3.owlCarousel({
      loop: true,      
      autoplay: false,
      autoplayTimeout: 5000,
      nav: false,
      dots: false,
      stagePadding:16,
      margin:16,
      responsive: {
        0: {
          items: 1
        },
        567: {
          items: 2
        },
        768: {
          items: 1
        },
        991: {
          items: 2
        },
        1200: {
          items: 2,
          margin:40,
          stagePadding:15,
        }
      }
    });
  </script>
    <script type="text/javascript">
    $('.google-reviews-slider').owlCarousel({
      loop: true,
      nav: true,
      dots: false,
      navText: ["<i class='bi bi-arrow-left'></i>", "<i class='bi bi-arrow-right'></i>"],
      autoplay: true,
      autoplayTimeout: 5000,
      smartSpeed: 450,
      margin: 30,
      responsive: {
        0: {
          items: 1,
          stagePadding: 36,
          margin: 16,
        },
        576: {
          items: 2
        },
        768: {
          items: 3
        },
        991: {
          items: 4
        },
        1200: {
          items: 4
        }
      }
    });
  </script>
  <script>
    $(function ($) {
      $('input[type="file"]').change(function () {
        if ($(this).val()) {
          var filename = $(this)[0].files[0].name;
          $(this).closest('.file-upload').find('.file-name').html(filename);
          $(this).parent().find('.close').show();
        }
      });
    });

    $(document).ready(function () {
      $('.close').on('click', function (e) {
        $(this).closest('.file-upload').find('.file-name').text('');
        $(this).closest('.file-upload').find('input[type="file"]').val('');
        $(this).closest('.file-upload').find('.close').hide();
      });
    });

    // form Select Search Box
    $(".chosen").chosen();
  </script>
  <script>
    $(document).ready(function () {
      if ( $(window).width() > 767 ) {
        $(".dropdown").mouseover(function(){
    $(".dropdown-menu.megamenu").addClass("show");
  });
  $(".dropdown-menu.megamenu").mouseout(function(){
    $(this).removeClass("show");
  });
}  
    });
  </script>
<script>
  // Get the button
  let mybutton = document.getElementById("back-to-top");  
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};  
  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }  
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>
    



<script>
  // Form validation
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the form elements
      var form = document.getElementById('workwithform');
      var name = document.getElementById('name');
      var email = document.getElementById('email');
      var whatsapp = document.getElementById('whatsapp');
      var message = document.getElementById('message');

      // Set the event listener for the form submission
      form.addEventListener('submit', function(event) {
        // Check if the form is valid
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        } else {
            // Remove leading 0 from WhatsApp number field
            var whatsappValue = whatsapp.value;
            whatsappValue = whatsappValue.replace(/^0+/, '');
            whatsapp.value = whatsappValue;

            // Remove HTML code from message field
            var messageValue = message.value;
            messageValue = messageValue.replace(/(<([^>]+)>)/gi, "");
            message.value = messageValue;
          }
        form.classList.add('was-validated');
      }, false);

      // Set the event listeners for the input fields
      name.addEventListener('input', function(event) {
        if (name.validity.patternMismatch) {
          name.setCustomValidity('Name must be between 3 and 5 characters.');
        } else {
          name.setCustomValidity('');
        }
      });

      email.addEventListener('input', function(event) {
        if (email.validity.patternMismatch) {
          email.setCustomValidity('Please enter a valid email address.');
        } else {
          email.setCustomValidity('');
        }
      });

      // Set the event listener for the whatsapp input field
        whatsapp.addEventListener('input', function(event) {
          if (whatsapp.validity.patternMismatch) {
            whatsapp.setCustomValidity('Please enter a valid WhatsApp number without the leading 0.');
          } else {
            whatsapp.setCustomValidity('');
          }
        });

        // Set the event listener for the message input field
        message.addEventListener('input', function(event) {
          if (message.validity.patternMismatch) {
            message.setCustomValidity('Please enter a message without HTML code.');
          } else {
            message.setCustomValidity('');
          }
        });
    }, false);
  })();
</script>    
<script>
  // Form validation
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the form elements
      var form2 = document.getElementById('askanythingform');
      var name2 = document.getElementById('name2');
      var email2 = document.getElementById('email2');
      var whatsapp2 = document.getElementById('whatsapp2');
      var message2 = document.getElementById('message2');

      // Set the event listener for the form submission
      form2.addEventListener('submit', function(event) {
        // Check if the form is valid
        if (!form2.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        } else {
            // Remove leading 0 from WhatsApp number field
            var whatsappValue2 = whatsapp2.value;
            whatsappValue2 = whatsappValue2.replace(/^0+/, '');
            whatsapp2.value = whatsappValue2;


            // Remove HTML code from message field
            var messageValue2 = message2.value;
            messageValue2 = messageValue2.replace(/(<([^>]+)>)/gi, "");
            message2.value = messageValue2;
          }
        form2.classList.add('was-validated');
      }, false);

      // Set the event listeners for the input fields
      name2.addEventListener('input', function(event) {
        if (name2.validity.patternMismatch) {
          name2.setCustomValidity('Name must be between 3 and 5 characters.');
        } else {
          name2.setCustomValidity('');
        }
      });

      email2.addEventListener('input', function(event) {
        if (email2.validity.patternMismatch) {
          email2.setCustomValidity('Please enter a valid email address.');
        } else {
          email2.setCustomValidity('');
        }
      });
      // Set the event listener for the whatsapp input field
        whatsapp2.addEventListener('input', function(event) {
          if (whatsapp2.validity.patternMismatch) {
            whatsapp2.setCustomValidity('Please enter a valid WhatsApp number without the leading 0.');
          } else {
            whatsapp2.setCustomValidity('');
          }
        });

        // Set the event listener for the message input field
        message2.addEventListener('input', function(event) {
          if (message2.validity.patternMismatch) {
            message2.setCustomValidity('Please enter a message without HTML code.');
          } else {
            message2.setCustomValidity('');
          }
        });
    }, false);
  })();
</script>    
    
</body>

</html>