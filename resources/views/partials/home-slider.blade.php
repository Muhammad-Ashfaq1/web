<!-- banner-style-two -->
<section class="banner-style-two p_relative centred">
   <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
     @if ($sliders->count() > 0)
         @foreach ($sliders as $slider)
             <div class="slide-item p_relative">
                 <div class="bg-layer" style="background-image:url({{$slider->image_url}})"></div>
                 <div class="shape">
             <div class="shape-1" style="background-image: url({{asset('images/shape/shape-14.png')}});"></div>
             <div class="shape-2" style="background-image: url({{asset('images/shape/shape-14.png')}});"></div>
             </div>
             <div class="auto-container">
                 <div class="content-box p_relative d_block z_5">
                     <span class="title-text p_relative d_block">{{ $slider->prefix ?? '' }}</span>
                     <h2 class="p_relative d_block">{{ $slider->title ?? '' }}</h2>
                     <p class="p_relative d_block">{{ $slider->description ?? '' }}</p>
                     <div class="btn-box">
                         <a href="#" class="theme-btn btn-one"><span>Read More</span></a>
                     </div>
                 </div>
             </div>
         </div>
         @endforeach
     @else
         <div class="slide-item p_relative">
            <div class="bg-layer" style="background-image:url(/images/banner/Banner-01.png)"></div>
            <div class="shape">
               <div class="shape-1" style="background-image: url(/images/shape/shape-14.png);"></div>
               <div class="shape-2" style="background-image: url(/images/shape/shape-14.png);"></div>
            </div>
            <div class="auto-container">
               <div class="content-box p_relative d_block z_5">
                  <span class="title-text p_relative d_block">Waste Pickup</span>
                  <h2 class="p_relative d_block">Clean & Green Punjab, Strong Punjab</h2>
                  <p class="p_relative d_block">A clean environment builds a healthier, stronger, and more developed Punjab.</p>
                  <div class="btn-box">
                     <a href="" class="theme-btn btn-one"><span>Read More</span></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="slide-item p_relative">
            <div class="bg-layer" style="background-image:url(/images/banner/Banner-02.png)"></div>
            <div class="shape">
               <div class="shape-1" style="background-image: url(/images/shape/shape-14.png);"></div>
               <div class="shape-2" style="background-image: url(/images/shape/shape-14.png);"></div>
            </div>
            <div class="auto-container">
               <div class="content-box p_relative d_block z_5">
                  <span class="title-text p_relative d_block">Waste Pickup</span>
                  <h2 class="p_relative d_block">Your City,<br> Keep it Always Suthra</h2>
                  <p class="p_relative d_block">Every citizen’s responsibility is the key to a beautiful and hygienic city.</p>
                  <div class="btn-box">
                     <a href="" class="theme-btn btn-one"><span>Read More</span></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="slide-item p_relative">
            <div class="bg-layer" style="background-image:url(/images/banner/Banner-03.png)"></div>
            <div class="shape">
               <div class="shape-1" style="background-image: url(/images/shape/shape-14.png);"></div>
               <div class="shape-2" style="background-image: url(/images/shape/shape-14.png);"></div>
            </div>
            <div class="auto-container">
               <div class="content-box p_relative d_block z_5">
                  <span class="title-text p_relative d_block">Waste Pickup</span>
                  <h2 class="p_relative d_block">Cleaner Punjab, Greener Tomorrow</h2>
                  <p class="p_relative d_block">Cleanliness today creates a greener and better future for coming generations.</p>
                  <div class="btn-box">
                     <a href="" class="theme-btn btn-one"><span>Read More</span></a>
                  </div>
               </div>
            </div>
         </div>
     @endif
   </div>
</section>
<!-- banner-style-two end -->
