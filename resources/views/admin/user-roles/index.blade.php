@extends('layouts.app')

		@section('content')
			<!-- USER ROLES TABLE -->
			<div class="row">
				<div class="col-md-12 ml-auto mr-auto">
					<div class="card">

						<!-- TABLE TITLE -->
						<div class="card-header">
							<h4 class="card-title pull-left">User Roles</h4>
							<a href="user-roles/create" class="create-btn btn btn-danger btn-just-icon pull-right">
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
											<th class="text-right">Actions</th>
										</tr>
									</thead>

									<tbody>
										<!-- BRING IN CATEGORIES FROM DATABASE -->
										@foreach($userRoles as $userRole)
											<tr>
												<td class="text-capitalize">{{ $userRole->name }}</td>
												<td class="text-right">
													<a href="/admin/user-roles/{{ $userRole->id }}/edit" class="btn btn-info btn-icon btn-sm">
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
