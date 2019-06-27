<?php $__env->startSection('content'); ?>

  
          
    <div class="col-md-12">
    <?php if($message = Session::get('sucess')): ?>
   <div class="alert alert-success">
    <p><?php echo e($message); ?></p>
   </div>
  <?php endif; ?>   
        <form method="POST" action="<?php echo e(route('employee.store')); ?>">
           <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label>Name :</label>
                <input class="form-control" type="text" name="name" value="<?php echo e(old('name')); ?>">
                <span class="error"><?php echo e($errors->first('name')); ?></span>
            </div>
          

            <div class="form-group">
                <label>Password :</label>
                <input class="form-control" type="text" name="password" value="<?php echo e(old('password')); ?>">
                <span class="error"><?php echo e($errors->first('password')); ?></span>
            </div>

            <div class="form-group">
                <label>Type :</label>
                <select class="form-control" id="sel1"  name="type">
                    <option disabled selected>Choose Employee Type</option>
                    <option value="admin">Admin</option>
                    <option value="Employee">employee</option>
                </select>
                <span class="error"><?php echo e($errors->first('type')); ?></span>
            </div>

            <div class="form-group">
                <label>Phone Number :</label>
                <input class="form-control" type="number" name="phone_number" value="<?php echo e(old('phone_number')); ?>">
                <span class="error"><?php echo e($errors->first('phone_number')); ?></span>
            </div>

            <div class="form-group">
                <label>Address :</label>
                <input class="form-control" type="text" name="address" value="<?php echo e(old('address')); ?>">
                <span class="error"><?php echo e($errors->first('address')); ?></span>
            </div>
            

            <div class="form-group">
                <label>Date of Birth :</label>
                <input class="form-control" type="date" name="DoB" value="<?php echo e(old('DoB')); ?>">
                <span class="error"><?php echo e($errors->first('DoB')); ?></span>
            </div>
          

            <div class="form-group">
                <label>Salary :</label>
                <input class="form-control" type="number" name="salary" value="<?php echo e(old('salary')); ?>">
                <span class="error"><?php echo e($errors->first('salary')); ?></span>
            </div>

            <div class="form-group">
                <label>Works Days :</label>
                <input class="form-control" type="number" name="work_days" value="<?php echo e(old('work_days')); ?>">
                <span class="error"><?php echo e($errors->first('work_days')); ?></span>
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
<?php echo $__env->make('base_layout.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Hotel_Managment_Project\resources\views/employee/create.blade.php ENDPATH**/ ?>