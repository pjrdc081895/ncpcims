<div class="flex-center position-ref full-height" style="height: 10vh !important;">
	</div>
      
     <div class="container">

     	<div class="row">

     		<div class="col-sm-12" style="background: #27251B">

     			<form method="GET" action="/corpse" id="crpFrm" onsubmit="viewcrp()">
							
								<div class="form-group">
									
									<div class="form-group">
										<center><label for="searchcorpse">SEARCH CORPSE</label></center>
										<input type="text" name="searchcorpse" id="searchcorpse" class="form-control" placeholder="CORPSE NAME" required >
									</div>
									
									<div class="form-group">
										<button class="form-control	" id="search_corpse" type="submit">SEARCH</button>
									</div>

								</div>						
								
				</form>
				@include('partials.errors')

     		</div>

     	</div>

     	<div class="row">

     		<div class="col-sm-3" id="crpRes" style="height: 442px;background: #27251B;">
					@if($corpse)

								
					<div class="panel-group" id="accordion">
							@foreach($corpse as $corpse)
						<div class="panel panel-default">
								
								<a href="#collapse{{$corpse->id}}" id="{{$corpse->id}}" data-toggle="collapse" data-parent="#accordion" style="text-decoration: none;">
											<div class="panel-heading">
												<h4 class="panel-title">
														
														{{$corpse->firstname}}
												</h4>
											</div>
								</a>

								<div id="collapse{{$corpse->id}}" class="panel-collapse collapse out">
										<div class="panel-body">
											{{$corpse->firstname}}

											{{ $corpse->middlename }} 
															
											{{ $corpse->lastname }} 
											<br>
											LATITUDE: <span id="lat">13.622711</span><br/>LONGTITUDE: <span id="long">123.187442</span>
										</div>
								</div>

								

						</div>
							@endforeach	
					</div>
								
						@else
											
												@if($message)
													<center><h1><strong style="position: relative;top:170px;">{{$message['noRec']}}</strong></h1></center>
												@else
													<center><h1><strong style="position: relative;top:170px;">RESULT/S HERE</strong></h1></center>
												@endif
										

						@endif

     			</div>

     		<div class="col-sm-9" id="crpLoc" style="height: 442px;background: #2A2A2A;">
					<div id="gmaps" style="width:100%;height:435px; background-color:#F6E6D7; color: #F6E6D7; display: inline-block;border: 0.5px solid #f9aa20;margin-left: -5px;" >
         			</div>

     		</div>

     	</div>

     </div>        
