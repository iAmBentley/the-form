// ORDER FORM AJAX
$(document).ready(function(){
	
	// Select a Cateogry in Dropdown to Filter Store Dropdown Options
	$("#category_select").on('change', function(){

		// Set variable of the selected category id
		var selectedCat = $(this).val();
		console.log(selectedCat);

		// $("#form-body").load("/forms/juices.blade.php");
		
		// $.post(url, data, function(x){
			// $("#store_select").append(x);
		// });

		// $.getJSON(storesByCatURL, function(storeData) {
		// 	console.log(storeData[0].stores[0].name);
		// 	$.each(storeData, function() { 
		// 		$("#store_select").append(
		// 			"<option value='"+id+"'>"+name+"</option>"
		// 		);
		// 	});
		// });

		$.ajax({
			url: storesByCatURL,
			method: 'get',
			dataType: 'json',
			data: { selectedCat: selectedCat },
			success:function(storeData){
				if(storeData) {
					var length = storeData[0].stores.length;
					$("store_select").empty();
					for(var i = 0; i<length; i++) {
						var id = storeData[0].stores[i].id;
						var name = storeData[0].stores[i].name;
						$("#store_select").append(
							"<option value='"+id+"'>"+name+"</option>"
						);
					}
				}
			}
		});
		
	});

	// Select a Store in Dropdown to Show Form w Items Available to That Store
	$("#store_select").on('change', function(){

		// Set variable of the selected store id
		var selectedStore = $(this).val();

		$.ajax({
			url: formItemsURL,
			method: 'get',
			dataType: 'json',
			data: { selectedStore: selectedStore },
			success:function(formData){
				// $("#form-body").html(/forms/'formName')
				console.log(formData)
			}
		});
		
	});

});