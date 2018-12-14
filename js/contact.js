$(function() {
  $('#contactform').validate({
  	errorElement: "label",
  	wrapper: "td",
  	errorPlacement: function(error, element) {
  		error.insertBefore( element.parent().parent() );
  		error.wrap("<tr class='error'></tr>");
  		$("<td></td>").insertBefore(error);
  	},
  	
  	submitHandler: function(form) {
  		$("#send").attr("value", "Sending...");
  		$(form).ajaxSubmit({
  			success: function(responseText, statusText, xhr, $form) {
  				$(form).fadeTo("fast", 0);
  				$("#response").html(responseText).show();
				$("#privacy").hide();
  			}
  		});
  		return false;
  	}
  });
});