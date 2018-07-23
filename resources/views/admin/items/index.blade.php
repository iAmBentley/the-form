@extends('layouts.app')

		@section('content')
			<div class="content">
				<!-- ITEMS TABLE -->
				<div class="row">
					<div class="col-md-12 ml-auto mr-auto">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title pull-left">Items</h4>
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
												<th class="d-none d-sm-table-cell">Category</th>
												<th class="d-none d-sm-table-cell">Status</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Serendipity</td>
												<td class="d-none d-sm-table-cell">Juices, Labels</td>
												<td class="d-none d-sm-table-cell">Active</td>
												<td class="text-right">
													<button type="button" class="btn btn-info btn-icon btn-sm">
														<i class="fa fa-pencil"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>Strawberry (Ripe)</td>
												<td class="d-none d-sm-table-cell">Flavors</td>
												<td class="d-none d-sm-table-cell">Active</td>
												<td class="text-right">
													<button type="button" class="btn btn-info btn-icon btn-sm">
														<i class="fa fa-pencil"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>650 Starter Kits - Black</td>
												<td class="d-none d-sm-table-cell">Products</td>
												<td class="d-none d-sm-table-cell">Active</td>
												<td class="text-right">
													<button type="button" class="btn btn-info btn-icon btn-sm">
														<i class="fa fa-pencil"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>Paper Towels</td>
												<td class="d-none d-sm-table-cell">Supplies</td>
												<td class="d-none d-sm-table-cell">Active</td>
												<td class="text-right">
													<button type="button" class="btn btn-info btn-icon btn-sm">
														<i class="fa fa-pencil"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>30mL Bottles - Black</td>
												<td class="d-none d-sm-table-cell">Supplies</td>
												<td class="d-none d-sm-table-cell">Active</td>
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
