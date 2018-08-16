						{{-- LABELS FORM --}}
						@foreach($labels as $labels)
							<div class="card-header">
								<h5 class="card-title text-capitalize">Labels</h5>
							</div>
							<div class="card-body">
								<div class="row">
									@foreach($labels->items as $labels)

										<div id="form-category" class="col-lg-6 col-xl-4">
											<div class="chekbox-title-dropdowns text-capitalize">
												{{ $labels->name }}
											</div>
											<div class="form-check form-group">
												<select class="text-capitalize form-control" id="category_select" name="items[{{ $labels->name }}]">
													<option value="NULL">None</option>
													@foreach($labelSizes as $size)
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