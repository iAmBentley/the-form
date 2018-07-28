@extends('layouts.app')

		@section('content')
			<div class="content">
				<!-- ORDERS TABLE -->
				<div class="row">
					<div class="col-md-12 ml-auto mr-auto">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title pull-left">Orders</h4>
								<a href="orders/create" class="create-btn btn btn-danger btn-just-icon pull-right">
									<i class="fa fa-plus"></i>
								</a>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table">
										<thead class="text-primary">
											<tr>
												<th>Status</th>
												<th>Date</th>
												<th>Store</th>
												<th class="d-none d-sm-block">User</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>

											@foreach($orders as $order)
												<tr>
													<td>{{ $order->is_active == 1 ? 'Open' : 'Closed' }}</td>
													<td>{{ $order->created_at->format('m.d.Y') }}</td>
													<td class="text-capitalize">{{ $order->stores->name }}</td>
													<td class="d-none d-sm-block text-capitalize">{{ $order->users->name }}</td>
													<td class="text-right">
														<a href="orders/{{ $order->id }}/edit" class="btn btn-info btn-icon btn-sm ">
															<i class="fa fa-pencil"></i>
														</a>
														<a href="orders/{{ $order->id }}" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
															<i class="fa fa-eye"></i>
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
			</div>
		@endsection
