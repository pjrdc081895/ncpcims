@extends('layout_master.master')

@section('content')
	<div class="flex-center position-ref full-height" style="height:10vh;">
			@include('partials.identifier')
	</div>
			<div class="container" style="height:85vh;overflow: auto;">
			<center><h1>REGISTER CORPSE</h1></center>
			
			                    <form class="form-horizontal" method="post" action="/{{auth()->user()->username}}/RegisterCorpse" id="addCorpse">
			                      	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

				                      <div class="form-group">
					                      
				                        <label for="firstname">FIRST NAME</label>
				                        <input type="text"  class="form-control"  id="firstname" name="firstname" required>
				                      </div>

				                      <div class="form-group">
				                        <label for="middlename">MIDDLE NAME</label>
				                        <input type="text"  class="form-control"  id="middlename" name="middlename">
				                      </div>

				                      <div class="form-group">
				                        <label for="lastname">LAST NAME</label>
				                        <input type="text"  class="form-control"  id="lastname" name="lastname" required>
				                      </div>

				                      <div class="form-group">
				                        <label for="birthdate">BIRHDATE</label>
				                        <input type="date"  class="form-control"  id="birthdate" name="birthdate" required>
				                      </div>

				                      <div class="form-group">
				                        <label for="deathdate">DATE OF DEATH</label>
				                        <input type="date"  class="form-control"  id="deathdate" name="deathdate" required>
				                      </div>

									  <div class="form-group">
				                        <label for="interment">INTERMENT</label>
				                        <input type="date"  class="form-control"  id="interment" name="interment" required>
				                      </div>

				                      <div class="form-group">
				                      	<label for="relation">Relationship</label>
				                      	<div class="dropup" style="width: 100%">
										    <button class="btn btn-default dropdown-toggle rShip" type="button" id="menu1" data-toggle="dropdown" style="width: 100%;">Relationship
										    <span class="caret"></span></button>
										    <ul class="dropdown-menu relationship" role="menu" aria-labelledby="menu1" style="width: 100%;">

										       @if($cat_rel)
												@foreach($cat_rel as $relationship)
													<li role="presentation" ><a role="menuitem" tabindex="-1" href="#" id="{{{$relationship->id}}}">{{{$relationship->relationship_type}}}</a></li>
												@endforeach
										       @else
													<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Spouse</a></li>
										       @endif
										      
										    </ul>
									    </div>
				                      </div>
			                      	
			                      	<input type="hidden" name="relationship_id" value="" />  
			                      	<input type="hidden" name="latitude" value="" />
									<input type="hidden" name="longtitude" value="" />									
			                    </form>
										<div class="form-group">
											<button id="btnRegister" class="form-control btn btn-default">ADD INFO</button>
									    </div>
									    <div id="cDet" style="display: none">
											<h3 style="border-left: 6px solid #00FF12;background-color: #636b6f;color: #f9aa20;padding-top: 5px; padding-bottom: 5px;padding-left: 5px;;">CORPSE DETAILS HAS BEEN ADDED</h3>
										</div>
			                @include('partials.errors')

			</div>
			
	
	@include('partials.modal')
@endsection