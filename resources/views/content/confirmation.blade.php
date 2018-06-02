@extends('layout_master.master')

@section('content')

	<div class="flex-center position-ref full-height" style="height: 10vh !important;">
        @include('partials.identifier')
    </div>
	<div  class="container-fluid" style="margin: 0px;padding: 0px;"	>
		<div class="row" style="background:#1D1F20;">


			<div class="col-sm-3 set_opt" style="background-color: #434343;height: 90vh;padding: 0px;color:white;padding-left: 40px;">
        @if($dec)
            @foreach($dec as $dec)
                <br/>
                {{$dec->firstname}}
                {{$dec->middlename}}
                {{$dec->lastname}}
                <br/>

                @foreach($dec->_user as $user)
                  <span id="uID" style="visibility: hidden;">{{$user->id}}</span><br/>
                  username: {{$user->username}}<br/>
                  firstname: {{$user->firstname}}<br/>
                  middlename: {{$user->middlename}}<br/>
                  lastname: {{$user->lastname}}<br/>
                  
                @endforeach

                <form method="post" action="/confirmation/{{$dec->id}}" id="uplonglat">
                                    
                                        
                                            {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
                                        <div class="form-group">
                                            
                                            <input type="text"  class="form-control"  name="latitude"  required>
                                        </div>

                                        <div class="form-group">
                                          
                                            <input type="text"  class="form-control"  id="longtitude" name="longtitude" required>
                                        </div>
                                        <input type="hidden"  class="form-control"  id="longtitude" name="users_id" value="{{$user->id}}" required>
                                        @include('partials.errors')
                          <div class="form-group">
                                    <button class="form-control btn btn-default">CONFIRM</button>
                                </div>
                                
              </form>
            @endforeach
          @else
          @endif
				

			</div>

			<div class="col-sm-9 " style="background-color: #1D1F20;height: 90vh;padding: 0px;">
				<div id="map" style="width:100%;height:400px; background-color:#F6E6D7; color: #F6E6D7; display: inline-block;border: 0.5px solid #f9aa20;margin-left: -5px;" >
        </div>


			</div>

		</div>
	</div>
	
	

@endsection