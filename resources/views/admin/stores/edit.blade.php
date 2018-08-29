@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card card-user">
				{{-- HEADER TITLE --}}
				<div class="card-header">
					<h5 class="card-title">Edit a Store</h5>
				</div>
				<div class="card-body">
					@include('layouts.errors')
					{{-- STORES FORM --}}
					<form id="modulo" method="POST" action="/admin/stores/{{ $store->id }}">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}
						<div class="row">
							{{-- NAME INPUT --}}
							<div class="col-md-8">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control {{ $errors->has('name') ? 'has-error' : '' }}" name="name" value="{{ $store->name }}" autofocus>
								</div>
							</div>
							{{-- STATUS DROPDOWN SELECT --}}
							<div class="col-md-4">
								<div class="chekbox-title-dropdowns">
									Status
								</div>
								<div class="form-check form-group">
									<select class="form-control " name="is_active" id="status">
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
							{{-- CATEGORY CHECKBOXES --}}
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
						{{-- BUTTON SET --}}
						<div class="row">
							<div class="update ml-auto mr-auto">
								<a href="{{ route('stores.index') }}" class="btn btn-round">Cancel</a>
								<button id="submit-btn" type="submit" class="btn btn-danger btn-round">Save Store</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
