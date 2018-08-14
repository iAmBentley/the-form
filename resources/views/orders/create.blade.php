@extends('layouts.app')

@section('orders-ajax-scripts')
<script> var orderCreateURL = '/orders/storesbycat'; </script>
<script src="{{ asset('/js/orders-ajax.js') }}"></script>
@endsection
<
		@section('content')
			<!-- ITEMS FORM -->
			<div class="row">
				<div class="col-md-12 ml-auto mr-auto">
					
					<form method="POST" action="/orders/create">
						{{ csrf_field() }}

						{{-- ITEMS SETUP CARD --}}
						<div class="card card-user">
							<div class="card-header">
								<h5 class="card-title">Create an Order</h5>
							</div>
							<div class="card-body">
								<div class="row">
									<input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}">
									<input type="hidden" class="form-control" name="is_active" value="1">

									<div id="form-category" class="col-md-6">
										<div class="chekbox-title-dropdowns">
											Form - What do you need?
										</div>
										<div class="form-check form-group">
											<select class="text-capitalize form-control" id="category_select" name="category_id">
												<option value="">Choose One</option>
												@foreach($categories as $category)
													<option value="{{ $category->id }}">{{ $category->name }}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div id="form-store" class="col-md-6">
										<div class="chekbox-title-dropdowns">
											Store - Where is it needed?
										</div>
										<div class="form-check form-group">
											<select class="text-capitalize form-control" id="store_select" name="store_id">
												<option value="" selected>Choose One</option>
												
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div id="form-body" class="card card-user">
							@include('forms.flavors')
						</div>

						<div class="card card-user">
							@include('forms.juices')
						</div>

						<div class="card card-user">
							@include('forms.labels')
						</div>

						<div class="card card-user">
							@include('forms.products')
						</div>

						<div class="card card-user">
							@include('forms.supplies')
						</div>

					</form>

				</div>
				
			</div>
		@endsection
