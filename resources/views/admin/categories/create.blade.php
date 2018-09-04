@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card card-user">
				{{-- HEADER TITLE --}}
				<div class="card-header">
					<h5 class="card-title">Create a Category</h5>
				</div>
				<div class="card-body">
					@include('layouts.errors')
					{{-- CATEGORIES FORM --}}
					<form id="modulo" method="POST" action="/admin/categories">
						{{ csrf_field() }}
						<input type="hidden" name="is_active" value="1">
						{{-- NAME INPUT --}}
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control {{ $errors->has('name') ? 'has-error' : '' }}" name="name" value="{{ old('name') }}" autofocus>
								</div>
							</div>
						</div>
						{{-- BUTTON SET --}}
						<div class="row">
							<div class="update ml-auto mr-auto">
								<a href="{{ route('categories.index') }}" class="btn btn-round">Cancel</a>
								<button id="submit-btn" type="submit" class="btn btn-danger btn-round">Save Category</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
