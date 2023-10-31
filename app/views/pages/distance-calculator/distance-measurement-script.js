$(document).ready(function () {
  function haversineDistance(lat1, lon1, lat2, lon2) {
    let R = 6371;
    let degreetoRadians = (degrees) => (degrees * Math.PI) / 180;
    let deltaLat = degreetoRadians(lat2 - lat1);
    let deltaLon = degreetoRadians(lon2 - lon1);

    let a = Math.sin(deltaLat / 2) ** 2 + Math.cos(degreetoRadians(lat1)) * Math.cos(degreetoRadians(lat2)) * Math.sin(deltaLon / 2) ** 2;
    let c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    let distance = R * c;
    return distance;
  }

  function dmsToDecimal(degrees, minutes, seconds, direction) {
    let decimalDegrees = parseInt(degrees) + parseInt(minutes) / 60 + parseFloat(seconds) / 3600;
    if (direction === 'S' || direction === 'W') {
      decimalDegrees *= -1;
    }
    return decimalDegrees;
  }

  $('#calcDistance').click(function () {
    let validate = validateInputs(['#latitudeDegrees1', '#latitudeMinutes1', '#latitudeSeconds1', '#longitudeDegrees1', '#longitudeMinutes1', '#longitudeSeconds1', '#longitudeDirection1', '#latitudeDegrees2', '#latitudeMinutes2', '#latitudeSeconds2', '#longitudeDegrees2', '#longitudeMinutes2', '#longitudeSeconds2'], 12, '#warning', '#result');
    if (!validate) {
      return;
    }

    let latitude1 = dmsToDecimal($('#latitudeDegrees1').val(), $('#latitudeMinutes1').val(), $('#latitudeSeconds1').val(), $('#latitudeDirection1').val());
    let longitude1 = dmsToDecimal($('#longitudeDegrees1').val(), $('#longitudeMinutes1').val(), $('#longitudeSeconds1').val(), $('#longitudeDirection1').val());
    let latitude2 = dmsToDecimal($('#latitudeDegrees2').val(), $('#latitudeMinutes2').val(), $('#latitudeSeconds2').val(), $('#latitudeDirection2').val());
    let longitude2 = dmsToDecimal($('#longitudeDegrees2').val(), $('#longitudeMinutes2').val(), $('#longitudeSeconds2').val(), $('#longitudeDirection2').val());

    let point1 = {
      latitude: latitude1,
      longitude: longitude1,
    };
    let point2 = {
      latitude: latitude2,
      longitude: longitude2,
    };

    let lat1 = point1.latitude;
    let long1 = point1.longitude;
    let lat2 = point2.latitude;
    let long2 = point2.longitude;
    let distance_km = haversineDistance(lat1, long1, lat2, long2);

    $('#solution-distance').html('The distance between [' + $('#latitudeDegrees1').val() + '° ' + $('#latitudeMinutes1').val() + "' " + $('#latitudeSeconds1').val() + `" ` + $('#latitudeDirection1').val() + ', ' + $('#longitudeDegrees1').val() + '° ' + $('#longitudeMinutes1').val() + "' " + $('#longitudeSeconds1').val() + `" ` + $('#longitudeDirection1').val() + '] and [' + $('#latitudeDegrees2').val() + '° ' + $('#latitudeMinutes2').val() + "' " + $('#latitudeSeconds2').val() + `" ` + $('#latitudeDirection2').val() + ', ' + $('#longitudeDegrees2').val() + '° ' + $('#longitudeMinutes2').val() + "' " + $('#longitudeSeconds2').val() + `" ` + $('#longitudeDirection2').val() + '] is approximately <b>' + distance_km + ' Km OR ' + distance_km * 0.621371 + ' miles.</b>');
    $('#result').removeClass('hidden');
  });
});
