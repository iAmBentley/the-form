// ORDER FORM AJAX STUFF
// Log selected category_id from dropdown selected for categories
// $(document).ready(function(){
	$("#category_select").on('change', function(){

		var category_id = $(this).val();

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			}
		});

		$.ajax({
			url: '/orders/create/filter',
			method: 'POST',
			data: '',
			dataType: 'json',
			success:function(response){
				var length = response.length;
				$("#store_select").empty();
				for(var i = 0; i<length; i++){
					var id = response[i]['id'];
					var name = response[i]['name'];
					$("#store_select").append("<option value='"+id+"'>"+name+"</option>");
				}
			}
		});
		
		console.log("The Category ID selected is " + category_id);
	});
// });

// A busted attempt
// $(document).ready(function(){
// 	$("#category_select").on('change', function(){
// 		var category_id = $(this).val();

// 		$.ajaxSetup({
// 			headers: {
// 				'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
// 			}
// 		});

// 		$.ajax({
// 			url: '/orders',
// 			method: 'post',
// 			data: {category_id:category_id},
// 			dataType: 'json',
// 			success:function(response){

// 				var len = response.length;

// 				$("#store_select").empty();
// 				for( var i = 0; i<len; i++){
// 					var id = response[i]['id'];
// 					var name = response[i]['name'];
					
// 					$("#store_select").append("<option value='"+id+"'>"+name+"</option>");

// 				}
// 			}
// 		});
// 	});
// });
