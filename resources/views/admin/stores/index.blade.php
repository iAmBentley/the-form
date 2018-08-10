@extends('layouts.app')

		@section('content')
			<!-- STORES TABLE -->
			<div class="row">
				<div class="col-md-12 ml-auto mr-auto">
					<div class="card">

						<!-- TABLE TITLE -->
						<div class="card-header">
							<h4 class="card-title pull-left">Stores <small class="sm-text-jb">({{ $count }} Total)</small></h4>
							<a href="stores/create" class="create-btn btn btn-danger btn-just-icon pull-right">
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
											<th class="d-none d-sm-block">Categories</th>
											<th>Status</th>
											<th class="text-right">Actions</th>
										</tr>
									</thead>

									<tbody>
										@foreach($stores as $store)
											<tr>
												<td class="text-capitalized">{{ $store->name }}</td>
												<td class="d-none d-sm-block text-capitalize">
													@foreach($store->categories as $key => $category)
														@if($key)
															,&nbsp;
														@endif
														{{ $category->name }}
													@endforeach
												</td>
												<td>{{ $store->is_active == 1 ? 'Active' : 'Disabled' }}</td>
												<td class="text-right">
													<a href="stores/{{ $store->id }}/edit" class="btn btn-info btn-icon btn-sm">
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
