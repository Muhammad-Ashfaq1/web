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
                        <h2>{{ $department->name }} Department</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- materials-section end -->

      <!-- employees-list section -->
      <section class="faq-form-section">
         <div class="pattern-layer"></div>
         <div class="auto-container">
            <div class="inner-container">
               <div class="form-inner">
                  <div class="row clearfix">
                     <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="department-info mb-4">
                           <div class="department-card">
                              <div class="row align-items-center">
                                 <div class="col-md-9">
                                    <div class="department-details p-4">
                                       <h3 class="mb-3">Department Information</h3>
                                       <p><strong>Name:</strong> {{ $department->name }}</p>
                                       <p><strong>Type:</strong> {{ $department->isHeadOffice() ? 'Head Office' : 'Branch Office' }}</p>
                                    </div>
                                 </div>
                                 <div class="col-md-3 text-center">
                                    <a href="{{ route('departments') }}" class="theme-btn btn-one back-btn">
                                       <i class="fa fa-arrow-left mr-2"></i> Back to Departments
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="employees-table-container">
                           <div class="section-header mb-4">
                              <h3>Team Members</h3>
                              <p>Below is the list of employees working in this department</p>
                           </div>

                           <div class="table-responsive">
                              <table class="table table-striped employees-table">
                                 <thead>
                                    <tr>
                                       <th width="5%">#</th>
                                       <th width="35%">Name of Employee</th>
                                       <th width="35%">Designation</th>
                                       <th width="25%">Joining Date</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @if(count($employees) > 0)
                                       @foreach($employees as $index => $employee)
                                          <tr>
                                             <th scope="row">{{ $index + 1 }}</th>
                                             <td>{{ $employee->name }}</td>
                                             <td>{{ $employee->designation->name ?? 'N/A' }}</td>
                                             <td>{{ $employee->formatted_joining_date ?? 'N/A' }}</td>
                                          </tr>
                                       @endforeach
                                    @else
                                       <tr>
                                          <td colspan="4" class="text-center">No employees found in this department.</td>
                                       </tr>
                                    @endif
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- employees-list section end -->
   </div>
</body>
<style>
   /* Department Info Card Styles */
   .department-card {
      border: 1px solid #eaeaea;
      border-radius: 8px;
      overflow: hidden;
      background-color: #fff;
      box-shadow: 0 3px 10px rgba(0,0,0,0.05);
      margin-bottom: 30px;
   }

   .department-details h3 {
      color: #3a9e1e;
      font-weight: 600;
   }

   .department-details p {
      margin-bottom: 8px;
      font-size: 15px;
      color: #555;
   }

   .department-details strong {
      color: #333;
   }

   .back-btn {
      padding: 10px 20px;
      border-radius: 5px;
      margin-top: 15px;
      display: inline-block;
   }

   /* Employees Table Styles */
   .employees-table-container {
      background-color: #fff;
      border-radius: 8px;
      padding: 25px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.05);
   }

   .section-header h3 {
      color: #3a9e1e;
      font-weight: 600;
      margin-bottom: 5px;
   }

   .section-header p {
      color: #777;
      font-size: 15px;
   }

   .employees-table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
   }

   .employees-table thead tr {
      background-color: #3a9e1e;
      color: white;
   }

   .employees-table th {
      padding: 15px;
      font-weight: 600;
      text-align: left;
      border: none;
   }

   .employees-table td {
      padding: 12px 15px;
      border-top: 1px solid #f2f2f2;
      vertical-align: middle;
   }

   .employees-table tbody tr:hover {
      background-color: #f9f9f9;
   }

   @media (max-width: 767px) {
      .back-btn {
         margin-bottom: 20px;
      }
   }
</style>
@endsection
