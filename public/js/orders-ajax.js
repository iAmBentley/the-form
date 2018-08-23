// ORDER FORM AJAX
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
				// Add default option in the store dropdown before for loop below
				$("#store_select").append("<option value=''>Choose One</option>");
				// Set the length variable for the for loop below
				var length = storeData[0].stores.length;
				for(var i = 0; i<length; i++) {
					var id = storeData[0].stores[i].id;
					var name = storeData[0].stores[i].name;
					$("#store_select").append(
						"<option value='"+id+"'>"+name+"</option>"
					);
				}
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
			dataType: 'json',
			data: { selectedStore: selectedStore, selectedCat: _selectedCat },
			success:function(formData){
				/* SET CATEGORY NAME VARIABLE BASED ON SELECTED CAT CHOSEN */
				switch(_selectedCat) {
					//   cat_id              cat_name
				    case "1": var category = "flavors"; break;
				    case "2": var category = "labels"; break;
				    case "3": var category = "supplies"; break;
				    case "4": var category = "juices"; break;
				    case "5": var category = "products"; break;
				};
				// BRING IN FORM HTML/PHP FILE
				$("#form-body").load("/forms/"+category);
			},
	        error: function (formData) {
	            console.log('Error:', formData);
	        }
		});
		
	});

	// Disable submit button after submit
	$("#submit-btn").click(function () {
		$("#submit-btn").addClass("disabled");
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