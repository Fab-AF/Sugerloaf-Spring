function setCSRFToken(){	
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('[name="csrf-token"]').val(),
			'browser-timezone-offset-minutes' : getBrowserTimeZone()
		}
	});
}

function getBrowserTimeZone() {
	var timezone_offset_minutes = new Date().getTimezoneOffset();
	timezone_offset_minutes = timezone_offset_minutes == 0 ? 0 : -timezone_offset_minutes;
	return timezone_offset_minutes;
}

//Auto Phone number format As US phone format
function autoPhoneNoFormat(id) {
	var phoneNo = $('#'+id).val();
	var numbers = phoneNo.replace(/\D/g, '');
	char = {0:'',3:'-',6:'-'};
	var newPhoneNo = '';
	for(var i = 0; i < numbers.length; i++) {
		newPhoneNo += (char[i]||'') + numbers[i];		
	}
	if(newPhoneNo != $('#'+id).val())
		$('#'+id).val(newPhoneNo);
}


function sendContactUS(){
	if($("#contactUsFrm").valid()) 
	{
		$("#contactUsFrm").submit();
		$(".frm-btn").hide();
		$("#loader").show();
		setCSRFToken();
		$data = $("#contactUsFrm").serialize();

		$.ajax({
			url: "/send/email",
			type: "POST",
			data: $data,
			success: function(r)
			{
				$(".frm-btn").show();
				$("#loader").hide();
				if($.trim(r) != null && $.trim(r) > 0) {
					alert("Your request has been submitted successfully!");
					location.reload();

				} else {
					alert("Someting wrong, Please reload the page");
				}
			},
			error: function(xhr, textStatus) {
				//xhr.responseJSON.errors[0]
			}
		});
	}
}

$(document).ready(function() {
	if($("#submitContactBtn").length > 0)
	{
		$("#contactUsFrm").validate();
		$("#submitContactBtn").click(function(){
			sendContactUS();
		});
	}
});
