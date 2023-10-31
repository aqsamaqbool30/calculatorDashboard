$(document).ready(function () {
  $('#sphere-volume').click(function (e) {
    let radius = $('#radius-sphere').val();
    let selectvalue = $('#volumeSelect').val();

    let validate = validateInputs(['#radius-sphere'], 1, '#limit1', '#result1');
    if (!validate) {
      return;
    }
    selectvalue = selectvalue + '<sup>3</sup>';
    let solution = 'Volume: ' + (4 * Math.PI * radius * radius * radius) / 3 + '  ' + selectvalue;
    console.log(solution);
    $('#solution-div1').html(solution);
    $('#result1').removeClass('hidden');
  });

  $('#cubevolume').click(function (e) {
    let radius = $('#inputcube').val();
    let selectvalue = $('#selectcube').val();

    let validate = validateInputs(['#inputcube'], 1, '#limit2', '#result1');
    if (!validate) {
      return;
    }
    selectvalue = selectvalue + '<sup>3</sup>';
    let solution = 'Volume: ' + radius * radius * radius + '  ' + selectvalue;
    console.log(solution);
    $('#solution-div1').html(solution);
    $('#result1').removeClass('hidden');
  });

  function convertLength(length, fromUnit, toUnit) {
    let meter;
    switch (fromUnit) {
      case 'meters':
        meter = length;
        break;
      case 'kilometers':
        meter = length * 1000;
        break;
      case 'centimeters':
        meter = length * 0.01;
        break;
      case 'millimeters':
        meter = length * 0.001;
        break;
      case 'micrometers':
        meter = length * 1e-6;
        break;
      case 'nanometers':
        meter = length * 1e-9;
        break;
      case 'miles':
        meter = length * 1609.34;
        break;
      case 'yards':
        meter = length * 0.9144;
        break;
      case 'feets':
        meter = length * 0.3048;
        break;
      case 'inches':
        meter = length * 0.0254;
        break;
      case 'lightyears':
        meter = length * 9.461e15;
        break;
      default:
        meter = length;
    }

    switch (toUnit) {
      case 'meters':
        return meter;
      case 'kilometers':
        return meter * 0.001;
      case 'centimeters':
        return meter * 100;
      case 'millimeters':
        return meter * 1000;
      case 'micrometers':
        return meter * 1e6;
      case 'nanometers':
        return meter * 1e9;
      case 'miles':
        return meter * 0.000621371;
      case 'yards':
        return meter * 1.09361;
      case 'feets':
        return meter * 3.28084;
      case 'inches':
        return meter * 39.3701;
      case 'lightyears':
        return meter * 1.057e-16;
      default:
        return meter;
    }
  }

  calculateVolume("#cone-volume", "#radius-cone", "#height-cone", "#coneradius", "#coneheight", "#result2",'#limit3');
  calculateVolume("#cylindervolume", "#radiuscylinder", "#heightcylinder", "#cylinderradius", "#cylinderheight", "#result2",'#limit4');
  calculateVolume("#capsulevolume", "#radiuscapsule", "#heightcapsule", "#capsuleradius", "#capsuleheight", "#result3",'#limit5');
  calculateVolume("#squarePyramidvolume", "#radiussquarePyramid", "#heightsquarePyramid", "#squarePyramidradius", "#squarePyramidheight", "#result3",'#limit6');

  function calculateVolume(buttonId, value1, value2, unit1, unit2, resultId, warnID) {
    $(buttonId).click(function (e) {
      let coneradius = $(value1).val();
      let conerheight = $(value2).val();
      let radiusunit = $(unit1).val();
      let heightunit = $(unit2).val();

      let validate = validateInputs([value1, value2], 2, warnID, resultId);
      if (!validate) {
        return;
      }
      let conversion_radius = convertLength(coneradius, radiusunit, heightunit);
      let conversion_height = convertLength(
        conerheight,
        heightunit,
        radiusunit,
      );
      let solution1;
      let solution2;

      if (buttonId === '#cone-volume') {
        solution1 = 'Volume: ' + (1 * Math.PI * coneradius * coneradius * conversion_height) / 3 + '  ' + radiusunit + '<sup>3</sup>' + ' <br> ' + 'OR';
        solution2 = 'Volume: ' + (1 * Math.PI * conversion_radius * conversion_radius * conerheight) / 3 + '  ' + heightunit + '<sup>3</sup>';
        $('#solution-div2').html(solution1);
        $('#solution-div3').html(solution2);
        console.log('cone');
      } else if (buttonId === '#cylindervolume') {
        solution1 = 'Volume: ' + Math.PI * coneradius * coneradius * conversion_height + '  ' + radiusunit + '<sup>3</sup>' + ' <br> ' + 'OR';
        solution2 = 'Volume: ' + Math.PI * conversion_radius * conversion_radius * conerheight + '  ' + heightunit + '<sup>3</sup>';
        $('#solution-div2').html(solution1);
        $('#solution-div3').html(solution2);
        console.log('cylinder');
      } else if (buttonId === '#capsulevolume') {
        solution1 = 'Volume: ' + ((4 * Math.PI * coneradius * coneradius * coneradius) / 3 + Math.PI * coneradius * coneradius * conversion_height) + '  ' + radiusunit + '<sup>3</sup>' + ' <br> ' + 'OR';
        solution2 = 'Volume: ' + ((4 * Math.PI * conversion_radius * conversion_radius * conversion_radius) / 3 + Math.PI * conversion_radius * conversion_radius * conerheight) + '  ' + heightunit + '<sup>3</sup>';
        $('#solution-div4').html(solution1);
        $('#solution-div5').html(solution2);
        console.log('capsule');
      } else if (buttonId === '#squarePyramidvolume') {
        solution1 = 'Volume: ' + (1 * coneradius * coneradius * conversion_height) / 3 + '  ' + radiusunit + '<sup>3</sup>' + ' <br> ' + 'OR';
        solution2 = 'Volume: ' + (1 * conversion_radius * conversion_radius * conerheight) / 3 + '  ' + heightunit + '<sup>3</sup>';
        $('#solution-div4').html(solution1);
        $('#solution-div5').html(solution2);
        console.log('capsule');
      } else {
        solution1 = 'else working';
        solution2 = 'else working';
      }
      $(resultId).removeClass('hidden');
    });
  }

  calcVolumenew("#tankvolume", "#lengthtank", "#heighttank", "#widthtank", "#tanklength", "#tankwidth", "#tankheight", "#limit7", "#result4",);
  calcVolumenew("#conicalFrustumvolume", "#lengthconicalFrustum", "#heightconicalFrustum", "#widthconicalFrustum", "#conicalFrustumlength", "#conicalFrustumwidth", "#conicalFrustumheight", "#limit8", "#result4",);
  calcVolumenew("#ellipsoidvolume", "#lengthellipsoid", "#heightellipsoid", "#widthellipsoid", "#ellipsoidlength", "#ellipsoidwidth", "#ellipsoidheight", "#limit9", "#result5",);
  calcVolumenew("#tubevolume", "#lengthtube", "#heighttube", "#widthtube", "#tubelength", "#tubewidth", "#tubeheight", "#limit10", "#result5",);
  // calcVolumenew("#sphericalCapvolume", "#lengthsphericalCap", "#widthsphericalCap", "#heightsphericalCap", "#sphericalCaplength", "#sphericalCapwidth", "#sphericalCapheight", "#limit11", "#result6",);

  function calcVolumenew(buttonId, num1, num2, num3, unit1, unit2, unit3, warnID, resultId,) {
    $(buttonId).click(function (e) {
      let value1 = parseFloat($(num1).val());
      let value2 = parseFloat($(num2).val());
      let value3 = parseFloat($(num3).val());
      let lengthunit = $(unit1).val();
      let widthunit = $(unit2).val();
      let heightunit = $(unit3).val();

      let validate = validateInputs([num1, num2, num3], 3, warnID, resultId);
      if (!validate) {
        return;
      }
      let conversion_length_1 = convertLength(value2, widthunit, lengthunit);
      let conversion_length_2 = convertLength(value3, heightunit, lengthunit);
      let conversion_width_1 = convertLength(value1, lengthunit, widthunit);
      let conversion_width_2 = convertLength(value3, heightunit, widthunit);
      let conversion_height_1 = convertLength(value1, lengthunit, heightunit);
      let conversion_height_2 = convertLength(value2, widthunit, heightunit);

      let solution1, solution2, solution3;
      if (buttonId === '#tankvolume') {
        solution1 = 'Volume: ' + value1 * conversion_length_1 * conversion_length_2 + '  ' + lengthunit + '<sup>3</sup>' + ' <br> ' + 'OR';
        solution2 = 'Volume: ' + conversion_width_1 * value2 * conversion_width_2 + '  ' + widthunit + '<sup>3</sup>' + ' <br> ' + 'OR';
        solution3 = 'Volume: ' + conversion_height_1 * conversion_height_2 * value3 + '  ' + heightunit + '<sup>3</sup>';
        $('#solution-div6').html(solution1);
        $('#solution-div7').html(solution2);
        $('#solution-div8').html(solution3);
        console.log('tank');
      } else if (buttonId === '#conicalFrustumvolume') {
        solution1 = 'Volume: ' + (1 * Math.PI * conversion_length_2 * (value1 * value1 + value1 * conversion_length_1 + conversion_length_1 * conversion_length_1)) / 3 + '  ' + lengthunit + '<sup>3</sup>' + ' <br> ' + 'OR';
        solution2 = 'Volume: ' + (1 * Math.PI * conversion_width_2 * (conversion_width_1 * conversion_width_1 + conversion_width_1 * value2 + value2 * value2)) / 3 + '  ' + widthunit + '<sup>3</sup>' + ' <br> ' + 'OR';
        solution3 = 'Volume: ' + (1 * Math.PI * value3 * (conversion_height_1 * conversion_height_1 + conversion_height_1 * conversion_height_2 + conversion_height_2 * conversion_height_2)) / 3 + '  ' + heightunit + '<sup>3</sup>';
        $('#solution-div6').html(solution1);
        $('#solution-div7').html(solution2);
        $('#solution-div8').html(solution3);
        console.log('Conical Frustum');
      } else if (buttonId === '#ellipsoidvolume') {
        solution1 = 'Volume: ' + (4 * Math.PI * value1 * conversion_length_1 * conversion_length_2) / 3 + '  ' + lengthunit + '<sup>3</sup>' + ' <br> ' + 'OR';
        solution2 = 'Volume: ' + (4 * Math.PI * conversion_width_1 * value2 * conversion_width_2) / 3 + '  ' + widthunit + '<sup>3</sup>' + ' <br> ' + 'OR';
        solution3 = 'Volume: ' + (4 * Math.PI * conversion_height_1 * conversion_height_2 * value3) / 3 + '  ' + heightunit + '<sup>3</sup>';
        $('#solution-div9').html(solution1);
        $('#solution-div10').html(solution2);
        $('#solution-div11').html(solution3);
        console.log('Ellipsoid');
      } else if (buttonId === '#tubevolume') {
        solution1 = 'Volume: ' + (Math.PI * (value1 * value1 - conversion_length_1 * conversion_length_1) * conversion_length_2) / 4 + '  ' + lengthunit + '<sup>3</sup>' + ' <br> ' + 'OR';
        solution2 = 'Volume: ' + (Math.PI * (conversion_width_1 * conversion_width_1 - value2 * value2) * conversion_width_2) / 4 + '  ' + widthunit + '<sup>3</sup>' + ' <br> ' + 'OR';
        solution3 = 'Volume: ' + (Math.PI * (conversion_height_1 * conversion_height_1 - conversion_height_2 * conversion_height_2) * value3) / 4 + '  ' + heightunit + '<sup>3</sup>';
        $('#solution-div9').html(solution1);
        $('#solution-div10').html(solution2);
        $('#solution-div11').html(solution3);
        console.log('Tube');
      }
      $(resultId).removeClass('hidden');
    });
  }

  sphericalVolumeFunction("#sphericalCapvolume", "#lengthsphericalCap", "#widthsphericalCap", "#heightsphericalCap", "#sphericalCaplength", "#sphericalCapwidth", "#sphericalCapheight", "#limit11", "#result6");
  function sphericalVolumeFunction(buttonId, num1, num2, num3, unit1, unit2, unit3, warnID, resultId) {
    $(buttonId).click(function () {
      $("#warnid").removeClass('text-primary_button').addClass('text-gray-400');
      let value1 = parseFloat($(num1).val());
      let value2 = parseFloat($(num2).val());
      let value3 = parseFloat($(num3).val());
      let lengthunit = $(unit1).val();
      let widthunit = $(unit2).val();
      let heightunit = $(unit3).val();

      let validate = validateInputs([num1, num2, num3], 2, warnID, resultId);
      if (!validate) {
        return;
      }
      let conversion_length_1 = convertLength(value2, widthunit, lengthunit);
      let conversion_length_2 = convertLength(value3, heightunit, lengthunit);
      let conversion_width_1 = convertLength(value1, lengthunit, widthunit);
      let conversion_width_2 = convertLength(value3, heightunit, widthunit);
      let conversion_height_1 = convertLength(value1, lengthunit, heightunit);
      let conversion_height_2 = convertLength(value2, widthunit, heightunit);

      let solution1, findR, findH, findr;
      if ((value1 > conversion_length_1) || (conversion_width_1 > value2) || (conversion_height_1 > conversion_height_2)) {
        $("#warnid").removeClass('text-gray-400').addClass('text-primary_button');
        $(resultId).addClass('hidden');
        return;
      }
      if (isNaN(value2)) {
        findR = (conversion_length_2 * conversion_length_2 + value1 * value1) / (2 * conversion_length_2);
        solution1 = "Volume: " + (1 * Math.PI * conversion_length_2 * conversion_length_2 * (3 * findR - conversion_length_2)) / 3 + "  " + widthunit + "<sup>3</sup>";
        $("#solution-div12").html("Value of R: " + findR + " " + lengthunit);
      } else if (isNaN(value3)) {
        findH = conversion_length_1 - Math.sqrt(conversion_length_1 * conversion_length_1 - value1 * value1);
        let findH1 = conversion_length_1 + Math.sqrt(conversion_length_1 * conversion_length_1 - value1 * value1);
        if (findH < 0) {
          findH = -1 * findH;
        }
        if (findH1 < 0) {
          findH1 = -1 * findH1;
        }
        console.log(findH);
        solution1 = 'Volume: ' + (1 * Math.PI * findH * findH * (3 * conversion_length_1 - findH)) / 3 + '  ' + lengthunit + '<sup>3</sup> <br> OR <br> Volume: ' + (1 * Math.PI * findH1 * findH1 * (3 * conversion_length_1 - findH1)) / 3 + '  ' + lengthunit + '<sup>3</sup>';
        $('#solution-div12').html('Value of h: ' + findH + ' ' + lengthunit);
      } else if (isNaN(value1)) {
        findr = Math.sqrt(2 * value2 * conversion_width_2 - conversion_width_2 * conversion_width_2,);
        solution1 = "Volume: " + (1 * Math.PI * conversion_width_2 * conversion_width_2 * (3 * value2 - conversion_width_2)) / 3 + "  " + widthunit + "<sup>3</sup>";
        $("#solution-div12").html("Value of r: " + findr + " " + widthunit);
        console.log("working");
      }
      $('#solution-div13').html(solution1);
      $(resultId).removeClass('hidden');
    });
  }

});
