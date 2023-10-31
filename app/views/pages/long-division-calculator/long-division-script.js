$(document).ready(function () {
  function longDivision(dividend, divisor) {
    if (divisor === 0) {
      return { quotient: NaN, remainder: NaN };
    }
    let quotient = 0;
    let remainder = 0;
    let steps = [];

    for (let i = 0; i < dividend.length; i++) {
      let currentDigit = parseInt(dividend[i]);
      remainder = remainder * 10 + currentDigit;
      quotientDigit = Math.floor(remainder / divisor);
      remainder %= divisor;
      quotient = quotient * 10 + quotientDigit;

      steps.push({
        currentDigit,
        quotientDigit,
        partialQuotient: quotient,
        partialRemainder: remainder,
      });
    }
    return { quotient, remainder, steps };
  }

  $('#calcDivision').click(function () {
    let dividend = $('#dividend').val();
    let divisor = parseInt($('#divider').val());
    
    let validate = validateInputs(['#dividend', '#divider'], 2, '#wrongInput', '#result');
    if (!validate) {
      return;
    }
    if (dividend <= 0 || divisor <= 0) {
      $('#warning').html('Please provide positive integer to calculate.').addClass('pb-6');
      $('#result').addClass('hidden');
      return;
    }
    let result = longDivision(dividend, divisor);
    $('#solution1').html('<b>Quotient:</b> ' + result.quotient);
    $('#solution2').html('<b>Remainder:</b> ' + result.remainder);
    $('#warning').html('').removeClass('pb-6');
    $('#result').removeClass('hidden');
  });
});
