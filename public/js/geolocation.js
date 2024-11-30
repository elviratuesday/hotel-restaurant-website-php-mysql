function getGeoLocation() {
    try {
        if( !! navigator.geolocation ) return navigator.geolocation;
        else return undefined;
    } catch(e) {
        return undefined;
    }
}

function show_coords(position) {
    var latFix = position.coords.latitude.toFixed(3);
    var lonFix = position.coords.longitude.toFixed(3);

    console.log(latFix);
    console.log(lonFix);
    
    if (latFix == 52.369, lonFix == 4.643) {
        alert("Welkom, u ben in ons hotel");
    } else {
        if (confirm("Wat jammer. U bent niet in ons hotel. Wilt u de route weten?") == true){
            window.open("https://goo.gl/maps/CfGQgVc5VFsQExWs9"); 
        }
        else {
            return;
        }
    }
}

function geo_error(error) {
    switch(error.code) {
        case error.TIMEOUT:
            alert('Geolocation Timeout');
            break;
        case error.POSITION_UNAVAILABLE:
            alert('Geolocation Position unavailable');
            break;
        case error.PERMISSION_DENIED:
            alert('Geolocation Permission denied');
            break;
        default:
            alert('Geolocation returned an unknown error code: ' + error.code);
    }
}

function init() {
    geo = getGeoLocation()

    geo.watchPosition(show_coords, geo_error, { 
        maximumAge: 1000,   // 1 sec
        timeout: 300000,    // 5 min
        enableHighAccuracy: true
    });
}

window.onload = function() {
    init();
}

