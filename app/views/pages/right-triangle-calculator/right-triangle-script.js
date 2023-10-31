$(document).ready(function () {
  $('#calcRightTriangle').click(function () {
    $('#warningID').addClass('pb-6');
    let side1 = parseFloat($('#sideA').val());
    let side2 = parseFloat($('#sideB').val());
    let side3 = parseFloat($('#sideC').val());
    let area = parseFloat($('#area').val());
    let angleAlpha = parseFloat($('#angleA').val());
    let angleBeta = parseFloat($('#angleB').val());
    let perimeter = parseFloat($('#perimeter').val());
    let hypotenuse = parseFloat($('#hypotenuse').val());
    let solution4, solution5, solution6, solution7, solution8, solution9, solution10;

    let nonNaNCount = [side1, side2, side3, area, angleAlpha, angleBeta, perimeter, hypotenuse].filter((value) => !isNaN(value)).length;
    if (nonNaNCount !== 2 || side1 >= side3 || side2 >= side3 || side1 >= perimeter / 2 || side2 >= perimeter / 2 || side3 >= perimeter / 2 || hypotenuse >= side1 || hypotenuse >= side2 || hypotenuse >= side3 / 2) {
      let warningMessage = '';
      if (nonNaNCount !== 2) {
        warningMessage = 'Please provide 2 values only to calculate, you provided ' + nonNaNCount + ' value.';
      } else if (side1 >= side3 || side2 >= side3) {
        warningMessage = 'The value of side a or b cannot be greater than or equal to c.';
      } else if (side1 >= perimeter / 2 || side2 >= perimeter / 2 || side3 >= perimeter / 2) {
        warningMessage = 'The value of the sides needs to be smaller than half of the perimeter.';
      } else if (hypotenuse >= side1 || hypotenuse >= side2) {
        warningMessage = 'The value h needs to be smaller than side a and side b.';
      } else if (hypotenuse >= side3 / 2) {
        warningMessage = 'The value h needs to be smaller than half the size of c.';
      }
      $('#warningID').html(warningMessage);
      $('#result').addClass('hidden');
      return;
    }

    if (!isNaN(side1)) {
      if (!isNaN(side2)) {
        side3 = ifGivenABforC(side1, side2);
      } else if (!isNaN(side3)) {
        side2 = ifGivenCandAorB(side3, side1);
      } else if (!isNaN(area)) {
        side2 = ifAreaAndA1(area, side1);
        side3 = ifAreaAndA2(side1, side2);
      } else if (!isNaN(angleAlpha)) {
        side3 = ifGivenAlphaAngleAndA(degreesToRadians(angleAlpha), side1);
        side2 = ifGivenCandAorB(side3, side1);
      } else if (!isNaN(angleBeta)) {
        side3 = ifGivenBetaAngleAndB(degreesToRadians(angleBeta), side1);
        side2 = ifGivenCandAorB(side3, side1);
      } else if (!isNaN(perimeter)) {
        side2 = ifPandBthenA(perimeter, side1);
        side3 = ifPandBthenC(perimeter, side1, side2);
      } else if (!isNaN(hypotenuse)) {
        side3 = ifHypotheneusAndCthen1(hypotenuse, side1);
        side2 = ifHypotheneusAndCthen2(side3, side1);
      }
    } else if (!isNaN(side2)) {
      if (!isNaN(side1)) {
        side3 = ifGivenABforC(side1, side2);
      } else if (!isNaN(side3)) {
        side1 = ifGivenCandAorB(side3, side2);
      } else if (!isNaN(area)) {
        side1 = ifAreaAndA1(area, side2);
        side3 = ifAreaAndA2(side1, side2);
      } else if (!isNaN(angleAlpha)) {
        side3 = ifGivenAlphaAngleAndA(degreesToRadians(angleAlpha), side2);
        side1 = ifGivenCandAorB(side3, side2);
      } else if (!isNaN(angleBeta)) {
        side3 = ifGivenBetaAngleAndB(degreesToRadians(angleBeta), side2);
        side1 = ifGivenCandAorB(side3, side2);
      } else if (!isNaN(perimeter)) {
        side1 = ifPandBthenA(perimeter, side2);
        side3 = ifPandBthenC(perimeter, side1, side2);
      } else if (!isNaN(hypotenuse)) {
        side3 = ifHypotheneusAndCthen1(hypotenuse, side2);
        side1 = ifHypotheneusAndCthen2(side3, side2);
      }
    } else if (!isNaN(side3)) {
      if (!isNaN(side1)) {
        side2 = ifGivenABforC(side1, side3);
      } else if (!isNaN(side2)) {
        side1 = ifGivenCandAorB(side3, side2);
      } else if (!isNaN(area)) {
        side1 = ifAreaAndCthenA(area, side3);
        side2 = ifAreaAndCthenB(area, side3);
      } else if (!isNaN(angleAlpha)) {
        side1 = ifGivenAlphaAngleAndC(degreesToRadians(angleAlpha), side3);
        side2 = ifGivenCandAorB(side3, side1);
      } else if (!isNaN(angleBeta)) {
        side2 = ifGivenAlphaAngleAndC(degreesToRadians(angleBeta), side3);
        side1 = ifGivenCandAorB(side3, side2);
      } else if (!isNaN(perimeter)) {
        side1 = ifPandCthenA(perimeter, side3);
        side2 = ifPandCthenB(perimeter, side3);
      } else if (!isNaN(hypotenuse)) {
        side2 = ifHypotheneusAndCthenA(hypotenuse, side3);
        side1 = ifHypotheneusAndCthenB(hypotenuse, side3);
      }
    } else if (!isNaN(area)) {
      if (!isNaN(angleAlpha)) {
        let valueofSides = ifGivenAreaandAngleforABC(area, degreesToRadians(angleAlpha));
        side1 = valueofSides.b;
        side2 = valueofSides.a;
        side3 = valueofSides.c;
      } else if (!isNaN(angleBeta)) {
        let valueofSides = ifGivenAreaandAngleforABC(area, degreesToRadians(angleBeta));
        side1 = valueofSides.a;
        side2 = valueofSides.b;
        side3 = valueofSides.c;
      } else if (!isNaN(perimeter)) {
        let areaToperimeter = ifGivenAreaAndPerimeterforABC(area, perimeter);
        side1 = areaToperimeter.a;
        side2 = areaToperimeter.b;
        side3 = areaToperimeter.c;
      } else if (!isNaN(hypotenuse)) {
        $('#warningID').html('Unable to solve! This calculation is not possible.');
        $('#result').addClass('hidden');
        return;
      }
    } else if (!isNaN(angleAlpha)) {
      if (!isNaN(angleBeta)) {
        $('#warningID').html('Can not calculate based on 2 angles only.');
        $('#result').addClass('hidden');
        return;
      } else if (!isNaN(perimeter)) {
        let areaToperimeter = ifGivenPerimeterandAngleforABC(perimeter, degreesToRadians(angleAlpha));
        side1 = areaToperimeter.a;
        side2 = areaToperimeter.b;
        side3 = areaToperimeter.c;
      } else if (!isNaN(hypotenuse)) {
        let areaToperimeter = ifGivenHypotheneusandBetaAngleforABC(hypotenuse, degreesToRadians(angleAlpha));
        side1 = areaToperimeter.b;
        side2 = areaToperimeter.a;
        side3 = areaToperimeter.c;
      }
    } else if (!isNaN(angleBeta)) {
      if (!isNaN(perimeter)) {
        let areaToperimeter = ifGivenPerimeterandAngleforABC(perimeter, degreesToRadians(angleBeta));
        side1 = areaToperimeter.b;
        side2 = areaToperimeter.a;
        side3 = areaToperimeter.c;
      } else if (!isNaN(hypotenuse)) {
        let areaToperimeter = ifGivenHypotheneusandBetaAngleforABC(hypotenuse, degreesToRadians(angleBeta));
        side1 = areaToperimeter.b;
        side2 = areaToperimeter.a;
        side3 = areaToperimeter.c;
      }
    } else if (!isNaN(perimeter)) {
      if (!isNaN(hypotenuse)) {
        $('#warningID').html('Unable to calculate based on h and perimeter.');
        $('#result').addClass('hidden');
        return;
      }
    }

    solution4 = radiansToDegrees(alphaangle(side1, side3)).toFixed(2);
    solution5 = radiansToDegrees(betaangle(side2, side3)).toFixed(2);
    solution6 = calculateHypotenuse(side1, side2, side3);
    solution7 = calculateArea(side1, side2);
    solution8 = calculatePerimeter(side1, side2, side3);
    solution9 = inradius(side1, side2, side3);
    solution10 = circumradius(side3);

    let solutionObject = {
      Side_a: side1,
      Side_b: side2,
      Side_c: side3,
      Angle_alpha: solution4,
      Angle_beta: solution5,
      h: solution6,
      Area: solution7,
      Perimeter: solution8,
      Inradius: solution9,
      Circumradius: solution10,
    };

    let i = 1;
    for (let key in solutionObject) {
      if (solutionObject.hasOwnProperty(key)) {
        let value = solutionObject[key];
        let formattedKey = key.replace('_', ' ');
        if (key === 'Angle_alpha' || key === 'Angle_beta') {
          $(`#solution${i}`).html(
            `<b>${formattedKey}:</b> ${parseFloat(value)
              .toFixed(6)
              .replace(/\.?00+$/, '')}° or ${parseFloat((value * Math.PI) / 180)
              .toFixed(6)
              .replace(/\.?00+$/, '')} rad`
          );
        } else {
          $(`#solution${i}`).html(
            `<b>${formattedKey}:</b> ${parseFloat(value)
              .toFixed(6)
              .replace(/\.?00+$/, '')}`
          );
        }
        i++;
      }
    }
    $('#result').removeClass('hidden');
    $('#warningID').removeClass('pb-6');
    $('#warningID').html('');
  });

  function degreesToRadians(degrees) {
    return degrees * (Math.PI / 180);
  }
  function radiansToDegrees(degrees) {
    return degrees * (180 / Math.PI);
  }
  function ifGivenABforC(a, b) {
    let c = Math.sqrt(Math.pow(a, 2) + Math.pow(b, 2));
    return c;
  }
  function ifGivenCandAorB(c, value) {
    let solution1 = Math.sqrt(Math.pow(c, 2) - Math.pow(value, 2));
    return solution1;
  }

  function ifPandBthenA(perimeter, b) {
    let a = (Math.pow(perimeter, 2) - 2 * b * perimeter) / (2 * perimeter - 2 * b);
    return a;
  }
  function ifPandBthenC(perimeter, value, a) {
    let b = perimeter - a - value;
    return b;
  }
  function ifPandCthenA(perimeter, c) {
    let a = (perimeter - c + Math.sqrt(Math.pow(c, 2) + 2 * perimeter * c - Math.pow(perimeter, 2))) / 2;
    return a;
  }
  function ifPandCthenB(perimeter, c) {
    let b = (perimeter - c - Math.sqrt(Math.pow(c, 2) + 2 * perimeter * c - Math.pow(perimeter, 2))) / 2;
    return b;
  }

  function ifAreaAndA1(area, a) {
    let b = (2 * area) / a;
    return b;
  }
  function ifAreaAndA2(a, b) {
    let c = Math.sqrt(Math.pow(a, 2) + Math.pow(b, 2));
    return c;
  }
  function ifAreaAndCthenA(area, c) {
    let a = Math.sqrt((Math.pow(c, 2) + Math.sqrt(Math.pow(c, 4) - 16 * Math.pow(area, 2))) / 2);
    return a;
  }
  function ifAreaAndCthenB(area, c) {
    let b = Math.sqrt((Math.pow(c, 2) - Math.sqrt(Math.pow(c, 4) - 16 * Math.pow(area, 2))) / 2);
    return b;
  }

  function ifHypotheneusAndCthenA(hypotheneus, c) {
    let a = Math.sqrt((Math.pow(c, 2) - Math.sqrt(Math.pow(c, 4) - 4 * Math.pow(c, 2) * Math.pow(hypotheneus, 2))) / 2);
    return a;
  }
  function ifHypotheneusAndCthenB(hypotheneus, c) {
    let b = Math.sqrt((Math.pow(c, 2) + Math.sqrt(Math.pow(c, 4) - 4 * Math.pow(c, 2) * Math.pow(hypotheneus, 2))) / 2);
    return b;
  }
  function ifHypotheneusAndCthen1(hypotheneus, b) {
    let c = Math.pow(b, 2) / Math.sqrt(Math.pow(b, 2) - Math.pow(hypotheneus, 2));
    return c;
  }
  function ifHypotheneusAndCthen2(c, value) {
    let a = Math.sqrt(Math.pow(c, 2) - Math.pow(value, 2));
    return a;
  }

  function ifGivenAlphaAngleAndA(alpha, a) {
    let c = a / Math.sin(alpha);
    return c;
  }
  function ifGivenAlphaAngleAndC(alpha, c) {
    let a = c * Math.sin(alpha);
    return a;
  }
  function ifGivenBetaAngleAndB(beta, b) {
    let c = b / Math.sin(beta);
    return c;
  }
  function ifGivenHypotheneusandBetaAngleforABC(hypotheneus, beta) {
    let a = hypotheneus / Math.sin(beta);
    let b = hypotheneus / Math.cos(beta);
    let c = Math.sqrt(a ** 2 + b ** 2);
    return { a: a, b: b, c: c };
  }
  function ifGivenPerimeterandAngleforABC(perimeter, alpha) {
    let c = perimeter / (1 + Math.sin(alpha) + Math.cos(alpha));
    let a = c * Math.sin(alpha);
    let b = c * Math.cos(alpha);
    return { a: a, b: b, c: c };
  }
  function ifGivenAreaandAngleforABC(area, beta) {
    let a = Math.sqrt((2 * area) / Math.tan(beta));
    let b = Math.sqrt(2 * area * Math.tan(beta));
    let c = Math.sqrt(a ** 2 + b ** 2);
    return { a: a, b: b, c: c };
  }
  function ifGivenAreaAndPerimeterforABC(area, perimeter) {
    let a = (Math.pow(perimeter, 2) + 4 * area + Math.sqrt(Math.pow(Math.pow(perimeter, 2) + 4 * area, 2) - 32 * area * Math.pow(perimeter, 2))) / (4 * perimeter);
    let b = (Math.pow(perimeter, 2) + 4 * area - Math.sqrt(Math.pow(Math.pow(perimeter, 2) + 4 * area, 2) - 32 * area * Math.pow(perimeter, 2))) / (4 * perimeter);
    let c = Math.sqrt(a ** 2 + b ** 2);
    return { a: a, b: b, c: c };
  }
  function alphaangle(side1, side3) {
    let angle1 = Math.asin(side1 / side3);
    return angle1;
  }
  function betaangle(side2, side3) {
    let angle2 = Math.asin(side2 / side3);
    return angle2;
  }
  function calculateHypotenuse(side1, side2, side3) {
    let hypotenuse = (side1 * side2) / side3;
    return hypotenuse;
  }
  function calculateArea(side1, side2) {
    let hypotenuse = (side1 * side2) / 2;
    return hypotenuse;
  }
  function calculatePerimeter(side1, side2, side3) {
    let perimeter = side1 + side2 + side3;
    return perimeter;
  }
  function inradius(side1, side2, side3) {
    let inradius = (side1 * side2) / (side1 + side2 + side3);
    return inradius;
  }
  function circumradius(side) {
    let circumradius = side / 2;
    return circumradius;
  }
});
