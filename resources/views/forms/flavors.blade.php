						{{-- FLAVORS FORM --}}
						@foreach($flavors as $flavor)
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
													<input class="form-check-input" name="{{$flavor->name}}" type="checkbox" value="No">
													None
													<span class="chekbox form-check-sign"></span>
												</label>
												@foreach($flavor->sizes as $size)
													<label class="form-check-label text-capitalize">
														<input class="form-check-input" name="{{$flavor->name}}" type="checkbox" value="{{ $size->name }}">
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
						@endforeach