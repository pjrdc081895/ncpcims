@extends('layout_master.master')

@section('content')
	<div class="flex-center position-ref full-height" style="height:10vh;">
			@include('partials.identifier')
	</div>
			<div class="container" style="height:85vh;overflow: auto;">
			<center><h1>Add Relationship</h1></center>
			
										<div id="cDet" style="display: none">
											<h3 style="border-left: 6px solid #00FF12;background-color: #636b6f;color: #f9aa20;padding-top: 5px; padding-bottom: 5px;padding-left: 5px;;">Relationship Added
											</h3>
										</div>
										
			                    <form class="form-horizontal" method="post" action="/relationship" id="addRelationship">
			                      	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

				                      <div class="form-group">
					                      
				                        <label for="description">Relationship</label>
				                        <input type="text"  class="form-control"  id="description" name="description" required>
				                      </div>

			                    </form>

			                    <div id="cDet" style="display: none">
											<h3 style="border-left: 6px solid #00FF12;background-color: #636b6f;color: #f9aa20;padding-top: 5px; padding-bottom: 5px;padding-left: 5px;;">CORPSE DETAILS HAS BEEN ADDED</h3>
								</div>
										<div class="form-group">
											<button id="btnrelationships" class="form-control btn btn-default">ADD RELATIONSHIP</button>
									    </div>

			                @include('partials.errors')

			<div class="rel_cat">
				<ul class="list-group" style="padding: 10px;">
						
							@if($rel_cat)

									@foreach($rel_cat as $rel_cat)

										
										
											<li class="list-group-item _rships" id="{{$rel_cat->id}}" style="margin-bottom: 5px;"> 

												<div class="continer-fluid">
													<div class="row">
														<div class="col-sm-12" style="">
															<div class="rships" style="width:100%;float: left;">
																{{ucfirst($rel_cat->relationship_type)}} 
															</div>
															
														
														</div>
													</div>
												</div>
												 	
											</li>
											
									@endforeach

							@else
												<center><h1><strong>NO RECORDS FOUND</strong></h1></center>
							@endif			
					</ul>	
			</div>

			</div>
			
	
	@include('partials.modal')
@endsection