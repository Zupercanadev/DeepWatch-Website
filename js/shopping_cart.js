$document.ready(function () {

	// Cart-total auto update.
	$('#update_Cart_frm').on('submit', function(e)
	{
		e.preventDefault();
	    
        // Post using ajax		
		$.ajax({
			type: 'post',
			url: '../bat/update_cart.php',
			data: $('#update_Cart_frm').serialize(),
			success: function () {
				alert('Form Submitted');
			}
		});
	})
});