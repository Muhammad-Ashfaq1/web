@extends('common.master')
@section('content')
<body style="zoom: 90%;">
   <div class="boxed_wrapper ltr">
      @include('common.header')

      <!-- Banner Section -->
      <section class="materials-section alternat-2">
         <div class="inner-container">
            <div class="auto-container">
               <div class="shape">
                  <div class="shape-1" style="background-image: url({{asset('images/shape/shape-9.png')}});"></div>
               </div>
               <div class="row clearfix centred">
                  <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                     <div class="sec-title light pr_90">
                         <h2 class="mb-3">{{ $typeLabel }}</h2>
                         <p style="color: white; font-size: 16px;">
                             Access and download procurement documents and attachments
                         </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Banner Section end -->

      <!-- Navigation Tabs -->
      <section class="pt-4 pb-2" style="background-color: #f8f9fa;">
         <div class="auto-container">
            <div class="row">
               <div class="col-12">
                  <div class="nav nav-pills nav-justified" style="background: white; border-radius: 10px; padding: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                     @foreach($allTypes as $type)
                        <a class="nav-link {{ $typeValue === $type->value ? 'active' : '' }}"
                           href="{{ route('procurements.nav', ['type' => $type->value]) }}"
                           style="margin: 5px; border-radius: 8px; {{ $typeValue === $type->value ? 'background-color: #3a9e1e; color: white;' : 'color: #333; background-color: #f8f9fa;' }}">
                           {{ $type->label() }}
                        </a>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- Content Section -->
      <section class="faq-section sec-pad">
         <div class="auto-container">
            <div class="row clearfix">
               <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                  <div class="content-box">
                     <ul class="accordion-box">
                        <li class="accordion block">
                           <div class="acc-btn active">
                              <div class="icon-box"><i class="fas fa-file-alt"></i></div>
                              <h4>{{ $typeLabel }} Documents</h4>
                           </div>

                           @if($attachments->isEmpty())
                              <div class="acc-content current">
                                 <div class="alert alert-info" style="background-color: #e3f2fd; border: 1px solid #2196f3; color: #1976d2; padding: 20px; border-radius: 8px; text-align: center;">
                                    <i class="fas fa-info-circle" style="font-size: 24px; margin-bottom: 10px;"></i>
                                    <h5>No Documents Available</h5>
                                    <p class="mb-0">Currently, there are no procurement attachments available for {{ $typeLabel }}. Please check back later or contact us for more information.</p>
                                 </div>
                              </div>
                           @else
                              <div class="acc-content current">
                                 <div class="text">
                                    <!-- Dynamic Table based on Procurement Type -->
                                    @if($typeValue === 'bidding-document')
                                       @include('common.procurement-tables.bidding-documents', ['attachments' => $attachments])
                                    @elseif($typeValue === 'past-procurement')
                                       @include('common.procurement-tables.past-procurement', ['attachments' => $attachments])
                                    @elseif($typeValue === 'current-procurement')
                                       @include('common.procurement-tables.current-procurement', ['attachments' => $attachments])
                                    @elseif($typeValue === 'eid-ul-azha-2019')
                                       @include('common.procurement-tables.eid-ul-azha', ['attachments' => $attachments])
                                    @elseif($typeValue === 'evaluation-report')
                                       @include('common.procurement-tables.evaluation-report', ['attachments' => $attachments])
                                    @elseif($typeValue === 'blacklisted-firms')
                                       @include('common.procurement-tables.blacklisted-firms', ['attachments' => $attachments])
                                    @else
                                       @include('common.procurement-tables.default', ['attachments' => $attachments])
                                    @endif
                                 </div>
                              </div>
                           @endif
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Content Section end -->
   </div>
</body>

<style>
.nav-link {
   transition: all 0.3s ease;
   font-weight: 500;
   text-decoration: none;
}

.nav-link:hover {
   background-color: #2c5530 !important;
   color: white !important;
   transform: translateY(-2px);
}

.table {
   background: white;
   border-radius: 10px;
   overflow: hidden;
   box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.table th {
   background-color: #3a9e1e;
   color: white;
   font-weight: 600;
   border: none;
   padding: 15px;
}

.table td {
   padding: 12px 15px;
   vertical-align: middle;
   border-color: #e9ecef;
}

.table tbody tr:hover {
   background-color: #f8f9fa;
}

.btn {
   border-radius: 6px;
   font-weight: 500;
   transition: all 0.3s ease;
}

.btn-primary {
   background-color: #3a9e1e;
   border-color: #3a9e1e;
}

.btn-primary:hover {
   background-color: #2c5530;
   border-color: #2c5530;
   transform: translateY(-1px);
}

.btn-info {
   background-color: #17a2b8;
   border-color: #17a2b8;
}

.btn-warning {
   background-color: #ffc107;
   border-color: #ffc107;
   color: #212529;
}

.badge {
   font-size: 0.75em;
   padding: 0.5em 0.75em;
}

.responsive-table {
   overflow-x: auto;
}

@media (max-width: 768px) {
   .nav-pills {
      flex-direction: column !important;
   }

   .nav-link {
      margin: 2px 0 !important;
   }

   .table {
      font-size: 0.9em;
   }

   .table th,
   .table td {
      padding: 8px;
   }
}
</style>
@endsection
