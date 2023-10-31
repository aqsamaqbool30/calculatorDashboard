$(document).ready(function () {
  $('#Btncalculate').click(function () {
    let realNumber = parseFloat($('#numb1').val());

    let validate = validateInputs(['#numb1'], 1, '#limit1', '#result');
    if (!validate) {
      return;
    }
    let scientificNotation = realNumber.toExponential().replace(/e\+?/, ' x 10^');
    console.log(scientificNotation);
    let eNotation = realNumber.toPrecision(6).replace(/e+\+?/, 'e');
    let engineeringNotation = realNumber.toLocaleString('en-US', { notation: 'engineering' });
    engineeringNotation = engineeringNotation.replace(/E\+?/, ' x 10^');

    $('#solution1').html('<b>Scientific Notation:</b> ' + scientificNotation);
    $('#solution2').html('<b>E-Notation:</b> ' + eNotation);
    $('#solution3').html('<b>Engineering Notation:</b> ' + engineeringNotation);
    $('#solution4').html('<b>Real Number:</b> ' + realNumber);
    $('#result').removeClass('hidden');
  });

  xyCalculations('#xPlusY');
  xyCalculations('#xMinusY');
  xyCalculations('#xProductY');
  xyCalculations('#xDivisionY');
  xyCalculations('#xPowerY');
  xyCalculations('#xSqareroot');
  xyCalculations('#xSqaure');
  function xyCalculations(btnID) {
    $(btnID).click(function () {
      let x = parseFloat($('#x').val());
      let powerx = parseFloat($('#Xpower').val());
      let y = parseFloat($('#Y').val());
      let powery = parseFloat($('#Ypower').val());
      let percision = parseFloat($('#percisionVal').val());

      let validate = validateInputs(['#x', '#Y', '#Xpower', '#Ypower', '#percisionVal'], 5, '#limit2', '#result');
      if (!validate) {
        return;
      }
      if (powery >= 1000 || powerx >= 1000 || powery <= -1000 || powerx <= -1000) {
        $('#limit3').html('Please provide a smaller/shorter values for power (power of x and y).').addClass('pb-6');
        $('#result').addClass('hidden');
        return;
      } else if (percision > 100 || percision < 0) {
        $('#limit3').html('Please provide value for percision between 0 and 100.').addClass('pb-6');
        $('#result').addClass('hidden');
        return;
      }
      let xTotal = x * Math.pow(10, powerx);
      let yTotal = y * Math.pow(10, powery);

      if (btnID === '#xPlusY') {
        let total = xTotal + yTotal;
        $('#solution1').html('X + Y = ' + total.toFixed(percision));
        $('#solution2').html('X + Y = ' + total.toExponential().replace(/e\+?/, ' x 10^'));
      } else if (btnID === '#xMinusY') {
        let total = xTotal - yTotal;
        if (isNaN(total)) {
          $('#solution1').html('X - Y = No possible solution.');
          $('#solution2').html('');
        } else {
          $('#solution1').html('X - Y = ' + total.toFixed(percision));
          $('#solution2').html('X - Y = ' + total.toExponential().replace(/e\+?/, ' x 10^'));
        }
      } else if (btnID === '#xProductY') {
        let total = xTotal * yTotal;
        if (isNaN(total)) {
          $('#solution1').html('X * Y = Answer is too large to calcualte.');
          $('#solution2').html('');
        } else {
          $('#solution1').html('X * Y = ' + total.toFixed(percision));
          $('#solution2').html('X * Y = ' + total.toExponential().replace(/e\+?/, ' x 10^'));
        }
      } else if (btnID === '#xDivisionY') {
        let total = xTotal / yTotal;
        if (isNaN(total)) {
          $('#solution1').html('X / Y =  Solution not possible.');
          $('#solution2').html('');
        } else {
          $('#solution1').html('X / Y = ' + total.toFixed(percision));
          $('#solution2').html('X / Y = ' + total.toExponential().replace(/e\+?/, ' x 10^'));
        }
      } else if (btnID === '#xPowerY') {
        let total = Math.pow(xTotal, yTotal);
        if (isNaN(total)) {
          $('#solution1').html('X<sup>Y</sup> = Answer is too large to calcualte.');
          $('#solution2').html('');
        } else {
          $('#solution1').html('X<sup>Y</sup> = ' + total.toFixed(percision));
          $('#solution2').html('X<sup>Y</sup> = ' + total.toExponential().replace(/e\+?/, ' x 10^'));
        }
      } else if (btnID === '#xSqareroot') {
        if (x <= 0) {
          $('#limit3').html('Please provide a positive value.').addClass('pb-6');
          $('#result').addClass('hidden');
          return;
        }
        let total = Math.sqrt(xTotal);
        if (isNaN(total)) {
          $('#solution1').html('√X = Solution not possible.');
          $('#solution2').html('');
        } else {
        $('#solution1').html('√X = ' + total.toFixed(percision));
        $('#solution2').html('√X = ' + total.toExponential().replace(/e\+?/, ' x 10^'));
        }
      } else if (btnID === '#xSqaure') {
        let total = Math.pow(xTotal, 2);
        if (isNaN(total)) {
          $('#solution1').html('X<sup>2</sup> = No possible Solution.');
          $('#solution2').html('');
        } else {
        $('#solution1').html('X<sup>2</sup> = ' + total.toFixed(percision));
        $('#solution2').html('X<sup>2</sup> = ' + total.toExponential().replace(/e\+?/, ' x 10^'));
        }
      }
      $('#solution3').html('');
      $('#solution4').html('');
      $('#limit3').html('').removeClass('pb-6');
      $('#result').removeClass('hidden');
    });
  }
});
