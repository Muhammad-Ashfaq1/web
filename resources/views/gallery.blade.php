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
                        <h2>Media Gallery</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- materials-section end -->

      <!-- gallery-section -->
      <section class="gallery-section centred">
         <div class="auto-container">
            <div class="sortable-masonry">
               <div class="items-container row clearfix">
                  @forelse($images as $image)
                  <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all waste mb-4">
                     <div class="gallery-block-one">
                        <div class="inner-box">
                           <figure class="image-box">
                              <div class="image-wrapper" style="height: 300px; overflow: hidden;">
                                 <img src="{{ $image->image_url }}" alt="{{ $image->title }}"
                                      style="width: 100%; height: 100%; object-fit: cover;">
                              </div>
                           </figure>
                           <div class="view-btn">
                              <a href="{{ $image->image_url }}" class="lightbox-image" data-fancybox="gallery">
                                 <i class="icon-26"></i>
                              </a>
                           </div>
                           @if($image->title)
                           <div class="lower-content">
                              <h4>{{ $image->title }}</h4>
                           </div>
                           @endif
                        </div>
                     </div>
                  </div>
                  @empty
                  <div class="col-12">
                     <div class="no-images text-center py-5">
                        <h4>No images available in the gallery.</h4>
                     </div>
                  </div>
                  @endforelse
               </div>
            </div>
         </div>
      </section>
      <!-- gallery-section end -->
   </div>
</body>

<style>
.gallery-block-one {
    position: relative;
    margin-bottom: 30px;
}
.gallery-block-one .inner-box {
    position: relative;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
.image-wrapper {
    position: relative;
    background: #f5f5f5;
}
.gallery-block-one .lower-content {
    position: relative;
    padding: 15px;
    text-align: center;
    background: #fff;
}
.gallery-block-one .lower-content h4 {
    font-size: 18px;
    margin: 0;
    color: var(--theme-color);
}
.view-btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    transition: all 0.3s ease;
}
.gallery-block-one:hover .view-btn {
    opacity: 1;
}
.view-btn a {
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    background: var(--theme-color);
    color: #fff;
    border-radius: 50%;
    display: block;
}
.view-btn a:hover {
    background: var(--theme-color-two);
}
</style>

@push('scripts')
<script>
   $(document).ready(function() {
      // Initialize Fancybox for image lightbox
      $("[data-fancybox]").fancybox({
         buttons: [
            "zoom",
            "slideShow",
            "fullScreen",
            "close"
         ],
         loop: true,
         protect: true
      });
   });
</script>
@endpush
@endsection
