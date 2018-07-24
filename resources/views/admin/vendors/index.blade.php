@extends('layouts.app')

		@section('content')
			<!-- VENDORS TABLE -->
			<div class="row">
				<div class="col-md-12 ml-auto mr-auto">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title pull-left">Vendors</h4>
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
											<th>Short Name</th>
											<th class="d-none d-sm-block">Status</th>
											<th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Capella</td>
											<td>CAP</td>
											<td class="d-none d-sm-block">Active</td>
											<td class="text-right">
												<button type="button" class="btn btn-info btn-icon btn-sm">
													<i class="fa fa-pencil"></i>
												</button>
											</td>
										</tr>
										<tr>
											<td>Flavor West</td>
											<td>FW</td>
											<td class="d-none d-sm-block">Active</td>
											<td class="text-right">
												<button type="button" class="btn btn-info btn-icon btn-sm">
													<i class="fa fa-pencil"></i>
												</button>
											</td>
										</tr>
										<tr>
											<td>Flavour Art</td>
											<td>FA</td>
											<td class="d-none d-sm-block">Active</td>
											<td class="text-right">
												<button type="button" class="btn btn-info btn-icon btn-sm">
													<i class="fa fa-pencil"></i>
												</button>
											</td>
										</tr>
										<tr>
											<td>Mt Baker Vapor</td>
											<td>MBV</td>
											<td class="d-none d-sm-block">Active</td>
											<td class="text-right">
												<button type="button" class="btn btn-info btn-icon btn-sm">
													<i class="fa fa-pencil"></i>
												</button>
											</td>
										</tr>
										<tr>
											<td>Lorann</td>
											<td>LA</td>
											<td class="d-none d-sm-block">Active</td>
											<td class="text-right">
												<button type="button" class="btn btn-info btn-icon btn-sm">
													<i class="fa fa-pencil"></i>
												</button>
											</td>
										</tr>
										<tr>
											<td>Flavor Apprentice</td>
											<td>TFA</td>
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
