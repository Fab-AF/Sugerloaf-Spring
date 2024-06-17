var map;
var mapJsLoaded = false;
var markerArr = {};
var markerBounds;
var store_data = {};

$( document ).ready(function() {
    getStoresList();
});

function getPageData(page) {
	$("#page").val(page);
	getStoresList();
}

/* Get Store Search */
function getStoresList() {
	//showLoading("search-loading");
	setCSRFToken();

	if( $("#mile").val() != "" && $("#location").val() == "" ){
		alert("Please select location!");
		return false;
	}

	var data = $("#storeSrcFrm").serialize();
		//data += '&sort='+$("#sort").val();
		//data += '&limit='+$("#limit").val();

	$("#store-result").hide();
	$("#loader").show();

	$.ajax({
		url: '/storeSearch',
		type: "POST",
		data: data,
		success: function(resData) {
			$("#store-result").show();
			$("#loader").hide();
			if($.trim(resData.success) && resData.data.length > 0) {
				setStoreHtml(resData.data);
			} else {
				$("#store-result").html("<div class='text-center'>No store found, Please refine your search criteria!</div>");
				$("#mapDiv").hide();
			}
		}
	});
}

function setStoreHtml(data) {
	var storeHtml = '';
	store_data = data;
	$.each(data, function(index, store)
	{
		var available_products = 0;
		if(store.available_products != null)
			available_products = store.available_products;

		var miles = 0;
		var milesLabel = '';
		if(store.distance != null){
			miles = store.distance.toFixed(2);
			milesLabel = 'Miles';
		} else if(store.available_products != null) {
			miles = store.available_products ;
			milesLabel = 'Products';
		}

		storeHtml += `
			<div class="addresscard" id="box_${store.id}">
				<div class="blackbox">
					<div>${miles}</div>
					<div>${milesLabel}</div>
				</div>
				<div>
					<div class="blackboxtitle">${store.name}</div>
					<div class="blackboxdesc">
						${store.address}
					</div>
					<div class="blackboxsubdesc">phone | ${store.phone}</div>
					<div class="blackboxsubdesc">${available_products} Products Found</div>
				</div>
				<img src="/images/locatorarrow.svg" class="locatorarrow" alt="${store.name}"/>
			</div>
			<div><hr /></div>
		`;
	});
	$("#store-result").html(storeHtml);

	if(data.length > 0)
	{
		window.setTimeout(function() {
			$("#mapDiv").show();
			loadDefaultMap();
		},1000);
	}
}

