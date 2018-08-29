<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
<title>modulo</title>
{{-- BOOTSTRAP, FONTS AND ICONS CSS --}}
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
{{-- CUSTOM CSS --}}
<link href="{{ asset('css/paper-dashboard.css') }}" rel="stylesheet" />
<link href="{{ asset('css/theform.css') }}" rel="stylesheet" />
{{-- REQUIRED FOR POST METHOD IN AJAX CALL FOR UPDATING ORDERS --}}
<meta name="csrf-token" content="{{ csrf_token() }}">