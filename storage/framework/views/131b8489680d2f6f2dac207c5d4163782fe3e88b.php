<?php $__env->startSection('content'); ?>
	<div class="flex-center position-ref full-height" style="height:10vh;">
			<?php echo $__env->make('partials.identifier', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
	

<div class="container-fluid">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Panel Heading</h3>
                  </div>
                  
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list tbldec">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th>Name</th>
                        <th>Birthdate</th>
                        <th>Deathdate</th>
                    </tr> 
                  </thead>
                    <tbody>

                  		<?php if($req): ?>
                  			<?php $__currentLoopData = $req; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $req): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  			 <tr>

	                            <td align="center">
	                              <a class="btn btn-default" href="/confirmation/<?php echo e($req->decease_id); ?>" target="_blank"><em class="fa fa-pencil"></em></a>
	                            </td>
			                            <td><?php echo e($req->firstname); ?></td>
                                  <td><?php echo e($req->middlename); ?></td>
                                  <td><?php echo e($req->lastname); ?></td>
                                 
                            </tr>
                  			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  		<?php endif; ?>
                         
                    </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4 icnt">
                   PAGE <span id="init">1</span> to <span id="fin"></span> of <span id="tot"></span>
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                      
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div></div></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>