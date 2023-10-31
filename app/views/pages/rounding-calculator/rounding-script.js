$(document).ready(function () {
  $('input[name=std_calcualtion]').change(function () {
    let selectedRadioValue = $(this).val();
    if (selectedRadioValue === 'inputPercisionValue') {
      $('#inputdivs').find('#percisionDIv').removeClass('hidden').addClass('flex');
      $('#inputdivs').find('#numberSelect').addClass('hidden');
    } else if (selectedRadioValue === 'selectPercisionValue') {
      $('#inputdivs').find('#percisionDIv').addClass('hidden').removeClass('flex');
      $('#inputdivs').find('#numberSelect').removeClass('hidden');
    }
  });

  $('#rounding-number').click(function () {
    let number = parseFloat($('#number').val());
    let radioInputs = $('input[name=std_calcualtion]:checked').val();
    let selected = $('#numberSelect').val();
    let percision = parseFloat($('#percisionID').val());
    let result, validate;
    if (radioInputs === 'selectPercisionValue') {
      validate = validateInputs(['#number'], 1, '#warning', '#result');
      result = conversionVales(number, selected);
    } else if (radioInputs === 'inputPercisionValue') {
      if (percision > 100 || percision < 0) {
        $('#warningID').html('Value for precision must between 0 and 100.').addClass('pb-6');
        $('#result').addClass('hidden');
        return;
      }
      validate = validateInputs(['#number', '#percisionID'], 2, '#warning', '#result');
      result = Number(number).toFixed(percision);
    }
    if (!validate) {
      return;
    }
    $('#solution1').html('<b>Result: ' + result + '</b> is the result of rounding ' + number);
    $('#warningID').html('').removeClass('pb-6');
    $('#result').removeClass('hidden');
  });

  function conversionVales(number, selectedValue) {
    let solution;
    switch (selectedValue) {
      case 'tenths':
        solution = ((number / 100) * 100).toFixed(1);
        break;
      case 'hundredths':
        solution = ((number / 100) * 100).toFixed(2);
        break;
      case 'thousandths':
        solution = ((number / 100) * 100).toFixed(3);
        break;
      case 'tenthousandths':
        solution = ((number / 100) * 100).toFixed(4);
        break;
      case 'hundredthousandths':
        solution = ((number / 100) * 100).toFixed(5);
        break;
      case 'millionths':
        solution = ((number / 100) * 100).toFixed(6);
        break;
      case 'ones':
        solution = Math.round(number);
        break;
      case 'tens':
        solution = Math.round(number / -10) * -10;
        break;
      case 'hundreds':
        solution = Math.round(number / -100) * -100;
        break;
      case 'thousands':
        solution = Math.round(number / -1000) * -1000;
        break;
      case 'millions':
        solution = Math.round(number / -1000000) * -1000000;
        break;
      case '0.5':
        solution = Math.round(number / (1 / 2)) * (1 / 2);
        break;
      case '0.25':
        solution = Math.round(number / (1 / 4)) * (1 / 4);
        break;
      case '0.125':
        solution = Math.round(number / (1 / 8)) * (1 / 8);
        break;
      case '0.0625':
        solution = Math.round(number / (1 / 16)) * (1 / 16);
        break;
      case '0.03125':
        solution = Math.round(number / (1 / 32)) * (1 / 32);
        break;
      case '0.015625':
        solution = Math.round(number / (1 / 64)) * (1 / 64);
        break;
      default:
        solution = number;
        break;
    }
    return solution;
  }
});
