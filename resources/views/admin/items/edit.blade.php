@extends('layouts.app')

		@section('content')
			<!-- ITEMS FORM -->
			<div class="row">
				<div class="col-md-12 ml-auto mr-auto">
					<div class="card card-user">
						<div class="card-header">
							<h5 class="card-title">Edit an Item</h5>
						</div>
						<div class="card-body">

							@include('layouts.errors')

							<form method="POST" action="/admin/items/{{ $item->id }}">
								{{ csrf_field() }}
								{{ method_field('PATCH') }}
								<div class="row">
									{{-- ITEM NAME FIELD --}}
									<div class="col-md-8">
										<div class="form-group">
											<label>Name</label>
											<input type="text" class="form-control" name="name" value="{{ $item->name }}" autofocus>
										</div>
									</div>
									{{-- ITEM STATUS SELECT DROPDOWN --}}
									<div class="col-md-4">
										<div class="chekbox-title-dropdowns">
											Status
										</div>
										<div class="form-check form-group">
											<select class="form-control" name="is_active" id="status">
												<option value="1" 
													{{ $item->is_active == 1 ? 'selected' : '' }}>
													Active
												</option>
												<option value="0" 
													{{ $item->is_active == 0 ? 'selected' : '' }}>
													Disabled
												</option>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									{{-- CATEGORY CHECKBOXES --}}
									<div class="col-md-12">
										<div class="chekbox-title">
											Category (Choose All That Apply)
										</div>
										@foreach($categories as $category)
											<div class="form-check form-check-inline chekbox-align">
												<label class="form-check-label text-capitalize">
													<input class="form-check-input"
														type="checkbox" 
														name="category[]"
														value="{{ $category->id }}"
														@foreach ($item->categories as $associatedCat)
                                                            @if ($associatedCat->id == $category->id)
                                                                checked="checked"
                                                            @endif
                                                        @endforeach>
														{{ $category->name }}
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										@endforeach
									</div>

									{{-- SIZE CHECKBOXES --}}
									<div class="col-md-12">
										<div class="chekbox-title">
											Size (Choose All That Apply)
										</div>
										@foreach($sizes as $size)
											<div class="form-check form-check-inline chekbox-align">
												<label class="form-check-label text-capitalize">
													<input class="form-check-input"
														type="checkbox" 
														name="size[]"
														value="{{ $size->id }}"
														@foreach ($item->sizes as $associatedCat)
                                                            @if ($associatedCat->id == $size->id)
                                                                checked="checked"
                                                            @endif
                                                        @endforeach>
														{{ $size->name }}
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										@endforeach
									</div>

									{{-- STORE CHECKBOXES --}}
									<div class="col-md-12">
										<div class="chekbox-title">
											Store (Choose All That Apply)
										</div>
										@foreach($stores as $store)
										<div class="form-check form-check-inline chekbox-align">
											<label class="form-check-label text-capitalize">
												<input class="form-check-input"
													type="checkbox"
													name="store[]"
													value="{{ $store->id }}"
													@foreach ($item->stores as $associatedStore)
	                                                    @if ($associatedStore->id == $store->id)
	                                                        checked="checked"
	                                                    @endif
	                                                @endforeach>       
													{{ $store->name }}
												<span class="chekbox form-check-sign"></span>
											</label>
										</div>
										@endforeach
									</div>
								</div>

								<div class="row">
									{{-- VENDOR SELECT DROPDOWN --}}
									<div class="col-md-8">
										<div class="chekbox-title-dropdowns">
											Vendor (Flavors Only)
										</div>
										<div class="form-check form-group">
											<select class="form-control" id="status" name="vendor_id">
													<option value="0">None</option>
												@foreach($vendors as $vendor)
													<option value="{{ $vendor->id }}"
														{{ $vendor->id == $item->vendor_id ? 'selected' : '' }}>
														{{ $vendor->name }}
													</option>
												@endforeach
											</select>
										</div>
									</div>
									{{-- DRIP LINE CHECKBOXES --}}
									<div class="col-sm-4">
										<div class="chekbox-title">
											Drip Line (Juices Only)
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input class="form-check-input only-one-chekbox" type="checkbox" name="is_drip" value="1"
													{{ $item->is_drip == 1 ? 'checked="checked"' : '' }}>
												Yes
												<span class="chekbox form-check-sign"></span>
											</label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input class="form-check-input only-one-chekbox" type="checkbox" name="is_drip" value="0"
													{{ $item->is_drip == 0 ? 'checked="checked"' : '' }}>
												No
												<span class="chekbox form-check-sign"></span>
											</label>
										</div>
									</div>    
								</div>

								<div class="row">
									<div class="update ml-auto mr-auto">
										<button type="submit" class="btn btn-danger btn-round">Save Item</button>
										<a href="{{ route('items.index') }}" class="btn btn-round">Cancel</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		@endsection
