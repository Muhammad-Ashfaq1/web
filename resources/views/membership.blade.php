@extends('common.master')
@section('content')
<body style="zoom: 90%;">
   <div class="boxed_wrapper ltr">
      @include('common.header')
      <!-- materials-section -->
      <section class="materials-section alternat-2">
         <div class="inner-container">
            <div class="auto-container">
               <div class="shape">
                  <div class="shape-1" style="background-image: url({{asset('images/shape/shape-9.png')}});"></div>
               </div>
               <div class="row clearfix centred">
                  <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                     <div class="sec-title light pr_90">
                        <h2>LWMC Membership</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- materials-section end -->
      <!-- feature-style-two -->
      <section class="faq-section sec-pad">
         <div class="auto-container">
            <div class="sec-title mb_50 centred">
               <h2>Members of World International Organizations</h2>
            </div>
            @if(!empty($memberships) && $memberships->count() > 0)
            @foreach($memberships as $membership)
                <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <ul class="accordion-box">
                            <li class="accordion block">
                            <div class="acc-btn active">
                                <div class="icon-box"><i class=""></i></div>
                                <h4>{{ $membership->title }}</h4>
                            </div>
                            <div class="acc-content current">
                                <div class="text">
                                    <p style="text-align: justify">
                                        {!! $membership->text !!}
                                    <p>
                                </div>
                            </div>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
            @endforeach
            @endif
         </div>
      </section>
      <!-- faq-section end -->
   </div>
</body>
@endsection
