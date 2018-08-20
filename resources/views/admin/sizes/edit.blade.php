@extends('layouts.app')

		@section('content')
			<!-- SIZES FORM -->
			<div class="row">
				<div class="col-md-12 ml-auto mr-auto">
					<div class="card card-user">
						<div class="card-header">
							<h5 class="card-title">Edit a Size</h5>
						</div>
						<div class="card-body">

							@include('layouts.errors')

							<form method="POST" action="/admin/sizes/{{ $size->id }}">
								{{ csrf_field() }}
								{{ method_field('PATCH') }}
								<div class="row">
									<div class="col-md-8">
										<div class="form-group">
											<label>Name</label>
											<input type="text" class="form-control" name="name" value="{{ $size->name}}" autofocus>
										</div>
									</div>
									<div class="col-md-4">
										<div class="chekbox-title-dropdowns">
											Status
										</div>
										<div class="form-check form-group">
											<select class="form-control" name="is_active" id="status">
												<option value="1" 
													{{ $size->is_active == 1 ? 'selected' : '' }}>
													Active
												</option>
												<option value="0" 
													{{ $size->is_active == 0 ? 'selected' : '' }}>
													Disabled
												</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="chekbox-title">
											Category (One Per Size)
										</div>
										
										@foreach($categories as $category)
											<div class="form-check form-check-inline chekbox-align">
												<label class="form-check-label text-capitalize">
													<input class="form-check-input only-one-chekbox"
														type="checkbox" 
														name="category_id"
														value="{{ $category->id }}"
														{{ $category->id == $size->category_id ? 'checked' : '' }}>
													{{ $category->name }}
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										@endforeach
										
									</div>
								</div>
								<div class="row">
									<div class="update ml-auto mr-auto">
										<button type="submit" class="btn btn-danger btn-round">Save Size</button>
										<a href="{{ route('sizes.index') }}" class="btn btn-round">Cancel</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		@endsection
