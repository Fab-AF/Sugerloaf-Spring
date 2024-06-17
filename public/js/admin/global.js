var Global = function(){
	var validationConfig = function() {
		$.validator.setDefaults({
			errorElement: 'span',
			errorPlacement: function (error, element) {
			  error.addClass('invalid-feedback');
			  element.closest('.form-group').append(error);
			},
			highlight: function (element, errorClass, validClass) {
			  $(element).addClass('is-invalid').removeClass('is-valid');
			},
			unhighlight: function (element, errorClass, validClass) {
			  $(element).removeClass('is-invalid').addClass('is-valid');
			}
		});

		$.validator.addMethod('IP4Checker', function(value) {
			var ip = "^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$";
			return value.match(ip);
		}, 'Invalid IP address');
	}

	var datatableLoader = function() {
		return "<div class='overlay' id='loader'><i class='fas fa-2x fa-sync-alt fa-spin'></i></div>";
	}

	//Auto Phone number format As US phone format
	var autoPhoneNoFormat = function(id) {
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

	var getCurrentDateTime = function()	{
		var currentdateobj = new Date(); 
		var currenDisplaytdate = (currentdateobj.getMonth()+1)+"/"+currentdateobj.getDate()+"/"+currentdateobj.getFullYear();
		var currentdate = currentdateobj.getFullYear()+"-"+(currentdateobj.getMonth()+1)+"-"+currentdateobj.getDate();
		var currentTime = currentdateobj.getHours() + ":"+ currentdateobj.getMinutes();
		var currentFullTime = currentdateobj.getHours() + ":"+ currentdateobj.getMinutes()+ ":"+ currentdateobj.getSeconds();
		return {currentDate : currentdate, currentTime: currentTime,currenDisplaytdate : currenDisplaytdate, currentFullTime : currentFullTime};
	}

	/* Phone number validation with + sign */
	var phoneValidate = function(id) {
		var a = $("#"+id).val();		
		var filter = /^[+]\d+$/;
		if (filter.test(a)) {
			return true;
		} else {
			//return false;			
			/* if + is missing then add it by code */
			$("#"+id).val("+"+a);			
			return true;
		}
	}

	function setCSRFToken(){	
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('[name="_token"]').val(),				
			}
		});
	}

	return{
		init:function() {			
			validationConfig();	
			setCSRFToken();
		},		
		autoPhoneNoFormat,		
		getCurrentDateTime,		
		phoneValidate,		
		datatableLoader
	}
}();

// Initialize when page loads
$(function() {
	Global.init();
});
