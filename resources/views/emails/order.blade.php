<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Order for {{ $order->categories->name }}</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	</head>
	<body style="background-color:#f4f3ef;font-family:'Montserrat',sans-serif;margin:0;">
		<div class="wrapper">
			<div class="main-panel">
				<nav style="background-color:#fff;height:54px;">
					<div>
						<div>
							<h1 style="margin:0;text-transform:uppercase;text-align:center;font-size:18px;font-weight:400;padding:15px;">New {{ $order->categories->name }} Order</h1>
						</div>
					</div>
				</nav>
				<div class="content">
					<div>
						<div style="padding:30px;">
							<div style="background-color:#ffffff;border-radius:10px;padding:5px 30px 20px;">
								<div style="text-transform:capitalize;">
									<h5 style="text-transform:capitalize;font-size:25px;font-weight: 400;">Order for {{ $order->categories->name }}</h5>
									<div>
										<div>
											<div style="text-transform:capitalize;margin-bottom:1em;"><strong>Store: </strong> {{ $order->stores->name }} </div>
											<div style="text-transform:capitalize;margin-bottom:1em;"><strong>Date: </strong> {{ $order->created_at->format('m-d-y') }} </div>
											<div style="text-transform:capitalize;margin-bottom:1em;"><strong>By: </strong> {{ $order->users->name }} </div>
										</div>
									</div>
								</div>
								<div >
									<div>
										<table style="width:100%;margin-bottom: 40px;">
											<thead>
												<tr>
													<th style="text-transform:uppercase;text-align:left;padding:15px 0 15px 0;color:#ef8157;border-bottom: 1px solid #ddd;">Items Needed:</th>
													<th style="padding:15px 0 15px 0;border-bottom: 1px solid #ddd;"></th>
												</tr>
											</thead>
											<tbody>
												@foreach ($items as $item => $size)
													@if($size && $size != "No")
														<tr>
															<td style="text-transform:capitalize;padding:15px 0 15px 0;text-align:left;border-bottom: 1px solid #ddd;"> {{ $item }} </td>
															<td style="text-transform:capitalize;text-align:right;padding:15px 0 15px 0;border-bottom: 1px solid #ddd;"> {{ $size == "Yes" ? "" : $size }} </td>
														</tr>
													@endif
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
								@if($order->notes)
								<div>
									<h5 style="color:#ef8157;font-size:1em;font-weight:700;text-transform:uppercase;">Notes:</h5>
									<p style="padding:12px 7px;">{{ $order->notes }}</p>
								</div>
								@endif
								<div>
									<a href="{{ route('orders.show', $order) }}" style="background-color:#ef8157;text-transform:uppercase;margin:10px 1px;border-radius:1.5rem;text-decoration:none;padding:11px 0px;color:#FFFFFF;display:inline-block;text-align:center;width:100%;">View Order</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div> 
	</body>
</html>