function loadDefaultMap() {
	var latLong = null;
	var mapId = "mapDiv";

	var lat = "40.877510";
	var lng = "-74.042847";
	if($("#latitude").val() != "" && $("#longitude").val() != "")
	{
		//User Location
		lat = $("#latitude").val();
		lng = $("#longitude").val();
	}

	var latlng = new google.maps.LatLng(lat,lng);
	var myOptions = {
		zoom: 10,
		maxZoom: 10,
		center: latlng,
		panControl: false,
		mapTypeControl: false,
		scrollwheel: false,
		draggable: true,
		scaleControl: false,
		navigationControl: false,
		mapTypeControlOptions: {
			style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
		},
		streetViewControl: false,
		overviewMapControl: false,
		fullscreenControl: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	map = new google.maps.Map(document.getElementById(mapId), myOptions);

	loadStoresOnMap();
}

function loadStoresOnMap()
{
	var myLatLng;
	markerBounds = new google.maps.LatLngBounds();

	var homeIcon = "/images/pushpin.png";
	var homeIconHover = "/images/pushpin.png";
	
	//Clear Previous Pushpin
	removeMarkers();
	$.each(store_data, function(index, element)
	{
		if(typeof(element['latitude']) != "undefined" && typeof(element['longitude']) != "undefined" && element['latitude'] != null && element['longitude'] != null)
		{
			myLatLng = new google.maps.LatLng(parseFloat(element['latitude']), parseFloat(element['longitude']));
			var pushpinIcon = new google.maps.MarkerImage(homeIcon);
			var marker = new google.maps.Marker({
				icon : pushpinIcon,
				position: myLatLng,
				tid : element.id,
				slug : element.slug,
				map: map,
				htmlTxt: getMapPinHtml(element),
				visible: true,
			});
			
			//SAVE PUSHPIN MARKER IN HASH (KEY ,VALUE)
			markerArr["box_"+element.id] = marker;

			markerBounds.extend(myLatLng);
			google.maps.event.addListener(marker, "click", function()
			{					
				var infowindow = new google.maps.InfoWindow({
				  content: marker.htmlTxt
				});
				infowindow.open(map, this);
			});
			
			//Default open all info window
			/*var infowindow = new google.maps.InfoWindow({
				content: marker.htmlTxt
			});								
			infowindow.open(map, marker);*/

			marker.addListener('mouseover', function() {
				infowindow = new google.maps.InfoWindow({
				  content: marker.htmlTxt
				});
				infowindow.setZIndex(99);
				infowindow.open(map, this);
				//Icon Changed
				//marker.setIcon(homeIconHover);
			});

			// Assuming you also want to hide the infowindow when user mouses-out
			marker.addListener('mouseout', function() {
				if (infowindow != ""){
					infowindow.setZIndex(1);
					infowindow.close();
				}
				//Icon Re-Set
				//marker.setIcon(homeIcon);
			});
			//Bind Event Store Box With Pushpin
			if($("#box_"+element.id).length > 0)
				setListenerForMap("box_"+element.id);
		}
	});

	//Set map center point
	window.setTimeout(function() {
		map.fitBounds(markerBounds);//auto-zoom
		map.panToBounds(markerBounds);//auto-center
	},2000);
}

function removeMarkers() {
	$.each(markerArr, function(key, value) {
		markerArr[key].setMap(null);
	});
}

function setListenerForMap(boxId)
{
	//var boxId = "box_"+dataObj.tid;
	var marker = markerArr[boxId];
	var row = document.getElementById(boxId);
	//row.onclick = function()
	//{	
		//location.href = decodeURIComponent(route('public.store.detail', marker.tutor_url));
		//google.maps.event.trigger(marker, 'click');
	//}
	row.onmouseover = function()
	{
		//Set Marker Center
		//var latLng = marker.getPosition();
		//map.setCenter(latLng);

		google.maps.event.trigger(marker, 'mouseover');
	}
	row.onmouseout = function()
	{
		google.maps.event.trigger(marker, 'mouseout');
	}
}

function getMapPinHtml(prop)
{
	//var profileUrl = route('public.store.detail', prop.slug);
	if(prop.store_photo == "")
		prop.store_photo = '/images/default_store.webp';

	var pinhtml = '<div style="padding:0px !important; >';
		
		pinhtml += '<div style="">';
			pinhtml += '<img src="'+prop.store_photo+'" alt="'+prop.name+'" class="lazyloaded" data-ll-status="loaded" style="width:140px; max-height:auto; object-fit: cover;">';
		pinhtml += '</div>';

		pinhtml += '<div style="background:#262626 !important;width: 140px;text-align:center; padding:5px;">';
			pinhtml += '<span style="font-size:16px; font-weight:700; color:#fff;">'+prop.name+'</span>';

			pinhtml += '<br/><span style="font-size:12px; font-weight:700; color:#fff;">'+prop.address+'</span>';

			if(typeof(prop.distance) != "undefined" && prop.distance != ""){
				pinhtml += '<br/><span style="font-size:12px; font-weight:700; color:#fff;">'+prop.distance.toFixed(2)+' Miles</span>';
			}

			if(typeof(prop.available_products) != "undefined" && prop.available_products != null) {
				pinhtml += '<br/><span style="font-size:12px; font-weight:700; color:#fff;">'+prop.available_products+' Products Found </span>';
			}

		pinhtml += '</div>';

	pinhtml += '</div>';
	return pinhtml;
}