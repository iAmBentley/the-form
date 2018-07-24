@extends('layouts.app')

		@section('content')
			<!-- STORES TABLE -->
			<div class="row">
				<div class="col-md-12 ml-auto mr-auto">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title pull-left">Stores</h4>
							<button type="button" class="btn btn-danger btn-just-icon pull-right">
								<i class="fa fa-plus"></i>
							</button>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table">
									<thead class="text-primary">
										<tr>
											<th>Name</th>
											<th class="d-none d-sm-block">Status</th>
											<th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>VV-Seaboard</td>
											<td class="d-none d-sm-block">Active</td>
											<td class="text-right">
												<button type="button" class="btn btn-info btn-icon btn-sm">
													<i class="fa fa-pencil"></i>
												</button>
											</td>
										</tr>
										<tr>
											<td>VV-North Myrtle</td>
											<td class="d-none d-sm-block">Active</td>
											<td class="text-right">
												<button type="button" class="btn btn-info btn-icon btn-sm">
													<i class="fa fa-pencil"></i>
												</button>
											</td>
										</tr>
										<tr>
											<td>VV-Surfside</td>
											<td class="d-none d-sm-block">Active</td>
											<td class="text-right">
												<button type="button" class="btn btn-info btn-icon btn-sm">
													<i class="fa fa-pencil"></i>
												</button>
											</td>
										</tr>
										<tr>
											<td>VV-Dunkin</td>
											<td class="d-none d-sm-block">Active</td>
											<td class="text-right">
												<button type="button" class="btn btn-info btn-icon btn-sm">
													<i class="fa fa-pencil"></i>
												</button>
											</td>
										</tr>
										<tr>
											<td>PH-Seaboard</td>
											<td class="d-none d-sm-block">Active</td>
											<td class="text-right">
												<button type="button" class="btn btn-info btn-icon btn-sm">
													<i class="fa fa-pencil"></i>
												</button>
											</td>
										</tr>
										<tr>
											<td>PH-Little River</td>
											<td class="d-none d-sm-block">Active</td>
											<td class="text-right">
												<button type="button" class="btn btn-info btn-icon btn-sm">
													<i class="fa fa-pencil"></i>
												</button>
											</td>
										</tr>
										<tr>
											<td>PH-Socastee</td>
											<td class="d-none d-sm-block">Active</td>
											<td class="text-right">
												<button type="button" class="btn btn-info btn-icon btn-sm">
													<i class="fa fa-pencil"></i>
												</button>
											</td>
										</tr>
										<tr>
											<td>PH-Folly</td>
											<td class="d-none d-sm-block">Active</td>
											<td class="text-right">
												<button type="button" class="btn btn-info btn-icon btn-sm">
													<i class="fa fa-pencil"></i>
												</button>
											</td>
										</tr>
										<tr>
											<td>PH-Dunkin</td>
											<td class="d-none d-sm-block">Active</td>
											<td class="text-right">
												<button type="button" class="btn btn-info btn-icon btn-sm">
													<i class="fa fa-pencil"></i>
												</button>
											</td>
										</tr>
										<tr>
											<td>PH-Old Town</td>
											<td class="d-none d-sm-block">Active</td>
											<td class="text-right">
												<button type="button" class="btn btn-info btn-icon btn-sm">
													<i class="fa fa-pencil"></i>
												</button>
											</td>
										</tr>
										<tr>
											<td>PH-Saluda</td>
											<td class="d-none d-sm-block">Active</td>
											<td class="text-right">
												<button type="button" class="btn btn-info btn-icon btn-sm">
													<i class="fa fa-pencil"></i>
												</button>
											</td>
										</tr>
										<tr>
											<td>PH-Old Trolley</td>
											<td class="d-none d-sm-block">Active</td>
											<td class="text-right">
												<button type="button" class="btn btn-info btn-icon btn-sm">
													<i class="fa fa-pencil"></i>
												</button>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endsection
