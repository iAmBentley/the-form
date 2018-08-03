						{{-- PRODUCTS FORM --}}
						@foreach($products as $products) 
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
											        <input class="form-check-input" type="radio" name="{{$products->name}}" value="No" checked>
											        No
											        <span class="form-check-sign"></span>
											    </label>
											</div>
											<div class="form-check-radio pull-right ml-2">
											    <label class="form-check-label">
											        <input class="form-check-input" type="radio" name="{{$products->name}}" value="Yes" >
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
						@endforeach