@if($flash = session('message'))
	<div id="flash-message" class="col-md-12 alert alert-success" role="alert">
		<h6 class="mt-auto mb-auto">{{ $flash }}</h6>
	</div>
@endif