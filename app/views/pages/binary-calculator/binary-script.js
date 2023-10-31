$(document).ready(function () {
  function binaryValueOnly(binaryValues, warningID, resultID) {
    $(warningID).html('').removeClass('pb-6');
    let invalidCount = 0;
    binaryValues.forEach((selector) => {
      let value = $(selector).val();
      if (!/^[01]+$/.test(value)) {
        invalidCount++;
      }
    });
    if (invalidCount > 0) {
      $(warningID).html(`Please provide only binary values (0 or 1). ${invalidCount} invalid value(s) found.`).addClass('pb-6');
      $(resultID).addClass('hidden');
      return false;
    }
    return true;
  }

  function calcualte(num1, num2, operator) {
    let result;
    if (operator === '+') {
      result = parseInt(num1, 2) + parseInt(num2, 2);
    } else if (operator === '-') {
      result = parseInt(num1, 2) - parseInt(num2, 2);
    } else if (operator === '*') {
      result = parseInt(num1, 2) * parseInt(num2, 2);
    } else if (operator === '/') {
      result = parseInt(num1, 2) / parseInt(num2, 2);
    }
    return result;
  }

  $('#calculate').click(function () {
    let num1 = parseFloat($('#num1').val());
    let num2 = parseFloat($('#num2').val());
    let operator = $('#operator').val();

    let validate = validateInputs(['#num1', '#num2'], 2, '#limit1', '#resultID1');
    if (!validate) {
      return;
    }
    if (!binaryValueOnly(['#num1', '#num2'], '#limitFirst', 'resultID1')) {
      return;
    }
    let result = calcualte(num1, num2, operator);
    $('#binaryResult').html('<b>Binary value:</b>\n ' + num1 + ' ' + operator + ' ' + num2 + '\n= ' + result.toString(2));
    $('#decimalResult').html('<b>Decimal value:</b>\n ' + parseInt(num1, 2) + ' ' + operator + ' ' + parseInt(num2, 2) + '\n= ' + result);
    $('#resultID1').removeClass('hidden');
  });

  // second
  $('#convertToDecimal').click(function () {
    let binaryValue = $('#binaryValue').val();
    let validate = validateInputs(['#binaryValue'], 1, '#limit2', '#resultID1');
    if (!validate) {
      return;
    }
    if (!binaryValueOnly(['#binaryValue'], '#limitSecond', '#resultID1')) {
      return;
    }
    let decimalValue = parseInt(binaryValue, 2);
    $('#binaryResult').html('<b>Decimal value:</b> ' + decimalValue);
    $('#decimalResult').html('');
    $('#resultID1').removeClass('hidden');
  });

  // third
  $('#convertthird').click(function () {
    let decimalValuethird = parseInt($('#decimalValuethird').val());
    let validate = validateInputs(['#decimalValuethird'], 1, '#limit3', '#resultID2');
    if (!validate) {
      return;
    }
    let binaryValuethird = decimalValuethird.toString(2);
    $('#thirdResult').html('<b>Binary value</b>: ' + binaryValuethird);
    $('#resultID2').removeClass('hidden');
  });
});
