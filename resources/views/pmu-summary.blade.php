@extends('common.master')
@section('content')
<body style="zoom: 90%;">
   <div class="boxed_wrapper ltr">
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
                                    <tbody>
                                       <tr>
                                          <td width="66">
                                             <p><strong>S No</strong></p>
                                          </td>
                                          <td width="602">
                                             <p><strong>Summary Report</strong></p>
                                          </td>
                                       </tr>
                                       @if(isset($summaries) && $summaries->isNotEmpty())
                                          @foreach($summaries as $summary)
                                             <tr>
                                                <td width="66">
                                                   <p><strong>{{ $loop->iteration }}</strong></p>
                                                </td>
                                                <td width="602">
                                                   <p>
                                                      @if($summary->attachment_url)
                                                         <a href="{{ $summary->attachment_url }}" target="_blank">{{ $summary->date?->format('d-m-Y') ?? $summary->title }}</a>
                                                      @else
                                                         {{ $summary->date?->format('d-m-Y') ?? $summary->title }}
                                                      @endif
                                                   </p>
                                                </td>
                                             </tr>
                                          @endforeach
                                       @else
                                          <tr>
                                             <td width="66">
                                                <p><strong>1</strong></p>
                                             </td>
                                             <td width="602">
                                                <p><a href="pmu-summary/Daily WMCs PMU Summary Report, 13th June 2020.pdf" target="_blank">13-06-2020</a></p>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td width="66">
                                                <p><strong>2</strong></p>
                                             </td>
                                             <td width="602">
                                                <p><a href="pmu-summary/Daily WMCs PMU Summary Report, 18th June 2020.pdf" target="_blank">18-06-2020</a></p>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td width="66">
                                                <p><strong>3</strong></p>
                                             </td>
                                             <td width="602">
                                                <p><a href="pmu-summary/Daily WMCs PMU Summary Report, 20th June 2020.pdf" target="_blank">20-06-2020</a></p>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td width="66">
                                                <p><strong>4</strong></p>
                                             </td>
                                             <td width="602">
                                                <p><a href="pmu-summary/Daily WMCs PMU Summary Report, 22th June 2020.pdf" target="_blank">22-06-2020</a></p>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td width="66">
                                                <p><strong>5</strong></p>
                                             </td>
                                             <td width="602">
                                                <p><a href="pmu-summary/Daily WMCs PMU Summary Report, 23th June 2020.pdf" target="_blank">23-06-2020</a></p>
                                             </td>
                                          </tr>
                                       @endif
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
