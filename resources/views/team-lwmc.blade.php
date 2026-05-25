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
                        <h2>Team <span style="color:white;"> LWMC</span></h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- materials-section end -->
      <!-- faq-section -->
      <section class="team-section team-page alternat-2 pt_150 pb_100 centred">
         <div class="auto-container">
            <div class="row clearfix">
               @if(isset($teamMembers) && $teamMembers->isNotEmpty())
                  @foreach ($teamMembers as $teamMember)
                     <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one mb_75 wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                           <div class="inner-box">
                              <figure class="image-box"><a href="#"><img src="{{ $teamMember->image_url ?? 'https://ui-avatars.com/api/?name='.urlencode($teamMember->name).'&background=3a9e1e&color=fff&size=270' }}" alt="{{ $teamMember->name }}"></a></figure>
                              <div class="lower-content">
                                 <h3><a href="#">{{ $teamMember->name }}</a></h3>
                                 <span class="designation">{{ $teamMember->designation->name ?? 'Team Member' }}</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  @endforeach
               @else
                  @foreach([
                     ['image' => '/images/team/team-11.jpg', 'name' => 'Guy Hawkins', 'designation' => 'Manager'],
                     ['image' => '/images/team/team-12.jpg', 'name' => 'Kristin Watson', 'designation' => 'Co-Founder'],
                     ['image' => '/images/team/team-13.jpg', 'name' => 'Floyd Miles', 'designation' => 'Accountant'],
                     ['image' => '/images/team/team-8.jpg', 'name' => 'Esther Howard', 'designation' => 'Manager'],
                     ['image' => '/images/team/team-9.jpg', 'name' => 'Jacob Jones', 'designation' => 'Co-Founder'],
                     ['image' => '/images/team/team-10.jpg', 'name' => 'Ralph Edwards', 'designation' => 'Accountant'],
                     ['image' => '/images/team/team-10.jpg', 'name' => 'Ralph Edwards', 'designation' => 'Accountant'],
                     ['image' => '/images/team/team-10.jpg', 'name' => 'Ralph Edwards', 'designation' => 'Accountant'],
                  ] as $member)
                     <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one mb_75 wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                           <div class="inner-box">
                              <figure class="image-box"><a href="team-details.html"><img src="{{ $member['image'] }}" alt=""></a></figure>
                              <div class="lower-content">
                                 <h3><a href="team-details.html">{{ $member['name'] }}</a></h3>
                                 <span class="designation">{{ $member['designation'] }}</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  @endforeach
               @endif
            </div>
         </div>
      </section>
      <!-- faq-section end -->

   </div>
</body>
@endsection
