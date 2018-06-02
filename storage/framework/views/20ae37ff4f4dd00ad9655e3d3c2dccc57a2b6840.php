<?php $__env->startSection('content'); ?>
<?php echo $__env->make('frames.header-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('frames.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frames.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>