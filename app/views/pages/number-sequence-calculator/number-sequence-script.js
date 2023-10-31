$(document).ready(function () {
  calculateSequence('#geometricSequence', '#geometricNumber', '#geometricDifference', '#geometricRequired', '#result', '#warning2');
  calculateSequence('#arithmeticSequence', '#firstNumber', '#commonDifference', '#requiredNumber', '#result', '#warning1');

  function calculateSequence(btnId, firstNumber, commonDifferenceOrRatio, numberToObtain, resultID, warningID) {
    $(btnId).click(function () {
      let sequenceType = $(btnId).attr('id');
      let firstNumb = parseFloat($(firstNumber).val());
      let difference = parseFloat($(commonDifferenceOrRatio).val());
      let requiredNumb = parseFloat($(numberToObtain).val());
      let sequence = [],
        result,
        nthValue;

      let validate = validateInputs([firstNumber, commonDifferenceOrRatio, numberToObtain], 3, warningID, resultID);
      if (!validate) {
        return;
      }
      if (sequenceType === 'geometricSequence') {
        for (let i = 0; i < requiredNumb; i++) {
          let term = firstNumb * Math.pow(difference, i);
          sequence.push(term);
        }
        nthValue = firstNumb * Math.pow(difference, requiredNumb - 1);
        result = sequence.join(', ');
        $('#solution1').html('<b>Geometric Sequence:</b> ' + result);
      } else if (sequenceType === 'arithmeticSequence') {
        for (let i = 0; i < requiredNumb; i++) {
          let term = firstNumb + i * difference;
          sequence.push(term);
        }
        nthValue = firstNumb + (requiredNumb - 1) * difference;
        result = sequence.join(', ');
        $('#solution1').html('<b>Arithmetic Sequence:</b> ' + result);
      }
      $('#solution2').html('<b>' + requiredNumb + 'th Number is:</b> ' + nthValue);
      $('#result').removeClass('hidden');
    });
  }

  $('#fibonacciBtn').click(function () {
    let requiredNumber = parseInt($('#fibonacciNumber').val());
    let validate = validateInputs(['#fibonacciNumber'], 1, '#warning3', '#result1');
    if (!validate) {
      return;
    }
    let sequence = [];
    let a = 0,
      b = 1;
    for (let i = 0; i <= requiredNumber; i++) {
      sequence.push(a);
      let temp = a + b;
      a = b;
      b = temp;
    }
    let result = sequence.join(', ');
    $('#solution3').html('<b>Fibonacci Sequence:</b> ' + result);
    $('#solution4').html(requiredNumber + '<b>th Number is:</b> ' + sequence[requiredNumber]);
    $('#result1').removeClass('hidden');
  });
});
