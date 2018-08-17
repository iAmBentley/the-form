@extends('layouts.app')

		@section('content')

			<!-- ORDER VIEW -->
			<div class="row">
				<div class="col-md-12 ml-auto mr-auto">
					<div class="card card-user">

						{{-- ORDER DETAILS --}}
						<div class="card-header text-capitalize">
							<h5 class="card-title mb-3">Order for {{ $order->categories->name }}</h5>
							<div class="row" style="margin-top: 1.5em; padding: 0 0.45em;">
								<div class="col-8">
									<div class="mb-2"><strong>Store: </strong> {{ $order->stores->name }}</div>
									<div class="mb-2"><strong>Date: </strong> {{ $order->created_at->format('m-d-y') }}</div>
									<div class="mb-2"><strong>By: </strong> {{ $order->users->name }}</div>
								</div>
								<div class="col-4">
									<button id="fill-order" class="{{ $order->is_filled == 1 ? 'btn-success disabled' : 'btn-default' }} btn btn-round pull-right mt-0" style="padding: 16px 18px;" data-toggle="tooltip" title="Mark as Filled">
										<i class="fa fa-check"></i>
									</button>
								</div>
							</div>
						</div>

						<div class="card-body">
							{{-- TABLE OF REQUESTED ITEMS --}}
							<div class="table-responsive">
								<table class="table">
									
									<thead class="text-primary">
										<tr>
											<th style="font-size:1em;">Items Needed:</th>
										</tr>
									</thead>
									
									<tbody>
										{{-- LOOP THROUGH ITEMS ARRAY ON DATABASE --}}
										@foreach ($items as $key => $item)
											@if($item && $item != "No")
												<tr>
											        <td class="text-capitalize"> {{ $key }} </td>
											        <td class="text-capitalize text-right"> {{ $item == "Yes" ? "" : $item }} </td>
											    </tr>
										    @endif
										@endforeach
										
									</tbody>
								</table>
							</div>

						</div>
					</div>
				</div>
			</div>
			
		@endsection



