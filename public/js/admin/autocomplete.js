function autocompleteInit(frmId,addrId)
{
	var autocomplete = new google.maps.places.Autocomplete($("#"+addrId)[0], {});
	/* Autocomplete only for USA */
	autocomplete.setComponentRestrictions({'country': ['us']});
	google.maps.event.addListener(autocomplete, 'place_changed', function() {
		var place = autocomplete.getPlace();
		//console.log(place.address_components);
		$("#"+frmId).find("#latitude").val(place.geometry.location.lat());
		$("#"+frmId).find("#longitude").val(place.geometry.location.lng());
	});
}