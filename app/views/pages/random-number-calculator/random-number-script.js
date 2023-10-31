$(document).ready(function () {
  // start of random number generator
  function generateRandomInteger(minNumber, maxNumber) {
    let randomInteger = Math.floor(Math.random() * (maxNumber - minNumber + 1)) + minNumber;
    return randomInteger;
  }

  $('#generate').click(function () {
    let minNumber = parseInt($('#minNumber').val());
    let maxNumber = parseInt($('#maxNumber').val());

    let validate = validateInputs(['#minNumber', '#maxNumber'], 2, '#limit1', '#result');
    if (!validate) {
      return;
    }
    let randomInteger = generateRandomInteger(minNumber, maxNumber);
    $('#random_result').html('<b>Random Number: </b> ' + randomInteger);
    $('#result').removeClass('hidden');
  });

  // comprehensive calculator
  $('#generate_random_num').click(function () {
    let numberType = $('input[name=number_type]:checked').val();
    let minRange = parseFloat($('#min_range').val());
    let maxRange = parseFloat($('#max_range').val());
    let precision = $('#precision').val();
    let numCount = parseInt($('#num_count').val());
    let validate;
    if (numberType === 'integer') {
      validate = validateInputs(['#num_count', '#min_range', '#max_range'], 3, '#limit2', '#result');
    } else if (numberType === 'decimal') {
      validate = validateInputs(['#num_count', '#min_range', '#max_range', '#precision'], 4, '#limit2', '#result');
    }
    if (!validate) {
      return;
    }
    if (numCount < 1) {
      $('#result').html('Number of Random Numbers must be 1 or more.');
      return;
    }
    let randomNumbers = [];
    let order = $('input[name=order]:checked').val();
    if (numberType === 'integer') {
      for (let i = 0; i < numCount; i++) {
        let randomNumber = Math.floor(Math.random() * (maxRange - minRange + 1)) + minRange;
        randomNumbers.push(randomNumber);
      }
    } else if (numberType === 'decimal') {
      for (let i = 0; i < numCount; i++) {
        let randomDecimal = Math.random() * (maxRange - minRange) + minRange;
        let randomNumber = randomDecimal.toFixed(precision);
        randomNumbers.push(randomNumber);
      }
    }
    if (order === 'ascending') {
      randomNumbers.sort(function (a, b) {
        return a - b;
      });
    } else if (order === 'descending') {
      randomNumbers.sort(function (a, b) {
        return b - a;
      });
    }

    $('#random_result').html('<b>Random Number: </b>' + randomNumbers.join(', '));
    $('#result').removeClass('hidden');
  });
});
