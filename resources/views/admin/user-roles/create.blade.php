@extends('layouts.app')

		@section('content')
			<!-- USERS ROLES FORM -->
			<div class="row">
				<div class="col-md-12 ml-auto mr-auto">
					<div class="card card-user">
						<div class="card-header">
							<h5 class="card-title">Create / Edit User Roles</h5>
						</div>
						<div class="card-body">
							<form>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Name</label>
											<input type="text" class="form-control" name="name" placeholder="Name of Role">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="update ml-auto mr-auto">
										<button type="submit" class="btn btn-danger btn-round">Save Role</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		@endsection
