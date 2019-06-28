<?php $__env->startSection('content'); ?>
      
          
    <div class="col-md-12">
    <!-- <div class="row">
          <?php if($errors->any()): ?>
          <div class="alert alert-danger">
          <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
          </div>
          <?php endif; ?> -->
        <form method="POST" action="<?php echo e(route('room.store')); ?>" enctype="multipart/form-data" >
           <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label>Room Number</label>
                <input class="form-control" type="number" name="room_number">
                <span class="error"><?php echo e($errors->first('room_number')); ?></span>
            </div>
          
            <div class="form-group">
                <label>Type :</label>
                <select class="form-control" id="sel1"  name="type">
                    <option disabled selected>Choose Room Type</option>
                    <option value="single">single</option>
                    <option value="double">double</option>
                    <option value="twin">twin</option>
                    <option value="cabana">cabana</option>
                    <option value="superior">superior</option>
                    <option value="king">king</option>
                    <option value="junior suite">junior suite</option>
                    <option></option>
                </select>
                <span class="error"><?php echo e($errors->first('type')); ?></span>
            </div>
            

            <div class="form-group">
                <label>Price :</label>
                <input class="form-control" type="number" name="price">
                <span class="error"><?php echo e($errors->first('price')); ?></span>
            </div>
          

            <div class="form-group">
                <label>Book Type :</label>
                <select class="form-control" id="sel1" name="book_type">
                    <option selected disabled>Choose Book Type :</option>
                    <option value="daily">Daily</option>
                    <option value="monthly">Monthly</option>
                </select>
                <span class="error"><?php echo e($errors->first('book_type')); ?></span>
            </div>
          

            <div class="form-group">
                <label>Services</label>
                <input class="form-control" name="services">
                <span class="error"><?php echo e($errors->first('services')); ?></span>
            </div>
            

            <div class="form-group">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                         style="width: 200px; height: 150px; line-height: 150px;"></div>
                    <div>
                                                                <span class="btn red btn-outline btn-file">
                                                                    <span class="fileinput-new"> Select image </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="hidden"><input type="file" name="image"> </span>
                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                            Remove </a>
                    </div>
                </div>
                <span class="error"><?php echo e($errors->first('image')); ?></span>
            </div>
            
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit">
                <input class="btn btn-danger" type="button" name="cancel" value="Cancel">
            </div>
        </form>
    </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base_layout.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Hotel_Managment_Project\resources\views/room/create.blade.php ENDPATH**/ ?>