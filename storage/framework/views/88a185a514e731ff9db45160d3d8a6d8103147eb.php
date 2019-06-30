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
    <form method="POST" action="<?php echo e(route('room.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('POST'); ?>
        <div class="form-group">
            <label>Room name</label>
            <input class="form-control" type="text" name="room_name" value="<?php echo e(old('room_name')); ?>">
            <span class="error"><?php echo e($errors->first('room_name')); ?></span>
        </div>
        <div class="form-group">
            <label>Type :</label>
            <select class="form-control" id="sel1" name="type">
                <option disabled selected>Choose Room Type</option>
                <option <?php echo e(old('type') == 'Single' ? 'selected' : ''); ?>>Single</option>
                <option <?php echo e(old('type') == 'Double' ? 'selected' : ''); ?>>Double</option>
                <option <?php echo e(old('type') == 'Twin' ? 'selected' : ''); ?>>Twin</option>
                <option <?php echo e(old('type') == 'King' ? 'selected' : ''); ?>>King</option>
            </select>
            <span class="error"><?php echo e($errors->first('type')); ?></span>
        </div>
        <div class="form-group">
            <label>Price :</label>
            <input class="form-control" type="text" name="price" value="<?php echo e(old('price')); ?>">
            <span class="error"><?php echo e($errors->first('price')); ?></span>
        </div>
        <div class="form-group">
            <label>Book Type :</label>
            <select class="form-control" id="sel1" name="book_type">
                <option selected disabled>Choose Book Type :</option>
                <option <?php echo e(old('book_type') == 'Daily' ? 'selected' : ''); ?>>Daily</option>
                <option <?php echo e(old('book_type') == 'Monthly' ? 'selected' : ''); ?>>Monthly</option>
            </select>
            <span class="error"><?php echo e($errors->first('book_type')); ?></span>
        </div>
        <div class="form-group">
            <label>Note</label>
            <input type="text" class="form-control" name="note" value="<?php echo e(old('note')); ?>">
            <span class="error"><?php echo e($errors->first('note')); ?></span>
        </div>
        <div class="form-group">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
                    <img src="<?php echo e((old('image'))); ?>">
                </div>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base_layout.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Hotel_Managment_Project\resources\views/room/create.blade.php ENDPATH**/ ?>