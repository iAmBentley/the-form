@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card card-user">
				{{-- HEADER TITLE --}}
				<div class="card-header">
					<h5 class="card-title">Create a Vendor</h5>
				</div>
				<div class="card-body">
					@include('layouts.errors')
					{{-- VENDORS FORM --}}
					<form id="modulo" method="POST" action="{{ route('vendors.store') }}">
						@csrf
						<input type="hidden" name="is_active" value="1">
						<div class="row">
							{{-- NAME INPUT --}}
							<div class="col-md-6">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control {{ $errors->has('name') ? 'has-error' : '' }}" name="name" value="{{ old('name') }}" autofocus>
								</div>
							</div>
							{{-- SHORT_NAME INPUT --}}
							<div class="col-md-6">
								<div class="form-group">
									<label>Short Name</label>
									<input type="text" class="form-control {{ $errors->has('short_name') ? 'has-error' : '' }}" name="short_name" value="{{ old('short_name') }}" placeholder="Vendor Abbreviation">
								</div>
							</div>
						</div>
						{{-- BUTTON SELECT --}}
						<div class="row">
							<div class="update ml-auto mr-auto">
								<a href="{{ route('vendors.index') }}" class="btn btn-round">Cancel</a>
								<button id="submit-btn" type="submit" class="btn btn-danger btn-round">Save Vendor</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
