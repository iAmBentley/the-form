@extends('layouts.app')

@section('orders-ajax-scripts')
<script src="{{ asset('/js/orders-ajax.js') }}"></script>
@endsection

@section('content')

	<!-- ORDER VIEW -->
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card card-user">

				{{-- ORDER DETAILS --}}
				<div class="card-header text-capitalize">
					<h5 class="card-title mb-3">Order for {{ $order->categories->name }}</h5>
					<div class="row order-meta">
						<div class="col-8">
							<div class="mb-2"><strong>Store: </strong> {{ $order->stores->name }} </div>
							<div class="mb-2"><strong>Date: </strong> {{ $order->created_at->format('m-d-y') }} </div>
							<div class="mb-2"><strong>By: </strong> {{ $order->users->name }} </div>
						</div>
						<div class="col-4">
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
								<button value="{{ $order->id }}" class="fill-order {{ $order->is_filled == 1 ? 'btn-success disabled' : 'btn-default' }} btn btn-round pull-right mt-0" data-toggle="tooltip" title="Mark as Filled">
									<i class="fa fa-check"></i>
								</button>
							</form>
						</div>
					</div>
				</div>

				<div class="card-body">
					{{-- TABLE OF REQUESTED ITEMS --}}
					<div class="table-responsive">
						<table class="table">
							
							<thead class="text-primary order-items-title">
								<tr>
									<th>Items Needed:</th>
								</tr>
							</thead>
							
							<tbody>
								{{-- LOOP THROUGH ITEMS ARRAY ON DATABASE --}}
								@foreach ($items as $item => $size)
									@if($size && $size != "No")
										<tr>
									        <td class="text-capitalize"> {{ $item }} </td>
									        <td class="text-capitalize text-right"> {{ $size == "Yes" ? "" : $size }} </td>
									    </tr>
								    @endif
								@endforeach
								
							</tbody>
						</table>
					</div>
					
					@if($order->notes)
						<div >
							<h5 class="text-primary note-title">Notes</h5>
							<p class="note-body">{{ $order->notes }}</p>
						</div>
					@endif

				</div>
			</div>
		</div>
	</div>
	
@endsection



