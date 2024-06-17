var Create = function(){
	var formsubmited = function() {
		if($("#storeFrm").valid()) 
		{
			$("#storeFrm").submit();
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
			$("#storeFrm").validate();
		},
		formsubmited,
		loadPhoto,
	}
}();

// Initialize when page loads
$(function() {
	Create.init();
});