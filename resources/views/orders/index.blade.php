@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card">
				{{-- HEADER TITLE --}}
				<div class="card-header">
					<h4 class="card-title pull-left">Orders <small class="sm-text-jb">({{ $orders->count() }})</small></h4>
					<a href="{{ route('orders.create') }}" class="create-btn btn btn-danger btn-just-icon pull-right">
						<i class="fa fa-plus"></i>
					</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						{{-- ORDERS TABLE --}}
						<table class="table" id="clickable-table">
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
									<tr data-id="{{ $order->id }}" data-location="{{ route('orders.show', $order) }}">
										<td>{{ $order->created_at->format('m.d.y') }}</td>
										<td class="text-capitalize">{{ $order->stores->name ?? '' }}</td>
										<td class="d-none d-sm-block text-capitalize">{{ $order->categories->name ?? '' }}</td>
										<td class="text-right">
											<form method="POST" action="{{ route('orders.update', $order) }}">
												@csrf @method('PATCH')

												<input type="hidden" name="user_id" value="{{ $order->user_id }}">
												<input type="hidden" name="store_id" value="{{ $order->store_id }}">
												<input type="hidden" name="is_filled" value="1">
												<input type="hidden" name="category_id" value="{{ $order->category_id }}">
												<input type="hidden" name="notes" value="{{ $order->notes }}">
												@foreach($order->items as $item => $size)
													<input type="hidden" name="items[{{$item}}]" value="{{ $size }}">
												@endforeach
												{{-- VIEW BUTTON --}}
												<a href="{{ route('orders.edit', $order) }}" class="btn btn-info btn-icon btn-sm " data-toggle="tooltip" title="View Order">
													<i class="fa fa-eye"></i>
												</a>
												{{-- MARK AS FILLED BUTTON (TRIGGERS UPDATE() ON ORDERS) --}}
												<button value="{{ $order->id }}" 
													class="fill-order btn btn-icon btn-sm
														{{-- If order is filled make fill btn green n disable; Else color it gray --}}
														{{ $order->is_filled == 1 ? 'btn-success disabled' : 'btn-default' }} 
														{{-- If user logged in is staff, disable mark as filled button --}}
														{{ Auth::user()->role_id == 3 ? 'disabled' : '' }}" 
													data-toggle="tooltip" title="Mark as Filled">
													<i class="fa fa-check"></i>
												</button>
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
@endsection
