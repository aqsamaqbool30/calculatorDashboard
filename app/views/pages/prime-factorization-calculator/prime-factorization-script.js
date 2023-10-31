$(document).ready(function () {
  $('#calcPrime').click(function () {
    $('#warning').html('').removeClass('pb-6');
    let number = parseInt($('#primeNumb').val());

    let validate = validateInputs(['#primeNumb'], 1, '#warning1', '#result');
    if (!validate) {
      return;
    }
    if (number <= 0) {
      $('#warning').html('Please provide positive integer to calculate.').addClass('pb-6');
      $('#result').addClass('hidden');
      return;
    }
    if (number === 1 || number === 2) {
      $('#solution1').html(`<b>Result:</b> ${number}<sup>1</sup>`);
    }else{
      let primeFactors = calculatePrimeFactors(number);
      let result = primeFactors.map(({ factor, power }) => `${factor}<sup>${power}</sup>`).join(' x ');
      $('#solution1').html('<b>Result:</b> ' + result);
    }
      $('#result').removeClass('hidden');
  });
});

function calculatePrimeFactors(number) {
  let primeFactors = [];
  let divisor = 2;

  while (number > 2) {
    if (number % divisor === 0) {
      let count = 0;
      while (number % divisor === 0) {
        number = number / divisor;
        count++;
      }
      primeFactors.push({ factor: divisor, power: count });
    }
    divisor++;
  }
  return primeFactors;
}