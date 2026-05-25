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
                        <h2>Right to Information</h2>
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
                              <h4>Right to Information (RTI)</h4>
                           </div>
                           <div class="acc-content current">
                              <div class="text">
                                 <table cellspacing="0" width="100%" class="display table table-striped table-bordered  table-responsive table-hover table-condensed cf" cellpadding="2">
                                    @if(!empty($right_to_informations) && $right_to_informations->isNotEmpty())
                                       @foreach($right_to_informations as $right_to_information)
                                          <tbody>
                                             <tr>
                                                <td colspan="2">Lahore Waste Management Company has nominated its departmental Public Information
                                                   Officer (PIO) with following details:
                                                </td>
                                             </tr>
                                             <tr>
                                                <td colspan="2"></td>
                                             </tr>
                                             <tr>
                                                <td><b>Name</b></td>
                                                <td>{{ $right_to_information->name }}</td>
                                             </tr>
                                             <tr>
                                                <td><b>Designation</b></td>
                                                <td>{{ $right_to_information->designation->name ?? 'N/A' }}</td>
                                             </tr>
                                             <tr>
                                                <td><b>Email</b></td>
                                                <td>{{ $right_to_information->email }}</td>
                                             </tr>
                                             <tr>
                                                <td><b>Phone#</b></td>
                                                <td>{{ $right_to_information->phone }}</td>
                                             </tr>
                                             <tr>
                                                <td><b>Office/Postal Address</b></td>
                                                <td>{{ $right_to_information->address }}</td>
                                             </tr>
                                             <tr>
                                                <td colspan="2"></td>
                                             </tr>
                                             <tr>
                                                <td colspan="2">Any person/organization interested in soliciting information under
                                                   The Punjab Transparency &amp; Right to Information Act, 2013 may contact
                                                   the LWMC-PIO in writing.
                                                </td>
                                             </tr>
                                          </tbody>
                                       @endforeach
                                    @else
                                       <tbody>
                                          <tr>
                                             <td colspan="2">Lahore Waste Management Company has nominated its departmental Public Information
                                                Officer (PIO) with following details:
                                             </td>
                                          </tr>
                                          <tr>
                                             <td colspan="2"></td>
                                          </tr>
                                          <tr>
                                             <td><b>Name</b></td>
                                             <td>Mr. Umar Chaudhary</td>
                                          </tr>
                                          <tr>
                                             <td><b>Designation</b></td>
                                             <td>Sr.Manager Communication</td>
                                          </tr>
                                          <tr>
                                             <td><b>Email</b></td>
                                             <td>umar.farooq@lwmc.com.pk</td>
                                          </tr>
                                          <tr>
                                             <td><b>Phone#</b></td>
                                             <td> +92 42 99205153-55</td>
                                          </tr>
                                          <tr>
                                             <td><b>Office/Postal Address</b></td>
                                             <td>4th floor Shaheen Complex Egerton Road Lahore, PAKISTAN.</td>
                                          </tr>
                                          <tr>
                                             <td colspan="2"></td>
                                          </tr>
                                          <tr>
                                             <td colspan="2">Any person/organization interested in soliciting information under
                                                The Punjab Transparency &amp; Right to Information Act, 2013 may contact
                                                the LWMC-PIO in writing.
                                             </td>
                                          </tr>
                                       </tbody>
                                    @endif
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
