@extends('layouts.app')

		@section('content')
			<div class="content">
				<!-- ORDERS TABLE -->
				<div class="row">
					<div class="col-md-12 ml-auto mr-auto">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title pull-left">Orders</h4>
								<button type="button" class="btn btn-danger btn-just-icon pull-right">
									<i class="fa fa-plus"></i>
								</button>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table">
										<thead class="text-primary">
											<tr>
												<th>Status</th>
												<th>Date</th>
												<th>Location</th>
												<th class="d-none d-sm-block">User</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Open</td>
												<td>07-05-18</td>
												<td>Lab</td>
												<td class="d-none d-sm-block">John J</td>
												<td class="text-right">
													<button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm " data-original-title="" title="">
														<i class="fa fa-eye"></i>
													</button>
													<button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
														<i class="fa fa-check"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>Open</td>
												<td>07-03-18</td>
												<td>Surfside</td>
												<td class="d-none d-sm-block">Darrell S</td>
												<td class="text-right">
													<button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm " data-original-title="" title="">
														<i class="fa fa-eye"></i>
													</button>
													<button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
														<i class="fa fa-check"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>Closed</td>
												<td>06-28-18</td>
												<td>N Myrtle</td>
												<td class="d-none d-sm-block">Jenn B</td>
												<td class="text-right">
													<button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm " data-original-title="" title="">
														<i class="fa fa-eye"></i>
													</button>
													<button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm " disabled data-original-title="" title="">
														<i class="fa fa-check"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>Closed</td>
												<td>06-25-18</td>
												<td>Folly</td>
												<td class="d-none d-sm-block">Dave E</td>
												<td class="text-right">
													<button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm " data-original-title="" title="">
														<i class="fa fa-eye"></i>
													</button>
													<button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm " disabled data-original-title="" title="">
														<i class="fa fa-check"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>Closed</td>
												<td>06-23-18</td>
												<td>Socastee</td>
												<td class="d-none d-sm-block">John A</td>
												<td class="text-right">
													<button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm " data-original-title="" title="">
														<i class="fa fa-eye"></i>
													</button>
													<button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm " disabled data-original-title="" title="">
														<i class="fa fa-check"></i>
													</button>
												</td>
											</tr>
											<tr>
												<td>Closed</td>
												<td>06-15-18</td>
												<td>Dunkin-VV</td>
												<td class="d-none d-sm-block">Mike B</td>
												<td class="text-right">
													<button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm " data-original-title="" title="">
														<i class="fa fa-eye"></i>
													</button>
													<button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm " disabled data-original-title="" title="">
														<i class="fa fa-check"></i>
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
