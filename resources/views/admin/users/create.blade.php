@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card card-user">
				{{-- HEADER TITLE --}}
				<div class="card-header">
					<h5 class="card-title">Create a User</h5>
				</div>
				<div class="card-body">
					@include('layouts.errors')
					{{-- USERS FORM --}}
					<form id="modulo" method="POST" action="{{ route('users.store') }}">
						@csrf
						<input type="hidden" name="is_active" value="1">
						<div class="row">
							{{-- NAME INPUT --}}
							<div class="col-md-6">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control {{ $errors->has('name') ? 'has-error' : '' }}" name="name" placeholder="No two names the same" value="{{ old('name') }}" autofocus>
								</div>
							</div>
							{{-- EMAIL INPUT --}}
							<div class="col-md-6">
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control {{ $errors->has('email') ? 'has-error' : '' }}" name="email" value="{{ old('email') }}" placeholder="Required for Admin + Managers">
								</div>
							</div>
						</div>
						<div class="row">
							{{-- PASSWORD INPUT --}}
							<div class="col-md-6">
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control {{ $errors->has('password') ? 'has-error' : '' }}" name="password" placeholder="Ex: last 4 of SSN">
								</div>
							</div>
							{{-- ROLE DROPDOWN SELECT --}}
							<div class="col-md-6">
								<div class="chekbox-title-dropdowns">
									User Role
								</div>
								<div class="form-check form-group">
									<select class="form-control" name="role_id" id="user_role_id">
										<option value="3">Staff</option>
										<option value="2">Manager</option>
										<option value="1" {{ Auth::user()->role_id != 1 ? 'disabled' : '' }}>Admin</option>
									</select>
								</div>
							</div>
						</div>
						{{-- BUTTON SET --}}
						<div class="row">
							<div class="update ml-auto mr-auto">
								<a href="{{ route('users.index') }}" class="btn btn-round">Cancel</a>
								<button id="submit-btn" type="submit" class="btn btn-danger btn-round">Save User</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
