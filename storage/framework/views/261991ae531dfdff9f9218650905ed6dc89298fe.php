<?php $__env->startSection('content'); ?>

	<div class="flex-center position-ref full-height" style="height: 10vh !important;">
        <?php echo $__env->make('partials.identifier', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
	<div  class="container-fluid" style="margin: 0px;padding: 0px;"	>
		<div class="row" style="background:#1D1F20;">


			<div class="col-sm-3 set_opt" style="background-color: #434343;height: 90vh;padding: 0px;color:white;padding-left: 40px;">
        <?php if($dec): ?>
            <?php $__currentLoopData = $dec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <br/>
                <?php echo e($dec->firstname); ?>

                <?php echo e($dec->middlename); ?>

                <?php echo e($dec->lastname); ?>

                <br/>

                <?php $__currentLoopData = $dec->_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <span id="uID" style="visibility: hidden;"><?php echo e($user->id); ?></span><br/>
                  username: <?php echo e($user->username); ?><br/>
                  firstname: <?php echo e($user->firstname); ?><br/>
                  middlename: <?php echo e($user->middlename); ?><br/>
                  lastname: <?php echo e($user->lastname); ?><br/>
                  
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <form method="post" action="/confirmation/<?php echo e($dec->id); ?>" id="uplonglat">
                                    
                                        
                                            <?php echo e(csrf_field()); ?>

       <input name="_method" type="hidden" value="PATCH">
                                        <div class="form-group">
                                            
                                            <input type="text"  class="form-control"  name="latitude"  required>
                                        </div>

                                        <div class="form-group">
                                          
                                            <input type="text"  class="form-control"  id="longtitude" name="longtitude" required>
                                        </div>
                                        <input type="hidden"  class="form-control"  id="longtitude" name="users_id" value="<?php echo e($user->id); ?>" required>
                                        <?php echo $__env->make('partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                          <div class="form-group">
                                    <button class="form-control btn btn-default">CONFIRM</button>
                                </div>
                                
              </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php else: ?>
          <?php endif; ?>
				

			</div>

			<div class="col-sm-9 " style="background-color: #1D1F20;height: 90vh;padding: 0px;">
				<div id="map" style="width:100%;height:400px; background-color:#F6E6D7; color: #F6E6D7; display: inline-block;border: 0.5px solid #f9aa20;margin-left: -5px;" >
        </div>


			</div>

		</div>
	</div>
	
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>