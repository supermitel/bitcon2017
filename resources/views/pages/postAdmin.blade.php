@extends('layout')

@section('content')

<div class="container">
		<div class="rows">
				<center><h1> Postare Administrator </h1></center>

		<div class="col-xs-10 col-xs-offset-1">
		<form action="{{ route('submit') }}" method="post">
			<div class="form-group">
				<label for="input">Your Input</label>
				<textarea class="form-control" name="content" id="input" rows="10"></textarea>
			</div>
			{!!csrf_field()!!}
			<button type="submit">Submit</button>
		</form>
		</div>
	</div>
</div>

<script src="{{URL::to('/js/tinymce.min.js')}}"></script>
<script>
	/*var editor_config = {
			path_absolute : "{{URL::to('/page')}}/",
			selector: "textarea",
			plugins:[
				"advlist autolink lists link image charmap print preview hr anchor pagebreak",
				"searchreplace wordcount visualblocks visualchars code fullscreen",
				"insertdatatime media nonbreaking save table contextmenu directionality",
				"emoticons templates paste textcolor colorpicker textpattern"
			],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent | link image media",

			relative_urls: false,
			file_browser_callback:  function(field_name, url, type, win){
				var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
				var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

				var cmsURL = editor_config.path_absolute + 'laravel-filemanager?filed_name=' + field_name;
				if(type == 'image'){

					cmsURL = cmsURL + "&type=Images";
				}else{
					cmsURL = cmsURL + "&type=Files";
				}
				tinyMCE.activeEditor.windowManager.open({
					file: cmsURL,
					title: 'Filemanager',
					width: x * 0.8,
					height: y * 0.8,
					resizable: "yes",
					close_previous: "no"
				});

			}


	};*/
	tinymce.init(  { selector:'textarea' });
</script>


@endsection