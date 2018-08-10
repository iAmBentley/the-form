						{{-- FLAVORS FORM --}}
						@foreach($flavors as $flavor)
							<div class="card-header">
									<h5 class="card-title text-capitalize">flavors</h5>
								</div>
								<div class="card-body">
									<div class="row">
										@foreach($flavor->items as $flavor)
											
											<div id="form-category" class="col-lg-6 col-xl-4">
												<div class="chekbox-title-dropdowns text-capitalize">
													{{ $flavor->name }}
												</div>
												<div class="form-check form-group">
													<select class="text-capitalize form-control" name="{{ $flavor->name }}" id="category_select">
														<option value="">None</option>
														@foreach($flavor->sizes as $size)
															<option value="{{ $size->name }}">{{ $size->name }}</option>
														@endforeach
													</select>
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
						@endforeach