var lastSel = 'medical';
function showHideBeverages(flag)
{
	$("#"+lastSel+"Content").hide();
	$("#"+lastSel+"Btn").removeClass("selected");

	$("#"+flag+"Content").show();
	$("#"+flag+"Btn").addClass("selected");

	lastSel = flag;

	if($("#beverageTitle").length > 0) {
		flag = flag.toLowerCase().replace(/\b[a-z]/g, function(letter) {
			return letter.toUpperCase();
		});

		var custTitle = $("#beverageTitle").data("template");
		custTitle = custTitle.replace("{flag}", flag);
		$("#beverageTitle").html(custTitle);
	}
}