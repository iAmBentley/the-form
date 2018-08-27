// ORDER FORM AJAX
// set variable for selected category id, which is used twice below, but sent once
var _selectedCat;

$(document).ready(function(){
	
	// Select a Cateogry in Dropdown to Filter Store Dropdown Options
	$("#category_select").on('change', function(){
		// Set variable of the selected category id
		 var selectedCat = $(this).val();
		// Pass category_id to Order Controller to query stores
		$.ajax({
			url: storesByCatURL,
			method: 'get',
			dataType: 'json',
			data: { selectedCat: selectedCat },
			success: function (storeData) {
				// If form-body div has contents, it is emptied
				$("#form-body").empty();
				// If stores dropdown has options, they are removed
				$("#store_select option").remove();
				// Add default option in the store_select dropdown before for loop (.each) below
				$("#store_select").append("<option value=''>Choose One</option>");
				// Loop through storeData + display options in store_select dropdown
				$.each(storeData, function(i, e) {
					$('#store_select').append($('<option>').val(e.id).text(e.name));
				});
			},
	        error: function (storeData) {
	            console.log('Error:', storeData);
	        }
		});
	});

	// Select a Store in Dropdown to Show Form w Items Available to That Store + in Selected Category
	$("#store_select").on('change', function(){
		// Set variable of the selected category_id to be sent to the controller below
		_selectedCat = $('#category_select').val();
		// Set variable of the selected store_id to be sent to the controller below
		var selectedStore = $(this).val();
		// Pass variables to Order Controller to query items
		$.ajax({
			url: formItemsURL,
			method: 'get',
			data: { selectedStore: selectedStore, selectedCat: _selectedCat },
			success:function(formData){
				// Fill form-body with html for form with items filtered by store and category
				$('#form-body').html(formData);
				return;
			},
	        error: function (formData) {
	            console.log('Error:', formData);
	        }
		});
	});

	// Update Order to Filled on Button Click
	$('.fill-order').click(function () {
		// Set order_id variable to be passed to controller below
	    var order_id = $(this).val();
	    // Pass order_id to Order Controller to Update Order
	    $.ajaxSetup({
			headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
		})
	    $.ajax({
	        type: "PATCH",
	        url: "/orders/"+order_id+"/edit",
	        data: {order_id: order_id},
	        success: function (itemsData) {
	            console.log('success');
	        },
	        error: function (itemsData) {
	            console.log('Error:', itemsData);
	        }
	    });
	});

});