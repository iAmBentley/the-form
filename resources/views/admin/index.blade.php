@extends('layouts.app')

		@section('content')
			<!-- SIZES TABLE -->
			<div class="row">
				<div class="col-md-12 ml-auto mr-auto">
					<div class="card">

						<!-- TABLE TITLE -->
						<div class="card-header">
							<h4 class="card-title">You Shouldn't Be Here... </h4>
							<p>Pick a link below and get the !#*@ out!</p>
						</div>

						<!-- TABLE -->
						<div class="card-body">
							<ul>
								<li><a href="admin/categories">Categories</a></li>
								<li><a href="admin/items">Items</a></li>
								<li><a href="admin/roles">Roles</a></li>
								<li><a href="admin/sizes">Sizes</a></li>
								<li><a href="admin/users">Users</a></li>
								<li><a href="admin/vendors">Vendors</a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		@endsection
