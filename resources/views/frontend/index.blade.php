@extends('frontend.layouts.app')
@section('title')
<title>Baagdi Solutions | Website Designer, Development, Graphics</title>
@endsection
@section('content')
<!-- ---WORK-WITH-SECTION--- -->
  <section class="work-with-section">
    <div class="container">
      <h1>We work with</h1>
      <p class="m-0">
        Lorem Ipsum has been the industry's standard dummy text ever since the
        1500s, when an unknown printer took a galley of type and scrambled it
        to make a type specimen book. It has survived not only five centuries.
      </p>
    </div>
    <div class="work-with-columns" id="work-with-columns">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="work-with-form">
              <h2>Get a Free Quote</h2>
              <form id="workwithform" class="form needs-validation" action="{{ route('free_quote') }}" method="post" enctype="multipart/form-data" novalidate>@csrf
                <div class="form-row">
                  <div class="form-group col-md-6 mb-2 p-0">
                    <input type="text" class="form-control shadow-none mr-4" id="name" placeholder="Name" name="name" pattern="[A-Za-z\s]{3,50}" value="{{ old('name') }}" required>
                    <div class="invalid-feedback" >
                      Name must be between 3 and 5 characters and only contain alphabets.
                    </div>                   
                  </div>
                  <div class="form-group col-md-6 mb-2 p-0">
                    <input type="email" name="email" class="form-control shadow-none mr-0 " id="email" placeholder="Email" value="{{ old('email') }}" required>
                    <div class="invalid-feedback">
                      Please enter a valid email address
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6 mb-2 p-0">
                    <input type="tel" class="form-control shadow-none mr-4 " id="whatsapp" name="whatsapp" pattern="^[1-9]\d{9}$" placeholder="Whatsapp no. without 0" value="{{ old('whatsapp') }}" required>
                    <div class="invalid-feedback">Please enter a valid WhatsApp number without the leading 0.</div>
                  </div>
                  <div class="form-group col-md-6 mb-2 p-0">
                    <select class="form-control shadow-none mr-0 select chosen " name="selectservice" id="selectservice" required>
                      <option disabled selected value=""></option>
                      <option value="Website Development" class="optionhead">Website Development</option>
                      <option value="Wordpress">Wordpress</option>
                      <option value="Codeigniter">Codeigniter</option>
                      <option value="PHP">PHP</option>
                      <option value="JavaScript">JavaScript</option>
                      <option value="E-Commerce">E-Commerce</option>
                      <option value="OpenCart">OpenCart</option>
                      <option value="UI & UX Designing" class="optionhead">UI & UX Designing</option>
                      <option value="Website Design">Website Design</option>
                      <option value="Web App Designing">Web App Designing</option>
                      <option value="Parallax Web Design">Parallax Web Design</option>
                      <option value="IPhone App">IPhone App</option>
                      <option value="Email Template">Email Template</option>
                      <option value="Business Proposals">Business Proposals</option>
                      <option value="Android App">Android App</option>
                      <option value="Wireframe Designing">Wireframe Designing</option>
                      <option value="IPad & Tablet App Design">IPad & Tablet App Design</option>

                      <option value="Graphics Designing" class="optionhead">Graphics Designing</option>
                      <option value="Infographics">Infographics</option>
                      <option value="Flyer">Flyer</option>
                      <option value="Illustrations">Illustrations</option>
                      <option value="Banner & Ads">Banner & Ads</option>
                      <option value="Posters">Posters</option>
                      <option value="Letter Heads">Letter Heads</option>
                      <option value="Icons">Icons</option>
                      <option value="Fb & Google Ad Design">Fb & Google Ad Design</option>
                      <option value="Table Tents">Table Tents</option>
                      <option value="404 Page Design">404 Page Design</option>
                      <option value="Hand Art">Hand Art</option>
                      <option value="Logo & Branding">Logo & Branding</option>
                      <option value="Packaging">Packaging</option>
                      <option value="Seal/Stamp">Seal/Stamp</option>
                      <option value="Business Cards">Business Cards</option>
                      <option value="Magazine">Magazine</option>
                      <option value="Brochure">Brochure</option>
                      <option value="Instruction Booklet">Instruction Booklet</option>
                      <option value="Stationary Kit Design">Stationary Kit Design</option>

                      <option value="FRONTEND DEVELOPMENT" class="optionhead">FRONTEND DEVELOPMENT</option>
                      <option value="PSD To HTML5">PSD To HTML5</option>
                      <option value="SMACSS">SMACSS</option>
                      <option value="Twitter Bootstrap">Twitter Bootstrap</option>
                      <option value="Parallax">Parallax</option>
                      <option value="Email Template">Email Template</option>
                      <option value="PSD To Wordpress">PSD To Wordpress</option>
                      <option value="AngularJS">AngularJS</option>
                      <option value="WebApp">WebApp</option>
                      <option value="Theme Customization">Theme Customization</option>

                      <option value="SEO & PROMOTION" class="optionhead">SEO & PROMOTION</option>
                      <option value="On Page Seo">On Page Seo</option>
                      <option value="Keyword Ranking">Keyword Ranking</option>
                      <option value="Conversion Optimization">Conversion Optimization</option>
                      <option value="Traffic Increase">Traffic Increase</option>
                      <option value="Link Building">Link Building</option>
                      <option value="Social Media Optimization">Social Media Optimization</option>
                      <option value="Content Writing">Content Writing</option>
                      <option value="Load Speed Optimization">Load Speed Optimization</option>
                      <option value="Social Media Image Creation">Social Media Image Creation</option>
                      <option value="Fb & Google Ads">Fb & Google Ads</option>
                      <option value="Advance Analytics Report">Advance Analytics Report</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a Service
                    </div>
                  </div>
                </div>
                <div class="form-group mb-2">
                  <textarea class="form-control shadow-none" aria-label="With textarea" id="message" name="message" placeholder="Message" required></textarea>
                    <div class="invalid-feedback">{{ old('message') }}
                      Please enter a valid message with html code
                    </div>
                </div>

                <div class="form-group overflow-hidden">
                  <div class="file-upload d-flex justify-content-start">
                    <label for="upload-file" class="m-0 d-flex align-items-center justify-content-center"><img src="{{ asset('assets/icons/attach.svg') }}" width="20" height="20" class="mr-2"
                        alt="a" />Attach File</label>
                    <input type="file" name="file" id="upload-file" />
                    <p></p>
                    <p class="file-name m-0 ml-4 my-auto"></p>
                    <p class="m-0 my-auto"> <span class="close " style="display: none;">x</span>
                    </p>

                    {{ $errors->first('file') }}
                  </div>
                  <div class="invalid-feedback">
                    Please upload a valid file
                  </div>
                </div>
                <div class="form-group form-btn mt-4 mt-sm-0 d-flex justify-content-start flex-column flex-sm-row">
                  <button type="submit" class="btn d-block d-sm-inline shadow-none">Request a Quote</button>
                  <button onclick="location.href='https://wa.me/918764458899?text=Hello!How are you?'" type="button" class="btn d-block d-sm-inline  whatsapp-btn shadow-none"><img src="{{ asset('assets/icons/whatsapp2.svg') }}" class="img-fluid" alt="✉" /> Connect on Whatsapp</button>
                </div>
              </form>
              
            </div>
          </div>
          <div class="col-lg-5 work-with-cards">
            <div class="row row-cols-2 row-cols-md-4 row-cols-lg-2">
              <div class="col">
                <div class="card card-1 text-center" data-toggle="tooltip" title="Lorem Ipsum has been the industry's standard dummy text ever since the 1500s">
                 <img src="{{ asset('assets/icons/indivisuals.svg') }}" width="120" height="120" class="m-auto img-fluid"
                      alt="INDIVISUALS"/>
                  <div class="card-body p-0">
                    <h5 class="card-title">
                      Individuals
                    </h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-2 text-center" data-toggle="tooltip" title="Lorem Ipsum has been the industry's standard dummy text ever since the 1500s">
                  <img src="{{ asset('assets/icons/startup.svg') }}" width="120" height="120" class="m-auto img-fluid"
                      alt="Start Up Business" />
                  <div class="card-body p-0">
                    <h5 class="card-title card-title-2">
                      Start Up Business
                    </h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center"  data-toggle="tooltip" title="Lorem Ipsum has been the industry's standard dummy text ever since the 1500s">
                  <img src="{{ asset('assets/icons/enterprise.svg') }}" width="120" height="120" class="m-auto img-fluid"
                      alt="Enterprise" />
                  <div class="card-body p-0">
                    <h5 class="card-title">
                      Enterprise
                    </h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center" data-toggle="tooltip" title="Lorem Ipsum has been the industry's standard dummy text ever since the 1500s">
                  <img src="{{ asset('assets/icons/agencies.svg') }}" width="120" height="120" class="m-auto img-fluid"
                      alt="Agencies" />
                  <div class="card-body p-0">
                    <h5 class="card-title">
                      Agencies
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ---CLIENTS--- -->
  <section class="clients">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Have a family of 2500+ clients with 100% satisfaction</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <p class="mb-3 mb-md-5">
            We make it easier to have a look at our reviews. Our clients are
            really satisfied with our work. Baagdi Solutions is made up with
            hundreds of clients. To become a part of this network, Let&apos;s
            join us and expand yourself to the every corner of the world.
          </p>
          <p>
            Focus on your business, Don&apos;t worry about digital fame, we
            are here for you to take care of your website and digital grow.
          </p>

          <button type="button" class="btn">Request a Quote</button>
        </div>
        <div class="col-md-6 scroll-div bg-white pl-lg-5 mt-5 mt-md-0">

          <img alt="Google, Double Click, Lego, Dart, The Beatles , Disney Plus, Polester, and more"
            src="{{ asset('assets/images/clients-img-1.png') }}" class=" scroll-image">
          <div class="scroll-div-1"></div>
          <div class="scroll-div-2"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- ---GOOGLE REVIEWS--- -->
  <section class="google-reviews">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>What our customers say</h1>
          <p>
            Lorem Ipsum has been the industry's standard dummy text ever since
            the 1500s, when an unknown printer took a galley of type.
          </p>
          <div class="google-reviews-slider owl-carousel owl-theme">
            <div class="item review-card">
              <img src="{{ asset('assets/images/review1.svg') }}" width="72" height="72" alt="reviewer" class="img-fluid mb-3">
              <div class="review-stars d-flex justify-content-center m-auto">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
              </div>
              <p class="mt-3">
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown pri... <a
                  href="#">read more</a>
              </p>
              <h6>Georgia Williams</h6>
              <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/icons/Google_Logo.svg') }}" width="20" height="20" alt="G" class="Google-icon">
                <span>3 Weeks ago</span>
              </div>

            </div>
            <div class="item review-card">
              <img src="{{ asset('assets/images/review2.svg') }}" width="72" height="72" alt="reviewer" class="img-fluid mb-2 mb-lg-3">
              <div class="review-stars d-flex justify-content-center m-auto">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
              </div>
              <p class="mt-3">
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown pri... <a
                  href="#">read more</a>
              </p>
              <h6>Suhaib Al Minhas</h6>
              <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/icons/Google_Logo.svg') }}" width="20" height="20" alt="G" class="Google-icon">
                <span>3 Weeks ago</span>
              </div>

            </div>
            <div class="item review-card">
              <img src="{{ asset('assets/images/review3.svg') }}" width="72" height="72" alt="reviewer" class="img-fluid mb-2 mb-lg-3">
              <div class="review-stars d-flex justify-content-center m-auto">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
              </div>
              <p class="mt-3">
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown pri... <a
                  href="#">read more</a>
              </p>
              <h6>Georgia Williams</h6>
              <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/icons/Google_Logo.svg') }}" width="20" height="20" alt="G" class="Google-icon">
                <span>3 Weeks ago</span>
              </div>

            </div>
            <div class="item review-card">
              <img src="{{ asset('assets/images/review4.svg') }}" width="72" height="72" alt="reviewer" class="img-fluid mb-2 mb-lg-3">
              <div class="review-stars d-flex justify-content-center m-auto">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
              </div>
              <p class="mt-3">
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown pri... <a
                  href="#">read more</a>
              </p>
              <h6>Suhaib Al Minhas</h6>
              <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/icons/Google_Logo.svg') }}" width="20" height="20" alt="G" class="Google-icon">
                <span>3 Weeks ago</span>
              </div>

            </div>
            <div class="item review-card">
              <img src="{{ asset('assets/images/review1.svg') }}" width="72" height="72" alt="reviewer" class="img-fluid mb-2 mb-lg-3">
              <div class="review-stars d-flex justify-content-center m-auto">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
              </div>
              <p class="mt-3">
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown pri... <a
                  href="#">read more</a>
              </p>
              <h6>Georgia Williams</h6>
              <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/icons/Google_Logo.svg') }}" width="20" height="20" alt="G" class="Google-icon">
                <span>3 Weeks ago</span>
              </div>

            </div>
            <div class="item review-card">
              <img src="{{ asset('assets/images/review2.svg') }}"  width="72" height="72" alt="reviewer" class="img-fluid mb-2 mb-lg-3">
              <div class="review-stars d-flex justify-content-center m-auto">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
              </div>
              <p class="mt-3">
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown pri... <a
                  href="#">read more</a>
              </p>
              <h6>Suhaib Al Minhas</h6>
              <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/icons/Google_Logo.svg') }}" width="20" height="20" alt="G" class="Google-icon">
                <span>3 Weeks ago</span>
              </div>

            </div>
            <div class="item review-card">
              <img src="{{ asset('assets/images/review3.svg') }}"  width="72" height="72" alt="reviewer" class="img-fluid mb-2 mb-lg-3">
              <div class="review-stars d-flex justify-content-center m-auto">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
              </div>
              <p class="mt-3">
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown pri... <a
                  href="#">read more</a>
              </p>
              <h6>Georgia Williams</h6>
              <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/icons/Google_Logo.svg') }}" width="20" height="20" alt="G" class="Google-icon">
                <span>3 Weeks ago</span>
              </div>

            </div>
            <div class="item review-card">
              <img src="{{ asset('assets/images/review4.svg') }}" width="72" height="72" alt="reviewer" class="img-fluid mb-2 mb-lg-3">
              <div class="review-stars d-flex justify-content-center m-auto">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
                <img src="{{ asset('assets/icons/Star.svg') }}" width="14" height="14" alt="⭐">
              </div>
              <p class="mt-3">
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown pri... <a
                  href="#">read more</a>
              </p>
              <h6>Suhaib Al Minhas</h6>
              <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/icons/Google_Logo.svg') }}" width="20" height="20" alt="G" class="Google-icon" class="">
                <span>3 Weeks ago</span>
              </div>

            </div>

          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- ---INDUSTRIES--- -->
  <section class="industries">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="text-white">Industries we Serve</h1>
          <p class="text-white">
            Lorem Ipsum has been the industry's standard dummy text ever since
            the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived no.
          </p>
        </div>
      </div>
      <div class="row industries-cards justify-content-center">
          <a href="#" class="text-center card-box">
            <img src="{{ asset('assets/icons/on-demand.svg') }}" width="120" height="120" class="img-fluid mb-lg-4 mb-3" alt="ON DEMAND SOLUTIONS" />
            <h3 class="mb-0">On-Demand Solutions</h3>
          </a>
        
          <a href="#"  class="text-center card-box">
            <img src="{{ asset('assets/icons/food.svg') }}" width="120" height="120" class="img-fluid mb-lg-4 mb-3" alt="FOOD & RESTAURANTS" />
            <h3 class="mb-0">Food & Restaurant</h3>
          </a>
        
          <a href="#"  class="text-center card-box">
            <img src="{{ asset('assets/icons/real-estate.svg') }}" width="120" height="120" class="img-fluid mb-lg-4 mb-3" alt="REAL ESTATE" />
            <h3 class="mb-0">Real Estate</h3>
          </a>
        
          <a href="#"  class="text-center card-box">
            <img src="{{ asset('assets/icons/travel.svg') }}" width="120" height="120" class="img-fluid mb-lg-4 mb-3" alt="TRAVEL & HOSPITALITY" />
            <h3 class="mb-0">Travel & Hospitality</h3>
          </a>
        
          <a href="#"  class="text-center card-box">
            <img src="{{ asset('assets/icons/gaming.svg') }}" width="120" height="120" class="img-fluid mb-lg-4 mb-3" alt="GAMING" />
            <h3 class="mb-0">Gaming</h3>
          </a>
        
          <a href="#"  class="text-center card-box">
            <img src="{{ asset('assets/icons/healthcare.svg') }}" width="120" height="120" class="img-fluid mb-lg-4 mb-3" alt="HEALTHCARE & FITNESS" />
            <h3 class="mb-0">Healthcare & Fitness</h3>
          </a>
       
          <a href="#"  class="text-center card-box">
            <img src="{{ asset('assets/icons/retail.svg') }}" width="120" height="120" class="img-fluid mb-lg-4 mb-3" alt="RETAIL, E-COMMERCE" />
            <h3 class="mb-0">Retail, Ecommerce</h3>
          </a>
        
          <a href="#"  class="text-center card-box">
            <img src="{{ asset('assets/icons/education.svg') }}" width="120" height="120" class="img-fluid mb-lg-4 mb-3" alt="EDUCATION & E-LEARNING" />
            <h3 class="mb-0">Education & E-learning</h3>
          </a>
        
          <a href="#"  class="text-center card-box">
            <img src="{{ asset('assets/icons/logistics.svg') }}" width="120" height="120" class="img-fluid mb-lg-4 mb-3" alt="Logistics & Distribution" />
            <h3 class="mb-0">Logistics & Distribution</h3>
          </a>
        
          <a href="#"  class="text-center card-box">
            <img src="{{ asset('assets/icons/social-network.svg') }}" width="120" height="120" class="img-fluid mb-lg-4 mb-3" alt="Social Networking" />
            <h3 class="mb-0">Social Networking</h3>
          </a>
        
          <a href="#" class="text-center card-box">
            <img src="{{ asset('assets/icons/sports.svg') }}" width="120" height="120" class="img-fluid mb-lg-4 mb-3" alt="Sports & Gym" />
            <h3 class="mb-0">Sports & Gym</h3>
          </a>
        
          <a href="#" class="text-center card-box">
            <img src="{{ asset('assets/icons/entertainment.svg') }}" width="120" height="120" class="img-fluid mb-lg-4 mb-3" alt="Entertainment" />
            <h3 class="mb-0">Entertainment</h3>
          </a>
        <div class="col-sm-12 text-center">
          <button type="button" class="btn m-auto">Check our Work</button>
        </div>        
      </div>
    </div>
  </section>
  <!-- ---WHY-CHOOSE-US--- -->
  <section class="why-choose-us-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Why Choose Us</h1>
          <p class="mb-5 mb-md-3">
            Lorem Ipsum has been the industry's standard dummy text ever since
            the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 d-none d-md-inline">
            <img src="{{ asset('assets/images/why-choose-us-img.png') }}" width="492" height="777" alt="WHY CHOOSE US" class="img-fluid" />
        </div>

        <div class="col-md-7 why-choose">
          <div class="row row-cols-1 row-cols-sm-2 text-left">
            <div class="col">
              <div class="why-cards d-flex">
                <figure class="mr-3 mb-0">
                  <img src="{{ asset('assets/icons/sales.svg') }}" alt="SALES" width="60" height="60">
                </figure>                
                <div>
                  <h3>After<br> Sales Service</h3>
                  <p>Lorem Ipsum has been the industry's standard this. Ipsum has been the</p>
              </div>
              </div>
            </div>
            <div class="col">
              <div class="why-cards d-flex">
                <figure class="mr-3 mb-0">
                    <img src="{{ asset('assets/icons/revenue.svg') }}" alt="REVENUE" width="60" height="60">
                  </figure>                
                  <div>
                    <h3>Revenue<br> Generated Business</h3>
                    <p>Lorem Ipsum has been the industry's standard this. Ipsum has been the</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="why-cards mt-sm-5 mt-lg-0 d-flex">
                <figure class="mr-3 mb-0">
                  <img src="{{ asset('assets/icons/hierarchy.svg') }}" alt="Hierarchy" width="60" height="60">
                </figure>                
                <div>
                  <h3>Hierarchy<br> Quick Dicisions</h3>
                  <p>Lorem Ipsum has been the industry's standard this. Ipsum has been the</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="why-cards mt-sm-5 mt-lg-0 d-flex">
                <figure class="mr-3 mb-0">
                  <img src="{{ asset('assets/icons/communication.svg') }}" alt="Communication" width="60" height="60">
                </figure>                
                <div>
                  <h3>Strong<br>
                  Communication</h3>
                  <p>Lorem Ipsum has been the industry's standard this. Ipsum has been the</p>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="btn">Satisfied? Let's Connect </button>
        </div>
      </div>
    </div>
  </section>
  <!-- ---TRUSTED COUNTRIES--- -->
  <section class="trusted-countries">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-5">
          <h1>We are Trusted
            20+ Countries</h1>
          <p class="m-0 pr-lg-3">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
            unknown printer.</p>
        </div>
        <div class="col-md-6 col-lg-7 trusted-cards">
          <div class="trusted-countries-cards owl-carousel owl-theme">
            <div class="item">
              <div class="card-1">
                <p class=" mb-5 mb-sm-3 mb-lg-4">Lorem Ipsum has been the industry's standard dummy text ever since the
                  1500s, when
                  a
                  known printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="d-flex pt-lg-4">
                  <img src="{{ asset('assets/icons/trusted-country-1.svg') }}" width="56" height="56" alt="Emma" class="img-fluid rounded mr-2 mr-xl-3 card-img w-auto">
                  <div>
                    <h3>Emma J. Pressley</h3>
                    <div class="d-flex">
                      <img src="{{ asset('assets/icons/USA-flag.svg') }}" width="27" height="18" class="mr-2 flag-img w-auto" alt="flag">
                      <h4>United State</h4>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="item">
              <div class="card-2">
                <p class=" mb-5 mb-sm-3 mb-lg-4">Lorem Ipsum has been the industry's standard dummy text ever since the
                  1500s, when
                  a
                  known printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="d-flex pt-lg-4">
                  <img src="{{ asset('assets/icons/trusted-country-2.svg') }}" width="56" height="56" alt="Tufayel" class="img-fluid rounded mr-2 mr-xl-3 card-img w-auto">
                  <div>
                    <h3>Tufayel Ahmed</h3>
                    <div class="d-flex">
                      <img src="{{ asset('assets/icons/australia-flag.svg') }}" width="30" height="18" class="mr-2 flag-img w-auto" alt="flag">
                      <h4>Australia</h4>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ---TEAM BAAGDI--- -->
  <section class="team">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>Team Baagdi</h1>
          <p class="m-0">To become a part of this network, Let&apos;s join us and expand
            yourself to the every corner of the world.</p>

          <div class="row row-cols-1 row-cols-sm-2">
            <div class="col pt-4 pt-lg-5">
              <li class="mb-2">External Team Members</li>
              <h6 class="pl-lg-4 m-0">Lorem Ipsum has been at the
                industry's standard dummy text.</h6>
            </div>
            <div class="col pt-4 pt-lg-5">
              <li class="mb-2">Decision Makers </li>
              <h6 class="pl-lg-4 m-0">Lorem Ipsum has been at the
                industry's standard dummy text.</h6>
            </div>
            <div class="col pt-4 pt-lg-5">
              <li class="mb-2">Industrials Experience</li>
              <h6 class="pl-lg-4 m-0">Lorem Ipsum has been at the
                industry's standard dummy text.</h6>
            </div>
            <div class="col pt-4 pt-lg-5">
              <li class="mb-2">Punctuality</li>
              <h6 class="pl-lg-4 m-0">Lorem Ipsum has been at the
                industry's standard dummy text.</h6>
            </div>
          </div>

          <button type="button" class="btn shadow-none"> <img src="{{ asset('assets/icons/team-btn-icon.svg') }}"
              class="img-fluid team-btn-img " alt="▶" width="37" height="37">  Let&apos;s Start
            Together </button>
        </div>
        <div class="col-md-5 d-none d-md-inline">
          <img src="{{ asset('assets/icons/team-bg.svg') }}" width="591" height="506" class="img-fluid team-img p-xl-0" alt="TEAM PHOTO">
        </div>
      </div>
    </div>
  </section>
  <!-- ---ASK-ANYTHING-SECTION--- -->
  <section class="ask-anything-section">
    <div class="container text-center">
      <h1>Ask us Anything or Whatsapp</h1>
      <p class="m-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
    <div class="ask-anything-form py-lg-5 py-3">
      <div class="container">
        <form method ="post" id="askanythingform" class="needs-validation" action="{{route('contact_us')}}" novalidate>@csrf
          <div class="form-row">
            <div class="form-group col-md-4 m-0 mb-3  pr-2">
              <input type="text" class="form-control shadow-none " placeholder="Name" id="name2" name="name2" pattern="[A-Za-z]{3,50}" required/>
              <div class="invalid-feedback">Name must be between 3 and 50 characters and only contain alphabets.</div>
            </div>
            <div class="form-group col-md-4 m-0  mb-3 px-2">
              <input type="email" name="email2" class="form-control shadow-none" placeholder="Email" id="email2" required/>
              <div class="invalid-feedback">Please enter a valid email address</div>
            </div>
            <div class="form-group col-md-4 m-0  mb-3  pl-2">
              <input type="tel" class="form-control shadow-none " id="whatsapp2" name="whatsapp2" pattern="^[1-9]\d{9}$" placeholder="Whatsapp no. without 0" required>
                    <div class="invalid-feedback">Please enter a valid WhatsApp number without the leading 0.</div>             
            </div>
          </div>
          <div class="form-group m-0 pb-3">
            <textarea class="form-control shadow-none" aria-label="With textarea" placeholder="Message" minlength="3"
              id="message1" name="message2" maxlength="500" required></textarea>
              <div class="invalid-feedback">
                Please enter a message without HTML code.
              </div>
          </div>
          <div class="d-flex flex-sm-row flex-column justify-content-end">
            <div class="order-2 order-sm-1 mr-sm-3 mr-0">
              <a href="https://wa.me/918764458899?text=Hello!How are you?" target="_blank"
            class="btn whatsapp-btn w-100 w-sm-auto">
            <img src="{{ asset('assets/icons/whatsapp2.svg') }}" width="26" height="26" alt="✉" />Connect on Whatsapp</a>
            </div>
            <div class="order-1 order-sm-2">
              <button type="submit" class="btn mb-sm-0 mb-3 w-100 w-sm-auto">Submit</button> 
            </div>
          </div>
        </form>
      </div>
    </div> 
  </section>
<script type="text/javascript">
  $('#whatsapp').keyup(function(){
    var maxLength = 10;
    var textLength = $(this).val().length;
    if(textLength > maxLength){
      $(this).val($(this).val().substr(0, maxLength));
    }
  });

  $(document).on('input', '#whatsapp', function() {
     this.value = this.value.replace(/[^+{1}|^0-9]/g,'');
  });

  $(document).on('input', '#whatsapp', function() {
      
        var inputValue = $(this).val();
      inputValue = inputValue.replace(/^\+91|^0|^\+/g, "");
      jQuery(this).val(inputValue);
      
  });
  $('#whatsapp2').keyup(function(){
    var maxLength = 10;
    var textLength = $(this).val().length;
    if(textLength > maxLength){
      $(this).val($(this).val().substr(0, maxLength));
    }
  });

  $(document).on('input', '#whatsapp2', function() {
     this.value = this.value.replace(/[^+{1}|^0-9]/g,'');
  });

  $(document).on('input', '#whatsapp2', function() {
      
        var inputValue = $(this).val();
      inputValue = inputValue.replace(/^\+91|^0|^\+/g, "");
      jQuery(this).val(inputValue);
      
  });
</script>
  @endsection