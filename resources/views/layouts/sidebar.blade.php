{{-- SIDEBAR --}}
<div class="sidebar" data-color="" data-active-color="danger">
	<div class="logo">
		<a href="/" class="simple-text logo-mini">
			<div class="logo-image-small">
				<img src="{{asset('img/logo-form.png')}}">
			</div>
		</a>
		<a href="/" class="simple-text logo-normal">il modulo</a>
	</div>
	<div class="sidebar-wrapper">
		<ul class="nav">
			@if(Auth::check())
				<li>
					<a data-toggle="collapse" href="#userItems" style="border-bottom: 1px solid rgba(255, 255, 255, .3);">
						<i class="fa fa-user"></i>
							<p>Hello {{ Auth::user()->name }} <b class="caret"></b></p>
					</a>
					<div class="collapse " id="userItems">
						<ul class="nav">
							<li>
								<a class="collapse " style="border-bottom: 1px solid rgba(255, 255, 255, .3);"
									href="{{ route('logout') }}" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									<span class="sidebar-mini-icon">&bull;</span>
									<span class="sidebar-normal"> {{ __('Logout') }} </span>
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</li>
						</ul>
					</div>
				</li>
			@endif
			<li>
				<a href="/orders/create">
					<i class="fa fa-plus"></i>
					<p>Create Order</p>
				</a>
			</li>
			<li>
				<a href="/orders">
					<i class="fa fa-list-ul"></i>
					<p>Past Orders</p>
				</a>
			</li>
			{{-- SHOW ADMIN SECTION IF ROLE IS ADMIN OR MANAGER --}}
			@if( Auth::user()->role_id != 3 )
				<li>
					<a data-toggle="collapse" href="#adminItems">
						<i class="fa fa-edit"></i>
						<p>Admin
							<b class="caret"></b>
						</p>
					</a>
					<div class="collapse " id="adminItems">
						<ul class="nav">
							<li>
								<a href="/admin/items">
									<span class="sidebar-mini-icon">&bull;</span>
									<span class="sidebar-normal"> Items </span>
								</a>
							</li>
							<li>
								<a href="/admin/users">
									<span class="sidebar-mini-icon">&bull;</span>
									<span class="sidebar-normal"> Users </span>
								</a>
							</li>
							<li>
								<a href="/admin/vendors">
									<span class="sidebar-mini-icon">&bull;</span>
									<span class="sidebar-normal"> Vendors </span>
								</a>
							</li>
							{{-- SHOW ADMIN SUB-SECTION IF ROLE IS ADMIN --}}
							@if( Auth::user()->role_id == 1 )
								<li>
									<a href="/admin/categories">
										<span class="sidebar-mini-icon">&bull;</span>
										<span class="sidebar-normal"> Categories </span>
									</a>
								</li>
								<li>
									<a href="/admin/sizes">
										<span class="sidebar-mini-icon">&bull;</span>
										<span class="sidebar-normal"> Sizes </span>
									</a>
								</li>
								<li>
									<a href="/admin/stores">
										<span class="sidebar-mini-icon">&bull;</span>
										<span class="sidebar-normal"> Stores </span>
									</a>
								</li>
								<li>
									<a href="/admin/roles">
										<span class="sidebar-mini-icon">&bull;</span>
										<span class="sidebar-normal"> Roles </span>
									</a>
								</li>
							@endif
						</ul>
					</div>
				</li>
			@endif
			<li class="nav-footer">
				©<script>document.write(new Date().getFullYear());</script> | Moticorp Creative
			</li>
		</ul>
	</div>
</div>