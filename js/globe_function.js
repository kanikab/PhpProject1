//functions for the globe.html
function init() {
    google.load("earth", "1");
    google.earth.createInstance('map3d', initCB, failureCB);
}

function initCB(instance) {
    var ge;
    var cur_placemark;
    var cur_lat;
    var cur_lon;

    ge = instance;
    ge.getWindow().setVisibility(true);

    // add a navigation control
    ge.getNavigationControl().setVisibility(ge.VISIBILITY_AUTO);

    // add some layers
    ge.getLayerRoot().enableLayerById(ge.LAYER_BORDERS, true);
    ge.getLayerRoot().enableLayerById(ge.LAYER_ROADS, true);

    // Define a custom icon.
    var icon = ge.createIcon('');
    icon.setHref('http://maps.google.com/mapfiles/kml/paddle/red-circle.png');
    var style = ge.createStyle('');
    style.getIconStyle().setIcon(icon);
    style.getIconStyle().setScale(15.0);
    
    
    
    var placemark = new Array();
    function getAllPlacemark() {
        var url = "globe.php";
        $.getJSON(url, function (json) {
            i = 0;
            $.each(json, function (k, v) {

    	    placemark[i] = v;
	    
	
    		//create placemark
                    var db_placemark = ge.createPlacemark('');
                    db_placemark.setName(placemark[i].name.toUpperCase());
                    db_placemark.setStyleSelector(style);
                    
		    var db_pos = ge.createPoint('');
                    db_pos.setLatitude(parseFloat(placemark[i].latitude));
                    db_pos.setLongitude(parseFloat(placemark[i].longitude));
                    db_placemark.setGeometry(db_pos);
                    ge.getFeatures().appendChild(db_placemark);
	            google.earth.addEventListener(db_placemark, 'click', function (event) {
			window.location.href = "text.php?lon="+event.getTarget().getGeometry().getLongitude()+"&lat="+event.getTarget().getGeometry().getLatitude();
			
	            });
		    
    	     i++;
	   
        	    
	   
            });

        });
    }


    getAllPlacemark();


 
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(

        function (position) {
            cur_lat = position.coords.latitude;
            cur_lon = position.coords.longitude;

            //create placemark
            cur_placemark = ge.createPlacemark('');
            cur_placemark.setName("You are here");
            cur_placemark.setStyleSelector(style);
            var cur_pos = ge.createPoint('');
            cur_pos.setLatitude(cur_lat);
            cur_pos.setLongitude(cur_lon);
            cur_placemark.setGeometry(cur_pos);
            ge.getFeatures().appendChild(cur_placemark);
	    
            google.earth.addEventListener(cur_placemark, 'click', function (event) {
		window.location.href = "text.php?lon="+event.getTarget().getGeometry().getLongitude()+"&lat="+event.getTarget().getGeometry().getLatitude();
              
		  });
	    
	     
	    
	   
	    
	    
            // Create a new LookAt.
            var lookAt = ge.createLookAt('');

            // Set the position values.
            lookAt.setLatitude(cur_lat);
            lookAt.setLongitude(cur_lon);
            lookAt.setRange(15000000.0);
            ge.getView().setAbstractView(lookAt);
        });
    } else {

    }


   


    document.getElementById('installed-plugin-version').innerHTML = ge.getPluginVersion().toString();
}

function failureCB(errorCode) {}


function showPosition(position) {
    cur_lat = position.coords.latitude;
    cur_lon = position.coords.longitude;
}





