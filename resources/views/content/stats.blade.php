@extends('layout_master.master')

@section('content')
	<div class="flex-center position-ref full-height" style="height: 10vh !important;">
        @include('partials.identifier')
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-3" style="height: 442px;background: #27251B;overflow: auto;padding: 10px;">
				@if($stats)

								
					<div class="panel-group" id="accordion">
							@foreach($stats as $stats)
						<div class="panel panel-default">
								
								<a class="stats_info" href="#collapse_{{$stats->mon}}-{{$stats->dt}}-{{$stats->yr}}" id="{{$stats->mon}}-{{$stats->dt}}-{{$stats->yr}}" data-toggle="collapse" data-parent="#accordion" style="text-decoration: none;">
											<div class="panel-heading">
												<h4 class="panel-title">
														<a href="?mon={{$stats->mon}}&day={{$stats->dt}}&year={{$stats->yr}}" style="text-decoration: none;">{{$stats->mon}} {{$stats->dt}}, {{$stats->yr}}<span class="ml-auto" style="float:right;">{{$stats->count}}</span></a>
														 
												</h4>
											</div>		
								</a>

						</div>
							@endforeach	
					</div>
								
						@else
											
											
										<center><h1><strong style="position: relative;top:170px;">REPORTS NOT AVAILABLE</strong></h1></center>			
											
										

						@endif

     			</div>

				<div class="col-sm-9 dec_info" style="height: 442px;background: #2A2A2A;color: white">
					@if($statistics)
						@foreach($statistics as $statistics)
								<br/>
								{{$statistics->firstname}}
								{{$statistics->middlename}}
								{{$statistics->lastname}}
								<br/>

								@foreach($statistics->_user as $user)
									<br/>
									username: {{$user->username}}<br/>
									firstname: {{$user->firstname}}<br/>
									middlename: {{$user->middlename}}<br/>
									lastname: {{$user->lastname}}<br/>
									<span id="rel_{{$user->pivot->relationship_id}}">{{$user->pivot->relationship_id}}</span><br/>
								@endforeach

									
						@endforeach
					@else
					@endif
				</div>
		</div>

	</div>
	
@endsection
