{{-- LABELS FORM --}}
@foreach($labels as $labels)
	<div class="card-header">
		<h5 class="card-title text-capitalize">Labels</h5>
	</div>
	<div class="card-body">

		<div class="row">
			@foreach($labels->items as $label)
				<div id="form-category" class="col-lg-6 col-xl-4">
					<div class="chekbox-title-dropdowns text-capitalize">
						{{ $label->name }}
					</div>
					<div class="form-check form-group">
						<select class="text-capitalize form-control" id="category_select" name="items[{{ $label->name }}]">
							<option value="">None</option>
							@foreach($label->sizes as $size)
								<option value="{{ $size->name }}">{{ $size->name }}</option>
							@endforeach
						</select>
					</div>
				</div>
			@endforeach
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label name="notes">Notes</label>
					<textarea class="form-control textarea" name="notes" value="" placeholder="Leave a note about this order"></textarea>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="update ml-auto mr-auto">
				<button type="submit" class="btn btn-danger btn-round">Send Order</button>
				<a href="{{ route('orders.index') }}" class="btn btn-round">Cancel</a>
			</div>
		</div>
		
	</div>
@endforeach