<div class="card-header">
	<h5 class="card-title text-capitalize">flavors</h5>
</div>
<div class="card-body">
	{{-- FLAVOR AND SIZE DROPDOWN SELECT --}}
	<div class="row">
		@foreach($items as $flavor)
			<div id="form-category" class="col-lg-6 col-xl-4">
				<div class="chekbox-title-dropdowns text-capitalize">
					{{ $flavor->vendor->short_name }} | {{ $flavor->name }}
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
		@endforeach
	</div>
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
