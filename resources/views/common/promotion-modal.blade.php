<!-- Promotion Modal -->
<div id="promotionModal" class="promotion-modal">
   <div class="promotion-modal-content">
      <span class="promotion-close">&times;</span>
      <div class="promotion-slider">
         @foreach($promotions as $index => $promotion)
            <div class="promotion-slide {{ $index === 0 ? 'active' : '' }}" data-slide="{{ $index }}">
                @if($promotion->title)
                    <div class="promotion-title">
                        <h3>{{ $promotion->title }}</h3>
                    </div>
               @endif
               @if($promotion->image_url)
                  <img src="{{ $promotion->image_url }}" alt="{{ $promotion->title ?? 'Promotion Banner' }}">
               @endif

            </div>
         @endforeach
      </div>
      @if($promotions->count() > 1)
      <div class="promotion-navigation">
         <button class="promotion-prev" onclick="changeSlide(-1)">&#10094;</button>
         <button class="promotion-next" onclick="changeSlide(1)">&#10095;</button>
      </div>
      <div class="promotion-dots">
         @foreach($promotions as $index => $promotion)
            <span class="promotion-dot {{ $index === 0 ? 'active' : '' }}" onclick="currentSlide({{ $index + 1 }})"></span>
         @endforeach
      </div>
      @endif
   </div>
</div>

<style>
/* Promotion Modal Styles */
.promotion-modal {
   display: none;
   position: fixed;
   z-index: 9999;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   overflow: scroll;
   background-color: rgba(90, 90, 90, 0.178);
}

.promotion-modal-content {
   position: relative;
   background-color: #fff;
   margin: 2% auto;
   padding: 0;
   border-radius: 15px;
   width: 80%;
   height: 800px;
   max-width: 700px;
   box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
   display: flex;
   justify-content: center;
   align-items: center;
   animation: modalSlideIn 0.4s ease-out;
}

@keyframes modalSlideIn {
   from {
      opacity: 0;
      transform: translateY(-50px) scale(0.8);
   }
   to {
      opacity: 1;
      transform: translateY(0) scale(1);
   }
}

.promotion-close {
   position: absolute;
   top: 27px;
   right: 25px;
   color: #fff;
   font-size: 35px;
   font-weight: bold;
   cursor: pointer;
   z-index: 10001;
   background: rgba(0, 0, 0, 0.6);
   width: 45px;
   height: 45px;
   border-radius: 50%;
   display: flex;
   align-items: center;
   justify-content: center;
   transition: all 0.3s ease;
   line-height: 1;
}

.promotion-close:hover {
   background: rgba(255, 0, 0, 0.8);
   transform: scale(1.1);
}

.promotion-slider {
   position: relative;
   width: 95%;
   height: 95%;
   overflow: hidden;
}

.promotion-slide {
   display: none;
   position: relative;
   width: 100%;
   height: 100%;
}

.promotion-slide.active {
   display: block;
}

.promotion-slide img {
   width: 100%;
   height: 100%;
   object-fit: cover;
   /* border-radius: 15px; */
}

.promotion-title {
   /* position: absolute;
   bottom: 0;
   left: 0;
   right: 0; */
   /* background: linear-gradient(transparent, rgba(0, 0, 0, 0.8)); */
   padding: 10px;
   text-align: center;
   background: #4CAF50;
}
.promotion-title h3 {
   margin: 0;
   font-size: 24px;
   font-weight: 600;
   color:#fff
}

.promotion-navigation {
   position: absolute;
   top: 50%;
   width: 100%;
   display: flex;
   justify-content: space-between;
   padding: 0 20px;
   transform: translateY(-50%);
   pointer-events: none;
}

.promotion-prev,
.promotion-next {
   background: rgba(0, 0, 0, 0.6);
   color: white;
   border: none;
   padding: 15px 20px;
   cursor: pointer;
   border-radius: 50%;
   font-size: 18px;
   font-weight: bold;
   transition: all 0.3s ease;
   pointer-events: all;
   width: 50px;
   height: 50px;
   display: flex;
   align-items: center;
   justify-content: center;
}

