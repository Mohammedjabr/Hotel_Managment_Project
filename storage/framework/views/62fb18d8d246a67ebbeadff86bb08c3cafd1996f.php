<?php $__env->startSection('body'); ?>
    <section class="section">
        <div class="container">
            <div class="row">
            <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
                    <a href="#" class="room">
                        <figure class="img-wrap">
                            <img src="<?php echo e(asset($room->image)); ?>" alt="Free website template" class="img-fluid mb-3">
                        </figure>
                        <div class="p-3 text-uppercase text-center room-info">
                            <h2><?php echo e($room->type); ?></h2>
                            <span class="text-uppercase letter-spacing-1">Services : <?php echo e($room->services); ?><br><?php echo e($room->price); ?> Per night</span>
                        </div>
                    </a>
                 </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base_layout2.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Hotel_Managment_Project\resources\views/rooms.blade.php ENDPATH**/ ?>