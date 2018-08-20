@extends('layouts.app')

		@section('content')
			<!-- SIZES TABLE -->
			<nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/orders">Home</a>
                    </li>
                    {{-- <li class="breadcrumb-item">
                        <a href="#">Breadcrumb2</a>
                    </li> --}}
                    <li class="breadcrumb-item active" aria-current="page">Admin</li>
                </ol>
            </nav>

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
							<ul class="list-unstyled">
								<li class="pl-2 pb-2"><a href="orders">Orders </a><small>View or Add Orders</small></li>
								<li class="pl-2 pb-2"><a href="admin/categories">Categories </a><small>View, Add or Edit Categories</small></li>
								<li class="pl-2 pb-2"><a href="admin/items">Items </a><small>View, Add or Edit Items</small></li>
								<li class="pl-2 pb-2"><a href="admin/roles">Roles </a><small>View, Add or Edit Roles</small></li>
								<li class="pl-2 pb-2"><a href="admin/sizes">Sizes </a><small>View, Add or Edit Sizes</small></li>
								<li class="pl-2 pb-2"><a href="admin/users">Users </a><small>View, Add or Edit Users</small></li>
								<li class="pl-2 pb-2"><a href="admin/vendors">Vendors </a> <small>View, Add or Edit Vendors</small></li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		@endsection
