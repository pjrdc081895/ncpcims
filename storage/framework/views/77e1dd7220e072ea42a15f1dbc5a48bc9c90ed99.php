<?php $__env->startSection('content'); ?>
	<div class="flex-center position-ref full-height" style="height: 10vh !important;">
        <?php echo $__env->make('partials.identifier', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-3" style="height: 442px;background: #27251B;overflow: auto;padding: 10px;">
				<?php if($stats): ?>

								
					<div class="panel-group" id="accordion">
							<?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="panel panel-default">
								
								<a class="stats_info" href="#collapse_<?php echo e($stats->mon); ?>-<?php echo e($stats->dt); ?>-<?php echo e($stats->yr); ?>" id="<?php echo e($stats->mon); ?>-<?php echo e($stats->dt); ?>-<?php echo e($stats->yr); ?>" data-toggle="collapse" data-parent="#accordion" style="text-decoration: none;">
											<div class="panel-heading">
												<h4 class="panel-title">
														<a href="?mon=<?php echo e($stats->mon); ?>&day=<?php echo e($stats->dt); ?>&year=<?php echo e($stats->yr); ?>" style="text-decoration: none;"><?php echo e($stats->mon); ?> <?php echo e($stats->dt); ?>, <?php echo e($stats->yr); ?><span class="ml-auto" style="float:right;"><?php echo e($stats->count); ?></span></a>
														 
												</h4>
											</div>		
								</a>

						</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
					</div>
								
						<?php else: ?>
											
											
										<center><h1><strong style="position: relative;top:170px;">REPORTS NOT AVAILABLE</strong></h1></center>			
											
										

						<?php endif; ?>

     			</div>

				<div class="col-sm-9 dec_info" style="height: 442px;background: #2A2A2A;color: white">
					<?php if($statistics): ?>
						<?php $__currentLoopData = $statistics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statistics): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<br/>
								<?php echo e($statistics->firstname); ?>

								<?php echo e($statistics->middlename); ?>

								<?php echo e($statistics->lastname); ?>

								<br/>

								<?php $__currentLoopData = $statistics->_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<br/>
									username: <?php echo e($user->username); ?><br/>
									firstname: <?php echo e($user->firstname); ?><br/>
									middlename: <?php echo e($user->middlename); ?><br/>
									lastname: <?php echo e($user->lastname); ?><br/>
									<span id="rel_<?php echo e($user->pivot->relationship_id); ?>"><?php echo e($user->pivot->relationship_id); ?></span><br/>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php else: ?>
					<?php endif; ?>
				</div>
		</div>

	</div>
	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout_master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>