@extends('layout_master.master')

@section('content')
	<div class="flex-center position-ref full-height">
    @include('partials.identifier')

            <div class="content">
                <div class="title m-b-md">

                 PAYMENT DETAILS


                @include('partials.errors')

                </div>

                <div class="links">

                </div>
            </div>

    </div>
@endsection