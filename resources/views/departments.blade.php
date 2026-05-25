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
                        <h2>Our Departments</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- materials-section end -->

      <!-- departments-list section -->
      <section class="faq-form-section centred">
         <div class="pattern-layer"></div>
         <div class="auto-container">
            <div class="inner-container">
               <div class="form-inner">
                  <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="department-list">
                            <div class="row">
                                @if(count($departments) > 0)
                                    @foreach($departments as $department)
                                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                            <div class="department-card">
                                                <div class="department-title">
                                                    <h3>{{ $department->name }}</h3>
                                                </div>
                                                <div class="department-type">
                                                    {{ $department->isHeadOffice() ? 'Head Office' : 'Branch Office' }}
                                                </div>
                                                <div class="department-action">
                                                    <a href="{{ route('department.employees', ['id' => $department->id]) }}" class="theme-btn btn-one">
                                                        <span>View Team</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-12 text-center">
                                        <p>No departments found.</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- departments-list section end -->
   </div>
</body>
<style>
    .department-card {
        border: 1px solid #eaeaea;
        border-radius: 8px;
        overflow: hidden;
        background-color: #fff;
        box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        height: 100%;
        display: flex;
        flex-direction: column;
        transition: all 0.3s ease;
    }

    .department-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        border-color: #d1e7c7;
    }

    .department-title {
        background-color: #3a9e1e;
        color: white;
        padding: 15px 20px;
        text-align: center;
    }

    .department-title h3 {
        margin: 0;
        font-size: 22px;
        font-weight: 600;
        line-height: 1.3;
    }

    .department-type {
        padding: 15px;
        text-align: center;
        font-size: 16px;
        color: #555;
        background-color: #f9f9f9;
        border-bottom: 1px solid #eaeaea;
    }

    .department-action {
        padding: 25px;
        text-align: center;
        flex-grow: 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .department-action .theme-btn {
        display: inline-block;
        width: 100%;
        padding: 12px 25px;
        border-radius: 5px;
        font-size: 15px;
        transition: all 0.3s ease;
    }

    .department-action .theme-btn:hover {
        transform: scale(1.05);
    }

    @media (max-width: 767px) {
        .department-title h3 {
            font-size: 18px;
        }
    }
</style>
@endsection
