$(document).ready(function () {
  $('#calcTriangle').click(function () {
    let side1 = parseFloat($('#sideA').val());
    let side2 = parseFloat($('#sideB').val());
    let side3 = parseFloat($('#sideC').val());
    let angle1 = parseFloat($('#angleA').val());
    let angle2 = parseFloat($('#angleB').val());
    let angle3 = parseFloat($('#angleC').val());

    let nonNaNCount = [side1, side2, side3, angle1, angle2, angle3].filter((value) => !isNaN(value)).length;
    if (nonNaNCount !== 3) {
      $('#warninID').addClass('pb-6');
      let warningMessage = '';
      if (nonNaNCount !== 3) {
        warningMessage = 'Please provide 3 values including one side atleast to calculate the others, you provided ' + nonNaNCount + ' value.';
      }
      $('#warninID').html(warningMessage);
      $('#solutionDiv').addClass('hidden');
      return;
    } else if (sidesWarning !== 0) {
      $('#solutionDiv').addClass('hidden');
    } else {
      $('#warninID').empty().removeClass('pb-6');
      $('#solutionDiv').removeClass('hidden');
    }
    let solution = calculateTriangle(side1, side2, side3, angle1, angle2, angle3);
    // $('#warninID').removeClass('pb-6');
  });

  function degreesToRadians(degrees) {
    return degrees * (Math.PI / 180);
  }

  // the sum of any two sides should be equal to the third side
  function checkingSides(sideA, sideB, sideC) {
    $("#sidesWarning").html('').removeClass('pb-6');
    $("solutionDiv").removeClass('hidden');
    if (isNaN(sideA) || isNaN(sideB) || isNaN(sideC)) {
      $("#sidesWarning").html('These three values cannot be used to create a valid triangle.').addClass('pb-6');
      $("#solutionDiv").addClass('hidden');
      return true;
    } else if ((sideA + sideB <= sideC) || (sideA + sideC <= sideB) || (sideC + sideB <= sideA)) {
      $("#sidesWarning").html('No valid triangle is possible with these values.').addClass('pb-6');
      $("#solutionDiv").addClass('hidden');
      return true;
    }
    return false;
  }

  function calculateTriangle(sidea, sideb, sidec, anglea, angleb, anglec) {
    let sideA = sidea;
    let sideB = sideb;
    let sideC = sidec;
    let angleA = anglea;
    let angleB = angleb;
    let angleC = anglec;

    // SideA & SideB & SideC are given
    if (sideA && sideB && sideC) {
      // validation
      let sidesValues = checkingSides(sideA, sideB, sideC)
      if (sidesValues) {
        return;
      }
      angleA = Math.acos((sideB * sideB + sideC * sideC - sideA * sideA) / (2 * sideB * sideC));
      angleB = Math.acos((sideA * sideA + sideC * sideC - sideB * sideB) / (2 * sideA * sideC));
      angleC = Math.acos((sideA * sideA + sideB * sideB - sideC * sideC) / (2 * sideA * sideB));

      let angleADegrees = angleA * (180 / Math.PI);
      let angleBDegrees = angleB * (180 / Math.PI);
      let angleCDegrees = angleC * (180 / Math.PI);
      $('#solution1').html('<b>Side A:</b> ' + sideA + '<br><b>Side B:</b> ' + sideB + '<br><b>Side C:</b> ' + sideC);
      $('#solution2').html('<br><b>Angle A:</b> ' + angleADegrees.toFixed(2) + '° <br>  <b>Angle B:</b> ' + angleBDegrees.toFixed(2) + '° <br>  <b>Angle C:</b> ' + angleCDegrees.toFixed(2) + '°');
      $('#solution3').html('<b>OR<br>Angle A:</b> ' + degreesToRadians(angleADegrees).toFixed(6).replace(/\.?00+$/, '') + ' rad <br>  <b>Angle B:</b> ' + degreesToRadians(angleBDegrees).toFixed(6).replace(/\.?00+$/, '') + ' rad <br>  <b>Angle C:</b> ' + degreesToRadians(angleCDegrees).toFixed(6).replace(/\.?00+$/, '') + ' rad');
      let newCalculation = extraCalculations(sideA, sideB, sideC);
      $('#solutionDiv').removeClass('hidden');

      // Two Sides & One Angles
    } else if ((sideA && sideB && angleC) || (sideA && sideB && angleB) || (sideA && sideB && angleA) || (sideA && sideC && angleB) || (sideA && sideC && angleC) || (sideA && sideC && angleA) || (sideB && sideC && angleA) || (sideB && sideC && angleB) || (sideB && sideC && angleC)) {
      let givenside1, givenside2, givenAngle;
      if (!isNaN(angleA)) {
        givenAngle = angleA;
      } else if (!isNaN(angleB)) {
        givenAngle = angleB;
      } else if (!isNaN(angleC)) {
        givenAngle = angleC;
      }
      if (!isNaN(sideA)) {
        if (!isNaN(sideB)) {
          givenside1 = sideA;
          givenside2 = sideB;
        } else if (!isNaN(sideC)) {
          givenside1 = sideA;
          givenside2 = sideC;
        }
      } else if (!isNaN(sideB) && !isNaN(sideC)) {
        givenside1 = sideB;
        givenside2 = sideC;
      }
      let calcualtions = twoSideOneAngles(givenside1, givenside2, givenAngle);

      // One Side & Two Angles
    } else if ((sideA && angleA && angleB) || (sideA && angleB && angleC) || (sideA && angleA && angleC) || (sideB && angleA && angleB) || (sideB && angleB && angleC) || (sideB && angleA && angleC) || (sideC && angleA && angleB) || (sideC && angleB && angleC) || (sideC && angleA && angleC)) {
      let givenside, givenAngle1, givenAngle2;
      if (!isNaN(sideA)) {
        givenside = sideA;
      } else if (!isNaN(sideB)) {
        givenside = sideB;
      } else if (!isNaN(sideC)) {
        givenside = sideC;
      }
      if (!isNaN(angleA)) {
        if (!isNaN(angleB)) {
          givenAngle1 = angleA;
          givenAngle2 = angleB;
        } else if (!isNaN(angleC)) {
          givenAngle1 = angleA;
          givenAngle2 = angleC;
        }
      } else if (!isNaN(angleB) && !isNaN(angleC)) {
        givenAngle1 = angleB;
        givenAngle2 = angleC;
      }
      let calcualtions = oneSidetwoAngles(givenside, givenAngle1, givenAngle2);
    } else {
      $('#solution1').html('Invalid input combination. Please provide valid input.');
      for (let index = 2; index <= 14; index++) {
        $(`#solution1`).html('');
      }
    }

    // Two Sides & One Angles
    function twoSideOneAngles(sideOne, sideTwo, givenAngle) {
      let newCalculation, finalSide, secondValue, thirdValue;

      if (givenAngle === angleA && sideA && sideB) {
        secondValue = Math.asin((sideTwo * Math.sin(degreesToRadians(givenAngle))) / sideOne);
        secondValue = ((secondValue * 180) / Math.PI).toFixed(2);
        thirdValue = 180 - secondValue - givenAngle;
        finalSide = (sideOne * Math.sin(degreesToRadians(thirdValue))) / Math.sin(degreesToRadians(givenAngle));
      } else if (givenAngle === angleB && sideA && sideB) {
        secondValue = Math.asin((sideOne * Math.sin(degreesToRadians(givenAngle))) / sideTwo);
        secondValue = ((secondValue * 180) / Math.PI).toFixed(2);
        thirdValue = 180 - secondValue - givenAngle;
        finalSide = (sideTwo * Math.sin(degreesToRadians(thirdValue))) / Math.sin(degreesToRadians(givenAngle));
      } else if (givenAngle === angleC && sideA && sideB) {
        finalSide = Math.sqrt(Math.pow(sideTwo, 2) + Math.pow(sideOne, 2) - 2 * sideTwo * sideOne * Math.cos(degreesToRadians(givenAngle)));
        secondValue = (Math.acos((Math.pow(finalSide, 2) + Math.pow(sideOne, 2) - Math.pow(sideTwo, 2)) / (2 * finalSide * sideOne)) * 180) / Math.PI;
        thirdValue = (Math.acos((Math.pow(finalSide, 2) - Math.pow(sideOne, 2) + Math.pow(sideTwo, 2)) / (2 * finalSide * sideTwo)) * 180) / Math.PI;
      } else if (givenAngle === angleA && sideA && sideC) {
        secondValue = Math.asin((sideOne * Math.sin(degreesToRadians(givenAngle))) / sideTwo);
        secondValue = ((secondValue * 180) / Math.PI).toFixed(2);
        thirdValue = 180 - secondValue - givenAngle;
        finalSide = (sideTwo * Math.sin(degreesToRadians(thirdValue))) / Math.sin(degreesToRadians(givenAngle));
      } else if (givenAngle === angleB && sideA && sideC) {
        finalSide = Math.sqrt(Math.pow(sideTwo, 2) + Math.pow(sideOne, 2) - 2 * sideTwo * sideOne * Math.cos(degreesToRadians(givenAngle)));
        secondValue = (Math.acos((Math.pow(finalSide, 2) + Math.pow(sideOne, 2) - Math.pow(sideTwo, 2)) / (2 * finalSide * sideOne)) * 180) / Math.PI;
        thirdValue = (Math.acos((Math.pow(finalSide, 2) - Math.pow(sideOne, 2) + Math.pow(sideTwo, 2)) / (2 * finalSide * sideTwo)) * 180) / Math.PI;
      } else if (givenAngle === angleC && sideA && sideC) {
        secondValue = Math.asin((sideOne * Math.sin(degreesToRadians(givenAngle))) / sideTwo);
        secondValue = ((secondValue * 180) / Math.PI).toFixed(2);
        thirdValue = 180 - secondValue - givenAngle;
        finalSide = (sideTwo * Math.sin(degreesToRadians(thirdValue))) / Math.sin(degreesToRadians(givenAngle));
      } else if (givenAngle === angleA && sideC && sideB) {
        finalSide = Math.sqrt(Math.pow(sideTwo, 2) + Math.pow(sideOne, 2) - 2 * sideTwo * sideOne * Math.cos(degreesToRadians(givenAngle)));
        secondValue = (Math.acos((Math.pow(finalSide, 2) + Math.pow(sideOne, 2) - Math.pow(sideTwo, 2)) / (2 * finalSide * sideOne)) * 180) / Math.PI;
        thirdValue = (Math.acos((Math.pow(finalSide, 2) - Math.pow(sideOne, 2) + Math.pow(sideTwo, 2)) / (2 * finalSide * sideTwo)) * 180) / Math.PI;
      } else if (givenAngle === angleB && sideC && sideB) {
        secondValue = Math.asin((sideOne * Math.sin(degreesToRadians(givenAngle))) / sideTwo);
        secondValue = ((secondValue * 180) / Math.PI).toFixed(2);
        thirdValue = 180 - secondValue - givenAngle;
        finalSide = (sideTwo * Math.sin(degreesToRadians(thirdValue))) / Math.sin(degreesToRadians(givenAngle));
      } else if (givenAngle === angleC && sideC && sideB) {
        secondValue = Math.asin((sideOne * Math.sin(degreesToRadians(givenAngle))) / sideTwo);
        secondValue = ((secondValue * 180) / Math.PI).toFixed(2);
        thirdValue = 180 - secondValue - givenAngle;
        finalSide = (sideTwo * Math.sin(degreesToRadians(thirdValue))) / Math.sin(degreesToRadians(givenAngle));
      }
      // validation
      let sidesValues = checkingSides(sideOne, sideTwo, finalSide)
      if (sidesValues) {
        return;
      }
      if (givenAngle === angleA) {
        $('#solution2').html('<br><b>Angle A:</b> ' + givenAngle + '° <br>  <b>Angle B:</b> ' + secondValue + '° <br>  <b>Angle C:</b> ' + thirdValue + '°');
        $('#solution3').html('<b>OR<br>Angle A:</b> ' + degreesToRadians(givenAngle).toFixed(6).replace(/\.?00+$/, '') + ' rad <br>  <b>Angle B:</b> ' + degreesToRadians(secondValue).toFixed(6).replace(/\.?00+$/, '') + ' rad <br>  <b>Angle C:</b> ' + degreesToRadians(thirdValue).toFixed(6).replace(/\.?00+$/, '') + ' rad');
      } else if (givenAngle === angleB) {
        $('#solution2').html('<br><b>Angle A:</b> ' + secondValue + '° <br>  <b>Angle B:</b> ' + givenAngle + '° <br>  <b>Angle C:</b> ' + thirdValue + '°');
        $('#solution3').html('<b>OR<br>Angle A:</b> ' + degreesToRadians(secondValue).toFixed(6).replace(/\.?00+$/, '') + ' rad <br>  <b>Angle B:</b> ' + degreesToRadians(givenAngle).toFixed(6).replace(/\.?00+$/, '') + ' rad <br>  <b>Angle C:</b> ' + degreesToRadians(secondValue).toFixed(6).replace(/\.?00+$/, '') + ' rad');
      } else if (givenAngle === angleC) {
        $('#solution2').html('<br><b>Angle A:</b> ' + secondValue + '° <br>  <b>Angle B:</b> ' + thirdValue + '° <br>  <b>Angle C:</b> ' + givenAngle + '°');
        $('#solution3').html(
          '<b>OR<br>Angle A:</b> ' + degreesToRadians(secondValue).toFixed(6).replace(/\.?00+$/, '') + ' rad <br>  <b>Angle B:</b> ' + degreesToRadians(thirdValue).toFixed(6).replace(/\.?00+$/, '') + ' rad <br>  <b>Angle C:</b> ' + degreesToRadians(givenAngle).toFixed(6).replace(/\.?00+$/, '') + ' rad'
        );
      }
      if (sideA && sideB) {
        newCalculation = extraCalculations(sideOne, sideTwo, finalSide);
        $('#solution1').html('<b>Side A:</b> ' + sideA + '<br><b>Side B:</b> ' + sideB + '<br><b>Side C:</b> ' + finalSide.toFixed(6).replace(/\.?00+$/, ''));
      } else if (sideA && sideC) {
        newCalculation = extraCalculations(sideOne, finalSide, sideTwo);
        $('#solution1').html('<b>Side A:</b> ' + sideA + '<br><b>Side B:</b> ' + finalSide.toFixed(6).replace(/\.?00+$/, '') + '<br><b>Side C:</b> ' + sideC);
      } else if (sideB && sideC) {
        newCalculation = extraCalculations(finalSide, sideOne, sideTwo);
        $('#solution1').html('<b>Side A:</b> ' + finalSide.toFixed(6).replace(/\.?00+$/, '') + '<br><b>Side B:</b> ' + sideB + '<br><b>Side C:</b> ' + sideC);
      }
      $('#solutionDiv').removeClass('hidden');

    }

    // One Side & Two Angles
    function oneSidetwoAngles(sideOne, angleOne, angleTwo) {

      let missingAngleThird = 180 - angleOne - angleTwo;
      let secondValue, thirdValue;
      if ((sideOne === sideA || sideOne === sideB || sideOne === sideC) && angleA && angleB) {
        secondValue = (sideOne * Math.sin(degreesToRadians(angleTwo))) / Math.sin(degreesToRadians(angleOne));
        thirdValue = (sideOne * Math.sin(degreesToRadians(missingAngleThird))) / Math.sin(degreesToRadians(angleOne));
      } else if ((sideOne === sideA || sideOne === sideB || sideOne === sideC) && angleA && angleC) {
        secondValue = (sideOne * Math.sin(degreesToRadians(missingAngleThird))) / Math.sin(degreesToRadians(angleOne));
        thirdValue = (sideOne * Math.sin(degreesToRadians(angleTwo))) / Math.sin(degreesToRadians(angleOne));
      } else if ((sideOne === sideA || sideOne === sideB || sideOne === sideC) && angleC && angleB) {
        secondValue = (sideOne * Math.sin(degreesToRadians(angleOne))) / Math.sin(degreesToRadians(missingAngleThird));
        thirdValue = (sideOne * Math.sin(degreesToRadians(angleTwo))) / Math.sin(degreesToRadians(missingAngleThird));
      }
      // validation
      let sidesValues = checkingSides(sideOne, secondValue, thirdValue)
      if (sidesValues) {
        return;
      }
      let extraCalc;
      if (sideOne === sideA) {
        extraCalc = extraCalculations(sideOne, thirdValue, secondValue);
      } else if (sideOne === sideB) {
        extraCalc = extraCalculations(secondValue, sideOne, thirdValue);
      } else if (sideOne === sideC) {
        extraCalc = extraCalculations(secondValue, thirdValue, sideOne);
      }

      if (sideA && sideB) {
        $('#solution2').html(`<br><b>Angle A:</b> ${angleOne}° <br>  <b>Angle B:</b> ${angleTwo}° <br>  <b>Angle C:</b> ${missingAngleThird}°`);
        $('#solution3').html(`<b>OR<br>Angle A:</b> ${degreesToRadians(angleOne)} rad <br>  <b>Angle B:</b> ${degreesToRadians(angleTwo)} rad <br>  <b>Angle C:</b> ${degreesToRadians(missingAngleThird)} rad`);
      } else if (angleB && angleC) {
        $('#solution2').html(`<br><b>Angle A:</b> ${missingAngleThird}° <br>  <b>Angle B:</b> ${angleOne}° <br>  <b>Angle C:</b> ${angleTwo}°`);
        $('#solution3').html(`<b>OR<br>Angle A:</b> ${degreesToRadians(missingAngleThird)} rad <br>  <b>Angle B:</b> ${degreesToRadians(angleOne)} rad <br>  <b>Angle C:</b> ${degreesToRadians(angleTwo)} rad`);
      } else if (sideA && sideC) {
        $('#solution2').html(`<br><b>Angle A:</b> ${angleOne}° <br>  <b>Angle B:</b> ${missingAngleThird}° <br>  <b>Angle C:</b> ${angleTwo}°`);
        $('#solution3').html(`<b>OR<br>Angle A:</b> ${degreesToRadians(angleOne).toFixed(6).replace(/\.?00+$/, '')} rad <br>  <b>Angle B:</b> ${degreesToRadians(missingAngleThird).toFixed(6).replace(/\.?00+$/, '')} rad <br>  <b>Angle C:</b> ${degreesToRadians(angleTwo).toFixed(6).replace(/\.?00+$/, '')} rad`);
      }

      if (sideOne === sideA) {
        $('#solution1').html('<b>Side A:</b> ' + sideA + '<br><b>Side B:</b> ' + secondValue.toFixed(6).replace(/\.?00+$/, '') + '<br><b>Side C:</b> ' + thirdValue.toFixed(6).replace(/\.?00+$/, ''));
      } else if (sideOne === sideB) {
        $('#solution1').html('<b>Side A:</b> ' + secondValue.toFixed(6).replace(/\.?00+$/, '') + '<br><b>Side B:</b> ' + sideB + '<br><b>Side C:</b> ' + thirdValue.toFixed(6).replace(/\.?00+$/, ''));
      } else if (sideOne === sideC) {
        $('#solution1').html('<b>Side A:</b> ' + secondValue.toFixed(6).replace(/\.?00+$/, '') + '<br><b>Side B:</b> ' + thirdValue.toFixed(6).replace(/\.?00+$/, '') + '<br><b>Side C:</b > ' + sideC);
      }
      $('#solutionDiv').removeClass('hidden');
    }
  }

  // Function to calculate :: Area,Perimeter,Semiperimeter,heighta,heightb,heightc,mediana,medianb,medianc,Inradius,Circumradius 
  function extraCalculations(sideA, sideB, sideC) {
    let heron = (sideA + sideB + sideC) / 2;
    let areaTriangle = Math.sqrt(heron * (heron - sideA) * (heron - sideB) * (heron - sideC));
    $('#solution4').html('<br><b>Area: </b>' + areaTriangle.toFixed(6).replace(/\.?00+$/, ''));
    let perimeterTriangle = sideA + sideB + sideC;
    $('#solution5').html('<b>Perimeter: </b>' + perimeterTriangle.toFixed(6).replace(/\.?00+$/, ''));
    let semiPerimeterTriangle = perimeterTriangle / 2;
    $('#solution6').html('<b>Semiperimeter: </b>' + semiPerimeterTriangle.toFixed(6).replace(/\.?00+$/, ''));
    let height_a = (2 * areaTriangle) / sideA;
    $('#solution7').html('<br><b>height<sub>a</sub>: </b>' + height_a.toFixed(6).replace(/\.?00+$/, ''));
    let height_b = (2 * areaTriangle) / sideB;
    $('#solution8').html('<b>height<sub>b</sub>: </b>' + height_b.toFixed(6).replace(/\.?00+$/, ''));
    let height_c = (2 * areaTriangle) / sideC;
    $('#solution9').html('<b>height<sub>c</sub>: </b>' + height_c.toFixed(6).replace(/\.?00+$/, ''));
    let median_a = Math.sqrt((2 * Math.pow(sideB, 2) + 2 * Math.pow(sideC, 2) - Math.pow(sideA, 2)) / 4);
    $('#solution10').html('<br><b>median<sub>a</sub>: </b>' + median_a.toFixed(6).replace(/\.?00+$/, ''));
    let median_b = Math.sqrt((2 * Math.pow(sideA, 2) + 2 * Math.pow(sideC, 2) - Math.pow(sideB, 2)) / 4);
    $('#solution11').html('<b>median<sub>b</sub>: </b>' + median_b.toFixed(6).replace(/\.?00+$/, ''));
    let median_c = Math.sqrt((2 * Math.pow(sideA, 2) + 2 * Math.pow(sideB, 2) - Math.pow(sideC, 2)) / 4);
    $('#solution12').html('<b>median<sub>c</sub>: </b>' + median_c.toFixed(6).replace(/\.?00+$/, ''));
    let inradius = areaTriangle / semiPerimeterTriangle;
    $('#solution13').html('<br><b>Inradius: </b>' + inradius.toFixed(6).replace(/\.?00+$/, ''));
    let circumradius = (sideA * sideB * sideC) / Math.sqrt((sideA + sideB + sideC) * (sideB + sideC - sideA) * (sideA + sideC - sideB) * (sideA + sideB - sideC));
    $('#solution14').html('<b>Circumradius : </b>' + circumradius.toFixed(6).replace(/\.?00+$/, ''));
  }
});
