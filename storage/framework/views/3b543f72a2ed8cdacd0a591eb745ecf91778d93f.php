<?php $__env->startSection('content'); ?>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <a href="/"><img src="img/NCPCLogo.png"></img></a>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        <br>
                        <br> <br>
                        <br> <br>
                        <br>

                        <h1>Register Now</h1>
                        <div class="description">
                            <p class="medium-paragraph">
                                With this Web Application, you can now Register your Loved ones easily. It comes with a lot of new features. Check it out now!
                            </p>
                        </div>
                        <div class="top-buttons">
                            <a class="btn btn-link-1 scroll-link" href="/">Our Services</a>
                            <a class="btn btn-link-2 scroll-link" href="/">Learn More</a>
                        </div>
                        	
		                    </div>
		                
		           
                        
                        <div class="col-sm-1"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form method="POST" action="/register" id="acctreg">
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                                        <?php if(session('role_type')): ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control disabled" name="role_id" id=""role_id value="<?php echo e(session('role_type')); ?>" />
                                        </div>
                                        <?php endif; ?>
                                        <div class="form-group">
                                            <input type="text"  class="form-control"  id="username" name="username" placeholder="Username..." required>
                                        </div>
				                    	<div class="form-group">
                                            
                                            <input type="text"  class="form-control"  id="firstname" name="firstname" placeholder="Firstname..." required>
                                        </div>

                                        <div class="form-group">
                                            
                                            <input type="text"  class="form-control"  id="middlename" name="middlename" placeholder="Middlename...">
                                        </div>

                                        <div class="form-group">
                                            
                                            <input type="text"  class="form-control"  id="lastname" name="lastname" placeholder="Lastname..." required>
                                        </div>

                                         <div class="form-group">
                                            
                                            <input type="text"  class="form-control"  id="email" name="email" placeholder="Email..." required>
                                        </div>

                                        <div class="form-group">
                                            
                                            <input type="password"  class="form-control"  id="password" name="password" placeholder="Password..." required>
                                        </div>

                                        <div class="form-group">
                                          
                                            <input type="password"  class="form-control"  id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation" required>
                                        </div>
				                        <?php echo $__env->make('partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				                        
				                    </form>
                                    <div class="form-group">
                                    <button id="btnsubmit" class="form-control btn btn-default">Sign me up!</button>
                                    </div>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>



<?php echo $__env->make('frames.footer-user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frames.master-accounts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>