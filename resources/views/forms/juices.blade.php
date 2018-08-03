						{{-- JUICES FORM --}}
						@foreach($juices as $juice)
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
													<input class="form-check-input" name="{{$juices->name}}" type="checkbox" value="No">
													None
													<span class="chekbox form-check-sign"></span>
												</label>
												
												@foreach($juiceSizes as $size)
													<label class="form-check-label text-capitalize">
														<input class="form-check-input" name="{{$juices->name}}" type="checkbox" value="{{ $size->name }}">
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
														<input class="form-check-input" name="{{$dripline->name}}" type="checkbox" value="No">
														None
														<span class="chekbox form-check-sign"></span>
													</label>
													
													@foreach($juiceSizes as $size)
														<label class="form-check-label text-capitalize">
															<input class="form-check-input" name="{{$dripline->name}}" type="checkbox" value="{{ $size->name }}">
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
						@endforeach