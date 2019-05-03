@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card">
				{{-- TABLE TITLE --}}
				<div class="card-header">
					<h4 class="card-title pull-left">Stores <small class="sm-text-jb">({{ $stores->count() }})</small></h4>
					<a href="{{ route('stores.create') }}" class="create-btn btn btn-danger btn-just-icon pull-right">
						<i class="fa fa-plus"></i>
					</a>
				</div>
				{{-- STORES TABLE --}}
				<div class="card-body">
					<div class="table-responsive">
						<table class="table" id="clickable-table">
							<thead class="text-primary">
								<tr>
									<th>Name</th>
									<th class="d-none d-sm-block">Categories</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								@foreach($stores as $store)
									<tr data-id="{{$store->id}}" data-location="{{ route('stores.edit', $store) }}">
										<td class="text-capitalize">{{ $store->name }}</td>
										<td class="d-none d-sm-block text-capitalize">
											@foreach($store->categories as $key => $category)
												@if($key)
													,&nbsp;
												@endif
												{{ $category->name }}
											@endforeach
										</td>
										<td>{{ $store->is_active == 1 ? 'Active' : 'Disabled' }}</td>
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
