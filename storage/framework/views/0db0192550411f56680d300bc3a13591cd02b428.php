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
      <h3 class="panel-title">Show Rooms</h3>
       </div>
       <div class="panel-body">
       <table class="table table-bordered table-striped table-condensed flip-content">
                 <thead>
                  <tr>
                    <th>Room Number</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Book Type</th>
                    <th>Services</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  </tr>
                </thead>
               <tbody>
               <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                   <td><?php echo e($room->room_number); ?></td>
                   <td><?php echo e($room->type); ?></td>
                   <td><?php echo e($room->price); ?></td>
                   <td><?php echo e($room->book_type); ?></td>
                   <td><?php echo e($room->services); ?></td>
                   <td><button class="btn btn-success"><a href="<?php echo e(action('RoomController@edit',$room['room_number'])); ?>">Edit</a></button> </td>
                   <td>
                     <form method="post" class="delete_form" action="<?php echo e(action ('RoomController@destroy',
                     $room['room_number'])); ?>">
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
               <?php echo e($rooms->links()); ?>

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
<?php echo $__env->make('base_layout.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Hotel_Managment_Project\resources\views/Room/index.blade.php ENDPATH**/ ?>