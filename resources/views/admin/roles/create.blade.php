@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card card-user">
				{{-- HEADER TITLE --}}
				<div class="card-header">
					<h5 class="card-title">Create a Role</h5>
				</div>
				<div class="card-body">
					@include('layouts.errors')
					{{-- ROLES FORM --}}
					<form id="modulo" method="POST" action="/admin/roles">
						{{ csrf_field() }}
						{{-- NAME INPUT --}}
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control {{ $errors->has('name') ? 'has-error' : '' }}" name="name" autofocus>
								</div>
							</div>
						</div>
						{{-- BUTTON SET --}}
						<div class="row">
							<div class="update ml-auto mr-auto">
								<a href="{{ route('roles.index') }}" class="btn btn-round">Cancel</a>
								<button id="submit-btn" type="submit" class="btn btn-danger btn-round">Save Role</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
