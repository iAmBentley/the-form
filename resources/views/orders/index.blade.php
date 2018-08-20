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
												<form method="POST" action="/orders/{{ $order->id }}">
													{{ csrf_field() }}
													{{ method_field('PATCH') }}
													<input type="hidden" name="user_id" value="{{ $order->user_id }}">
													<input type="hidden" name="store_id" value="{{ $order->store_id }}">
													<input type="hidden" name="is_filled" value="1">
													<input type="hidden" name="category_id" value="{{ $order->category_id }}">
													<input type="hidden" name="notes" value="{{ $order->notes }}"
													@foreach($order->items as $item => $size)
														<input type="hidden" name="items[{{$item}}]" value="{{ $size }}">
													@endforeach
													{{-- MARK AS FILLED BUTTON (TRIGGERS UPDATE() ON ORDERS) --}}
													<button value="{{ $order->id }}" class="fill-order {{ $order->is_filled == 1 ? 'btn-success disabled' : 'btn-default' }} btn btn-icon btn-sm" data-toggle="tooltip" title="Mark as Filled">
														<i class="fa fa-check"></i>
													</button>
													{{-- VIEW BUTTON --}}
													<a href="orders/{{ $order->id }}" class="btn btn-info btn-icon btn-sm " data-toggle="tooltip" title="View Order">
														<i class="fa fa-eye"></i>
													</a>
												</form>
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
