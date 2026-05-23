@extends('common.master')
@section('content')
<!-- page wrapper -->
<body style="zoom: 90%;">
   <div class="boxed_wrapper ltr">
   <!-- preloader -->
   <!--<div class="loader-wrap">
      <div class="preloader">
          <div class="preloader-close">close</div>
          <div id="handle-preloader" class="handle-preloader">
              <div class="animation-preloader">
                  <div class="spinner"></div>
                  <div class="txt-loading">
                      <span data-text-preloader="w" class="letters-loading">
                          w
                      </span>
                      <span data-text-preloader="a" class="letters-loading">
                          a
                      </span>
                      <span data-text-preloader="s" class="letters-loading">
                          s
                      </span>
                      <span data-text-preloader="t" class="letters-loading">
                          t
                      </span>
                      <span data-text-preloader="i" class="letters-loading">
                          i
                      </span>
                      <span data-text-preloader="x" class="letters-loading">
                          x
                      </span>
                  </div>
              </div>
          </div>
      </div>
      </div>-->
   <!-- preloader end -->
   <!-- main header -->
   @include('common.header')
   <!-- main-header end -->
   <!-- banner-style-two -->
   <section class="banner-style-two p_relative centred">
      <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
         <div class="slide-item p_relative">
            <div class="bg-layer" style="background-image:url(/images/banner/Banner-01.png)"></div>
            <div class="shape">
               <div class="shape-1" style="background-image: url(/images/shape/shape-14.png);"></div>
               <div class="shape-2" style="background-image: url(/images/shape/shape-14.png);"></div>
            </div>
            <div class="auto-container">
               <div class="content-box p_relative d_block z_5">
                  <span class="title-text p_relative d_block">Waste Pickup</span>
                  <h2 class="p_relative d_block">Clean & Green Punjab, Strong Punjab</h2>
                  <p class="p_relative d_block">A clean environment builds a healthier, stronger, and more developed Punjab.</p>
                  <div class="btn-box">
                     <a href="" class="theme-btn btn-one"><span>Read More</span></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="slide-item p_relative">
            <div class="bg-layer" style="background-image:url(/images/banner/banner-02.png)"></div>
            <div class="shape">
               <div class="shape-1" style="background-image: url(/images/shape/shape-14.png);"></div>
               <div class="shape-2" style="background-image: url(/images/shape/shape-14.png);"></div>
            </div>
            <div class="auto-container">
               <div class="content-box p_relative d_block z_5">
                  <span class="title-text p_relative d_block">Waste Pickup</span>
                  <h2 class="p_relative d_block">Your City,<br> Keep it Always Suthra</h2>
                  <p class="p_relative d_block">Every citizen’s responsibility is the key to a beautiful and hygienic city.</p>
                  <div class="btn-box">
                     <a href="" class="theme-btn btn-one"><span>Read More</span></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="slide-item p_relative">
            <div class="bg-layer" style="background-image:url(/images/banner/banner-03.png)"></div>
            <div class="shape">
               <div class="shape-1" style="background-image: url(/images/shape/shape-14.png);"></div>
               <div class="shape-2" style="background-image: url(/images/shape/shape-14.png);"></div>
            </div>
            <div class="auto-container">
               <div class="content-box p_relative d_block z_5">
                  <span class="title-text p_relative d_block">Waste Pickup</span>
                  <h2 class="p_relative d_block">Cleaner Punjab, Greener Tomorrow</h2>
                  <p class="p_relative d_block">Cleanliness today creates a greener and better future for coming generations.</p>
                  <div class="btn-box">
                     <a href="" class="theme-btn btn-one"><span>Read More</span></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- banner-style-two end -->
    <section class="marquee-section">

    <div class="marquee-track">

      <!-- SET 1 -->
      <div class="marquee-item">
        <span style="margin-left: 3rem !important;">Clean Environment</span>

        <img src="images/resource/logo-icon-line.webp" class="abs abs-middle w-40px" alt="">
      </div>

      <div class="marquee-item">
        <span style="margin-left: 3rem !important;">Urban Cleanliness</span>

        <img src="images/resource/logo-icon-line.webp" class="abs abs-middle w-40px" alt="">
      </div>

      <div class="marquee-item">
        <span style="margin-left: 3rem !important;">Waste to Value</span>

        <img src="images/resource/logo-icon-line.webp" class="abs abs-middle w-40px" alt="">
      </div>

      <div class="marquee-item">
        <span style="margin-left: 3rem !important;">Environmental Protection</span>

        <img src="images/resource/logo-icon-line.webp" class="abs abs-middle w-40px" alt="">
      </div>

      <!-- DUPLICATE FOR SMOOTH LOOP -->
      <div class="marquee-item">
        <span style="margin-left: 3rem !important;">Sustainable Cleaning</span>

        <img src="images/resource/logo-icon-line.webp" class="abs abs-middle w-40px" alt="">
      </div>

      <div class="marquee-item">
        <span style="margin-left: 3rem !important;">Zero Waste Mission</span>

        <img src="images/resource/logo-icon-line.webp" class="abs abs-middle w-40px" alt="">
      </div>

      <div class="marquee-item">
        <span style="margin-left: 3rem !important;">Public Hygiene</span>

        <img src="images/resource/logo-icon-line.webp" class="abs abs-middle w-40px" alt="">
      </div>

      <div class="marquee-item">
        <span style="margin-left: 3rem !important;">Eco-Friendly Operations</span>

        <img src="images/resource/logo-icon-line.webp" class="abs abs-middle w-40px" alt="">
      </div>

    </div>

  </section>
   <!-- feature-style-two -->
   <section class="feature-style-two sec-pad centred" style="background-image: url(/images/shape/shape-1.png); padding: 60px 0px 30px 0px">
      <div class="auto-container">
         <div class="sec-title mb_50" style="margin-bottom: 96px;">
            <h2>A wide range of <span style="color:#3a9e1e;"> Waste Management Services</span></h2>
         </div>
         <div class="row clearfix">
            <div class="col-lg-2 col-md-6 col-sm-12 feature-block">
               <div class="feature-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                  <div class="inner-box" style="box-shadow: 0px 10px 40px rgb(41 42 41 / 65%)">
                     <div class="icon-box" style="margin-left: -9px;">
                        <div class="static-shape" style="background-image: url(/images/shape/shape-18.png);"></div>
                        <div class="overlay-shape" style="background-image: url(/images/shape/shape-19.png);"></div>
                        <div class="icon"><i class="icon-31"></i></div>
                     </div>
                     <h5><a href="" style="color:black;">Waste Collection</a></h5>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 feature-block">
               <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                  <div class="inner-box" style="box-shadow: 0px 10px 40px rgb(41 42 41 / 65%)">
                     <div class="icon-box" style="margin-left: -9px;">
                        <div class="static-shape" style="background-image: url(/images/shape/shape-18.png);"></div>
                        <div class="overlay-shape" style="background-image: url(/images/shape/shape-19.png);"></div>
                        <div class="icon"><i class="fa fa-truck-container"></i></div>
                     </div>
                     <h5><a href="" style="color:black;">Mechanical Sweeping</a></h5>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 feature-block">
               <div class="feature-block-two wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                  <div class="inner-box" style="box-shadow: 0px 10px 40px rgb(41 42 41 / 65%)">
                     <div class="icon-box" style="margin-left: -9px;">
                        <div class="static-shape" style="background-image: url(/images/shape/shape-18.png);"></div>
                        <div class="overlay-shape" style="background-image: url(/images/shape/shape-19.png);"></div>
                        <div class="icon"><i class="icon-29"></i></div>
                     </div>
                     <h5 style="color:black;"><a href="" style="color:black;">Mechanical Washing</a></h5>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 feature-block">
               <div class="feature-block-two wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                  <div class="inner-box" style="box-shadow: 0px 10px 40px rgb(41 42 41 / 65%)">
                     <div class="icon-box" style="margin-left: -9px;">
                        <div class="static-shape" style="background-image: url(/images/shape/shape-18.png);"></div>
                        <div class="overlay-shape" style="background-image: url(/images/shape/shape-19.png);"></div>
                        <div class="icon"><i class="fa fa-broom"></i></div>
                     </div>
                     <h5><a href="" style="color:black;">Manual Sweeping</a></h5>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 feature-block">
               <div class="feature-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                  <div class="inner-box" style="box-shadow: 0px 10px 40px rgb(41 42 41 / 65%)">
                     <div class="icon-box" style="margin-left: -9px;">
                        <div class="static-shape" style="background-image: url(/images/shape/shape-18.png);"></div>
                        <div class="overlay-shape" style="background-image: url(/images/shape/shape-19.png);"></div>
                        <div class="icon"><i class="fa fa-industry-alt"></i></div>
                     </div>
                     <h5><a href="" style="color:black;">Waste to Energy</a></h5>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 feature-block">
               <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                  <div class="inner-box" style="box-shadow: 0px 10px 40px rgb(41 42 41 / 65%)">
                     <div class="icon-box" style="margin-left: -9px;">
                        <div class="static-shape" style="background-image: url(/images/shape/shape-18.png);"></div>
                        <div class="overlay-shape" style="background-image: url(/images/shape/shape-19.png);"></div>
                        <div class="icon"><i class="icon-12"></i></div>
                     </div>
                     <h5><a href="" style="color:black;">Sanitary Landfill Site</a></h5>
                  </div>
               </div>
            </div>
         </div>
         <div class="more-btn mt_60">
            <a href="" class="theme-btn" style="background: #3a9e1e;"><span style="color: white;">More Services</span></a>
         </div>
      </div>
   </section>
   <!-- feature-style-two end -->
   <!-- about-style-two -->
   <section class="about-style-two pb_150" style="padding-top: 90px;">
      <div class="auto-container">
         <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
               <div class="image_block_three">
                  <div class="image-box mr_30">
                     <div class="image-shape" style="background-image: url(/images/shape/shape-3.png);"></div>
                     <figure class="image image-1" style="box-shadow: 0px 20px 100px rgb(164 165 163 / 61%)"><img src="/images/team/DG-SPA.jpg" alt=""></figure>
                     <figure class="image image-2" style="box-shadow: 0px 20px 100px rgb(103 253 10 / 61%"><img src="/images/logo1.png" alt=""></figure>
                     <div class="video-box">
                        <a href="https://youtu.be/NUzgZwF2tXU" class="lightbox-image" data-caption=""><i class="icon-28"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
               <div class="content_block_three">
                  <div class="content-box ml_30">
                     <div class="sec-title mb_25">
                        <span class="sub-title" style="font-size: 23px">Welcome to Lahore Waste Management Company</span>
                        <h5 style="text-align: justify;">Our work is the collection and disposal of municipal solid waste in Lahore. Through this we are proud to say that we keep the city clean.</h5>
                     </div>
                     <div class="text-box mb_30">
                        <p style="text-align: justify;">Change is the most cherished desire of customers these days. Citizens want governments to change the style of delivering services, and make them more ‘customer focused’. If anyone wants to assess the achievements of LWMC for improving waste management services since its inception,</p>
                        <a href="">[..]</a>
                     </div>
                     <div class="inner-box p_relative">
                        <div class="experience-inner centred" style="box-shadow: 0px 20px 100px rgb(164 165 163 / 61%)">
                           <h2>16</h2>
                           <h4>Years of excellence</h4>
                        </div>
                        <ul class="list-style-one mb_35 clearfix">
                           <li>Waste Collection</li>
                           <li>Waste Dispose-off</li>
                           <li>Waste to Value</li>
                        </ul>
                        <div class="btn-box">
                           <a href="" class="theme-btn btn-one"><span>Mr. Babar Sahib Din, CEO LWMC Message</span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- about-style-two end -->
   <!-- materials-section -->
   <section class="funfact-section">
      <div class="auto-container">
         <div class="inner-container">
            <div class="funfact-block-one">
               <div class="inner-box">
                  <div class="icon-box"><i class="icon-15"></i></div>
                  <div class="count-outer count-box">
                     <span class="count-text" data-speed="1500" data-stop="20">0</span><span>k</span>
                  </div>
                  <h4>Today Complaints</h4>
               </div>
            </div>
            <div class="funfact-block-one">
               <div class="inner-box">
                  <div class="icon-box"><i class="icon-16"></i></div>
                  <div class="count-outer count-box">
                     <span class="count-text" data-speed="1500" data-stop="80">0</span><span>+</span>
                  </div>
                  <h4>Resolved Complaints</h4>
               </div>
            </div>
            <div class="funfact-block-one">
               <div class="inner-box">
                  <div class="icon-box"><i class="icon-17"></i></div>
                  <div class="count-outer count-box">
                     <span class="count-text" data-speed="1500" data-stop="20">0</span><span>5k</span>
                  </div>
                  <h4>Waste Picked & Dispose</h4>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- materials-section end -->
   <!-- faq-section -->
   <section class="faq-section pt_140" style="padding-bottom: 107px;">
      <div class="auto-container">
         <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
               <div class="content-box mr_30">
                  <div class="sec-title mb_50">
                     <h2>We Clean Lahore</h2>
                     <h2>&nbsp&nbsp&nbsp&nbsp&nbsp Like Never Before</h2>
                  </div>
                  <ul class="accordion-box">
                     <li class="accordion block active-block">
                        <div class="acc-btn active">
                           <div class="icon-box"><i class="icon-33"></i></div>
                           <h4>Our Vision</h4>
                        </div>
                        <div class="acc-content current">
                           <div class="text">
                              <p>Suthra Punjab envisions a Zero-Waste Punjab through the implementation of world-class waste collection, recycling, and disposal systems. The initiative fosters job creation, attracts foreign investment, and ensures a cleaner, healthier environment through unified and accountable governance.</p>
                           </div>
                        </div>
                     </li>
                     <li class="accordion block">
                        <div class="acc-btn">
                           <div class="icon-box"><i class="icon-33"></i></div>
                           <h4>Our Mission</h4>
                        </div>
                        <div class="acc-content">
                           <div class="text">
                              <p>Suthra Punjab is one of the world’s largest integrated waste management systems and a flagship Clean Punjab Program serving over 138 million residents across all 36 districts of Punjab, Pakistan. Recognized globally by Forbes, BBC, Bloomberg, Nikkie Asia & China Daily, the Suthra Punjab Authority transforms municipal solid waste into clean energy, green jobs, and climate resilience through a scalable circular economy model.</p>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
               <div class="image_block_four">
                  <div class="image-box ml_30">
                     <div class="image-shape" style="background-image: url(/images/shape/shape-22.png);"></div>
                     <iframe width="580" height="450"
                        src="https://www.youtube.com/embed/tNW84qqMHyU">
                     </iframe>
                     <figure class="image image-2" style="box-shadow: 0px 20px 100px rgb(103 253 10 / 61%"><img src="/images/logo1.png" alt=""></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- faq-section end -->
    <section class="cta-style-three p_relative pt_150 pb_150">
            <div class="bg-layer parallax-bg" data-parallax="{&quot;y&quot;: 100}" style="transform:translate3d(0px, 100px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, 100px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); background-image: url(/images/background/bin.jpeg);"></div>
            <div class="auto-container">
                <div class="inner-box">
                    <h2>Request a <span>bin</span> &amp; or <span> report</span> a sanitation issue with one click.</h2>
                    <div class="btn-box">
                        <a href="Contact-Us" class="theme-btn btn-one"><span>Contact Us</span></a>
                        <a href="contact.html" class="theme-btn btn-two"><span>Request a Bin</span></a>
                    </div>
                </div>
            </div>
        </section>
   <!-- news-section -->
   <section class="testimonial-section centred sec-pad">
      <div class="auto-container">
         <div class="sec-title mb_50">
            <h2>News <span style="color:#3a9e1e;"> Alerts</span></h2>
         </div>
         <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            <div class="testimonial-block-one">
               <div class="inner-box">
                  <div class="text-box">
                     <p>وزیراعلیٰ پنجاب مریم نواز شریف کے ویژن ستھرا پنجاب پر عملدر آمد جاری،ایل ڈبلیو ایم سی کے محنتی ورکرز شہر لاہور کو صاف اور شفاف رکھنے کیلئے فیلڈ میں متحرک</p>
                     <figure class="thumb-box"><img src="/images/resource/testimonial-1.png" alt=""></figure>
                  </div>
                  <div class="author-box">
                     <h3>CEO Visited Ravi Town</h3>
                     <span class="designation">Posted by Admin 01-JAN-2024</span>
                  </div>
               </div>
            </div>
            <div class="testimonial-block-one">
               <div class="inner-box">
                  <div class="text-box">
                     <p>وزیراعلیٰ پنجاب مریم نواز شریف کے ویژن ستھرا پنجاب پر عملدر آمد جاری،ایل ڈبلیو ایم سی کے محنتی ورکرز شہر لاہور کو صاف اور شفاف رکھنے کیلئے فیلڈ میں متحرک</p>
                     <figure class="thumb-box"><img src="/images/resource/testimonial-1.png" alt=""></figure>
                  </div>
                  <div class="author-box">
                     <h3>CEO Visited Ravi Town</h3>
                     <span class="designation">Posted by Admin 01-JAN-2024</span>
                  </div>
               </div>
            </div>
            <div class="testimonial-block-one">
               <div class="inner-box">
                  <div class="text-box">
                     <p>وزیراعلیٰ پنجاب مریم نواز شریف کے ویژن ستھرا پنجاب پر عملدر آمد جاری،ایل ڈبلیو ایم سی کے محنتی ورکرز شہر لاہور کو صاف اور شفاف رکھنے کیلئے فیلڈ میں متحرک</p>
                     <figure class="thumb-box"><img src="/images/resource/testimonial-1.png" alt=""></figure>
                  </div>
                  <div class="author-box">
                     <h3>CEO Visited Ravi Town</h3>
                     <span class="designation">Posted by Admin 01-JAN-2024</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- news-section -->
   <!-- clients-section -->
   <section class="subscribe-section">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(/images/shape/shape-12.png);"></div>
                <div class="pattern-2" style="background-image: url(/images/shape/shape-2.png);"></div>
                <div class="pattern-3" style="background-image: url(/images/shape/shape-2.png);"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 content-column">
                        <div class="content-box">
                            <h2>Subscribe to our <br>newsletter</h2>
                            <div class="form-inner">
                                <form method="post" action="contact.html">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Your email" required="">
                                        <button type="submit">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   <!-- clients-sectione end -->
</body>
@endsection