@extends('layout')

@section('content')
		<div class="container" style="padding-top: 30px; background-color: rgba(0, 67, 38, .8); color: white; position: relative; height: 100%;">
		<div class="row text-center">
			<div class="col-xs-10 col-xs-offset-1">
				{!! $content !!}
			</div>
		</div>	
		</div>

@endsection