                          <!-- END QUICK NAV -->
                        <!--[if lt IE 9]>
                <script src="<?php echo e(asset('control/assets/global/plugins/respond.min.js')); ?>"></script>
                <script src="<?php echo e(asset('control/assets/global/plugins/excanvas.min.js')); ?>"></script> 
                <script src="<?php echo e(asset('control/assets/global/plugins/ie8.fix.min.js')); ?>"></script> 
                <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo e(asset('control/assets/global/plugins/jquery.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('control/assets/global/plugins/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('control/assets/global/plugins/js.cookie.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('control/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('control/assets/global/plugins/jquery.blockui.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('control/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo e(asset('control/assets/global/scripts/app.min.js')); ?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->

        <script src="<?php echo e(asset('control/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')); ?>" type="text/javascript"></script>

        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo e(asset('control/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('control/assets/layouts/layout/scripts/layout.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('control/assets/layouts/layout/scripts/demo.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('control/assets/layouts/global/scripts/quick-sidebar.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('control/assets/layouts/global/scripts/quick-nav.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('control/assets/pages/scripts/ui-sweetalert.min.js')); ?>" type="text/javascript"></script>

        <!-- END THEME LAYOUT SCRIPTS -->
        <script src="<?php echo e(asset('js/toastr.min.js')); ?>"></script>

<script>
    <?php if(Session::has("success")): ?>
    toastr.success("<?php echo e(Session::get('success')); ?>")
    <?php endif; ?>

    <?php if(Session::has("info")): ?>
    toastr.info("<?php echo e(Session::get('info')); ?>")
    <?php endif; ?>
</script>
    <?php /**PATH C:\wamp64\www\Hotel_Managment_Project\resources\views/base_layout/footer/meta_footer.blade.php ENDPATH**/ ?>