@extends('layouts.app')

@section('orders-ajax-scripts')
	<script>
		var storesByCatURL = '/orders/getStoresByCat';
		var formItemsURL = '/orders/getFormItems';
	</script>
	<script src="{{ asset('/js/orders-ajax.js') }}"></script>
@endsection

@section('content')
	{{-- ITEMS FORM --}}
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">

			@include('layouts.errors')
			
			<form id="modulo" method="POST" action="/orders">
				{{ csrf_field() }}
				{{-- ITEMS SETUP CARD --}}
				<div class="card card-user">
					<div class="card-header">
						<h5 class="card-title pull-left">Create an Order</h5>
						<a href="/orders" class="create-btn btn btn-default btn-just-icon pull-right">
							<i class="fa fa-close"></i>
						</a>
					</div>
					<div class="card-body">
						<div class="row">
							<input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}">
							<input type="hidden" class="form-control" name="is_filled" value="0">
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
					{{-- FORM INJECTED BY JAVASCRIPT BASED ON CATEGORY CHOSEN IN DROPDOWN ON TOP OF FORM --}}
				</div>
			</form>
		</div>
	</div>
@endsection
