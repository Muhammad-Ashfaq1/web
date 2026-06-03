@extends('common.master')
@section('content')
<body style="zoom: 90%;">
   <div class="boxed_wrapper ltr">
      <!-- materials-section -->
      @include('common.header')
      <section class="materials-section alternat-2">
         <div class="inner-container">
            <div class="auto-container">
               <div class="shape">
                  <div class="shape-1" style="background-image: url(/images/shape/shape-9.png);"></div>
               </div>
               <div class="row clearfix centred">
                  <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                     <div class="sec-title light pr_90">
                        <h2>LWMC Careers</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- materials-section end -->
      <!-- faq-section -->
      <!-- about-section end -->
      <!-- feature-style-two -->
      <section class="faq-section sec-pad">
         <div class="auto-container">
            <div class="row clearfix">
               <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                  <div class="content-box">
                     <ul class="accordion-box">
                        <li class="accordion block">
                           <div class="acc-btn active">
                              <div class="icon-box"><i class=""></i></div>
                              <h4>LWMC Careers</h4>
                           </div>
                           <div class="acc-content current">
                              <div class="text">
                                 <table cellspacing="0" width="100%" class="display table table-striped table-bordered  table-responsive table-hover table-condensed cf" cellpadding="2">
                                    <tbody>
                                       <tr>
                                          <td colspan="4"></td>
                                       </tr>
                                       @forelse($careers as $key => $career)
                                          <tr>
                                             <td>{{ $key + 1 }}</td>
                                             <td>
                                                <b>{{ $career->title }}</b>
                                                @if($career->created_at && $career->created_at->diffInDays(now()) < 7)
                                                   <span style="color:red; font-size: x-small; font-weight: bold;"> NEW</span>
                                                @endif
                                             </td>
                                             <td>
                                                @if($career->attachment_url)
                                                   <a href="{{ $career->attachment_url }}" target="_blank">Advertisement Download</a>
                                                @else
                                                   Advertisement Download
                                                @endif
                                             </td>
                                             <td>
                                                @if($career->apply_link)
                                                   <a href="{{ $career->apply_link }}" target="_blank">Apply Through Online Job Portal</a>
                                                @else
                                                   Apply Through Online Job Portal
                                                @endif
                                             </td>
                                          </tr>
                                          <tr>
                                             <td colspan="4"></td>
                                          </tr>
                                       @empty
                                          <tr>
                                             <td>1</td>
                                             <td><b>Assistant Manager Finance</b><span style="color:red; font-size: x-small; font-weight: bold;"> NEW</span></td>
                                             <td>Advertisement Download</td>
                                             <td>Apply Through Online Job Portal</td>
                                          </tr>
                                          <tr>
                                             <td colspan="4"></td>
                                          </tr>
                                       @endforelse
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- faq-section end -->
   </div>
</body>
@endsection
