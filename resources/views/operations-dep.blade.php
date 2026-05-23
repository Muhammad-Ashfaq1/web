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
                        <h2>Operations Department</span></h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- materials-section end -->
      <section class="faq-form-section centred">
         <div class="pattern-layer"></div>
         <div class="auto-container">
            <div class="inner-container">
               <div class="form-inner">
                  <form action="" method="post" class="default-form">
                     <div class="row clearfix">
                        <table class="table" style="border: 1px #3a9e1e">
                           <thead style="background-color: #69b23f;">
                              <tr>
                                 <th style="color: white">#</th>
                                 <th style="color: white">Name of Employee</th>
                                 <th style="color: white">Designation</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">1</th>
                                 <td style="text-align: left;"></td>
                                 <td></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td style="text-align: left;"></td>
                                <td></td>
                             </tr>
                             <tr>
                                <th scope="row">1</th>
                                <td style="text-align: left;"></td>
                                <td></td>
                             </tr>
                             <tr>
                                <th scope="row">1</th>
                                <td style="text-align: left;"></td>
                                <td></td>
                             </tr>
                           </tbody>
                        </table>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
   </div>
</body>
@endsection
