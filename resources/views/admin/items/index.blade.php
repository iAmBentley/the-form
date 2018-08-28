@extends('layouts.app')

@section('content')
	{{-- ITEMS TABLE --}}
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title pull-left">Items <small class="sm-text-jb">({{ $items->count() }})</small></h4>
					<a href="items/create" class="create-btn btn btn-danger btn-just-icon pull-right">
						<i class="fa fa-plus"></i>
					</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table" id="clickable-table">
							<thead class="text-primary">
								<tr>
									<th>Name</th>
									<th class="d-none d-sm-table-cell">Category</th>
									<th class="d-none d-sm-table-cell">Status</th>
									<th class="text-right">Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($items as $item)
									<tr>
										<td class="text-capitalize">{{ $item->name }}</td>
										<td class="d-none d-sm-table-cell text-capitalize">
											@foreach($item->categories as $key => $category)
												@if($key)
													,&nbsp;
												@endif
												{{ $category->name }}
											@endforeach
										</td>
										<td class="d-none d-sm-table-cell">{{ $item->is_active == 1 ? 'Active' : 'Disabled' }}</td>
										<td class="text-right">
											<a href="items/{{ $item->id }}/edit" class="btn btn-info btn-icon btn-sm">
												<i class="fa fa-pencil"></i>
											</a>
										</td>
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
