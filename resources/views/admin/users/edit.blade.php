@extends('layouts.app')

@section('content')
	{{-- USERS FORM --}}
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card card-user">
				<div class="card-header">
					<h5 class="card-title pull-left">Edit a User</h5>
					<form method="POST" action="/admin/users/{{ $user->id }}">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<input type="hidden" name="id" value="{{ $user->id }}">
						{{-- DELETE BUTTON (TRIGGERS UPDATE() ON ORDERS) --}}
						<button value="{{ $user->id }}" class="delete-user btn btn-danger btn-round pull-right mt-0" data-toggle="tooltip" title="Delete User">
							<i class="fa fa-close"></i> Delete User
						</button>
					</form>
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
							<div class="col-md-6">
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="chekbox-title-dropdowns">
									User Role
								</div>
								<div class="form-check form-group">
									<select class="form-control" id="role_id" name="role_id">
										<option value="3" {{ $user->role_id == 3 ? 'selected' : '' }}>Staff</option>
										<option value="2" {{ $user->role_id == 2 ? 'selected' : '' }} {{ Auth::user()->role_id == 3 ? 'disabled' : '' }}>Manager</option>
										<option value="1" {{ $user->role_id == 1 ? 'selected' : '' }} {{ Auth::user()->role_id != 1 ? 'disabled' : '' }}>Admin</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="update ml-auto mr-auto">
								<button id="submit-btn" type="submit" class="btn btn-danger btn-round">Save User</button>
								<a 
									@if(\Auth::user()->role_id != 3)
							            href="{{ route('users.index') }}"
							        @else
							            href="{{ url('/orders') }}"
							        @endif
							        class="btn btn-round">Cancel
							    </a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
