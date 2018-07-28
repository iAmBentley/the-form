@extends('layouts.app')

		@section('content')
			<!-- SIZES TABLE -->
			<div class="row">
				<div class="col-md-12 ml-auto mr-auto">
					<div class="card">

						<!-- TABLE TITLE -->
						<div class="card-header">
							<h4 class="card-title pull-left">Sizes</h4>
							<a href="sizes/create" class="create-btn btn btn-danger btn-just-icon pull-right">
								<i class="fa fa-plus"></i>
							</a>
						</div>

						<!-- TABLE -->
						<div class="card-body">
							<div class="table-responsive">
								<table class="table">
									
									<thead class="text-primary">
										<tr>
											<th>Name</th>
											<th>Category</th>
											<th class="d-none d-sm-block">Status</th>
											<th class="text-right">Actions</th>
										</tr>
									</thead>

									<tbody>
										<!-- BRING IN SIZES FROM DATABASE -->
										@foreach($sizes as $size)
										<tr>
											<td class="text-capitalize">{{ $size->name }}</td>
											<td class="text-capitalize">{{ $size->categories->name }}</td>
											<td class="d-none d-sm-block">{{ $size->is_active == 1 ? 'Active' : 'Disabled' }}</td>
											<td class="text-right">
												<a href="/admin/sizes/{{$size->id}}/edit" class="btn btn-info btn-icon btn-sm">
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
