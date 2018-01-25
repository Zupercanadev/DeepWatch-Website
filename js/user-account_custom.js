/*
 * User-Account Scripts.
*/
$(document).ready(function()
{
	
	$("#change_email_btn").click(function(){
	
		if($("#change_email_frm").is(":visible"))
		{
			$("#change_email_frm").hide();
		}
		else
		{
			$("#change_email_frm").show();
		}
		
	
	});
	
	$("#change_pass_btn").click(function(){
	
	
		if($("#change_pass_frm").is(":visible"))
		{
			$("#change_pass_frm").hide();
		}
		else
		{
			$("#change_pass_frm").show();
		}
	
		
	
	});
			

});