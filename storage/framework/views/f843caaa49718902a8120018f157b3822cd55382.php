
       <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                      <div class="loginmodal-container">
                          <h1>Login to Your Account</h1><br>
                        <form method="POST" action="/login">
                         <?php echo e(csrf_field()); ?>

                          
                          <input type="text" class="form-control"  id="username" name="username" placeholder="Username" required>
                          <input type="password" class="form-control"  id="password" name="password" placeholder="Password" required>

                          <?php echo $__env->make('partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                          <input type="submit" name="login" class="login loginmodal-submit" value="Login">

                          <center><h4>Or</h4></center>
                          <input type="button" name="login" class="login loginmodal-submit" value="Sign Up"  onclick="window.location='/register';" style = "width: 100%">

                        </form>
                          
                        <div class="login-help">
                          - <a href="#">Forgot Password</a>
                        </div>
                      </div>
                  </div>
      </div>
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><img id ="logo-size" src="img/NCPCLogo.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <?php if(Auth::check()): ?> 
                     <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="/">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#About">About</a>
                    </li>
                     <li class="page-scroll">
                        <a href="#steps">How To</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#Contact">Message Us</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#Location">Location</a>
                    </li>
                     <li class="page-scroll">
                        <a href="#">|</a>
                    </li>
                    <li>
                        <a href="/settings">Settings</a>
                    </li>
                    <li>
                         <a href="/logout">Logout</a>
                    </li>
                    <li>

                        <div class="login loginmodal-submit" style="
                          height: 1vh;
                          padding-bottom: 3vh;
                          padding-right: 1vh;
                          padding-top: 1vh;
                          padding-left: 1vh;
                          font-size: xx-small;
                          margin-top: 1.5vh;
                          background-color: #253a5a;
                      "> <?php if(($a = Auth::user()->username)==="admin"): ?>
                            <a href="/dashboard">Dashboard</a>
                        <?php else: ?>
                            <a href="/<?php echo e($a); ?>/RegisterCorpse">Register your Loved Ones</a>
                        <?php endif; ?>
        
                    </li>  
 

                <?php else: ?>
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="/">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#About">About</a>
                    </li>
                     <li class="page-scroll">
                        <a href="#How">How To</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#Contact">Message Us</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#Location">Location</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#">|</a>
                    </li>
                     <li class="page-scroll">
                        <a href="#contact" data-toggle="modal" data-target="#login-modal">Log In | Sign Up</a>
                    </li>
                    
                <?php endif; ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>