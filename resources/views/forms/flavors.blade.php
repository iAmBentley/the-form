{{-- FLAVORS ITEM BLOCK FOR ORDER.CREATE AJAX --}}
<div class="card-header">
	<h5 class="card-title">Flavors</h5>
</div>
<div class="card-body">
	{{-- FLAVOR AND SIZE DROPDOWN SELECT --}}
	@php $vendor_id = "";  @endphp
	{{-- ITEMS --}}
	<div class="row mb-4">
		@foreach($items as $flavor)
				@if($vendor_id != $flavor->vendor_id)
					<div class="col-md-12">
						<h6 class="card-title text-danger text-capitalize {{ $loop->first ? '' : 'mt-4' }} ">{{ $flavor->vendor->name }}</h6>
					</div>
					@php $vendor_id = $flavor->vendor_id; @endphp
				@endif
				<div id="form-category" class="col-lg-6 col-xl-4">
					<div class="chekbox-title-dropdowns text-capitalize">
						{{ $flavor->name }}
					</div>
					<div class="form-check form-group">
						<select class="text-capitalize form-control" name="items[{{ $flavor->vendor->short_name }}-{{ $flavor->name }}]" id="category_select">
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
