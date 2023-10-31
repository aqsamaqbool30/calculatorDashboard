$(document).ready(function () {
  $('#calc2Ddistance').click(function () {
    $('#limit1').html(' ').removeClass('pb-6');
    let x1 = parseFloat($('#2dX1').val());
    let x2 = parseFloat($('#2dX2').val());
    let y1 = parseFloat($('#2dY1').val());
    let y2 = parseFloat($('#2dY2').val());
    let validate = validateInputs(['#2dX1', '#2dX2', '#2dY1', '#2dY2'], 4, '#limit1', '#result');
    if (!validate) {
      return;
    }
    let distance = Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));
    let slope = (y2 - y1) / (x2 - x1);
    let angle = Math.atan(slope);
    angle = (angle * 180) / Math.PI;
    let equation1 = slope * (0 - x1) + y1;
    let equation2 = (0 - y1 + slope * x1) / slope;

    $('#result').removeClass('hidden');
    $('#solution1').html('<b>Distance:</b> ' + distance);
    for (let i = 2; i < 7; i++) {
      if (distance === 0) {
        $('#solution' + i).addClass('hidden');
      } else {
        $('#solution' + i).removeClass('hidden');
      }
    }
    $('#solution2').html('<b>Steps:</b> <br>' + 'Formula: √(X<sub>2</sub> - X<sub>1</sub>)<sup>2</sup> + (Y<sub>2</sub> - Y<sub>1</sub>)<sup>2</sup> &nbsp;&nbsp; <b>OR</b> &nbsp;&nbsp; ((X<sub>2</sub> - X<sub>1</sub>)<sup>2</sup> + (Y<sub>2</sub> - Y<sub>1</sub>) <sup>2</sup>)<sup>1/2</sup> <br>Distance(d) = ' + '√(' + x2 + ' - ' + x1 + ') <sup>2</sup> + (' + y2 + ' - ' + y1 + ')<sup>2</sup> <br>= √' + (Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2)) + '<br> = ' + distance);
    $('#solution3').html('<b>Slope(m):</b> &nbsp;&nbsp; Formula: Δy / Δx = (Y<sub>2</sub> - Y<sub>1</sub>) / (X<sub>2</sub> - X<sub>1</sub>) <br>= ' + '(' + y2 + ' - ' + y1 + ') / (' + x2 + ' - ' + x1 + ')<br>= ' + slope);
    $('#solution4').html('<b>Angle(θ):</b> &nbsp;&nbsp; Formula: arctan( Δy / Δx ) = (Y<sub>2</sub> - Y<sub>1</sub>) / (X<sub>2</sub> - X<sub>1</sub>) <br>= ' + '(' + y2 + ' - ' + y1 + ') / (' + x2 + ' - ' + x1 + ')<br>= ' + Math.atan(slope) + ' rad  OR ' + angle + ' ° ');
    $('#solution5').html('<br><b>Equation of the line:</b>  y = m * (x - x<sub>1</sub>) + y<sub>1</sub> <br>y = ' + slope + 'x ' + (-(slope * x1) + y1));
    $('#solution6').html('When x=0, y = ' + equation1.toFixed(5) + '<br>When y=0, x = ' + equation2.toFixed(5));
  });

  $('#calc3Ddistance').click(function () {
    let x1 = parseFloat($('#3DX1').val());
    let y1 = parseFloat($('#3DY1').val());
    let z1 = parseFloat($('#3DZ1').val());
    let x2 = parseFloat($('#3DX2').val());
    let y2 = parseFloat($('#3DY2').val());
    let z2 = parseFloat($('#3DZ2').val());
    let validate = validateInputs(['#3DX1', '#3DY1', '#3DZ1', '#3DX2', '#3DY2', '#3DZ2'], 6, '#limit2', '#result');
    if (!validate) {
      return;
    }
    let distance = Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2) + Math.pow(z2 - z1, 2));
    $('#result').removeClass('hidden');
    $('#solution1').html('<b>Distance:</b> ' + distance);
    for (let i = 3; i < 7; i++) {
      $('#solution' + i).addClass('hidden');
    }
    if (distance == 0) {
      $('#solution2').addClass('hidden');
      return;
    } else {
      $('#solution2').removeClass('hidden');
      $('#solution2').html('<b>Steps:</b> <br>' + 'Formula: √(X<sub>2</sub> - X<sub>1</sub>)<sup>2</sup> + (Y<sub>2</sub> - Y<sub>1</sub>)<sup>2</sup> + (Z<sub>2</sub> - Z<sub>1</sub>)<sup>2</sup> &nbsp;&nbsp; <br><b>OR</b><br> &nbsp;&nbsp; ((X<sub>2</sub> - X<sub>1</sub>)<sup>2</sup> + (Y<sub>2</sub> - Y<sub>1</sub>) <sup>2</sup> + (Z<sub>2</sub> - Z<sub>1</sub>)<sup>2</sup>)<sup>1/2</sup> <br><br>Distance(d) = ' + '√(' + x2 + ' - ' + x1 + ') <sup>2</sup> + (' + y2 + ' - ' + y1 + ')<sup>2</sup> + (' + z2 + ' - ' + z1 + ')<sup>2</sup> <br>= √' + (Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2) + Math.pow(z2 - z1, 2)) + '<br> = ' + distance);
    }
  });

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

  $('#calc-Longitude-Latitude').click(function () {
    $('#limits1').html(' ').removeClass('pb-6');
    let lat1 = parseFloat($('#latitude1').val());
    let long1 = parseFloat($('#longitude1').val());
    let lat2 = parseFloat($('#latitude2').val());
    let long2 = parseFloat($('#longitude2').val());

    let validate = validateInputs(['#latitude1', '#longitude1', '#latitude2', '#longitude2'], 4, '#limits', '#result1');
    if (!validate) {
      return;
    }
    if (lat1 < -90 || lat1 > 90 || lat2 < -90 || lat2 > 90) {
      $('#limits1').html('Please provide Latitude values within -90 and 90.');
      $('#limits1').addClass('pb-6');
      $('#result1').addClass('hidden');
      return;
    } else if (long1 < -180 || long1 > 180 || long2 < -180 || long2 > 180) {
      $('#limits1').html('Please provide Longitude values within -180 and 180.');
      $('#limits1').addClass('pb-6');
      $('#result1').addClass('hidden');
      return;
    }

    let distance_km = haversineDistance(lat1, long1, lat2, long2);
    $('#solution9').html('The distance between [' + lat1 + ', ' + long1 + '] and [' + lat2 + ', ' + long2 + '] is approximately <b>' + distance_km + ' Km OR ' + distance_km * 0.621371 + ' miles.</b>');
    $('#result1').removeClass('hidden');
  });
});

