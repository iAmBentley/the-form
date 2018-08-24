@extends('layouts.app')

@section('content')
	{{-- USERS FORM --}}
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card card-user">
				<div class="card-header">
					<h5 class="card-title">Create a User</h5>
				</div>
				<div class="card-body">

					@include('layouts.errors')

					<form id="modulo" method="POST" action="/admin/users">
						{{ csrf_field() }}
						<input type="hidden" name="is_active" value="1">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" name="name" placeholder="No two names the same" autofocus>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="email" placeholder="Required for Admin + Managers">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password" placeholder="Ex: last 4 of SSN">
								</div>
							</div>
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
						<div class="row">
							<div class="update ml-auto mr-auto">
								<button id="submit-btn" type="submit" class="btn btn-danger btn-round">Save User</button>
								<a href="{{ route('users.index') }}" class="btn btn-round">Cancel</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
