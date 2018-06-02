
    <!-- Header -->
    <header>
        <div class = "bgimg">
        <div class ="bgrow">
            <div class="container" id="maincontent" tabindex="-1">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro-text">

                            <h1 class="name">NAGA CITY <br>PUBLIC CEMETERY</h1>
                            <span class="skills">Search your Loved Ones</span>
                            <div class = "bgsearch">               
                            
                           

                                <!-- Search Form -->
                                <form role="form">
                                
                                <!-- Search Field -->
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input class="form-control" type="text" name="search" placeholder="Search" required/>
                                                <span class="input-group-btn">
                                                    <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"><span style="margin-left:10px;">Search</span></button>
                                                </span>

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                     
                                </form>
                                <!-- End of Search Form -->
                                  
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


    </header>

    <!-- Body -->
    
      <body>


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
                          <input type="submit" name="login" class="login loginmodal-submit" value="Sign Up">

                        </form>
                          
                        <div class="login-help">
                          - <a href="#">Forgot Password</a>
                        </div>
                      </div>
                  </div>
      </div>
      <section id = "About">
         <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <br><br><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet vestibulum sem non tempus. Nunc venenatis lectus purus, nec aliquam nibh euismod vulputate. Vivamus eu nulla magna. Etiam euismod, libero nec mattis efficitur, turpis velit convallis odio, vel porta nisl lectus at nunc. </p>
                </div>
                <div class="col-lg-4">
                    <p>Pellentesque elementum tortor commodo molestie pharetra. In hac habitasse platea dictumst. Cras facilisis id tortor id malesuada. In ac fringilla justo. Fusce quis scelerisque ligula. Phasellus quis mollis turpis, ornare pulvinar est. In eleifend nibh at leo euismod, ac tristique est tempor. Maecenas et condimentum lacus. </p>
                </div>
               
            </div>
        </div>
      </section>
      <section id = "Location">
        <div class='map-wrapper'>
              <div id='map'> </div>

              <div>
        </div>

     </section>
      </body>

