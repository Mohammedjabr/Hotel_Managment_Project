<!DOCTYPE html>
<html lang="en">
<head>
<?php echo $__env->make('base_layout2.header.meta_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
<?php echo $__env->make('base_layout2.header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('body'); ?>

<?php echo $__env->make('base_layout2.bottom_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('base_layout2.footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
<?php echo $__env->make('base_layout2.footer.meta_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>     
</body>
</html><?php /**PATH C:\wamp64\www\Hotel_Managment_Project\resources\views/base_layout2/master_layout.blade.php ENDPATH**/ ?>