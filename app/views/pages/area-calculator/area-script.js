$(document).ready(function () {
  $('#btnCirclearea').click(function () {
    let validate1 = validateInputs(['#radiusCircle'], 1, '#warning1', '#result1');
    if (validate1) {
      let radius = parseFloat($('#radiusCircle').val());
      let selectvalue = $('#circleSelect').val();

      let solution = '<b>Volume</b> = 4/3 * πr<sup>3</sup> <br>=' + ('4/3 * ' + 'π' + ' * ' + radius + ' * ' + radius + ' * ' + radius) + ' <br>=' + (4 / 3) * Math.PI * radius * radius * radius + ' ' + selectvalue + '<sup>3</sup>';
      $('#solution-div1').html(solution);
      $('#solution-div2').html('');
      $('#result1').removeClass('hidden');
    }
  });

  // function for converting into different units
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

  //-->  cone Area
  calculateArea('#Rectangle-volume', '#lengthRectangle', '#widthRectangle', '#Rectangleradius', '#Rectangleheight', '#result1', '#warning2');
  //-->  Parallelogram Area
  calculateArea('#parallelogramArea', '#lengthParallelogram', '#widthParallelogram', '#Parallelogramlength', '#Parallelogramwidth', '#result2', '#warning3');
  //-->  Ellipse Area
  calculateArea('#ellipseArea', '#lengthEllipse', '#widthEllipse', '#ellipselength', '#ellipsewidth', '#result2', '#warning4');
  //-->  squarePyramid Area
  calculateArea('#sectorArea', '#lengthSector', '#heightSector', '#sectorLength', '#sectorHeight', '#result3', '#warning5');
  // calculateArea("#squarePyramidvolume", "#radiussquarePyramid", "#heightsquarePyramid", "#squarePyramidradius", "#squarePyramidheight", "#result3");

  function calculateArea(buttonId, value1, value2, unit1, unit2, resultId, warningID) {
    $(buttonId).click(function () {
      let areaLength = $(value1).val();
      let areaWidth = $(value2).val();
      let firstUnit = $(unit1).val();
      let secondUnit = $(unit2).val();

      let validateInput = validateInputs([value1, value2], 2, warningID, resultId);
      if (!validateInput) {
        return;
      }
      let conversion_length = convertLength(areaLength, firstUnit, secondUnit);
      let conversion_width = convertLength(areaWidth, secondUnit, firstUnit);
      let solution1;
      let solution2;

      if (buttonId === '#Rectangle-volume') {
        solution1 = '<b>Area = </b> L x W <br>=' + (areaLength + ' * ' + conversion_width) + '<br>=' + areaLength * conversion_width + '  ' + firstUnit + '<sup>2</sup>';
        solution2 = 'OR  <br> <b>Area = </b> L x W <br>=' + (conversion_length + ' * ' + areaWidth) + '<br>=' + conversion_length * areaWidth + '  ' + secondUnit + '<sup>2</sup>';

        $('#solution-div1').html(solution1);
        if (firstUnit === secondUnit) {
          $('#solution-div2').html('');
        } else {
          $('#solution-div2').html(solution2);
        }
        console.log('Rectangle');
      } else if (buttonId === '#parallelogramArea') {
        solution1 = '<b>Area = </b> π x L x W <br>=' + ('π * ' + areaLength + ' * ' + conversion_width) + '<br>=' + Math.PI * areaLength * conversion_width + '  ' + firstUnit + '<sup>2</sup>';
        solution2 = 'OR  <br> <b>Area = </b> π x L x W <br>= ' + ('π * ' + conversion_length + ' * ' + areaWidth) + '<br>=' + Math.PI * conversion_length * areaWidth + '  ' + secondUnit + '<sup>2</sup>';

        $('#solution-divtwo').html(solution1);
        if (firstUnit === secondUnit) {
          $('#solution-div3').html('');
        } else {
          $('#solution-div3').html(solution2);
        }
        console.log('Parallelogram');
      } else if (buttonId === '#ellipseArea') {
        solution1 = '<b>Area = </b> π x L x W <br>=' + ('π * ' + areaLength + ' * ' + conversion_width) + '<br>=' + Math.PI * areaLength * conversion_width + '  ' + firstUnit + '<sup>2</sup>';
        solution2 = 'OR  <br> <b>Area = </b> π x L x W <br>= ' + ('π * ' + conversion_length + ' * ' + areaWidth) + '<br>=' + Math.PI * conversion_length * areaWidth + '  ' + secondUnit + '<sup>2</sup>';

        $('#solution-divtwo').html(solution1);
        if (firstUnit === secondUnit) {
          $('#solution-div3').html('');
        } else {
          $('#solution-div3').html(solution2);
        }
        console.log('Ellipse');
      } else if (buttonId === '#sectorArea') {
        if (secondUnit === 'degree') {
          solution1 = '<b>Area = </b> (A/360) x π x r<sup>2</sup> <br>= ' + '(' + areaWidth + '/' + 360 + ') x π x ' + areaLength + '<sup>2</sup>' + '<br>= ' + (areaWidth / 360) * Math.PI * Math.pow(areaLength, 2) + '  ' + firstUnit + '<sup>2</sup>';
        } else if (secondUnit === 'radians') {
          if (areaWidth <= 0 || areaWidth >= 6.2831853071796) {
            $('#caution').addClass('text-primary_button');
            $('#solution-div4').html('');
            return;
          } else {
            $('#caution').removeClass('text-primary_button');
            solution1 = '<b>Area = </b> (A/2) x r<sup>2</sup> <br>= ' + '(' + areaWidth + '/' + 2 + ') x ' + areaLength + '<sup>2</sup>' + '<br>= ' + (areaWidth / 2) * Math.pow(areaLength, 2) + '  ' + firstUnit + '<sup>2</sup>';
          }
        }
        $('#solution-div4').html(solution1);
        $('#solution-div2').html('');
        $('#solution-div5').html('');
        $('#solution-div6').html('');
        console.log('Sector');
      }
      $(resultId).removeClass('hidden');
    });
  }

  // Triangle volume
  calcVolumenew('#triangleArea', '#lengthTriangle', '#widthTriangle', '#heightTriangle', '#triangleLength', '#triangleWidth', '#triangleHeight', '#result3', '#warning6');
  // Conical Frustum Volume
  calcVolumenew('#trapezoidArea', '#lengthTrapezoid', '#widthTrapezoid', '#heightTrapezoid', '#trapezoidLength', '#trapezoidWidth', '#trapezoidHeight', '#result4', '#warning7');

  function calcVolumenew(buttonId, num1, num2, num3, unit1, unit2, unit3, resultId, warningID) {
    $(buttonId).click(function () {
      let value1 = parseFloat($(num1).val());
      let value2 = parseFloat($(num2).val());
      let value3 = parseFloat($(num3).val());
      let lengthunit = $(unit1).val();
      let widthunit = $(unit2).val();
      let heightunit = $(unit3).val();

      let validateInput = validateInputs([num1, num2, num3], 3, warningID, resultId);
      if (!validateInput) {
        return;
      }
      // value 1
      let conversion_length_1 = convertLength(value2, widthunit, lengthunit);
      let conversion_length_2 = convertLength(value3, heightunit, lengthunit);
      // value 2
      let conversion_width_1 = convertLength(value1, lengthunit, widthunit);
      let conversion_width_2 = convertLength(value3, heightunit, widthunit);
      // value3 
      let conversion_height_1 = convertLength(value1, lengthunit, heightunit);
      let conversion_height_2 = convertLength(value2, widthunit, heightunit);

      let solution1, solution2, solution3;
      if (buttonId === '#triangleArea') {

        $("#triangle").removeClass('text-primary_button').addClass('text-gray-400');
        if ((value1 + value2 <= value3) || (value1 + value3 <= value2) || (value3 + value2 <= value1) || (value1 + conversion_length_1 <= conversion_length_2) || (conversion_length_2 + conversion_length_1 <= value1) || (value1 + conversion_length_2 <= conversion_length_1) || (value2 + conversion_width_1 <= conversion_width_2) || (conversion_width_2 + conversion_width_1 <= value2) || (value2 + conversion_width_2 <= conversion_width_1) || (value3 + conversion_height_1 <= conversion_height_2) || (conversion_height_2 + conversion_height_1 <= value3) || (value3 + conversion_height_2 <= conversion_height_1)) {
          console.log(value1 + conversion_length_1);
          console.log(conversion_width_1 + value2);
          console.log(conversion_height_1 + conversion_height_2);
          $("#triangle").removeClass('text-gray-400').addClass('text-primary_button');
          $(resultId).addClass('hidden');
          return;
        }

        let findS1 = (value1 + conversion_length_1 + conversion_length_2) / 2;
        let findS2 = (conversion_width_1 + value2 + conversion_width_2) / 2;
        let findS3 = (conversion_height_1 + conversion_height_2 + value3) / 2;
        solution1 = 'Area: ' + Math.sqrt(findS1 * (findS1 - value1) * (findS1 - conversion_length_1) * (findS1 - conversion_length_2)) + '  ' + lengthunit + '<sup>2</sup>';
        solution2 = 'OR <br> Area: ' + Math.sqrt(findS2 * (findS2 - conversion_width_1) * (findS2 - value2) * (findS2 - conversion_width_2)) + '  ' + widthunit + '<sup>2</sup>';
        solution3 = 'OR <br> Area: ' + Math.sqrt(findS3 * (findS3 - conversion_height_1) * (findS3 - conversion_height_2) * (findS3 - value3)) + '  ' + heightunit + '<sup>2</sup>';

        if (lengthunit === widthunit && lengthunit === heightunit) {
          $('#solution-div4').html(solution1);
          $('#solution-div5').html('');
          $('#solution-div6').html('');
        } else if (lengthunit === widthunit) {
          $('#solution-div4').html(solution1);
          $('#solution-div5').html('');
          $('#solution-div6').html(solution3);
        } else if (lengthunit === heightunit) {
          $('#solution-div4').html(solution1);
          $('#solution-div5').html(solution2);
          $('#solution-div6').html('');
        } else if (widthunit === heightunit) {
          $('#solution-div4').html(solution1);
          $('#solution-div5').html(solution2);
          $('#solution-div6').html('');
        }
        $('#triangle').removeClass('text-primary_button');
        console.log('Triangle');
      } else if (buttonId === '#trapezoidArea') {
        solution1 = '<b>Area</b> = ( ( b<sub>1</sub> + b<sub>2</sub>) * h ) / 2 <br> = ' + '( ( ' + value1 + ' + ' + conversion_length_1 + ') * ' + conversion_length_2 + ') / ' + 2 + '<br> = ' + ((value1 + conversion_length_1) * conversion_length_2) / 2 + ' ' + lengthunit + '<sup>2</sup>';
        solution2 = '<br>' + '<b>Area</b> = ( ( b<sub>1</sub> + b<sub>2</sub>) * h ) / 2 <br> = ' + '( ( ' + conversion_width_1 + ' + ' + value2 + ') * ' + conversion_width_2 + ') / ' + 2 + '<br> = ' + ((conversion_width_1 + value2) * conversion_width_2) / 2 + ' ' + widthunit + '<sup>2</sup>';
        solution3 = '<br>' + '<b>Area</b> = ( ( b<sub>1</sub> + b<sub>2</sub>) * h ) / 2 <br> = ' + '( ( ' + conversion_height_1 + ' + ' + conversion_height_2 + ') * ' + value3 + ') / ' + 2 + '<br> = ' + ((conversion_height_1 + conversion_height_2) * value3) / 2 + ' ' + heightunit + '<sup>2</sup>';

        if (lengthunit === widthunit && lengthunit === heightunit) {
          $('#solution-div9').html(solution1);
          $('#solution-div10').html('');
          $('#solution-div11').html('');
        } else if (lengthunit === widthunit) {
          $('#solution-div9').html(solution1);
          $('#solution-div10').html('');
          $('#solution-div11').html(solution3);
        } else if (lengthunit === heightunit) {
          $('#solution-div9').html(solution1);
          $('#solution-div10').html(solution2);
          $('#solution-div11').html('');
        } else if (widthunit === heightunit) {
          $('#solution-div9').html(solution1);
          $('#solution-div10').html(solution2);
          $('#solution-div11').html('');
        } else {
          $('#solution-div9').html(solution1);
          $('#solution-div10').html(solution2);
          $('#solution-div11').html(solution3);
        }
        console.log('Trapezoid');
      }
      $(resultId).removeClass('hidden');
    });
  }
});
