var Edit = function() {
	var formsubmited = function() {
		if($("#description").summernote('code').replace(/<\/?[^>]+(>|$)/g, "") == "")
		{
			Swal.fire({icon: 'error',title: 'Oops...',text: 'Please add content!'});
			return false;
		}

		if($("#edit-cms").valid()) {
			$("#edit-cms").submit();
			$("#loader").show();
		}
	}

	return {
		init:function(){
			$("#edit-cms").validate();
			$('#description').summernote({height: 300});
		},
		formsubmited
	}
}();

// Initialize when page loads
$(function() {
	Edit.init();
});