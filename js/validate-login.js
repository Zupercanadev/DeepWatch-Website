/*
 * Login Script.
*/
$(document).ready(function()
{
	
	// Load Validation.
	regula.bind();
	
	$("#login_frm").submit(function(){
	
		var validations = regula.validate();
		
		for(var i = 0; i < validations.length; i++)
		{
		
			var validation = validations[i];
		
		}
		
		return validations.length == 0;
	
	});
	

});