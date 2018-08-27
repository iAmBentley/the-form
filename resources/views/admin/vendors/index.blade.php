@extends('layouts.app')

@section('content')
	{{-- VENDORS TABLE --}}
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card">
				{{-- TABLE TITLE --}}
				<div class="card-header">
					<h4 class="card-title pull-left">Vendors <small class="sm-text-jb">({{ $vendors->count() }} Total)</small></h4>
					<a href="vendors/create" class="create-btn btn btn-danger btn-just-icon pull-right">
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
									<th>Short Name</th>
									<th class="d-none d-sm-block">Status</th>
									<th class="text-right">Actions</th>
								</tr>
							</thead>
							<tbody>
								{{-- BRING IN CATEGORIES FROM DATABASE --}}
								@foreach($vendors as $vendor)
									<tr>
										<td class="text-capitalize">{{ $vendor->name }}</td>
										<td class="text-uppercase">{{ $vendor->short_name }}</td>
										<td class="d-none d-sm-block">{{ $vendor->is_active == 1 ? 'Active' : 'Disabled' }}</td>
										<td class="text-right">
											<a href="/admin/vendors/{{ $vendor->id }}/edit" class="btn btn-info btn-icon btn-sm">
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
