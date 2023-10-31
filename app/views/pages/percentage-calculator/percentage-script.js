$(document).ready(function () {
  // first calculator
  $('#calculateresultper').click(function () {
    $('#limit1').html('').removeClass('pb-6');
    document.getElementById('explanation-difference').innerHTML = '';
    document.getElementById('explanation-increase').innerHTML = '';
    let percent = parseFloat($('#firstPercent').val());
    let value = parseFloat($('#value').val());
    let solutionDiv = parseFloat($('#restultFirst').val());

    let valueValidate = validateInputs(['#firstPercent', '#value', '#restultFirst'], 2, '#limit1', '#result');
    if (!valueValidate) {
      return;
    }
    let result;
    if (!isNaN(percent) && !isNaN(value)) {
      result = (percent / 100) * value;
      $('#result-difference').html('<b>Result</b>: ' + percent + '% of ' + value + ' is = <b>' + result + '</b>');
      $('#result-increase').html('<b>Steps</b>: ' + percent + '% of ' + value + ' = ' + '(' + percent / 100 + ' × ' + value + ')  = ' + result);
    } else if (!isNaN(value) && !isNaN(solutionDiv)) {
      result = ((solutionDiv / value) * 100).toFixed(2);
      $('#result-difference').html('<b>Result: ' + result + '</b>% of ' + value + ' is = ' + solutionDiv);
      $('#result-increase').html('<b>Steps</b>: ' + solutionDiv + ' ÷ ' + value + ' = ' + solutionDiv / value + ' × ' + 100 + ' = ' + result);
    } else if (!isNaN(percent) && !isNaN(solutionDiv)) {
      result = solutionDiv / (percent / 100);
      $('#result-difference').html('<b>Result</b>: ' + percent + '% of <b>' + result + '</b> is = ' + solutionDiv);
      $('#result-increase').html('<b>Steps</b>: ' + solutionDiv + ' ÷ ' + percent + '% = ' + solutionDiv + ' ÷ ' + percent / 100 + '  = ' + result);
    }
    $('#result_percentage_oneTwo').removeClass('hidden');
  });

  // start of Percentage Difference Calculator
  $('#calculatePercentage').click(function () {
    let value1 = parseFloat($('#value1').val());
    let value2 = parseFloat($('#value2').val());

    let validate = validateInputs(['#value1', '#value2'], 2, '#limit2', '#result_percentage_oneTwo');
    if (!validate) {
      return;
    }
    let difference = Math.abs(value1 - value2);
    let percentageDifference = (difference / ((value1 + value2) / 2)) * 100;
    let increase = value2 - value1;
    let percentageIncrease = (increase / value1) * 100;
    $('#result-difference').html('<b>Difference:</b> ' + difference.toFixed(2) + ' (' + percentageDifference.toFixed(2) + '%)');
    $('#explanation-difference').html('Difference Steps: |' + value1 + ' - ' + value2 + '| / ((' + value1 + ' + ' + value2 + ') / 2) * 100');
    $('#result-increase').html('<b>Increase:</b> ' + percentageIncrease.toFixed(2) + '%');
    $('#explanation-increase').html('Increase Steps: ' + value2 + ' - ' + value1 + ' / ' + value1 + ' * 100');
    $('#result_percentage_oneTwo').removeClass('hidden');
  });

  // start of Percentage Change Calculator
  $('#calculate').click(function () {
    $('#limit3').html(' ').removeClass('pb-6');
    let initialValue = parseFloat($('#initial-value').val());
    let percentage = parseFloat($('#per_Change').val());
    let solution = parseFloat($('#result3').val());
    let operation = $('input[name="operation"]:checked').val();

    let valueValidate = validateInputs(['#initial-value', '#per_Change', '#result3'], 2, '#limit3', '#result');
    if (!valueValidate) {
      return;
    }
    if (!isNaN(initialValue) && !isNaN(percentage)) {
      solution = operation === 'increase' ? initialValue * (1 + percentage / 100) : initialValue * (1 - percentage / 100);
      solution = `<b>${solution}</b> `;
    } else if (!isNaN(percentage) && !isNaN(solution)) {
      initialValue = operation === 'increase' ? solution / (1 + percentage / 100) : solution / (1 - percentage / 100);
      initialValue = `<b>${initialValue}</b> `;
    } else if (!isNaN(initialValue) && !isNaN(solution)) {
      percentage = operation === 'increase' ? (solution / initialValue - 1) * 100 : (1 - solution / initialValue) * 100;
      percentage = `<b>${percentage}</b> `;
    }
    $('#result_per').html(`<b>Result</b> : ${initialValue} ${operation} ${percentage}% = ${solution}`);
    $('#result_percentage_threeFour').removeClass('hidden');
  });

  // 4th calcualtors ->
  function commonPhrases(value1, value2, warnID, btnID) {
    let first_Number = parseFloat($(value1).val());
    let second_Number = parseFloat($(value2).val());

    let validate = validateInputs([value1, value1], 2, warnID, '#result_percentage_threeFour');
    if (!validate) {
      return;
    }
    let result, calculationStep;
    if (btnID === 'calcuateIsWhat') {
      result = (first_Number / 100) * second_Number;
      calculationStep = '(' + first_Number + ' / 100) * ' + second_Number + '<br>= ' + first_Number * second_Number + ' / ' + 100 + '<br>= ' + result;
      $('#result_per').html('<b>Result: ' + result + '</b> is the ' + first_Number + ' % of ' + second_Number);
    } else if (btnID === 'calcuateWhatof') {
      result = (first_Number / second_Number) * 100;
      calculationStep = '(' + first_Number + ' ÷ ' + second_Number + ') * 100 <br>= ' + first_Number / second_Number + '* 100 <br>= ' + result.toFixed(4) + '%';
      $('#result_per').html('<b>Result:</b> ' + first_Number + ' is <b>' + result.toFixed(4) + '</b> % of ' + second_Number);
    } else if (btnID === 'calcuateOfWhat') {
      result = first_Number * (second_Number / 100);
      calculationStep = first_Number + ' ÷ 100% = ' + result.toFixed(2) + '%';
      $('#result_per').html('<b>Result:</b> ' + first_Number + ' of ' + second_Number + ' % is <b>' + result + '</b>');
    }
    $('#results').html('<b>Steps:</b> ' + calculationStep);
    $('#result_percentage_threeFour').removeClass('hidden');
  }

  // Part I
  $('#calcuateIsWhat').click(function (e) {
    commonPhrases('#percentage', '#number', '#limitP1', 'calcuateIsWhat');
  });
  // Part II
  $('#calcuateOfWhat').click(function (e) {
    commonPhrases('#firstNumber', '#secondNumber', '#limitP2', 'calcuateOfWhat');
  });
  // Part III
  $('#calcuateWhatof').click(function (e) {
    commonPhrases('#first_Number', '#second_Number', '#limitP3', 'calcuateWhatof');
  });
});
