@extends('common.master')
@section('content')
<body style="zoom: 90%;">
   <div class="boxed_wrapper ltr">
      @include('common.header')
      <section class="materials-section alternat-2">
        <div class="inner-container">
           <div class="auto-container">
              <div class="shape">
                 <div class="shape-1" style="background-image: url({{asset('images/shape/shape-9.png')}});"></div>
              </div>
              <div class="row clearfix centred">
                 <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                    <div class="sec-title light pr_90">
                       <h2>WMC PMU Summary</h2>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
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
                              <h4>WMC's PMU Summary</h4>
                           </div>
                           <div class="acc-content current">
                              <div class="text">
                                 <table cellspacing="0" width="100%" class="display table table-striped table-bordered  table-responsive table-hover table-condensed cf" cellpadding="2">
                                    <thead>
                                       <tr>
                                          <th width="66">
                                             <strong>S No</strong>
                                          </th>
                                          <th width="300">
                                             <strong>Title</strong>
                                          </th>
                                          <th width="150">
                                             <strong>Date</strong>
                                          </th>
                                          <th width="152">
                                             <strong>Document</strong>
                                          </th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @forelse($summaries as $summary)
                                       <tr>
                                          <td width="66">
                                             <p><strong>{{ $loop->iteration }}</strong></p>
                                          </td>
                                          <td width="300">
                                             <p>{{ $summary->title }}</p>
                                          </td>
                                          <td width="150">
                                             <p>{{ $summary->date ? $summary->date->format('d-m-Y') : 'N/A' }}</p>
                                          </td>
                                          <td width="152">
                                             @if($summary->attachment_url)
                                                <p><a href="{{ $summary->attachment_url }}" target="_blank" class="btn btn-sm btn-primary">
                                                   <i class="fa fa-file-pdf-o"></i> View PDF
                                                </a></p>
                                             @else
                                                <p class="text-muted">No document</p>
                                             @endif
                                          </td>
                                       </tr>
                                       @empty
                                       <tr>
                                          <td colspan="4" class="text-center">
                                             <p>No WMC PMU Summaries available at the moment.</p>
                                          </td>
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
