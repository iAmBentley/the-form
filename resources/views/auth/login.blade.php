<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.ico">
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Login | Modulo</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<!--  FONTS AND ICONS -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

	<!-- BOOTSTRAP CSS -->
	<link
		rel="stylesheet"
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
		integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
		crossorigin="anonymous" />

	<!-- CUSTOM CSS -->
	<link href="{{ asset('css/paper-kit.css') }}" rel="stylesheet"/>
	<link href="{{ asset('css/theform.css') }}" rel="stylesheet" />

</head>
<body>
	<div class="wrapper">
		<div class="page-header">
			<div class="filter"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 ml-auto mr-auto">
							<div class="card card-register">
								
								<div class="logo ml-auto mr-auto text-center">
									<div class="logo-image-small">
										<img src="{{asset('img/logo-form-sm.png')}}">
									</div>
									il modulo
								</div>
								
								<form class="register-form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
									@csrf
									<!-- EMAIL FIELD -->
									<label for="name">Name</label>
									<input id="name" type="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

									@if ($errors->has('name'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
									@endif

									<!-- PASSWORD FIELD -->
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
									@if ($errors->has('password'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif

									<!-- SUBMIT BUTTON -->
									<button type="submit" class="btn btn-danger btn-block btn-round">Log In</button>
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<!-- Core JS Files -->
<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous">
</script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
	integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	crossorigin="anonymous">
</script>
<script
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
	integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
	crossorigin="anonymous">
</script>
<script src="{{ asset('/js/jquery-ui-1.12.1.custom.min.js') }}" type="text/javascript"></script>

<!--  Paper Kit Initialization snd functons -->
<script src="{{ asset('/js/paper-kit.js') }}"></script>

</html>