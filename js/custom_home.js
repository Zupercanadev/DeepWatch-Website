/*
 * Home Page Scripts.
*/
$(document).ready(function()
{
	
	$(window).scroll(function(){
	
		var scroll = $(window).scrollTop();
	
		if(scroll>1300)
		{
			$('#animate_computer').fadeIn(500);
		}	
		
		if(scroll>180)
		{
			$('#stat_1').fadeIn(500);
			$('#stat_2').fadeIn(2000);
			$('#stat_3').fadeIn(2500);
			$('#reference_home').fadeIn(4500);
		}

			
	});
	

});