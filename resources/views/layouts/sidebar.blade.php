{{-- SIDEBAR --}}
<div class="sidebar" data-color="" data-active-color="danger">
	{{-- LOGO SECTION --}}
	<div class="logo">
		<a href="/" class="simple-text logo-mini">
			<div class="logo-image-small">
				<img src="{{ asset('img/logo-form.png') }}">
			</div>
		</a>
		<a href="{{ route('orders.index') }}" class="simple-text logo-normal">il modulo</a>
	</div>
	{{-- NAVIGATION LINKS --}}
	<div class="sidebar-wrapper">
		<ul class="nav">
			{{-- LOGGED IN USER SECTION - IF USER IS LOGGED IN --}}
			@if(Auth::check())
				<li>
					<a data-toggle="collapse" href="#userItems" class="border-bottom">
						<i class="fa fa-user"></i>
						<p>Hello {{ Auth::user()->name }} <b class="caret"></b></p>
					</a>
					<div class="collapse " id="userItems">
						<ul class="nav">
							<li>
								<a href="/admin/users/{{Auth::user()->id}}/edit">
									<span class="sidebar-mini-icon">&bull;</span>
									<span class="sidebar-normal">Edit Profile</span>
								</a>
							</li>
							<li>
								<a href="/admin/users/{{Auth::user()->id}}/edit-pw">
									<span class="sidebar-mini-icon">&bull;</span>
									<span class="sidebar-normal">Change Password</span>
								</a>
							</li>
							<li>
								<a class="collapse pb-3 border-bottom"
									href="{{ route('logout') }}" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									<span class="sidebar-mini-icon">&bull;</span>
									<span class="sidebar-normal"> {{ __('Logout') }} </span>
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
									@csrf
								</form>
							</li>
						</ul>
					</div>
				</li>
			@endif
			{{-- ORDER LINKS --}}
			<li>
				<a href="{{ route('orders.create') }}">
					<i class="fa fa-plus"></i>
					<p>Create Order</p>
				</a>
			</li>
			<li>
				<a href="{{ route('orders.index') }}">
					<i class="fa fa-list-ul"></i>
					<p>Past Orders</p>
				</a>
			</li>
			{{-- ADMIN SECTION LINKS - IF ROLE IS NOT STAFF --}}
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
								<a href="{{ route('items.index') }}">
									<span class="sidebar-mini-icon">&bull;</span>
									<span class="sidebar-normal"> Items </span>
								</a>
							</li>
							<li>
								<a href="{{ route('users.index') }}">
									<span class="sidebar-mini-icon">&bull;</span>
									<span class="sidebar-normal"> Users </span>
								</a>
							</li>
							<li>
								<a href="{{ route('vendors.index') }}">
									<span class="sidebar-mini-icon">&bull;</span>
									<span class="sidebar-normal"> Vendors </span>
								</a>
							</li>
							{{-- ADMIN SUB-SECTION - IF ROLE IS ADMIN --}}
							@if( Auth::user()->role_id == 1 )
								<li>
									<a href="{{ route('categories.index') }}">
										<span class="sidebar-mini-icon">&bull;</span>
										<span class="sidebar-normal"> Categories </span>
									</a>
								</li>
								<li>
									<a href="{{ route('sizes.index') }}">
										<span class="sidebar-mini-icon">&bull;</span>
										<span class="sidebar-normal"> Sizes </span>
									</a>
								</li>
								<li>
									<a href="{{ route('stores.index') }}">
										<span class="sidebar-mini-icon">&bull;</span>
										<span class="sidebar-normal"> Stores </span>
									</a>
								</li>
								<li>
									<a href="{{ route('roles.index') }}">
										<span class="sidebar-mini-icon">&bull;</span>
										<span class="sidebar-normal"> Roles </span>
									</a>
								</li>
							@endif
						</ul>
					</div>
				</li>
			@endif
			{{-- COPYRIGHT DATE SIDEBAR FIXED FOOTER --}}
			<li class="nav-footer">
				©<script>document.write(new Date().getFullYear());</script> | Identity Media Group
			</li>
		</ul>
	</div>
</div>