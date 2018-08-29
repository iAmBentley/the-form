{{-- PRODUCTS ITEM BLOCK FOR ORDER.CREATE AJAX --}}
<div class="card-header">
	<h5 class="card-title">Products</h5>
</div>
<div class="card-body">
	{{-- ITEMS --}}
	<div class="row mb-4">
		@foreach($items as $product)
			<div class="items col-lg-6">
				<div class="chekbox-title text-capitalize pull-left">
					{{ $product->name }}
				</div>
				<div class="form-check-radio pull-right ml-2">
				    <label class="form-check-label">
				        <input class="form-check-input" type="radio" name="items[{{$product->name}}]" value="No" checked>
				        No
				        <span class="form-check-sign"></span>
				    </label>
				</div>
				<div class="orange-radio form-check-radio pull-right ml-2">
				    <label class="form-check-label">
				        <input class="form-check-input" type="radio" name="items[{{$product->name}}]" value="Yes" >
				        Yes
				        <span class="form-check-sign orange-radio-yes"></span>
				    </label>
				</div>
				<hr style="{{ $loop->last ? 'display:none' : '' }}">
			</div>
		@endforeach
	</div>
	{{-- NOTES --}}
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label name="notes">Notes</label>
				<textarea class="form-control textarea" name="notes" value="" placeholder="Leave a note about this order"></textarea>
			</div>
		</div>
	</div>
	{{-- BUTTON SET --}}
	<div class="row">
		<div class="update ml-auto mr-auto">
			<button id="submit-btn" type="submit" class="btn btn-danger btn-round">Send Order</button>
			<a href="{{ route('orders.index') }}" class="btn btn-round">Cancel</a>
		</div>
	</div>
</div>