@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card card-user">
				{{-- HEADER TITLE --}}
				<div class="card-header">
					<h5 class="card-title">Edit a Vendor</h5>
				</div>
				<div class="card-body">
					@include('layouts.errors')
					{{-- VENDORS FORM --}}
					<form id="modulo" method="POST" action="/admin/vendors/{{ $vendor->id }}">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}
						<div class="row">
							{{-- NAME INPUT --}}
							<div class="col-md-4">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control {{ $errors->has('name') ? 'has-error' : '' }}" name="name" value="{{ $vendor->name }}" autofocus>
								</div>
							</div>
							{{-- SHORT_NAME INPUT --}}
							<div class="col-md-4">
								<div class="form-group">
									<label>Short Name</label>
									<input type="text" class="form-control {{ $errors->has('short_name') ? 'has-error' : '' }}" name="short_name" value="{{ $vendor->short_name }}" placeholder="Vendor Abbreviation">
								</div>
							</div>
							{{-- STATUS DROPDOWN SELECT --}}
							<div class="col-md-4">
								<div class="chekbox-title-dropdowns">
									Status
								</div>
								<div class="form-check form-group">
									<select class="form-control" name="is_active" id="status">
										<option value="1" {{ $vendor->is_active == 1 ? 'selected' : '' }}>Active</option>
										<option value="0" {{ $vendor->is_active == 0 ? 'selected' : '' }}>Disabled</option>
									</select>
								</div>
							</div>
						</div>
						{{-- BUTTON SET --}}
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
