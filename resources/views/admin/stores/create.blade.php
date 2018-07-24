@extends('layouts.app')

		@section('content')
			<!-- STORES FORM -->
			<div class="row">
				<div class="col-md-12 ml-auto mr-auto">
					<div class="card card-user">
						<div class="card-header">
							<h5 class="card-title">Create / Edit Stores</h5>
						</div>
						<div class="card-body">
							<form>
								<div class="row">
									<div class="col-md-8">
										<div class="form-group">
											<label>Name</label>
											<input type="text" class="form-control" name="name" placeholder="Name of Store">
										</div>
									</div>
									<div class="col-md-4">
										<div class="chekbox-title-dropdowns">
											Status
										</div>
										<div class="form-check form-group">
											<select class="form-control" id="status">
												<option>Active</option>
												<option>Deactivated</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="update ml-auto mr-auto">
										<button type="submit" class="btn btn-danger btn-round">Save Store</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		@endsection
