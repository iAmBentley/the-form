@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card card-user">
				{{-- HEADER TITLE --}}
				<div class="card-header">
					<h5 class="card-title">Create a Size</h5>
				</div>
				<div class="card-body">
					@include('layouts.errors')
					{{-- SIZES FORM --}}
					<form id="modulo" method="POST" action="/admin/sizes">
						{{ csrf_field() }}
						<input type="hidden" name="is_active" value="1">
						{{-- NAME INPUT --}}
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control {{ $errors->has('name') ? 'has-error' : '' }}" name="name" autofocus>
								</div>
							</div>
						</div>
						{{-- CATEGORY CHECKBOXES --}}
						<div class="row">
							<div class="col-sm-12">
								<div class="chekbox-title">
									Category (Choose One)
								</div>
								@foreach($categories as $category)
									<div class="form-check form-check-inline chekbox-align">
										<label class="form-check-label text-capitalize">
											<input class="form-check-input only-one-chekbox" type="checkbox" name="category_id" value="{{ $category->id }}">
											{{ $category->name }}
											<span class="chekbox form-check-sign"></span>
										</label>
									</div>
								@endforeach
							</div>
						</div>
						{{-- BUTTON SET --}}
						<div class="row">
							<div class="update ml-auto mr-auto">
								<a href="{{ route('sizes.index') }}" class="btn btn-round">Cancel</a>
								<button id="submit-btn" type="submit" class="btn btn-danger btn-round">Save Size</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
