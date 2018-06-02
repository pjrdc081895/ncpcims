@extends('layout_master.master')

@section('content')

	<div class="flex-center position-ref full-height" style="height: 10vh !important;">
        @include('partials.identifier')

    </div>
	<div  class="container-fluid">
		<div class="row" style="background:#1D1F20;">
			<div class="col-sm-3" style="background-color: #434343;height: 90vh">

				<form method="GET" action="/search">
					<div class="form-group">
						
						<div class="form-group">
							<center><label for="search">SEARCH YEAR</label></center>
							<input type="number" name="search" id="search" class="form-control" placeholder="YEAR" required >
						</div>
						
						<div class="form-group">
							<button class="form-control	" type="submit" id="acctsearch">SEARCH</button>
						</div>

					</div>						
				</form>

				@include('partials.errors')
				
				<div id="results" style="overflow: auto;width: auto;">
					<ul class="list-group acct" style="padding: 10px;">
						
							@if($accounts)

									@foreach($accounts as $account)

										
										
											<li class="list-group-item crud" id="{{$account->id}}" style="margin-bottom: 5px;"> 

												<div class="continer-fluid">
													<div class="row">
														<div class="col-sm-12" style="">
															<div class="" style="width:100%;float: left;">
																<strong>{{$account->created_at->diffForHumans()}}</strong>
													{{ $account->username }}<br/>{{ $account->email }} 
															</div>
															
														
														</div>
													</div>
												</div>

												<div class="overlay_crud delete-account" id="{{$account->id}}" style="position: absolute;bottom: 0;left: 75%;right: 0;background: #CD2223;width: 25%;height: 100%"> 
													<h2 style="color: white;font-size: 15px;text-align: center;margin-top: 23px;">REMOVE</h2>
												</div>	
												 	
											</li>
											
									@endforeach

							@else

											@if($message)
												<center><h1><strong>{{$message['noRec']}}</strong></h1></center>
											@endif

							@endif			
					</ul>
				</div>
			</div>

			<div class="com-sm-9">
				<table id="example" class="display" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>firstname</th>
				                <th>middlename</th>
				                <th>lastname</th>
				               

				            </tr>
				        </thead>
				        <tfoot>
				            <tr>
				                <th>firstname</th>
				                <th>middlename</th>
				                <th>lastname</th>
				                

				            </tr>
				        </tfoot>
				    </table>
			</div>

		</div>
	</div>
	
	
	@include('partials.modal')
@endsection