@extends('/layout')

@section('content')
<div class="container" style="background-color: #eee">
		<div class="row">
			<br>
			<br>
				<center><h2> {{$user->name}} </h2></center>

					<div class="col-sm-4"><img src="/images/userProfile.jpg" style="width: 300px; height: 300px"/></div>
					<div class="col-sm-6 col-sm-2-offset"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		</div>
	

		<div class="row">
				<br>
				<div class="col-sm-5"></div>
					<div class="col-sm-1 col-centered">
					<center>
					<h3> SKILLS </h3><br>
						
						<h4> JAVA </h4>
						<h4> html </h4>
						<h4> c++ </h4>
						<h4> RUBY </h4>
						<h4> Python </h4>
						</center>
					</div>



</div>
</div>
   @endsection