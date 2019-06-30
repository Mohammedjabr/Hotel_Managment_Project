   
   <?php $__env->startSection('body'); ?>
   <section class="py-5 bg-light">
     <div class="container">
       <div class="row align-items-center">
         <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
           <figure class="img-absolute">
             <img src="images/food-1.jpg" alt="Image" class="img-fluid">
           </figure>
           <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
         </div>
         <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
           <h2 class="heading">Welcome!</h2>
           <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
           <p><a href="<?php echo e(route('hotel.reservation')); ?>" class="btn btn-primary text-white py-2 mr-3">Reserve Now</a>
         </div>

       </div>
     </div>
   </section>
   <section class="section slider-section bg-light">
     <div class="container">
       <div class="row justify-content-center text-center mb-5">
         <div class="col-md-7">
           <h2 class="heading" data-aos="fade-up">Photos</h2>
           <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
         </div>
       </div>
       <div class="row">
         <div class="col-md-12">
           <div class="home-slider major-caousel owl-carousel mb-5 " data-aos="fade-up" data-aos-delay="200">
             <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <div class="slider-item">
               <img src="<?php echo e(asset($room->image)); ?>" alt="Image placeholder" class="img-fluid">
             </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </div>
           <!-- END slider -->
         </div>

       </div>
     </div>
   </section>
   <!-- END section -->

   </body>

   </html>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('base_layout2.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Hotel_Managment_Project\resources\views/index.blade.php ENDPATH**/ ?>