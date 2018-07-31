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
									<input type="text" hidden class="form-control" name="user_id" value="{{ Auth::user()->id }}">
									<input type="text" hidden class="form-control" name="is_active" value="1">

									<div class="col-md-6">
										<div class="chekbox-title-dropdowns">
											Form - What do you need?
										</div>
										<div class="form-check form-group">
											<select class="text-capitalize form-control" id="category_id" name="category_id">
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

			            {{-- PRODUCTS FORM --}}
						@foreach($products as $products) 
							<div class="card card-user">
								<div class="card-header">
									<h5 class="card-title text-capitalize">products</h5>
								</div>
								<div class="card-body">
									<div class="row">

										@foreach($products->items as $products)
											<div class="col-md-4">
												<div class="chekbox-title text-capitalize pull-left">
													{{ $products->name }}
												</div>

												{{-- <div class="checkbox-slider pull-right">
													<input type="checkbox" id="checkbox-{{$products->id}}" name="{{ $products->name}}" value="1">
													<label for="checkbox" class="slider"></label>
												</div> --}}

												<div class="form-check-radio pull-right ml-2">
												    <label class="form-check-label">
												        <input class="form-check-input" type="radio" name="{{$products->name}}" value="0" checked>
												        No
												        <span class="form-check-sign"></span>
												    </label>
												</div>
												<div class="form-check-radio pull-right ml-2">
												    <label class="form-check-label">
												        <input class="form-check-input" type="radio" name="{{$products->name}}" value="1" >
												        Yes
												        <span class="form-check-sign"></span>
												    </label>
												</div>

												<hr style="width:100%;margin:45px 0 25px 0;"/>

												{{-- <div class="form-check form-check-inline chekbox-align">
													<label class="form-check-label text-capitalize" hidden>
														<input class="form-check-input only-one-chekbox" name="size_id" type="checkbox" value="0">
														No
														<span class="chekbox form-check-sign"></span>
													</label>
													@foreach($products->sizes as $size)
														<label class="form-check-label text-capitalize">
															<input class="form-check-input only-one-chekbox" name="size[]" type="checkbox" value="{{ $size->id }}">
															{{ $size->name }}
															<span class="chekbox form-check-sign"></span>
														</label>
													@endforeach
												</div> --}}
											</div>
										@endforeach
									</div>

									<div class="row">
										<div class="update ml-auto mr-auto">
											<button type="submit" class="btn btn-danger btn-round">Send Order</button>
										</div>
									</div>
								</div>	
							</div>
						@endforeach

						{{-- FLAVORS FORM --}}
						@foreach($flavors as $flavor) 
							<div class="card card-user">
								<div class="card-header">
									<h5 class="card-title text-capitalize">flavors</h5>
								</div>
								<div class="card-body">
									<div class="row">
										@foreach($flavor->items as $flavor)
											<div class="col-md-6">
												<div class="chekbox-title text-capitalize">
													{{ $flavor->name }}
												</div>

												<div class="form-check form-check-inline chekbox-align">
													<label class="form-check-label text-capitalize">
														<input class="form-check-input only-one-chekbox" name="size_id" type="checkbox" value="">
														None
														<span class="chekbox form-check-sign"></span>
													</label>
													@foreach($flavor->sizes as $size)
														<label class="form-check-label text-capitalize">
															<input class="form-check-input only-one-chekbox" name="size[]" type="checkbox" value="{{ $size->id }}">
															{{ $size->name }}
															<span class="chekbox form-check-sign"></span>
														</label>
													@endforeach
												</div>
											</div>
										@endforeach
									</div>

									<div class="row">
										<div class="update ml-auto mr-auto">
											<button type="submit" class="btn btn-danger btn-round">Send Order</button>
										</div>
									</div>
								</div>	
							</div>
						@endforeach

						{{-- JUICES FORM --}}
						@foreach($juices as $juice) 
							<div class="card card-user">
								<div class="card-header">
									<h5 class="card-title text-capitalize">juices</h5>
								</div>
								<div class="card-body">
									<div class="row">
										
										@foreach($juice->items as $juices)
											<div class="col-md-6">
												<div class="chekbox-title text-capitalize">
													{{ $juices->name }}
												</div>

												<div class="form-check form-check-inline chekbox-align">
													<label class="form-check-label text-capitalize" hidden>
														<input class="form-check-input only-one-chekbox" name="size_id" type="checkbox" value="0">
														None
														<span class="chekbox form-check-sign"></span>
													</label>
													
													@foreach($juiceSizes as $size)
														<label class="form-check-label text-capitalize">
															<input class="form-check-input only-one-chekbox" name="size_id" type="checkbox" value="{{ $size->id }}">
															{{ $size->name }}
															<span class="chekbox form-check-sign"></span>
														</label>
													@endforeach

												</div>
											</div>
										@endforeach

										@foreach($juice->items as $dripline)

										@if($dripline->is_drip == 1)
											<div class="col-md-6">
												<div class="chekbox-title text-capitalize">
													{{ $dripline->name }} | Drip Line
												</div>

												<div class="form-check form-check-inline chekbox-align">
													<label class="form-check-label text-capitalize" hidden>
														<input class="form-check-input only-one-chekbox" name="size_id" type="checkbox" value="0">
														None
														<span class="chekbox form-check-sign"></span>
													</label>
													
													@foreach($juiceSizes as $size)
														<label class="form-check-label text-capitalize">
															<input class="form-check-input only-one-chekbox" name="size[]" type="checkbox" value="{{ $size->id }}">
															{{ $size->name }}
															<span class="chekbox form-check-sign"></span>
														</label>
													@endforeach

												</div>
											</div>
											@endif
										@endforeach

									</div>

									<div class="row">
										<div class="update ml-auto mr-auto">
											<button type="submit" class="btn btn-danger btn-round">Send Order</button>
										</div>
									</div>
								</div>	
							</div>
						@endforeach

						{{-- LABELS FORM --}}
						@foreach($labels as $labels) 
							<div class="card card-user">
								<div class="card-header">
									<h5 class="card-title text-capitalize">Labels</h5>
								</div>
								<div class="card-body">
									<div class="row">
										@foreach($labels->items as $labels)
											<div class="col-md-6">
												<div class="chekbox-title text-capitalize">
													{{ $labels->name }}
												</div>

												<div class="form-check form-check-inline chekbox-align">
													<label class="form-check-label text-capitalize">
														<input class="form-check-input" name="size_id" type="checkbox" value="">
														None
														<span class="chekbox form-check-sign"></span>
													</label>
													@foreach($labelSizes as $size)
														<label class="form-check-label text-capitalize">
															<input class="form-check-input" name="size[]" type="checkbox" value="{{ $size->id }}">
															{{ $size->name }}
															<span class="chekbox form-check-sign"></span>
														</label>
													@endforeach
												</div>
											</div>
										@endforeach
									</div>

									<div class="row">
										<div class="update ml-auto mr-auto">
											<button type="submit" class="btn btn-danger btn-round">Send Order</button>
										</div>
									</div>
								</div>	
							</div>
						@endforeach

						{{-- SUPPLIES FORM --}}
						@foreach($supplies as $supplies) 
							<div class="card card-user">
								<div class="card-header">
									<h5 class="card-title text-capitalize">supplies</h5>
								</div>
								<div class="card-body">
									<div class="row">
										@foreach($supplies->items as $supplies)
											<div class="col-sm-6 col-md-4">
												<div class="chekbox-title text-capitalize pull-left">
													{{ $supplies->name }}
												</div>

												<div class="form-check form-check-inline pull-right m-0">
													
													@foreach($supplies->sizes as $size)
														<label class="form-check-label text-capitalize ">
															<input class="form-check-input " name="{{ $size->name }}" type="checkbox" value="">
															No
															<span class="chekbox form-check-sign"></span>
														</label>
														<label class="form-check-label text-capitalize">
															<input class="form-check-input " name="{{ $size->name }}" type="checkbox" value="{{ $size->name }}">
															{{ $size->name }}
															<span class="chekbox form-check-sign"></span>
														</label>
													@endforeach
												</div>
												<hr style="width:100%;margin:45px 0 25px 0;"/>
											</div>

										@endforeach
									</div>

									<div class="row">
										<div class="update ml-auto mr-auto">
											<button type="submit" class="btn btn-danger btn-round">Send Order</button>
										</div>
									</div>
								</div>	
							</div>
						@endforeach
					</form>

				</div>
			</div>
		@endsection
