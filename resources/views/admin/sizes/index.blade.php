@extends('layouts.app')

		@section('content')
			<div class="content">
				<!-- SIZES TABLE -->
				<div class="row">
					<div class="col-md-12 ml-auto mr-auto">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title pull-left">Sizes</h4>
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
												<th>Cateogry</th>
												<th class="d-none d-sm-block">Status</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>16 oz</td>
												<td>Flavors</td>
												<td class="d-none d-sm-block">Active</td>
												<td class="text-right">
													<button type="button" class="btn btn-info btn-icon btn-sm">
														<i class="fa fa-pencil"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>32 oz</td>
												<td>Flavors</td>
												<td class="d-none d-sm-block">Active</td>
												<td class="text-right">
													<button type="button" class="btn btn-info btn-icon btn-sm">
														<i class="fa fa-pencil"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>64 oz</td>
												<td>Flavors</td>
												<td class="d-none d-sm-block">Active</td>
												<td class="text-right">
													<button type="button" class="btn btn-info btn-icon btn-sm">
														<i class="fa fa-pencil"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>1 gal</td>
												<td>Flavors</td>
												<td class="d-none d-sm-block">Active</td>
												<td class="text-right">
													<button type="button" class="btn btn-info btn-icon btn-sm">
														<i class="fa fa-pencil"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>2 gal</td>
												<td>Flavors</td>
												<td class="d-none d-sm-block">Active</td>
												<td class="text-right">
													<button type="button" class="btn btn-info btn-icon btn-sm">
														<i class="fa fa-pencil"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>1000</td>
												<td>Labels</td>
												<td class="d-none d-sm-block">Active</td>
												<td class="text-right">
													<button type="button" class="btn btn-info btn-icon btn-sm">
														<i class="fa fa-pencil"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>2000</td>
												<td>Labels</td>
												<td class="d-none d-sm-block">Active</td>
												<td class="text-right">
													<button type="button" class="btn btn-info btn-icon btn-sm">
														<i class="fa fa-pencil"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>3000</td>
												<td>Labels</td>
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
			</div>
		@endsection
