/* Google Place API: Location Autocomplete */
var jsLoaded = false;

function loadGoogleMaps(frmId,addrId) {
	var myString = $('#mapDiv').data("vssar");
	var script = document.createElement('script');
	script.type = 'text/javascript';
	script.src = 'https://maps.google.com/maps/api/js?key=' + atob(myString) + '&sensor=false&libraries=places&language=en-AU';
	script.onload = function() {
		googleInitAutocomplete(frmId,addrId);
	};
	document.head.appendChild(script);
}

function googleInitAutocomplete(frmId,addrId)
{
	var autocomplete = new google.maps.places.Autocomplete($("#"+addrId)[0], {});
	/* Autocomplete only for USA */
	autocomplete.setComponentRestrictions({'country': ['us']});
	google.maps.event.addListener(autocomplete, 'place_changed', function() {
		var place = autocomplete.getPlace();
		var locationArr = place.geometry.location;
		//console.log(place.address_components);
		if(locationArr.lat() != "" && locationArr.lng() != "")
		{
			if($("#latitude").length > 0) $("#latitude").val(locationArr.lat());
			if($("#longitude").length > 0) $("#longitude").val(locationArr.lng());
		} else {
			if($("#latitude").length > 0) $("#latitude").val("");
			if($("#longitude").length > 0) $("#longitude").val("");
		}
	});
}

function initJS(frmId,addrId)
{
	if(!jsLoaded) {
		loadGoogleMaps(frmId,addrId);
	}
	jsLoaded = true;
}