let map = L.map('map').setView([0, 0], 2);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; OpenStreetMap contributors',
}).addTo(map);
let marker1, marker2;

function getDistance(lat1, lon1, lat2, lon2) {
  let R = 6371;
  let dLat = deg2rad(lat2 - lat1);
  let dLon = deg2rad(lon2 - lon1);
  let a = Math.sin(dLat / 2) * Math.sin(dLat / 2) + Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * Math.sin(dLon / 2) * Math.sin(dLon / 2);
  let c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
  let distance = R * c;
  return distance.toFixed(8);
}

function deg2rad(deg) {
  return deg * (Math.PI / 180);
}
let result = document.getElementById('result2');
map.on('click', function (e) {
  if (!marker1) {
    marker1 = L.marker(e.latlng).addTo(map);
  } else if (marker1 && !marker2) {
    marker2 = L.marker(e.latlng).addTo(map);

    let lat1 = marker1.getLatLng().lat;
    let lon1 = marker1.getLatLng().lng;
    let lat2 = marker2.getLatLng().lat;
    let lon2 = marker2.getLatLng().lng;
    let distance = getDistance(lat1, lon1, lat2, lon2);

    $('#solution11').html('The distance between [' + lat1 + ', ' + lon1 + '] and [' + lat2 + ', ' + lon2 + '] is approximately: <b>' + distance + ' km  Or ' + distance * 0.621371 + ' miles. </b>');
    result.classList.remove('hidden');
  }
});

function clearAll() {
  marker1.remove();
  if (marker2) {
    marker2.remove();
  }
  marker1 = null;
  marker2 = null;
  document.getElementById('solution11').innerHTML = '';
  result.classList.add('hidden');
}
