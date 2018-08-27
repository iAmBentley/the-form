<div class="card-header">
	<h5 class="card-title">Flavors</h5>
</div>
<div class="card-body">
	{{-- DUMMY DATA TO SHOW HOW I WANT IT TO LOOK --}}
	{{-- <div class="row mb-4">
		<div class="col-md-12">
			<h6 class="card-title text-danger text-capitalize">CAPELLA</h6>
		</div>
		<div id="form-category" class="col-lg-6 col-xl-4">
			<div class="chekbox-title-dropdowns text-capitalize">
				Butter
			</div>
			<div class="form-check form-group">
				<select class="text-capitalize form-control" name="butter" id="category_select">
					<option value="">None</option>
					<option value="16 oz">16 oz</option>
					<option value="16 oz">32 oz</option>
					<option value="16 oz">64 oz</option>
					<option value="1 gal">16 oz</option>
				</select>
			</div>
		</div>
		<div id="form-category" class="col-lg-6 col-xl-4">
			<div class="chekbox-title-dropdowns text-capitalize">
				Sweet Mango
			</div>
			<div class="form-check form-group">
				<select class="text-capitalize form-control" name="butter" id="category_select">
					<option value="">None</option>
					<option value="16 oz">16 oz</option>
					<option value="16 oz">32 oz</option>
					<option value="16 oz">64 oz</option>
					<option value="1 gal">16 oz</option>
				</select>
			</div>
		</div>
		<div id="form-category" class="col-lg-6 col-xl-4">
			<div class="chekbox-title-dropdowns text-capitalize">
				Sweet Watermelon
			</div>
			<div class="form-check form-group">
				<select class="text-capitalize form-control" name="butter" id="category_select">
					<option value="">None</option>
					<option value="16 oz">16 oz</option>
					<option value="16 oz">32 oz</option>
					<option value="16 oz">64 oz</option>
					<option value="1 gal">16 oz</option>
				</select>
			</div>
		</div><div id="form-category" class="col-lg-6 col-xl-4">
			<div class="chekbox-title-dropdowns text-capitalize">
				Blueberry
			</div>
			<div class="form-check form-group">
				<select class="text-capitalize form-control" name="butter" id="category_select">
					<option value="">None</option>
					<option value="16 oz">16 oz</option>
					<option value="16 oz">32 oz</option>
					<option value="16 oz">64 oz</option>
					<option value="1 gal">16 oz</option>
				</select>
			</div>
		</div>
		<div id="form-category" class="col-lg-6 col-xl-4">
			<div class="chekbox-title-dropdowns text-capitalize">
				Strawberry
			</div>
			<div class="form-check form-group">
				<select class="text-capitalize form-control" name="butter" id="category_select">
					<option value="">None</option>
					<option value="16 oz">16 oz</option>
					<option value="16 oz">32 oz</option>
					<option value="16 oz">64 oz</option>
					<option value="1 gal">16 oz</option>
				</select>
			</div>
		</div>
	</div> --}}
	{{-- DUMMY DATA TO SHOW HOW I WANT IT TO LOOK --}}
	{{-- <div class="row mb-4">
		<div class="col-md-12">
			<h6 class="card-title text-danger text-capitalize">FLAVOR WEST</h6>
		</div>
		<div id="form-category" class="col-lg-6 col-xl-4">
			<div class="chekbox-title-dropdowns text-capitalize">
				Tobacco Absolute
			</div>
			<div class="form-check form-group">
				<select class="text-capitalize form-control" name="butter" id="category_select">
					<option value="">None</option>
					<option value="16 oz">16 oz</option>
					<option value="16 oz">32 oz</option>
					<option value="16 oz">64 oz</option>
					<option value="1 gal">16 oz</option>
				</select>
			</div>
		</div>
		<div id="form-category" class="col-lg-6 col-xl-4">
			<div class="chekbox-title-dropdowns text-capitalize">
				Menthol
			</div>
			<div class="form-check form-group">
				<select class="text-capitalize form-control" name="butter" id="category_select">
					<option value="">None</option>
					<option value="16 oz">16 oz</option>
					<option value="16 oz">32 oz</option>
					<option value="16 oz">64 oz</option>
					<option value="1 gal">16 oz</option>
				</select>
			</div>
		</div>
		<div id="form-category" class="col-lg-6 col-xl-4">
			<div class="chekbox-title-dropdowns text-capitalize">
				Minty Menthol
			</div>
			<div class="form-check form-group">
				<select class="text-capitalize form-control" name="butter" id="category_select">
					<option value="">None</option>
					<option value="16 oz">16 oz</option>
					<option value="16 oz">32 oz</option>
					<option value="16 oz">64 oz</option>
					<option value="1 gal">16 oz</option>
				</select>
			</div>
		</div>
	</div> --}}

	{{-- THIS IS THE 'REAL' DATA FROM THE DB --}}
	{{-- FLAVOR AND SIZE DROPDOWN SELECT --}}

	{{--
		Set vendor_id variable
		While the set vendor_id == the vendor_id in the items object
		Display the vendor->name
		And Loop through items for that vendor
		And Loop through sizes for that item
		Display list of items with sizes for that vendor

		When vendor_id in object changes
		set the vendor_id variable to the new vendor_id from the items object
		And repeat the logic
	 --}}
	
	{{-- @php $vendor_id = ""; @endphp --}}
	@foreach($items as $flavor)
		<div class="row mb-4">
			{{-- @while($vendor_id = $flavor->vendor_id) --}}
			<div class="col-md-12">
				<h6 class="card-title text-danger text-capitalize">{{ $flavor->vendor->name }}</h6>
			</div>
			
			<div id="form-category" class="col-lg-6 col-xl-4">
				<div class="chekbox-title-dropdowns text-capitalize">
					{{ $flavor->vendor->short_name }} - {{ $flavor->name }}
				</div>
				<div class="form-check form-group">
					<select class="text-capitalize form-control" name="items[{{ $flavor->name }}]" id="category_select">
						<option value="">None</option>
						@foreach($flavor->sizes as $size)
							<option value="{{ $size->name }}">{{ $size->name }}</option>
						@endforeach
					</select>
				</div>
			</div>
			{{-- @endwhile --}}
		</div>
	@endforeach
	
	{{-- NOTES FIELD --}}
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label name="notes">Notes</label>
				<textarea class="form-control textarea" name="notes" value="" placeholder="Leave a note about this order"></textarea>
			</div>
		</div>
	</div>
	{{-- SEND CANCEL BUTTONS --}}
	<div class="row">
		<div class="update ml-auto mr-auto">
			<button id="submit-btn" type="submit" class="btn btn-danger btn-round">Send Order</button>
			<a href="{{ route('orders.index') }}" class="btn btn-round">Cancel</a>
		</div>
	</div>
</div>
