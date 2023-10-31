$(document).ready(function () {
  // hexa to decimal covonvert
  $('#calculateHEX').click(function () {
    let operand1 = $('#operand1').val();
    let operand2 = $('#operand2').val();
    let operator = $('#operatorHEX').val();
    let resultHex, resultDec;
    let steps = [];

    let validate = validateInputs(['#operand1', '#operand2', '#operatorHEX'], 2, '#limit1', '#result2');
    if (!validate) {
      return;
    }
    switch (operator) {
      case '+':
        resultDec = parseInt(operand1, 16) + parseInt(operand2, 16);
        resultHex = resultDec.toString(16).toUpperCase();
        calculateSteps(operand1, operand2, operator, steps);
        break;
      case '-':
        resultDec = parseInt(operand1, 16) - parseInt(operand2, 16);
        resultHex = resultDec.toString(16).toUpperCase();
        calculateSteps(operand1, operand2, operator, steps);
        break;
      case '*':
        resultDec = parseInt(operand1, 16) * parseInt(operand2, 16);
        resultHex = resultDec.toString(16).toUpperCase();
        calculateSteps(operand1, operand2, operator, steps);
        break;
      case '/':
        resultDec = parseInt(operand1, 16) / parseInt(operand2, 16);
        resultHex = resultDec.toString(16).toUpperCase();
        calculateSteps(operand1, operand2, operator, steps);
        break;
    }
    let resultText = 'HEX: ' + operand1.toUpperCase() + ' ' + operator + ' ' + operand2.toUpperCase() + ' = ' + resultHex;
    if (steps.length > 0) {
      resultText += '<br/>Decimal Steps: ' + steps.join(' ');
    }
    $('#solution3').html(resultText);
    $('#result2').removeClass('hidden');
  });

  function calculateSteps(operand1, operand2, operator, steps) {
    let dec1 = parseInt(operand1, 16);
    let dec2 = parseInt(operand2, 16);

    if (operator === '+') {
      steps.push(dec1.toString() + ' + ' + dec2.toString() + ' = ' + (dec1 + dec2).toString());
    } else if (operator === '-') {
      steps.push(dec1.toString() + ' - ' + dec2.toString() + ' = ' + (dec1 - dec2).toString());
    } else if (operator === '*') {
      steps.push(dec1.toString() + ' * ' + dec2.toString() + ' = ' + (dec1 * dec2).toString());
    } else if (operator === '/') {
      steps.push(dec1.toString() + ' / ' + dec2.toString() + ' = ' + (dec1 / dec2).toString());
    }
  }
  // second hexa

  $('#convertHexa').click(function () {
    let hexValue = $('#hexValue').val();
    let validate = validateInputs(['#hexValue'], 1, '#limit2', '#result');
    if (!validate) {
      return;
    }
    let decimalValue = parseInt(hexValue, 16);
    $('#decimalValue').html('Decimal Result:' + decimalValue);
    $('#result').removeClass('hidden');
  });
  // third hexa
  $('#lastcalculateHexaValue').click(function () {
    let decimalValue = parseInt($('#decimalValuethird').val());
    let validate = validateInputs(['#decimalValuethird'], 1, '#limit3', '#result');
    if (!validate) {
      return;
    }
    let hexadecimalValue = decimalValue.toString(16).toUpperCase();
    $('#decimalValue').html('HEX Result: ' + hexadecimalValue);
    $('#result').removeClass('hidden');
  });
});
