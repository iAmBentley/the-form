@extends('layouts.app')

		@section('content')
			<!-- STORES FORM -->
			<div class="row">
				<div class="col-md-12 ml-auto mr-auto">
					<div class="card card-user">
						<div class="card-header">
							<h5 class="card-title">Edit a Store</h5>
						</div>
						<div class="card-body">

							@include('layouts.errors')
							
							<form method="POST" action="/admin/stores/{{ $store->id }}">
								{{ csrf_field() }}
								{{ method_field('PATCH') }}
								<div class="row">
									<div class="col-md-8">
										<div class="form-group">
											<label>Name</label>
											<input type="text" class="form-control" name="name" value="{{ $store->name }}" autofocus>
										</div>
									</div>

									<div class="col-md-4">
										<div class="chekbox-title-dropdowns">
											Status
										</div>
										<div class="form-check form-group">
											<select class="form-control" name="is_active" id="status">
												<option value="1" 
													{{ $store->is_active == 1 ? 'selected' : '' }}>
													Active
												</option>
												<option value="0" 
													{{ $store->is_active == 0 ? 'selected' : '' }}>
													Disabled
												</option>
											</select>
										</div>
									</div>

									<div class="col-sm-12">
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
														{{-- IF CATEGORY ID FROM CATEGORY TABLE EQUALS CATEGORY ID USED IN PIVOT TABLE MARK CHECKED --}}
														@foreach ($store->categories as $associatedCat)
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

								</div>
								<div class="row">
									<div class="update ml-auto mr-auto">
										<button type="submit" class="btn btn-danger btn-round">Save Store</button>
										<a href="{{ URL::previous() }}" class="btn btn-round">Cancel</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		@endsection
