// ORDER FORM AJAX
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
				$("#form-body").load("/forms/"+storeData[0].name);
				if(storeData) {
					var length = storeData[0].stores.length;
					$("#store_select option").remove();
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

	// Select a Store in Dropdown to Show Form w Items Available to That Store
	$("#store_select").on('change', function(){

		// Set variable of the selected store id
		var selectedStore = $(this).val();
		console.log(selectedStore);

		// $.ajax({
		// 	url: formItemsURL,
		// 	method: 'get',
		// 	dataType: 'json',
		// 	data: { selectedStore: selectedStore },
		// 	success:function(formData){
				// var length = formData[0].items.length;
				// var allItems = formData[0];
				// var items = allItems;
				// console.log('items = '+items);
				// $("#").remove();
				// for(var i = 0; i<length; i++) {
				// 	var item = formData[0].items[i].name;
				// 	console.log(item)
				// }
		// 	}
		// });
		
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