$(document).ready(function () {
  $('#exponentBtn').click(function () {
    let base = parseFloat($('#base').val());
    let exponent = parseFloat($('#exponent').val());
    let validate = validateInputs(['#base', '#exponent'], 2, '#warning', '#result');
    if (!validate) {
      return;
    }
    let solution = Math.pow(base, exponent);
    let expression = '';
    for (let i = 0; i < exponent; i++) {
      result *= base;
      expression += base;
      if (i < exponent - 1) {
        expression += ' * ';
      }
    }
    $('#solution1').html('Result: ' + solution);
    $('#solution2').html('Steps: ' + expression + ' = ' + solution);
    $('#result').removeClass('hidden');
  });
});
