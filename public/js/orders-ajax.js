// ORDER FORM AJAX
var _selectedCat;
$(document).ready(function(){
	
	// Select a Cateogry in Dropdown to Filter Store Dropdown Options
	$("#category_select").on('change', function(){

		// Set variable of the selected category id
		 var selectedCat = $(this).val();

		$.ajax({
			url: storesByCatURL,
			method: 'get',
			dataType: 'json',
			data: { selectedCat: selectedCat },
			success: function (storeData) {
				/* BRING IN FORM HTML/PHP FILE */
				// $("#form-body").load("/forms/"+storeData[0].name);
				/* LOOP THROUGH STOREDATA FROM CONTROLLER */
				if(storeData) {
					var length = storeData[0].stores.length;
					$("#store_select option").remove();
					$("#store_select").append("<option value=''>Choose One</option>");
					for(var i = 0; i<length; i++) {
						var id = storeData[0].stores[i].id;
						var name = storeData[0].stores[i].name;
						$("#store_select").append(
							"<option value='"+id+"'>"+name+"</option>"
						);
					}
				}
			},
	        error: function (storeData) {
	            console.log('Error:', storeData);
	        }
		});
		
	});

	// Select a Store in Dropdown to Show Form w Items Available to That Store + in Selected Category
	$("#store_select").on('change', function(){

		// Set variable of the selected category id
		_selectedCat = $('#category_select').val();
		// Set variable of the selected store id
		var selectedStore = $(this).val();

		$.ajax({
			url: formItemsURL,
			method: 'get',
			dataType: 'json',
			data: { selectedStore: selectedStore, selectedCat: _selectedCat },
			success:function(formData){
				/* SET CATEGORY NAME VARIABLE BASED ON SELECTED CATEGORY */
				switch(_selectedCat) {
				    case "1":
				        var category = "flavors";
				        break;
				    case "2":
				        var category = "labels";
				        break;
				    case "3":
				        var category = "supplies";
				        break;
				    case "4":
				        var category = "juices";
				        break;
				    case "5":
				        var category = "products";
				        break;
				};
				/* BRING IN FORM HTML/PHP FILE */
				$("#form-body").load("/forms/"+category);
			},
	        error: function (formData) {
	            console.log('Error:', formData);
	        }
		});
		
	});

	// Update Order to Filled on Button Click
	$('.fill-order').click(function () {
	    var order_id = $(this).val();
	    console.log(order_id);
	    $.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
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