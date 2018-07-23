@extends('layouts.app')

		@section('content')
			<div class="content">
				<!-- SIZES FORM -->
				<div class="row">
					<div class="col-md-12 ml-auto mr-auto">
						<div class="card card-user">
							<div class="card-header">
								<h5 class="card-title">Create / Edit Sizes</h5>
							</div>
							<div class="card-body">
								<form>
									<div class="row">
										<div class="col-md-8">
											<div class="form-group">
												<label>Name</label>
												<input type="text" class="form-control" name="name" placeholder="Name of Size">
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
										<div class="col-sm-12">
											<div class="chekbox-title">
												Category (All That Apply)
											</div>
											<div class="form-check form-check-inline chekbox-align">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="flavors">
													Flavors
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline chekbox-align">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="labels">
													Labels
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline chekbox-align">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="juices">
													Juices
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline chekbox-align">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="products">
													Products
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline chekbox-align">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="supplies">
													Supplies
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="update ml-auto mr-auto">
											<button type="submit" class="btn btn-danger btn-round">Save Size</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endsection
