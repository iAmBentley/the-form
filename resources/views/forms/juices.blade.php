						{{-- JUICES FORM --}}
						@foreach($juices as $juice)
							<div class="card-header">
									<h5 class="card-title text-capitalize">juices</h5>
								</div>
								<div class="card-body">
									<div class="row">
										
										@foreach($juice->items as $juices)	
											<div class="col-lg-6 col-xl-4">
												
												<div class="chekbox-title text-capitalize pull-left">
													{{ $juices->name }}
												</div>

												<div class="form-check-radio pull-right ml-2">
												    <label class="form-check-label">
												        <input class="form-check-input" type="radio" name="{{$juices->name}}" value="No" checked>
												        No
												        <span class="form-check-sign"></span>
												    </label>
												</div>
												<div class="form-check-radio pull-right ml-2">
												    <label class="form-check-label">
												        <input class="form-check-input" type="radio" name="{{$juices->name}}" value="Yes" >
												        Yes
												        <span class="form-check-sign"></span>
												    </label>
												</div>

												<hr style="width:100%;margin:45px 0 25px 0;"/>

											</div>
										@endforeach

										@foreach($juice->items as $dripline)
											@if($dripline->is_drip == 1)
												<div class="col-lg-6 col-xl-4">

													<div class="chekbox-title text-capitalize pull-left">
														{{ $dripline->name }} | Drip Line
													</div>

													<div class="form-check-radio pull-right ml-2">
													    <label class="form-check-label">
													        <input class="form-check-input" type="radio" name="{{$dripline->name}} | Drip Line" value="No" checked>
													        No
													        <span class="form-check-sign"></span>
													    </label>
													</div>
													<div class="form-check-radio pull-right ml-2">
													    <label class="form-check-label">
													        <input class="form-check-input" type="radio" name="{{$dripline->name}} | Drip Line" value="Yes" >
													        Yes
													        <span class="form-check-sign"></span>
													    </label>
													</div>

													<hr style="width:100%;margin:45px 0 25px 0;"/>

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