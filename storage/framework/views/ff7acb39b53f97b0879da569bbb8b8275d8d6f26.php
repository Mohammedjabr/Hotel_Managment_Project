<?php $__env->startSection('content'); ?>

  
          
    <div class="col-md-12">
      <div class="col-md-9">
      <?php if(session()->has('error')): ?>
      <div class="alert alert-danger" role="alert">
      <?php echo e(session()->get('error')); ?>

      </div>
     <?php endif; ?>  

       <?php if(session()->has('sucess')): ?>
         <div class="alert alert-sucess" role="alert">
         <?php echo e(session()->get('sucess')); ?>

         </div>
        <?php endif; ?>      
      </div>
    
        <form method="POST" action="<?php echo e(action('EmployeeController@update',$id)); ?>">
           <?php echo e(csrf_field()); ?>

           <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label>Name :</label>
                <input class="form-control" type="text" name="name" value="<?php echo e($employee->name); ?>">
                <span class="error"><?php echo e($errors->first('name')); ?></span>
            </div>
          

            <div class="form-group">
                <label>Password :</label>
                <input class="form-control" type="text" name="password" value=" <?php echo e($employee->password); ?> ">
                <span class="error"><?php echo e($errors->first('password')); ?></span>
            </div>

            <div class="form-group">
                <label>Type :</label>
                <select class="form-control" id="sel1"  name="type">
                    <option disabled selected>Choose Employee Type</option>
                    <option value="admin" <?php echo e($employee->type == 'admin' ? 'selected' : ''); ?>>Admin</option>
                    <option value="employee" <?php echo e($employee->type == 'employee' ? 'selected' : ''); ?>>employee</option>
                </select>
                <span class="error"><?php echo e($errors->first('type')); ?></span>
            </div>

            <div class="form-group">
                <label>Phone Number :</label>
                <input class="form-control" type="text" name="phone_number" value=" <?php echo e($employee->phone_number); ?>">
                <span class="error"><?php echo e($errors->first('phone_number')); ?></span>
            </div>

            <div class="form-group">
                <label>Address :</label>
                <input class="form-control" type="text" name="address" value="<?php echo e($employee->address); ?>">
                <span class="error"><?php echo e($errors->first('address')); ?></span>
            </div>
            

            <div class="form-group">
                <label>Date of Birth :</label>
                <input class="form-control" type="date" name="DoB" value=" <?php echo e($employee->DoB); ?> ">
                <span class="error"><?php echo e($errors->first('DoB')); ?></span>
            </div>
          

            <div class="form-group">
                <label>Salary :</label>
                <input class="form-control" type="text" name="salary" value=" <?php echo e($employee->salary); ?> ">
                <span class="error"><?php echo e($errors->first('salary')); ?></span>
            </div>

            <div class="form-group">
                <label>Works Days :</label>
                <input class="form-control" type="text" name="work_days" value=" <?php echo e($employee->work_days); ?> ">
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
<?php echo $__env->make('base_layout.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Hotel_Managment_Project\resources\views/employee/edit.blade.php ENDPATH**/ ?>