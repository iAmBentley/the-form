						{{-- SUPPLIES FORM --}}
						@foreach($supplies as $supplies) 		
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
														<input class="form-check-input " name="{{ $supplies->name }}" type="checkbox" value="no">
														No
														<span class="chekbox form-check-sign"></span>
													</label>
													<label class="form-check-label text-capitalize">
														<input class="form-check-input " name="{{ $supplies->name }}" type="checkbox" value="yes">
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
						@endforeach