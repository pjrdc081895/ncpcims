@extends('frames.master-accounts')

@section('content')

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
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Login to our site</h3>
                                        <p>Enter username and password to log on:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form method="POST" action="/">
                                        {{csrf_field()}}
                                      <div class="form-group">
                                            
                                        <input type="text"  class="form-control"  id="username" name="username" placeholder="Username" required>
                                       </div>
                                       <div class="form-group">
                                       <input type="password"  class="form-control"  id="password" name="password" placeholder="Password" required>
                                      </div>
                                         @include('partials.errors')
                                      <button type="submit" class="btn btn-default">Sign In</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-1"></div>
                        <div class="col-sm-1"></div>
                            
                        <div class="col-sm-5">
                           <br>
                        <br> <br>
                        <br> 

                        <h1>Not a member? <a href = "/register"> Register Now</a></h1>
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
                    </div>
                    
                </div>
            </div>
            
        </div>



@include('frames.footer-user')   
@endsection