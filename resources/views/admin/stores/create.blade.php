@extends('layouts.app')

@section('content')
	{{-- STORES FORM --}}
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card card-user">
				<div class="card-header">
					<h5 class="card-title">Create a Store</h5>
				</div>
				<div class="card-body">

					@include('layouts.errors')
					
					<form id="modulo" method="POST" action="/admin/stores">
						{{ csrf_field() }}
						<input type="hidden" name="is_active" value="1">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" name="name" placeholder="Store Prefix + Store Street (ex: PH-Saluda)" autofocus>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="chekbox-title">
									Category (Choose All That Apply)
								</div>
								@foreach($categories as $category)
									<div class="form-check form-check-inline chekbox-align">
										<label class="form-check-label text-capitalize">
											<input class="form-check-input" type="checkbox" name="category[]" value="{{ $category->id }}">
											{{ $category->name }}
											<span class="chekbox form-check-sign"></span>
										</label>
									</div>
								@endforeach
							</div>
						</div>
						<div class="row">
							<div class="update ml-auto mr-auto">
								<button id="submit-btn" type="submit" class="btn btn-danger btn-round">Save Store</button>
								<a href="{{ route('stores.index') }}" class="btn btn-round">Cancel</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
