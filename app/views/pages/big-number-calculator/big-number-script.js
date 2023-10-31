$(document).ready(function () {
  function findGCD(a, b) {
    while (b !== 0n) {
      let temp = b;
      b = a % b;
      a = temp;
    }
    return a;
  }
  function findLCF(a, b) {
    let gcd = findGCD(a, b);
    let lcm = (a * b) / gcd;
    return lcm;
  }
  function factorialRecursive(n) {
    if (n === 0 || n === 1) {
      return 1;
    } else {
      return n * factorialRecursive(n - 1);
    }
  }

  function xyCalculations(btnID) {
    $(btnID).click(function () {
      $('#warning').html('');
      let xTotal = parseFloat($('#valueX').val());
      let yTotal = parseFloat($('#valueY').val());
      let percision = parseFloat($('#percision').val());

      let validate = validateInputs(['#valueX', '#valueY'], 2, '#warning1', '#result');
      if (!validate) {
        return;
      }
      if (xTotal < 0 || yTotal < 0) {
        $('#warning').html('Both values should be positive.');
        $('#result').addClass('hidden');
        return;
      }

      xTotal = xTotal ? BigInt(xTotal) : 0n;
      yTotal = yTotal ? BigInt(yTotal) : 0n;

      if (btnID === '#xPlusY') {
        let total = xTotal + yTotal;
        $('#solution1').html('X + Y = ' + Number(total).toFixed(percision));
      } else if (btnID === '#xMinusY') {
        let total = xTotal - yTotal;
        $('#solution1').html('X - Y = ' + Number(total).toFixed(percision));
      } else if (btnID === '#xProductY') {
        let total = xTotal * yTotal;
        $('#solution1').html('X * Y = ' + Number(total).toFixed(percision));
      } else if (btnID === '#xDivisionY') {
        let total = xTotal / yTotal;
        $('#solution1').html('X / Y = ' + Number(total).toFixed(percision));
      } else if (btnID === '#xPowerY') {
        let total = Math.pow(Number(xTotal), Number(yTotal));
        $('#solution1').html('X<sup>Y</sup> = ' + Number(total).toFixed(percision));
      } else if (btnID === '#xSqareroot') {
        let total1 = Math.sqrt(Number(xTotal));
        let total2 = Math.sqrt(Number(yTotal));
        $('#solution1').html('√X = ' + total1.toFixed(percision) + '<br>√Y = ' + total2.toFixed(percision));
      } else if (btnID === '#xSqaure') {
        let total1 = Math.pow(Number(xTotal), 2);
        let total2 = Math.pow(Number(yTotal), 2);
        $('#solution1').html('X<sup>2</sup> = ' + Number(total1).toFixed(percision) + '<br>Y<sup>2</sup> = ' + Number(total2).toFixed(percision));
      } else if (btnID === '#factorialX') {
        if (xTotal > 170 || yTotal > 170) {
          $('#warning').html('Values are too big. Values should be between 0 and 170');
          $('#result').addClass('hidden');
          return;
        }
        let total1 = factorialRecursive(Number(xTotal));
        let total2 = factorialRecursive(Number(yTotal));
        $('#solution1').html('X! = ' + total1.toFixed(percision) + '<br>Y! = ' + total2.toFixed(percision));
      } else if (btnID === '#mod') {
        let total = xTotal % yTotal;
        $('#solution1').html('Modular arithmetic(MOD) = ' + Number(total).toFixed(percision));
      } else if (btnID === '#gcd') {
        let total = findGCD(xTotal, yTotal);
        $('#solution1').html('<b>Greatest common divisor(GCD)</b> = ' + Number(total).toFixed(percision));
      } else if (btnID === '#lcm') {
        let total = findLCF(xTotal, yTotal);
        $('#solution1').html('Least common multiple(LCM) = ' + Number(total).toFixed(percision));
      }
      $('#result').removeClass('hidden');
    });
  }

  xyCalculations('#xPlusY');
  xyCalculations('#xMinusY');
  xyCalculations('#xProductY');
  xyCalculations('#xDivisionY');
  xyCalculations('#xPowerY');
  xyCalculations('#xSqareroot');
  xyCalculations('#xSqaure');
  xyCalculations('#factorialX');
  xyCalculations('#mod');
  xyCalculations('#gcd');
  xyCalculations('#lcm');
});
