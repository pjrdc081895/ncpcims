<div class="content" style="overflow: auto;height: 80vh;">
                <div class="title m-b-md" style="overflow: auto;">
                  <h1>REGISTER ACCOUNT</h1>

                    <form method="POST" action="/register" id="acctreg">

                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        @if(session('role_type'))
                          <input type="text" name="role_id" value="{{session('role_type')}}" />
                        @endif
                       

                      <div class="form-group">
                        <label for="username">USERNAME</label>
                        <input type="text"  class="form-control"  id="username" name="username" required>
                      </div>
                      
                      <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input type="text"  class="form-control"  id="firstname" name="firstname" required>
                      </div>

                      <div class="form-group">
                        <label for="middlename">Middlename</label>
                        <input type="text"  class="form-control"  id="middlename" name="middlename">
                      </div>

                      <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text"  class="form-control"  id="lastname" name="lastname" required>
                      </div>

                      <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="email"  class="form-control"  id="email" name="email" required>
                      </div>

                      <div class="form-group">
                        <label for="password">PASSWORD</label>
                        <input type="password"  class="form-control"  id="password" name="password" required>
                      </div>

                      <div class="form-group">
                        <label for="password_confirmation">PASSWORD CONFIRMATION</label>
                        <input type="password"  class="form-control"  id="password_confirmation" name="password_confirmation" required>
                      </div>
    
                      

                    </form>
                    <div id="cDet" style="display: none">
                      <h3 style="border-left: 6px solid #00FF12;background-color: #636b6f;color: #f9aa20;padding-top: 5px; padding-bottom: 5px;padding-left: 5px;;">ACCOUNT REGISTERED</h3>
                    </div>
                     
                <button id="btnsubmit" class="btn btn-default btn-block">submit</button>
                @include('partials.errors')

                </div>

                <div class="links">

                </div>
            </div>