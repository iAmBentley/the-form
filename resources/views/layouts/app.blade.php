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

	   	</div>
	    
	    @include('layouts.scripts')
	    @yield('orders-ajax-scripts')

	</div>
</body>
</html>
