@extends('common.master')
@section('content')
@php
    $allowedRichTextTags = '<p><br><strong><b><em><i><u><a><ul><ol><li><h1><h2><h3><h4><h5><h6>';
@endphp
<body style="zoom: 90%;">
   <div class="boxed_wrapper ltr">
      @include('common.header')
      <!-- materials-section -->
      <section class="materials-section alternat-2">
         <div class="inner-container">
            <div class="auto-container">
               <div class="shape">
                  <div class="shape-1" style="background-image: url(/images/shape/shape-9.png);"></div>
               </div>
               <div class="row clearfix centred">
                  <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                     <div class="sec-title light pr_90">
                        <h2>{{ $operation->title }}</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- materials-section end -->
      <section class="sidebar-page-container blog-details pt_150 pb_150">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-details-content">
                            <div class="news-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="/images/news/news-15.jpg" alt="{{ $operation->title }}"></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3>{{ $operation->title }}</h3>
                                        <div style="text-align: justify">
                                            @if($operation->description)
                                                {!! strip_tags((string) $operation->description, $allowedRichTextTags) !!}
                                            @else
                                                <p>Details for this service will be updated soon.</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 sidebar-side">
                                            <div class="image-box">
                                                <figure class="image"><img src="/images/news/news-3.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 sidebar-side">
                                            <div class="image-box">
                                                <figure class="image"><img src="/images/news/news-3.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar default-sidebar ml_40">
                            <div class="sidebar-widget category-widget" style="margin-bottom: 49px;">
                                <div class="widget-title">
                                    <h3>Our Services</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        @forelse($operations as $service)
                                            <li>
                                                <a href="{{ route('services.show', ['operation' => $service->id]) }}">
                                                    <span>{{ $service->title }}</span>
                                                </a>
                                            </li>
                                        @empty
                                            <li><a href="{{ route('waste-collection') }}"><span>Waste Collection</span></a></li>
                                            <li><a href=""><span>Mechanical Sweeping</span></a></li>
                                            <li><a href=""><span>Mechanical Washing</span></a></li>
                                            <li><a href=""><span>Manual Sweeping</span></a></li>
                                            <li><a href=""><span>Operations at Special Occasions</span></a></li>
                                            <li><a href=""><span>Facilitation at CHS</span></a></li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="icon-wrapper">
                                <svg
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.8"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2
                                        19.79 19.79 0 0 1-8.63-3.07
                                        19.5 19.5 0 0 1-6-6
                                        A19.79 19.79 0 0 1 2.09 4.18
                                        2 2 0 0 1 4.06 2h3
                                        a2 2 0 0 1 2 1.72
                                        c.12.89.33 1.76.63 2.6
                                        a2 2 0 0 1-.45 2.11L8.09 9.91
                                        a16 16 0 0 0 6 6l1.48-1.15
                                        a2 2 0 0 1 2.11-.45
                                        c.84.3 1.71.51 2.6.63
                                        A2 2 0 0 1 22 16.92z"
                                    />
                                </svg>
                            </div>

                            <h1 class="title">
                                Contact <br> Suthra Punjab Agency <br>for quick assistance.
                            </h1>

                            <div class="divider"></div>

                            <div class="help-text">Need help?</div>

                            <div class="sub-text">Dial Helpline</div>

                            <a href="tel:1139" class="phone">
                                1139
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   </div>
</body>
@endsection
