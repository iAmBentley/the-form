@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card card-user">
				{{-- HEADER TITLE --}}
				<div class="card-header">
					<h5 class="card-title pull-left">Edit a User</h5>
					<form method="POST" action="/admin/users/{{ $user->id }}">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<input type="hidden" name="id" value="{{ $user->id }}">
						{{-- IF SIGNED IN USER IS USER SELECTED --}}
						@if(Auth::user()->id == $user->id)
							{{-- UPDATE PASSWORD BUTTON (TRIGGERS UPDATEPASSWORD() ON USERS) --}}
							<a href="/admin/users/{{$user->id}}/edit-pw" class="btn btn-danger btn-round pull-right mt-0" data-toggle="tooltip" title="Delete User">
								<i class="fa fa-pencil"></i> Change Password
							</a>
						@else
							{{-- DELETE BUTTON (TRIGGERS UPDATE() ON USERS) --}}
							<button value="{{ $user->id }}" 
								class="delete-user btn btn-danger btn-round pull-right mt-0" 
								data-toggle="tooltip" title="Delete User">
								<i class="fa fa-close"></i> Delete User
							</button>
						@endif
					</form>
				</div>
				<div class="card-body">
					@include('layouts.errors')
					{{-- USERS FORM --}}
					<form id="modulo" method="POST" action="/admin/users/{{ $user->id }}">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}
						<div class="row">
							{{-- NAME INPUT --}}
							<div class="col-md-6">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control {{ $errors->has('name') ? 'has-error' : '' }}" name="name" value="{{ $user->name }}" autofocus>
								</div>
							</div>
							{{-- ROLE DROPDOWN SELECT --}}
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
							{{-- EMAIL INPUT --}}
							<div class="col-md-12">
								<div class="form-group">
									<label>Email</label>
									<input type="text" 
										class="form-control {{ $errors->has('email') ? 'has-error' : '' }}" 
										name="email" 
										value="{{ $user->email }}">
								</div>
							</div>
						</div>
						{{-- BUTTON SET --}}
						<div class="row">
							<div class="update ml-auto mr-auto">
								<a class="btn btn-round" @if(Auth::user()->role_id != 3) href="{{ route('users.index') }}" @else href="{{ url('/orders') }}" @endif >Cancel </a>
							    <button id="submit-btn" type="submit" class="btn btn-danger btn-round">Save User</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
