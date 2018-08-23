@extends('layouts.app')

@section('content')
	{{-- USERS FORM --}}
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card card-user">
				<div class="card-header">
					<h5 class="card-title">Edit a User</h5>
				</div>
				<div class="card-body">
				
					@include('layouts.errors')

					<form id="modulo" method="POST" action="/admin/users/{{ $user->id }}">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" name="name" value="{{ $user->name }}" autofocus>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Email</label>
									<input type="text" class="form-control" name="email" value="{{ $user->email }}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password" value="{{ $user->password }}">
								</div>
							</div>
							<div class="col-md-4">
								<div class="chekbox-title-dropdowns">
									User Role
								</div>
								<div class="form-check form-group">
									<select class="form-control" id="role_id" name="role_id">
										<option value="3" {{ $user->role_id == 3 ? 'selected' : '' }}>Staff</option>
										<option value="2" {{ $user->role_id == 2 ? 'selected' : '' }}>Manager</option>
										<option value="1" {{ $user->role_id == 1 ? 'selected' : '' }}>Admin</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="chekbox-title-dropdowns">
									Status
								</div>
								<div class="form-check form-group">
									<select class="form-control" id="status" name="is_active">
										<option value="1" {{ $user->is_active == 1 ? 'selected' : '' }}>Active</option>
										<option value="0" {{ $user->is_active == 0 ? 'selected' : '' }}>Disabled</option>
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
