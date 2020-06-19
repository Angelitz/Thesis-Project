// autocomplete : this function will be executed every time we change the text
function autocomplete() {
	var min_length = 0; // min caracters to display the autocompletee
	var keyword = $('#name_search').val();
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'function/ajax_refresh.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#name_search_list').show();
				$('#name_search_list').html(data);
			}
		});
	} else {
		$('#name_search_list').hide();
	}
}

// set_item : this function will be executed when we select an item
function set_item(item) {
	// change input value
	$('#name_search').val(item);
	// hide proposition list
	$('#name_search_list').hide();
}