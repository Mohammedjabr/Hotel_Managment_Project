<?php $__env->startSection('content'); ?>
<div class="row">
  <?php if($message = Session::get('sucess')): ?>
   <div class="alert alert-success">
    <p><?php echo e($message); ?></p>
   </div>
  <?php endif; ?>
 <div class="col-md-12">
   <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Show Employees</h3>
       </div>
       <div class="panel-body">
       <table class="table table-bordered table-striped table-condensed flip-content">
                 <thead>
                  <tr>
                    <th>Name</th>
                    <th>password</th>
                    <th>type</th>
                    <th>Phone Number</th>
                    <th>Date Of Birth</th>
                    <th>Address</th>
                    <th>Salary</th>
                    <th>Works Days</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  </tr>
                </thead>
               <tbody>
               <?php $__currentLoopData = $id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                   <td><?php echo e($employee->name); ?></td>
                   <td><?php echo e($employee->password); ?></td>
                   <td><?php echo e($employee->type); ?></td>
                   <td><?php echo e($employee->phone_number); ?></td>
                   <td><?php echo e($employee->DoB); ?></td>
                   <td><?php echo e($employee->address); ?></td>
                   <td><?php echo e($employee->salary); ?></td>
                   <td><?php echo e($employee->work_days); ?></td>

                   <td>
                   <a href="<?php echo e(action('EmployeeController@edit',$employee['id'])); ?>"><button class="btn btn-success">Edit</button></a> </td>
                   <td>
                     <form method="post" class="delete_form" action="<?php echo e(action ('EmployeeController@destroy',
                        $employee['id'])); ?>">
                     <?php echo e(csrf_field()); ?>

                     <input type="hidden" name="_method" value="DELETE">
                     <button type="submit" class="btn btn-danger">Delete</button> 
                      </form>  
                   </td> 
                  </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
               </table>
               <div class="col-md-12">
               <?php echo e($id->links()); ?>

               </div> 
          </div>
          </div>
          </div>
</div>
 <script>
$(document).ready(function(){
  $('.delete_form').on('submit',function(){
    if (confirm("Are you sure you want To delete it ?")) {
      return true;
    }else{
      return false;
    }
  });
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base_layout.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Hotel_Managment_Project\resources\views/employee/index.blade.php ENDPATH**/ ?>