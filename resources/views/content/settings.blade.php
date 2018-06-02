@extends('layout_master.master')

@section('content')

	<div class="flex-center position-ref full-height" style="height: 10vh !important;">
        @include('partials.identifier')
    </div>
	<div  class="container-fluid" style="margin: 0px;padding: 0px;"	>
		<div class="row" style="background:#1D1F20;">
			<div class="col-sm-3 set_opt" style="background-color: #434343;height: 90vh;padding: 0px;">

				<div class="update-account" id="{{Auth::user()->id}}" style="width: 100%;padding: 10px;background:#252525;color: #00D76C; text-align:center;font-size: 20px;">
					ACCOUNT 
				</div>

			</div>

			<div class="col-sm-9 " style="background-color: #1D1F20;height: 90vh;padding: 0px;">
				<div class="container form-account" style="width: 100%;background:#1D1F20;color: #00D76C;font-size: 20px; display: none;overflow: auto;height: 70vh;">
					<form method="POST" action="/settings" id="accountUpdate">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                      
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
                    <div id="cDet" style="display: none;">
                      <h3 style="border-left: 6px solid #00FF12;background-color: #636b6f;color: #f9aa20;padding-top: 5px; padding-bottom: 5px;padding-left: 5px;margin: 0px 0px 10px 0px;">ACCOUNT UPDATED
                      </h3>
                    </div>
                     
                	<button id="btnsubmit" class="btn btn-default btn-block">UPDATE</button>
				</div>
			</div>

		</div>
	</div>
	
	
	@include('partials.modal')
@endsection