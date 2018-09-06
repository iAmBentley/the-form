@extends('layouts.app')

@section('content')
	{{-- CATEGORIES TABLE --}}
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card">
				{{-- TABLE TITLE --}}
				<div class="card-header">
					<h4 class="card-title pull-left">Categories <small class="sm-text-jb">({{ $categories->count() }})</small></h4>
					<a href="categories/create" class="create-btn btn btn-danger btn-just-icon pull-right">
						<i class="fa fa-plus"></i>
					</a>
				</div>
				{{-- TABLE --}}
				<div class="card-body">
					<div class="table-responsive">
						<table class="table" id="clickable-table">
							<thead class="text-primary">
								<tr>
									<th>Name</th>
									<th class="d-none d-sm-block">Status</th>
								</tr>
							</thead>
							<tbody>
								{{-- BRING IN AND LOOP THROUGH CATEGORIES FROM DATABASE --}}
								@foreach($categories as $category)
									<tr data-id="{{$category->id}}" data-location="/admin/categories/{{$category->id}}/edit">
										<td class="text-capitalize">{{ $category->name }}</td>
										{{-- IF CATEGORY IS_ACTIVE MARK ACTIVE ELSE DISABLED --}}
										<td class="d-none d-sm-block">{{ $category->is_active == 1 ? 'Active' : 'Disabled' }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
