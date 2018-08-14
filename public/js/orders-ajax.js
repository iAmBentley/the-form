// ORDER FORM AJAX
$(document).ready(function(){
	// Select a Cateogry in Dropdown to Filter Store Dropdown Options
	$("#category_select").on('change', function(){

		var category_id = $(this).val();

		$.ajax({
			url: orderCreateURL,
			method: 'get',
			data: { category_id: category_id },
			success:function(response){
				var length = response.length;
				$("#store_select").empty();
				for(var i = 0; i<length; i++) {
					var id = response[i]['id'];
					var name = response[i]['name'];
					$("#store_select").append(
							"<option value='"+id+"'>"+name+"</option>"
						);
				}
			}
		});
		
	});
});