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
                        <h2>Become a Part of LWMC</h2>
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
                  @if(session('success'))
                     <div class="alert alert-success">{{ session('success') }}</div>
                  @endif
                  <form action="{{ route('volunteer.store') }}" method="post" class="default-form" enctype="multipart/form-data">
                     @csrf
                     <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                           <input type="text" name="name" value="{{ old('name') }}" placeholder="Your name" required>
                           @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                           <input type="email" name="email" value="{{ old('email') }}" placeholder="Your email" required>
                           @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                           <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone" required>
                           @error('phone')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                           <input type="text" name="education" value="{{ old('education') }}" placeholder="Education" required>
                           @error('education')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                           <input type="text" name="address" value="{{ old('address') }}" placeholder="Address" required>
                           @error('address')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                           <textarea name="experience" placeholder="Comments">{{ old('experience') }}</textarea>
                           @error('experience')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                           <input type="file" name="resume" class="form-control" accept=".pdf,.doc,.docx">
                           @error('resume')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                           <input type="file" name="photo" class="form-control" accept="image/*">
                           @error('photo')<div class="text-danger">{{ $message }}</div>@enderror
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
