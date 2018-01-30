$document.ready(function () {

	// Cart-total auto update.
	$('#update_Cart_frm').on('submit', function(e)
	{
		e.preventDefault();
	    
		var allInputs = $.find(".stepper-input");
		
        // Post using ajax		
		$.ajax({
			type: 'post',
			url: '../bat/update_cart.php',
			data: allInputs,
			success: function (data) {
				if(data[1] == true)
				{
					location.reload();
				}
				else
				{
					$('#total_Calculation_div').empty();
					$('#total_Calculation_div').append("Total: $" + data[0]);
				}
			
			},
			dataType:"json"
		});
	})
});