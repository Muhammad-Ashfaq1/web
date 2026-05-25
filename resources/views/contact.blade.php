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
                        <h2>{{ $pageContent['title'] ?? 'Contact Us' }}</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- materials-section end -->
      <section class="contact-section pt_150 pb_150">
         <div class="auto-container">
            <div class="row clearfix">
               <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                  <div class="content-box mr_70">
                     <div class="sec-title mb_45">
                        <span class="sub-title">{{ $pageContent['subtitle'] ?? 'Find Our Office' }}</span>
                        <h2>{{ $pageContent['form_title'] ?? 'Contact with the team' }}</h2>
                     </div>
                     <ul class="info-list clearfix">
                        <li>
                           <div class="icon"><i class="icon-43"></i></div>
                           <h4>Location</h4>
                           <p>4th, Floor Shaheen Complex Egerton Road, Lahore</p>
                        </li>
                        <li>
                           <div class="icon"><i class="icon-4"></i></div>
                           <h4>Phone no</h4>
                           <p><a href="tel:0924299205153">+92 42 99205153-55</a></p>
                        </li>
                        <li>
                           <div class="icon"><i class="icon-2"></i></div>
                           <h4>Email</h4>
                           <p><a href="mailto:info@lwmc.com.pk">info@lwmc.com.pk</a></p>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                  <div class="form-inner">
                     @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                     @endif
                     @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                     @endif
                     <form method="POST" action="{{ route('contact.store') }}" id="contact-form" class="default-form">
                        @csrf
                        <input type="hidden" name="type" value="{{ $type ?? 'query' }}">
                        <div class="row clearfix">
                           <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                              <input type="text" name="name" value="{{ old('name') }}" placeholder="Your Name" required="">
                              @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                              <input type="email" name="email" value="{{ old('email') }}" placeholder="Your email" required="">
                              @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                              <input type="text" name="phone" value="{{ old('phone') }}" required="" placeholder="Phone">
                              @error('phone')<div class="text-danger">{{ $message }}</div>@enderror
                           </div>
                           @if(($type ?? 'query') === 'complaint')
                              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                 <select name="complaint_category_id" required="">
                                    <option value="">Complaint Category</option>
                                    @foreach($complaintCategories as $complaintCategory)
                                       <option value="{{ $complaintCategory->id }}" {{ old('complaint_category_id') == $complaintCategory->id ? 'selected' : '' }}>{{ $complaintCategory->name }}</option>
                                    @endforeach
                                 </select>
                                 @error('complaint_category_id')<div class="text-danger">{{ $message }}</div>@enderror
                              </div>
                           @endif
                           <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                              <input type="text" name="subject" value="{{ old('subject') }}" required="" placeholder="{{ ($type ?? 'query') === 'bin_request' ? 'Location / Area' : 'Subject' }}">
                              @error('subject')<div class="text-danger">{{ $message }}</div>@enderror
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                              <textarea name="message" placeholder="{{ ($type ?? 'query') === 'bin_request' ? 'Location details' : 'message' }}">{{ old('message') }}</textarea>
                              @error('message')<div class="text-danger">{{ $message }}</div>@enderror
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                              <button class="theme-btn btn-one shadow" type="submit" name="submit-form"><span>{{ $pageContent['submit_text'] ?? 'Send Message' }}</span></button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</body>
@endsection
