@extends('layout_master.master_home')

@section('welcome_content')

    <div class="flex-center position-ref full-height">
        @include('partials.identifier')
        
        <!--
        <div class="content">
                <div class="title m-b-md">
                  NCPCIMS
                </div>

                <div class="links">
                    <a href="/login" target="_blank">LOGIN</a>
                    <a href="/register" target="_blank">REGISTER</a>
                </div>
         </div>
         -->
        
		@include('partials.errors')
    </div>
	
@endsection