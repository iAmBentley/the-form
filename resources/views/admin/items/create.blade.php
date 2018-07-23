@extends('layouts.app')

		@section('content')
			<div class="content">
				<!-- ITEMS FORM -->
				<div class="row">
					<div class="col-md-12 ml-auto mr-auto">
						<div class="card card-user">
							<div class="card-header">
								<h5 class="card-title">Create / Edit Items</h5>
							</div>
							<div class="card-body">
								<form>
									<div class="row">
										<div class="col-md-8">
											<div class="form-group">
												<label>Name</label>
												<input type="text" class="form-control" name="name" placeholder="Name of Item">
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
										<div class="col-sm-4">
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
										<div class="col-sm-8">
											<div class="chekbox-title">Store (All That Apply)</div>
											<div class="form-check form-check-inline chekbox-align">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="VV-SB">
													VV-Seaboard
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline chekbox-align">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="VV-DD">
													VV-Dunkin
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline chekbox-align">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="VV-NM">
													VV-N Myrtle
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline chekbox-align">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="VV-SS">
													VV-Surfside
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline chekbox-align">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="PH-S">
													PH-Socastee
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline chekbox-align">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="PH-LR">
													PH-Little River
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline chekbox-align">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="PH-F">
													PH-Folley
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline chekbox-align">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="PH-OT">
													PH-Old Towne
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline chekbox-align">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="PH-S">
													PH-Saluda
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline chekbox-align">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="PH-OT">
													PH-Old Trolley
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-8">
											<div class="chekbox-title-dropdowns">
												Vendor (Flavors Only)
											</div>
											<div class="form-check form-group">
												<select class="form-control" id="status">
													<option>None</option>
													<option>The Flavor Apprentice</option>
													<option>Mt Baker Vapor</option>
													<option>Flavor West</option>
													<option>Capella</option>
													<option>Lorann</option>
													<option>Flavour Art</option>
												</select>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="chekbox-title">
												Drip Line (Juices Only)
											</div>
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="1">
													Yes
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="0">
													No
													<span class="chekbox form-check-sign"></span>
												</label>
											</div>
										</div>    
									</div>

									<div class="row">
										<div class="update ml-auto mr-auto">
											<button type="submit" class="btn btn-danger btn-round">Save Item</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endsection
