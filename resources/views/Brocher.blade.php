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
                        <h2>LWMC brochures</span></h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- materials-section end -->
      <section class="projects-section">


    <hr class="divider">

    <div class="gallery1">

      <div class="gallery-item">
        <img src="https://www.slideteam.net/media/catalog/product/cache/1280x720/o/n/one_page_world_travel_brochure_template_slide01.jpg" alt="">
      </div>

      <div class="gallery-item">
        <img src="https://www.slideteam.net/media/catalog/product/cache/1280x720/o/n/one_page_world_travel_brochure_template_slide01.jpg" alt="">
      </div>

    </div>

    <button class="view-btn">VIEW MORE</button>

  </section>
  <!-- MODAL -->

  <div class="modal" id="imageModal">
    <span class="close-btn">&times;</span>
    <img id="modalImg" src="" alt="">
  </div>

  <script>

    const galleryImages = document.querySelectorAll('.gallery-item img');
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImg');
    const closeBtn = document.querySelector('.close-btn');

    galleryImages.forEach(image => {

      image.addEventListener('click', () => {

        modal.classList.add('active');
        modalImg.src = image.src;

      });

    });

    closeBtn.addEventListener('click', () => {
      modal.classList.remove('active');
    });

    modal.addEventListener('click', (e) => {

      if(e.target !== modalImg){
        modal.classList.remove('active');
      }

    });

  </script>

   </div>
</body>
@endsection
