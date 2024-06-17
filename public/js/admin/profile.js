var Profile = function(){
	var formsubmited = function() {
		if($("#edit-users").valid()) {

			if($("#password").val() !== $("#password_confirmation").val())
			{
				Swal.fire('Oops...','The password confirmation does not match.','error');
				$("#confirm_password").val('');
				return false;
			}

			$("#edit-users").submit();
			$("#loader").show();
		}
	}

	/* User Profile Photo Preview */
	var loadPhoto = function(event) {
		var output = document.getElementById('photo-preview');
		output.src = URL.createObjectURL(event.target.files[0]);
		output.onload = function() {
			URL.revokeObjectURL(output.src) // free memory
		}
	};

	return {
		init:function(){
			$("#edit-users").validate();
		},
		formsubmited,
		loadPhoto,
	}
}();

// Initialize when page loads
$(function() {
	Profile.init();
});