var fromtourl = "http://localhost/kamoo/index.php/maps/fromto";
var allplacesurl = "http://localhost/kamoo/index.php/maps/allplaces";
var placetypesurl = "http://localhost/kamoo/index.php/maps/placetypes";
var placetypesordinatesurl = "http://localhost/kamoo/index.php/maps/placetypesordinates";
$(document).ready(function () {

	$.fn.bounds = new google.maps.LatLngBounds();
	$.get(placetypesurl , function( data ) {
		$.each(data, function(a,b){
		$("#placetypes").append("<option>"+b+"</option>");
		/*alert(b);*/});
	},"json");
	
	$.get(allplacesurl , function( data ) {
		$.each(data, function(a,b){
		$("#from").append("<option>"+b+"</option>");
		$("#to").append("<option>"+b+"</option>");
		/*alert(b);*/});
	},"json");
});

function findplaces()
{
	$.fn.placetypemapplaces ={};
	$.fn.bounds = new google.maps.LatLngBounds();
	var val = $("#placetypes").val();
	//alert()
	//placetypesordinatesurl=placetypesordinatesurl+"/"+val;
	//alert
	$.get(placetypesordinatesurl+"/"+val , function( data ) {
		showplacetypes(data);
	},"json");
	
	//initialize
	
	
}

$.fn.placetypeplaces = {};
$.fn.placetypemapplaces = {};
function showplacetypes(places)
{
$.fn.placetypemapplaces = {};
$.fn.placetypeplaces={};
var tmpkey;
$.each(places,function(a,b){
$.fn.placetypeplaces[a] = {"lat":b[0],"long":b[0]}
$.fn.placetypemapplaces[a] = new google.maps.LatLng(b[0],b[1]);
tmpkey = a;
});
/*
$.each($.fn.placetypeplaces,function(a,b){
 
});
*/
var mapProp = {
  center:$.fn.placetypemapplaces[tmpkey],
  zoom:15,
  mapTypeId:google.maps.MapTypeId.HYBRID,
   mapTypeControl: false,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
            },
            navigationControl: true,
            navigationControlOptions: {
                style: google.maps.NavigationControlStyle.SMALL
            }
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var allpoints = [];
$.each($.fn.placetypemapplaces,function(a,b){
	var marker=new google.maps.Marker({
	  position:b,
	});
	marker.setMap(map);
	var infowindow = new google.maps.InfoWindow({content:a});
	infowindow.open(map,marker);
	
	$.fn.bounds.extend(b);
	
	allpoints.push(b);
});
	
 
    center = $.fn.bounds.getCenter();
	map.fitBounds($.fn.bounds);
	
	
	var flightPath = new google.maps.Polyline({
	  path:allpoints,
	  strokeColor:"#0000FF",
	  strokeOpacity:0.8,
	  strokeWeight:2
	});
	flightPath.setMap(map);
}

function findway()
{
	var from = $("#from").val();
	var to = $("#to").val();
	//console.log(encodeURI(fromtourl+"/"+from+"/"+to));
	$.get(fromtourl+"/"+from+"/"+to , function( data ) {
		showfromto(data, from, to);
		//$.each(data,function(a,b){console.log(a+","+b[0]);})
	},"json");
}

function showfromto(places, from, to)
{
//alert("here");
$.fn.bounds = new google.maps.LatLngBounds();
var tmpkey;
$.fn.placetypemapplaces = {};
$.fn.placetypeplaces={};
$.each(places,function(a,b){
$.fn.placetypeplaces[a] = {"lat":b[0],"long":b[1]};
console.log(a+","+b);
$.fn.placetypemapplaces[a] = new google.maps.LatLng(b[0],b[1]);
tmpkey = a;
});
/*
$.each($.fn.placetypeplaces,function(a,b){
 
});
*/
var mapProp = {
  center:$.fn.placetypemapplaces[tmpkey],
  zoom:15,
  mapTypeId:google.maps.MapTypeId.HYBRID,
   mapTypeControl: false,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
            },
            navigationControl: true,
            navigationControlOptions: {
                style: google.maps.NavigationControlStyle.SMALL
            }
  };
  
  

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var allpoints = [];
$.each($.fn.placetypemapplaces,function(a,b){
	var marker=new google.maps.Marker({
	  position:b,
	});
	marker.setMap(map);
	if(from == a)var c = "From: "+a;
	else var c = "To: "+a;
	var infowindow = new google.maps.InfoWindow({content:c});
	infowindow.open(map,marker);
	
	$.fn.bounds.extend(b);
	
	allpoints.push(b);
});
 
    center = $.fn.bounds.getCenter();
	map.fitBounds($.fn.bounds);
	
	/*
	var flightPath = new google.maps.Polyline({
	  path:allpoints,
	  strokeColor:"#0000FF",
	  strokeOpacity:0.8,
	  strokeWeight:2
	});
	flightPath.setMap(map);
	*/
	var mapObject = map;
	from = allpoints[0];
	to = allpoints[1];
	if(to == undefined)to = from;
	var directionsService = new google.maps.DirectionsService();
	var directionsRequest = {
	  origin: from,
	  destination: to,
	  travelMode: google.maps.DirectionsTravelMode.WALKING,
	  unitSystem: google.maps.UnitSystem.METRIC
	};
	directionsService.route(
	  directionsRequest,
	  function(response, status)
	  {
		if (status == google.maps.DirectionsStatus.OK)
		{
		  new google.maps.DirectionsRenderer({
			map: mapObject,
			directions: response
		  });
		}
		else;
		//  $("#error").append("Unable to retrieve your route<br />");
	  }
	);
}