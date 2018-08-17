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
												<th>Date</th>
												<th>Store</th>
												<th class="d-none d-sm-block">Items</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>

											@foreach($orders as $order)
												<tr>
													<td>{{ $order->created_at->format('m.d.y') }}</td>
													<td class="text-capitalize">{{ $order->stores->name }}</td>
													<td class="d-none d-sm-block text-capitalize">{{ $order->categories->name }}</td>
													<td class="text-right">
														<a href="orders/{{ $order->id }}/edit" id="fill-order" class="{{ $order->is_filled == 1 ? 'btn-success disabled' : 'btn-default' }} btn btn-icon btn-sm " data-toggle="tooltip" title="Mark as Filled">
															<i class="fa fa-check"></i>
														</a>
														<a href="orders/{{ $order->id }}" class="btn btn-info btn-icon btn-sm " data-toggle="tooltip" title="View Order">
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
