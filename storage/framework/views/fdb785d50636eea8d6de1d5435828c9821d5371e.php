<?php $__env->startSection('welcome_content'); ?>

    <div class="flex-center position-ref full-height">
        <?php echo $__env->make('partials.identifier', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        <!--
        <div class="content">
                <div class="title m-b-md">
                  NCPCIMS
                </div>

                <div class="links">
                    <a href="/login" target="_blank">LOGIN</a>
                    <a href="/register" target="_blank">REGISTER</a>
                </div>
         </div>
         -->
        
		<?php echo $__env->make('partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_master.master_home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>