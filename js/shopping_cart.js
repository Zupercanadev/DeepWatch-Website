$document.ready(function () {

	// Cart-total auto update.
	$('#update_Cart_frm').on('submit', function(e)
	{
		e.preventDefault();
	    
		var allInputs = $.find(".stepper-input");
		
		alert(allInputs.length);
		
        // Post using ajax		
		$.ajax({
			type: 'post',
			url: '../bat/update_cart.php',
			data: allInputs,
			success: function (data) {
				alert(data);
			},
			dataType:"json";
		});
	})
});