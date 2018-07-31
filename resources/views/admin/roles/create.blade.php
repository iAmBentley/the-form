@extends('layouts.app')

		@section('content')
			<!-- ROLES FORM -->
			<div class="row">
				<div class="col-md-12 ml-auto mr-auto">
					<div class="card card-user">
						<div class="card-header">
							<h5 class="card-title">Create a Role</h5>
						</div>
						<div class="card-body">

							@include('layouts.errors')

							<form method="POST" action="/admin/roles">
								{{ csrf_field() }}
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Name</label>
											<input type="text" class="form-control" name="name" autofocus>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="update ml-auto mr-auto">
										<button type="submit" class="btn btn-danger btn-round">Save Role</button>
										<a href="{{ URL::previous() }}" class="btn btn-round">Cancel</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		@endsection
