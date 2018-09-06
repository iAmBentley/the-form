@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card">
				{{-- TABLE TITLE --}}
				<div class="card-header">
					<h4 class="card-title pull-left">Sizes <small class="sm-text-jb">({{ $sizes->count() }})</small></h4>
					<a href="sizes/create" class="create-btn btn btn-danger btn-just-icon pull-right">
						<i class="fa fa-plus"></i>
					</a>
				</div>
				{{-- SIZES TABLE --}}
				<div class="card-body">
					<div class="table-responsive">
						<table class="table" id="clickable-table">
							<thead class="text-primary">
								<tr>
									<th>Name</th>
									<th>Category</th>
									<th class="d-none d-sm-block">Status</th
								</tr>
							</thead>
							<tbody>
								{{-- BRING IN SIZES FROM DATABASE --}}
								@foreach($sizes as $size)
								<tr data-id="{{$size->id}}" data-location="/admin/sizes/{{$size->id}}/edit">
									<td class="text-capitalize">{{ $size->name }}</td>
									<td class="text-capitalize">{{ $size->categories->name }}</td>
									<td class="d-none d-sm-block">{{ $size->is_active == 1 ? 'Active' : 'Disabled' }}</td>
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
