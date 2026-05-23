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
                  <div class="shape-1" style="background-image: url(/images/shape/shape-9.png);"></div>
               </div>
               <div class="row clearfix centred">
                  <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                     <div class="sec-title light pr_90">
                        <h2>Become a Part of LWMC</span></h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- materials-section end -->
      <section class="faq-form-section sec-pad centred">
         <div class="pattern-layer" style="background-image: url(/images/shape/shape-27.png);"></div>
         <div class="auto-container">
            <div class="inner-container">
               <div class="sec-title mb_50">
                  <h2>Register as a Volunteer</h2>
               </div>
               <div class="form-inner">
                  <form action="" method="post" class="default-form">
                     <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                           <input type="text" name="name" placeholder="Your name" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                           <input type="email" name="email" placeholder="Your email" required>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                           <input type="text" name="phone" placeholder="Phone" required>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                           <input type="text" name="cnic" placeholder="CNIC" required>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                           <input type="text" name="subject" placeholder="Address" required>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                           <textarea name="message" placeholder="Comments"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                           <button type="submit" class="theme-btn btn-one shadow"><span>Register</span></button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
   </div>
</body>
<!-- End of .page_wrapper -->
@endsection
