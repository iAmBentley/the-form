<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
	<div class="wrapper ">
		
		@include('layouts.sidebar')

		<div class="main-panel">
			
			@include('layouts.navbar')
			
			<div class="content">
				@include('layouts.alerts')
	   			@yield('content')
	   		</div>

	   	</div> {{-- .main-panel END --}}
	    
	    @include('layouts.scripts')

	</div> {{-- .wrapper END --}}
</body>
</html>
