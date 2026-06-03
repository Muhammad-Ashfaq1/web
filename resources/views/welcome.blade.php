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

   @if($promotions->count() > 0)
      @include('common.promotion-modal', ['promotions' => $promotions])
   @endif

   @include('partials.home-slider')

    <section class="marquee-section">

    <div class="marquee-track">

      <!-- SET 1 -->
      <div class="marquee-item">
        <span style="margin-left: 3rem !important;">Clean Environment</span>

        <img src="{{ asset('images/resource/logo-icon-line.webp') }}" class="abs abs-middle w-40px" alt="">
      </div>

      <div class="marquee-item">
        <span style="margin-left: 3rem !important;">Urban Cleanliness</span>

        <img src="{{ asset('images/resource/logo-icon-line.webp') }}" class="abs abs-middle w-40px" alt="">
      </div>

      <div class="marquee-item">
        <span style="margin-left: 3rem !important;">Waste to Value</span>

        <img src="{{ asset('images/resource/logo-icon-line.webp') }}" class="abs abs-middle w-40px" alt="">
      </div>

      <div class="marquee-item">
        <span style="margin-left: 3rem !important;">Environmental Protection</span>

        <img src="{{ asset('images/resource/logo-icon-line.webp') }}" class="abs abs-middle w-40px" alt="">
      </div>

      <!-- DUPLICATE FOR SMOOTH LOOP -->
      <div class="marquee-item">
        <span style="margin-left: 3rem !important;">Sustainable Cleaning</span>

        <img src="{{ asset('images/resource/logo-icon-line.webp') }}" class="abs abs-middle w-40px" alt="">
      </div>

      <div class="marquee-item">
        <span style="margin-left: 3rem !important;">Zero Waste Mission</span>

        <img src="{{ asset('images/resource/logo-icon-line.webp') }}" class="abs abs-middle w-40px" alt="">
      </div>

      <div class="marquee-item">
        <span style="margin-left: 3rem !important;">Public Hygiene</span>

        <img src="{{ asset('images/resource/logo-icon-line.webp') }}" class="abs abs-middle w-40px" alt="">
      </div>

      <div class="marquee-item">
        <span style="margin-left: 3rem !important;">Eco-Friendly Operations</span>

        <img src="{{ asset('images/resource/logo-icon-line.webp') }}" class="abs abs-middle w-40px" alt="">
      </div>

    </div>

  </section>
   <!-- feature-style-two -->
   <section class="feature-style-two sec-pad centred" style="background-image: url({{ asset('images/shape/shape-1.png') }}); padding: 60px 0px 30px 0px">
      <div class="auto-container">
         <div class="sec-title mb_50" style="margin-bottom: 96px;">
            <h2>A wide range of <span style="color:#3a9e1e;"> Waste Management Services</span></h2>
         </div>
         <div class="row clearfix">
            @php
               $fallbackServices = [
                  ['title' => 'Waste Collection', 'icon' => 'icon-31', 'delay' => '600ms', 'url' => route('waste-collection')],
                  ['title' => 'Mechanical Sweeping', 'icon' => 'fa fa-truck-container', 'delay' => '00ms', 'url' => ''],
                  ['title' => 'Mechanical Washing', 'icon' => 'icon-29', 'delay' => '200ms', 'url' => ''],
                  ['title' => 'Manual Sweeping', 'icon' => 'fa fa-broom', 'delay' => '400ms', 'url' => ''],
                  ['title' => 'Waste to Energy', 'icon' => 'fa fa-industry-alt', 'delay' => '600ms', 'url' => ''],
                  ['title' => 'Sanitary Landfill Site', 'icon' => 'icon-12', 'delay' => '00ms', 'url' => ''],
               ];
               $services = (isset($swm_operations) && $swm_operations->isNotEmpty())
                  ? $swm_operations->map(function ($operation, $index) {
                     $title = strtolower($operation->title);
                     $icon = 'icon-31';

                     if (\Illuminate\Support\Str::contains($title, 'sweeping')) {
                        $icon = 'fa fa-broom';
                     } elseif (\Illuminate\Support\Str::contains($title, 'washing')) {
                        $icon = 'icon-29';
                     } elseif (\Illuminate\Support\Str::contains($title, 'energy')) {
                        $icon = 'fa fa-industry-alt';
                     } elseif (\Illuminate\Support\Str::contains($title, 'landfill')) {
                        $icon = 'icon-12';
                     } elseif (\Illuminate\Support\Str::contains($title, 'truck')) {
                        $icon = 'fa fa-truck-container';
                     }

                     return [
                        'title' => $operation->title,
                        'icon' => $icon,
                        'delay' => (($index % 4) * 200).'ms',
                        'url' => route('services.show', ['operation' => $operation->id]),
                     ];
                  })
                  : collect($fallbackServices);
            @endphp

            @foreach($services as $service)
               <div class="col-lg-2 col-md-6 col-sm-12 feature-block">
                  <div class="feature-block-two wow fadeInUp animated" data-wow-delay="{{ $service['delay'] }}" data-wow-duration="1500ms">
                     <div class="inner-box" style="box-shadow: 0px 10px 40px rgb(41 42 41 / 65%)">
                        <div class="icon-box" style="margin-left: -9px;">
                           <div class="static-shape" style="background-image: url({{ asset('images/shape/shape-18.png') }});"></div>
                           <div class="overlay-shape" style="background-image: url({{ asset('images/shape/shape-19.png') }});"></div>
                           <div class="icon"><i class="{{ $service['icon'] }}"></i></div>
                        </div>
                        <h5><a href="{{ $service['url'] }}" style="color:black;">{{ $service['title'] }}</a></h5>
                     </div>
                  </div>
               </div>
            @endforeach
         </div>
         <div class="more-btn mt_60">
            <a href="{{ route('company-profile') }}" class="theme-btn" style="background: #3a9e1e;"><span style="color: white;">More Services</span></a>
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
                     <div class="image-shape" style="background-image: url({{ asset('images/shape/shape-3.png') }});"></div>
                     <figure class="image image-1" style="box-shadow: 0px 20px 100px rgb(164 165 163 / 61%)"><img src="{{ $ceo_message?->image_url ?? asset('images/team/DG-SPA.jpg') }}" alt="{{ $ceo_message?->ceo_name ?? 'CEO LWMC' }}"></figure>
                     <figure class="image image-2" style="box-shadow: 0px 20px 100px rgb(103 253 10 / 61%"><img src="{{ asset('images/logo1.png') }}" alt=""></figure>
                     <div class="video-box">
                        <a href="{{ $ceo_message?->video_url ?? 'https://youtu.be/NUzgZwF2tXU' }}" class="lightbox-image" data-caption=""><i class="icon-28"></i></a>
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
                        <p style="text-align: justify;">{{ $ceo_message?->ceo_message ?? "Change is the most cherished desire of customers these days. Citizens want governments to change the style of delivering services, and make them more 'customer focused'. If anyone wants to assess the achievements of LWMC for improving waste management services since its inception..." }}</p>
                     </div>
                     <div class="inner-box p_relative">
                        <div class="experience-inner centred" style="box-shadow: 0px 20px 100px rgb(164 165 163 / 61%)">
                           <h2>{{ $ceo_message?->year_of_excellence ?? '16' }}</h2>
                           <h4>Years of excellence</h4>
                        </div>
                        <ul class="list-style-one mb_35 clearfix">
                           <li>Waste Collection</li>
                           <li>Waste Dispose-off</li>
                           <li>Waste to Value</li>
                        </ul>
                        <div class="btn-box">
                           <a href="{{ $ceo_message?->video_url ?? '' }}" class="theme-btn btn-one lightbox-image"><span>{{ $ceo_message?->ceo_name ?? 'Mr. Babar Sahib Din' }}, CEO LWMC Message</span></a>
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
                     <span class="count-text" data-speed="1500" data-stop="{{ $statistics['today_complaints'] ?? 20 }}">0</span>@if(($statistics['today_complaints'] ?? 20) >= 1000)<span>k</span>@endif
                  </div>
                  <h4>Today Complaints</h4>
               </div>
            </div>
            <div class="funfact-block-one">
               <div class="inner-box">
                  <div class="icon-box"><i class="icon-16"></i></div>
                  <div class="count-outer count-box">
                     <span class="count-text" data-speed="1500" data-stop="{{ $statistics['resolved_complaints'] ?? 80 }}">0</span><span>+</span>
                  </div>
                  <h4>Resolved Complaints</h4>
               </div>
            </div>
            <div class="funfact-block-one">
               <div class="inner-box">
                  <div class="icon-box"><i class="icon-17"></i></div>
                  <div class="count-outer count-box">
                     @php $wasteRawValue = $statistics['total_waste_processed'] ?? 205000; @endphp
                     <span class="count-text" data-speed="1500" data-stop="{{ $wasteRawValue >= 1000 ? floor($wasteRawValue / 1000) : $wasteRawValue }}">0</span>@if($wasteRawValue >= 1000)<span>k</span>@endif
                  </div>
                  <h4>Waste Picked & Dispose</h4>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- materials-section end -->
   <!-- faq-section -->
   @php
      $allowedHomeRichTextTags = '<p><br><strong><b><em><i><u><a><ul><ol><li><h1><h2><h3><h4><h5><h6>';
      $hasDynamicVisionMission = isset($about_sections) && $about_sections->isNotEmpty();
   @endphp
   <section class="faq-section pt_140" style="padding-bottom: 107px;">
      <div class="auto-container">
         <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
               <div class="content-box mr_30">
                  <div class="sec-title mb_50">
                     <h2>{{ $hasDynamicVisionMission && $about_sections->count() === 1 ? $about_section?->title : 'We Clean Lahore' }}</h2>
                     <h2>&nbsp&nbsp&nbsp&nbsp&nbsp {{ $hasDynamicVisionMission && $about_sections->count() === 1 ? ($about_section?->subtitle ?? 'Like Never Before') : 'Like Never Before' }}</h2>
                  </div>
                  <ul class="accordion-box">
                     @if($hasDynamicVisionMission)
                        @foreach($about_sections as $section)
                           <li class="accordion block {{ $loop->first ? 'active-block' : '' }}">
                              <div class="acc-btn {{ $loop->first ? 'active' : '' }}">
                                 <div class="icon-box"><i class="icon-33"></i></div>
                                 <h4>{{ $about_sections->count() === 1 ? 'About Lahore Waste Management Company' : $section->title }}</h4>
                              </div>
                              <div class="acc-content {{ $loop->first ? 'current' : '' }}">
                                 <div class="text">
                                    {!! strip_tags((string) $section->content, $allowedHomeRichTextTags) !!}
                                 </div>
                              </div>
                           </li>
                        @endforeach
                     @else
                     <li class="accordion block active-block">
                        <div class="acc-btn active">
                           <div class="icon-box"><i class="icon-33"></i></div>
                           <h4>{{ $about_section ? 'About Lahore Waste Management Company' : 'Our Vision' }}</h4>
                        </div>
                        <div class="acc-content current">
                           <div class="text">
                              @if($about_section)
                                 {!! strip_tags((string) $about_section->content, $allowedHomeRichTextTags) !!}
                              @else
                                 <p>Suthra Punjab envisions a Zero-Waste Punjab through the implementation of world-class waste collection, recycling, and disposal systems. The initiative fosters job creation, attracts foreign investment, and ensures a cleaner, healthier environment through unified and accountable governance.</p>
                              @endif
                           </div>
                        </div>
                     </li>
                     @unless($about_section)
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
                     @endunless
                     @endif
                  </ul>
               </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
               <div class="image_block_four">
                  <div class="image-box ml_30">
                     <div class="image-shape" style="background-image: url({{ asset('images/shape/shape-22.png') }});"></div>
                     <iframe width="580" height="450"
                        src="{{ $about_section?->embed_video_url ?? 'https://www.youtube.com/embed/tNW84qqMHyU' }}">
                     </iframe>
                     <figure class="image image-2" style="box-shadow: 0px 20px 100px rgb(103 253 10 / 61%"><img src="{{ asset('images/logo1.png') }}" alt=""></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- faq-section end -->
    <section class="cta-style-three p_relative pt_150 pb_150">
            <div class="bg-layer parallax-bg" data-parallax="{&quot;y&quot;: 100}" style="transform:translate3d(0px, 100px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, 100px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); background-image: url({{ asset('images/background/bin.jpeg') }});"></div>
            <div class="auto-container">
                <div class="inner-box">
                    <h2>Request a <span>bin</span> &amp; or <span> report</span> a sanitation issue with one click.</h2>
                    <div class="btn-box">
                        <a href="{{ route('contact.index') }}" class="theme-btn btn-one"><span>Contact Us</span></a>
                        <a href="{{ route('contact.bin-request') }}" class="theme-btn btn-two"><span>Request a Bin</span></a>
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
         @if($news_alerts->isNotEmpty())
            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
               @foreach($news_alerts as $newsAlert)
                  <div class="testimonial-block-one">
                     <div class="inner-box">
                        <div class="text-box">
                           <p class="news-alert-description">{{ $newsAlert->description }}</p>
                           <figure class="thumb-box"><img src="{{ asset('images/resource/testimonial-1.png') }}" alt=""></figure>
                        </div>
                        <div class="author-box">
                           <h3>{{ $newsAlert->title }}</h3>
                           <span class="designation">Posted by Admin {{ $newsAlert->created_at->format('d-M-Y') }}</span>
                        </div>
                     </div>
                  </div>
               @endforeach
            </div>
         @else
            <p class="centred">No news alerts available at the moment.</p>
         @endif
      </div>
   </section>
   <!-- news-section -->
   <!-- clients-section -->
   <section class="subscribe-section">
    <style>
        .news-alert-description {
            max-height: 100px; /* Adjust this value as needed */
            overflow: hidden;
            text-overflow: ellipsis; /* Adds "..." for overflowing text */
            display: -webkit-box;
            -webkit-line-clamp: 4; /* Limits to 4 lines, adjust as needed */
            -webkit-box-orient: vertical;
        }
    </style>
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{ asset('images/shape/shape-12.png') }});"></div>
                <div class="pattern-2" style="background-image: url({{ asset('images/shape/shape-2.png') }});"></div>
                <div class="pattern-3" style="background-image: url({{ asset('images/shape/shape-2.png') }});"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 content-column">
                        <div class="content-box">
                            <h2>Subscribe to our <br>newsletter</h2>
                            <div class="form-inner">
                                <form method="POST" action="{{ route('newsletter.subscribe') }}">
                                    @csrf
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
