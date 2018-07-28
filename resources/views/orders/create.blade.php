@extends('layouts.app')

		@section('content')
			<!-- ITEMS FORM -->
			<div class="row">
				<div class="col-md-12 ml-auto mr-auto">
					
					<form method="POST" action="/orders/create">
						{{-- ITEMS SETUP CARD --}}
						<div class="card card-user">
							<div class="card-header">
								<h5 class="card-title">Create an Order</h5>
							</div>
							<div class="card-body">
								<div class="row">
									<input type="text" hidden class="form-control" name="name" value="{{ Auth::user()->name }}">
									<input type="text" hidden class="form-control" name="is_active" value="1">

									<div class="col-md-6">
										<div class="chekbox-title-dropdowns">
											Form - What do you need?
										</div>
										<div class="form-check form-group">
											<select class="text-capitalize form-control" id="vendor_id" name="vendor_id">
												<option value="">Choose One</option>
												@foreach($categories as $category)
													<option value="{{ $category->id }}">{{ $category->name }}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="chekbox-title-dropdowns">
											Store - Where is it needed?
										</div>
										<div class="form-check form-group">
											<select class="text-capitalize form-control" id="store_id" name="store_id">
												<option value="">Choose One</option>
												@foreach($stores as $store)
													<option value="{{ $store->id }}">{{ $store->name }}</option>
												@endforeach
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						{{-- FLAVORS CARD --}}
						<div class="card card-user">
							<div class="card-header">
								<h5 class="card-title">Flavors</h5>
							</div>
							<div class="card-body">
								<div class="row">
									<input type="text" hidden class="form-control" name="name" placeholder="Name of Item">

									<div class="col-md-12">
										<div class="chekbox-title pull-left">
											CAP - Butter
										</div>
										<div class="pull-right">
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="flavors">
													16 oz
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="labels">
													32 oz
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="juices">
													64 oz
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="products">
													1 gal
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="supplies">
													2 gal
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="chekbox-title pull-left">
											CAP - Fuji Apple
										</div>
										<div class="pull-right">
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="flavors">
													16 oz
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="labels">
													32 oz
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="juices">
													64 oz
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="products">
													1 gal
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="supplies">
													2 gal
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="chekbox-title pull-left">
											CAP - Sweet Mango
										</div>
										<div class="pull-right">
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="flavors">
													16 oz
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="labels">
													32 oz
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="juices">
													64 oz
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="products">
													1 gal
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="supplies">
													2 gal
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										</div>
									</div>

									<hr style="width:100%;margin: 0 15px 25px 15px;" />
									
									<div class="col-md-12">
										<div class="chekbox-title pull-left">
											FW - Menthol
										</div>
										<div class="pull-right">
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="flavors">
													16 oz
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="labels">
													32 oz
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="juices">
													64 oz
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="products">
													1 gal
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="supplies">
													2 gal
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										</div>
									</div>

									<hr style="width:100%;margin: 0 15px 25px 15px;" />

								</div>

								<div class="row">
									<div class="update ml-auto mr-auto">
										<button type="submit" class="btn btn-danger btn-round">Send Order</button>
									</div>
								</div>
							</div>
						</div>
						{{-- SUPPLIES CARD --}}
						<div class="card card-user">
							<div class="card-header">
								<h5 class="card-title">Supplies</h5>
							</div>
							<div class="card-body">
								<div class="row">
									<input type="text" hidden class="form-control" name="name" placeholder="Name of Item">

									<div class="col-md-12">
										<div class="chekbox-title pull-left">
											Windex
										</div>
										<div class="pull-right">
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="flavors">
													Yes
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="labels">
													No
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="chekbox-title pull-left">
											Paper Towels
										</div>
										<div class="pull-right">
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="flavors">
													Yes
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="labels">
													No
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="chekbox-title pull-left">
											Bottle Nips
										</div>
										<div class="pull-right">
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="flavors">
													Yes
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="labels">
													No
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="chekbox-title pull-left">
											Bottles - Black
										</div>
										<div class="pull-right">
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="flavors">
													Yes
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="labels">
													No
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="chekbox-title pull-left">
											Bottles - Clear
										</div>
										<div class="pull-right">
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="flavors">
													Yes
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="labels">
													No
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="chekbox-title pull-left">
											Caps - White
										</div>
										<div class="pull-right">
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="flavors">
													Yes
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="labels">
													No
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										</div>
									</div>

								</div>

								<div class="row">
									<div class="update ml-auto mr-auto">
										<button type="submit" class="btn btn-danger btn-round">Send Order</button>
									</div>
								</div>
							</div>
						</div>
						{{-- PRODUCTS CARD --}}
						<div class="card card-user">
							<div class="card-header">
								<h5 class="card-title">Products</h5>
							</div>
							<div class="card-body">
								<div class="row">
									<input type="text" hidden class="form-control" name="name" placeholder="Name of Item">

									<div class="col-md-12">
										<div class="chekbox-title pull-left">
											650 Starter Kit - Black
										</div>
										<div class="pull-right">
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="flavors">
													Yes
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="labels">
													No
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="chekbox-title pull-left">
											650 Starter Kit - Stainless
										</div>
										<div class="pull-right">
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="flavors">
													Yes
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="labels">
													No
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="chekbox-title pull-left">
											CE4 Clearomizers
										</div>
										<div class="pull-right">
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="flavors">
													Yes
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="labels">
													No
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="chekbox-title pull-left">
											USB Chargers
										</div>
										<div class="pull-right">
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="flavors">
													Yes
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="labels">
													No
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="chekbox-title pull-left">
											Wall Charger Adapter
										</div>
										<div class="pull-right">
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="flavors">
													Yes
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="labels">
													No
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<div class="chekbox-title pull-left">
											Car Charger Adapter
										</div>
										<div class="pull-right">
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="flavors">
													Yes
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline ">
												<label class="form-check-label">
													<input class="form-check-input only-one-chekbox" type="checkbox" value="labels">
													No
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										</div>
									</div>

								</div>

								<div class="row">
									<div class="update ml-auto mr-auto">
										<button type="submit" class="btn btn-danger btn-round">Send Order</button>
									</div>
								</div>
							</div>
						</div>
					</form>

				</div>
			</div>
		@endsection
