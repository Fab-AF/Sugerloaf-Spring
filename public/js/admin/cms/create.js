var Create = function(){
	var formsubmited = function() {
		if($("#description").summernote('code').replace(/<\/?[^>]+(>|$)/g, "") == "")
		{
			Swal.fire({icon: 'error',title: 'Oops...',text: 'Please add content!'});
			return false;
		}
		if($("#create-cms").valid()) 
		{
			$("#create-cms").submit();
			$("#loader").show();
		}
	}

	return {
		init:function(){
			$("#create-cms").validate();
			$('#description').summernote({height: 300});
		},
		formsubmited,
	}
}();

// Initialize when page loads
$(function() {
	Create.init();
});