@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12 ml-auto mr-auto">
		<div class="card card-user">
			{{-- HEADER TITLE --}}
			<div class="card-header">
				<h5 class="card-title pull-left">Change Password</h5>
			</div>
			<div class="card-body">
				@include('layouts.errors')
				{{-- USERS FORM --}}
				<form id="modulo" method="POST" action="{{ route('users.update-pw', $user) }}">
					@csrf @method('PUT')
					<div class="row">
						{{-- CURRENT PASSWORD INPUT --}}
						<div class="col-md-12">
							<div class="form-group">
								<label>Current Password</label>
								<input type="password" class="form-control {{ $errors->has('current_password') ? 'has-error' : '' }}" id="current_password" name="current_password">
							</div>
						</div>
						{{-- NEW PASSWORD INPUT --}}
						<div class="col-md-12">
							<div class="form-group">
								<label>New Password</label>
								<input type="password" class="form-control {{ $errors->has('password') ? 'has-error' : '' }}" id="password" name="password">
							</div>
						</div>
					</div>
					{{-- BUTTON SET --}}
					<div class="row">
						<div class="update ml-auto mr-auto">
							<a class="btn btn-round" @if(Auth::user()->role_id != 3) href="{{ route('users.index') }}" @else href="{{ route('orders.index') }}" @endif >Cancel </a>
						    <button id="submit-btn" type="submit" class="btn btn-danger btn-round">Save Password</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

