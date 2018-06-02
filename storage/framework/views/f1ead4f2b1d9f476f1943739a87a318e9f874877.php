<?php $__env->startSection('content'); ?>
<?php echo $__env->make('frames.header-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<style>
body {
    margin-top: 14%;
}
</style>

<div class="container">
    <div class="row">    
        <div class="col-xs-8 col-xs-offset-2">
        <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      <span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#contains">Contains</a></li>
                      <li><a href="#its_equal">It's equal</a></li>
                      <li><a href="#greather_than">Greather than ></a></li>
                      <li><a href="#less_than">Less than < </a></li>
                      <li class="divider"></li>
                      <li><a href="#all">Anything</a></li>
                    </ul>
                </div>

                
                    <input type="text" class="form-control" name="searchcorpse">
               
                
            </div>
        </div>
  </div>
</div>




<div class="container">
    <div class="row">
            <ul class="thumbnails dcs">
                
            </ul>
           
    </div>
</div>

<?php echo $__env->make('frames.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frames.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>