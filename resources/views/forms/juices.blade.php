{{-- JUICES ITEM BLOCK FOR ORDER.CREATE AJAX --}}
<div class="card-header">
	<h5 class="card-title">Blended Juices</h5>
</div>
<div class="card-body">
	{{-- ITEMS - BLENDED LINE --}}
	<div class="row ">
		@foreach($items as $juice)	
			<div class="items col-lg-6">
				<div class="chekbox-title text-capitalize pull-left">
					{{ $juice->name }}
				</div>
				<div class="form-check-radio pull-right ml-2">
				    <label class="form-check-label">
				        <input class="form-check-input" type="radio" name="items[{{$juice->name}}]" value="No" checked>
				        No
				        <span class="form-check-sign"></span>
				    </label>
				</div>
				<div class="orange-radio form-check-radio pull-right ml-2">
				    <label class="form-check-label">
				        <input class="form-check-input" type="radio" name="items[{{$juice->name}}]" value="Yes" >
				        Yes
				        <span class="form-check-sign orange-radio-yes"></span>
				    </label>
				</div>
				<hr style="{{ $loop->last ? 'display:none' : '' }}">
			</div>
		@endforeach
	</div>
</div>
{{-- DRIP LINE SECTION --}}
<div class="card-header">
	<h5 class="card-title">Max VG Juices</h5>
</div>
<div class="card-body">
	{{-- ITEMS - DRIPLINE --}}
	<div class="row mb-4">
		@foreach($items as $dripline)
			@if($dripline->is_drip == 1)
				<div class="items col-lg-6">
					<div class="chekbox-title text-capitalize pull-left">
						{{ $dripline->name }} | Drip
					</div>
					<div class="form-check-radio pull-right ml-2">
					    <label class="form-check-label">
					        <input class="form-check-input" type="radio" name="items[{{$dripline->name}} | Drip Line]" value="No" checked>
					        No
					        <span class="form-check-sign"></span>
					    </label>
					</div>
					<div class="orange-radio form-check-radio pull-right ml-2">
					    <label class="form-check-label">
					        <input class="form-check-input" type="radio" name="items[{{$dripline->name}} | Drip Line]" value="Yes" >
					        Yes
					        <span class="form-check-sign orange-radio-yes"></span>
					    </label>
					</div>
					<hr style="{{ $loop->last ? 'display:none' : '' }}">
				</div>
			@endif
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
	{{-- BUTTONE SET --}}
	<div class="row">
		<div class="update ml-auto mr-auto">
			<button id="submit-btn" type="submit" class="btn btn-danger btn-round">Send Order</button>
			<a href="{{ route('orders.index') }}" class="btn btn-round">Cancel</a>
		</div>
	</div>
</div>	