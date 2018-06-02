<?php $__env->startSection('content'); ?>

	<div class="flex-center position-ref full-height" style="height: 10vh !important;">
        <?php echo $__env->make('partials.identifier', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
	<div  class="container-fluid">
		<div class="row" style="background:#1D1F20;">
			<div class="col-sm-3" style="background-color: #434343;height: 90vh">

				<form method="GET" action="/search">
					<div class="form-group">
						
						<div class="form-group">
							<center><label for="search">SEARCH YEAR</label></center>
							<input type="number" name="search" id="search" class="form-control" placeholder="YEAR" required >
						</div>
						
						<div class="form-group">
							<button class="form-control	" type="submit" id="acctsearch">SEARCH</button>
						</div>

					</div>						
				</form>

				<?php echo $__env->make('partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				
				<div id="results" style="overflow: auto;width: auto;">
					<ul class="list-group acct" style="padding: 10px;">
						
							<?php if($accounts): ?>

									<?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

										
										
											<li class="list-group-item crud" id="<?php echo e($account->id); ?>" style="margin-bottom: 5px;"> 

												<div class="continer-fluid">
													<div class="row">
														<div class="col-sm-12" style="">
															<div class="" style="width:100%;float: left;">
																<strong><?php echo e($account->created_at->diffForHumans()); ?></strong>
													<?php echo e($account->username); ?><br/><?php echo e($account->email); ?> 
															</div>
															
														
														</div>
													</div>
												</div>

												<div class="overlay_crud delete-account" id="<?php echo e($account->id); ?>" style="position: absolute;bottom: 0;left: 75%;right: 0;background: #CD2223;width: 25%;height: 100%"> 
													<h2 style="color: white;font-size: 15px;text-align: center;margin-top: 23px;">REMOVE</h2>
												</div>	
												 	
											</li>
											
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							<?php else: ?>

											<?php if($message): ?>
												<center><h1><strong><?php echo e($message['noRec']); ?></strong></h1></center>
											<?php endif; ?>

							<?php endif; ?>			
					</ul>
				</div>
			</div>

			<div class="com-sm-9">
				<table id="example" class="display" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>firstname</th>
				                <th>middlename</th>
				                <th>lastname</th>
				               

				            </tr>
				        </thead>
				        <tfoot>
				            <tr>
				                <th>firstname</th>
				                <th>middlename</th>
				                <th>lastname</th>
				                

				            </tr>
				        </tfoot>
				    </table>
			</div>

		</div>
	</div>
	
	
	<?php echo $__env->make('partials.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>