.promotion-prev:hover,
.promotion-next:hover {
   background: rgba(58, 158, 30, 0.9);
   transform: scale(1.1);
}

.promotion-dots {
   text-align: center;
   padding: 20px;
   background: rgba(248, 249, 250, 0.95);
}

.promotion-dot {
   cursor: pointer;
   height: 15px;
   width: 15px;
   margin: 0 5px;
   background-color: #bbb;
   border-radius: 50%;
   display: inline-block;
   transition: all 0.3s ease;
}

.promotion-dot:hover,
.promotion-dot.active {
   background-color: #3a9e1e;
   transform: scale(1.2);
}

/* Responsive Design */
@media (max-width: 768px) {
   .promotion-modal-content {
      width: 95%;
      margin: 10% auto;
   }

   .promotion-slider {
      height: 350px;
   }

   .promotion-title h3 {
      font-size: 18px;
   }

   .promotion-prev,
   .promotion-next {
      width: 40px;
      height: 40px;
      font-size: 14px;
      padding: 10px;
   }

   .promotion-close {
      width: 35px;
      height: 35px;
      font-size: 25px;
      top: 10px;
      right: 15px;
   }
}

@media (max-width: 480px) {
   .promotion-slider {
      height: 250px;
   }

   .promotion-navigation {
      padding: 0 10px;
   }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
   // Promotion Modal Functionality
   const modal = document.getElementById('promotionModal');
   const closeBtn = document.querySelector('.promotion-close');
   let currentSlideIndex = 0;

   // Show modal on page load if promotions exist
   if (modal) {
      // Show modal after a short delay
      setTimeout(function() {
         modal.style.display = 'block';
         document.body.style.overflow = 'hidden'; // Prevent background scrolling
      }, 1000);

      // Close modal functionality
      if (closeBtn) {
         closeBtn.onclick = function() {
            closeModal();
         }
      }

      // Close modal when clicking outside
      window.onclick = function(event) {
         if (event.target === modal) {
            closeModal();
         }
      }

      // Close modal with Escape key
      document.addEventListener('keydown', function(event) {
         if (event.key === 'Escape' && modal.style.display === 'block') {
            closeModal();
         }
      });
   }

   function closeModal() {
      modal.style.display = 'none';
      document.body.style.overflow = 'auto'; // Restore background scrolling
   }

   // Slider functionality
   window.changeSlide = function(direction) {
      const slides = document.querySelectorAll('.promotion-slide');
      const dots = document.querySelectorAll('.promotion-dot');

      if (slides.length === 0) return;

      // Hide current slide
      slides[currentSlideIndex].classList.remove('active');
      dots[currentSlideIndex].classList.remove('active');

      // Calculate new slide index
      currentSlideIndex += direction;

      if (currentSlideIndex >= slides.length) {
         currentSlideIndex = 0;
      } else if (currentSlideIndex < 0) {
         currentSlideIndex = slides.length - 1;
      }

      // Show new slide
      slides[currentSlideIndex].classList.add('active');
      dots[currentSlideIndex].classList.add('active');
   }

   window.currentSlide = function(slideNumber) {
      const slides = document.querySelectorAll('.promotion-slide');
      const dots = document.querySelectorAll('.promotion-dot');

      if (slides.length === 0) return;

      // Hide current slide
      slides[currentSlideIndex].classList.remove('active');
      dots[currentSlideIndex].classList.remove('active');

      // Set new slide index
      currentSlideIndex = slideNumber - 1;

      // Show new slide
      slides[currentSlideIndex].classList.add('active');
      dots[currentSlideIndex].classList.add('active');
   }

   // Auto-slide functionality (optional)
   if (modal && document.querySelectorAll('.promotion-slide').length > 1) {
      setInterval(function() {
         if (modal.style.display === 'block') {
            changeSlide(1);
         }
      }, 5000); // Change slide every 5 seconds
   }
});
</script>
