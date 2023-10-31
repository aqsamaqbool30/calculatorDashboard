$(document).ready(function () {
  $('#horsePowerCalcualtor').click(function () {
    let forceValue = parseFloat($('#force').val());
    let distanceValue = parseFloat($('#distance').val());
    let timeValue = parseFloat($('#time').val());
    let selectforce = $('#forceSelect').val();
    let selectDistance = $('#distanceSelect').val();
    let selectTime = $('#timeSelect').val();

    let validate = validateInputs(['#force', '#distance', '#time'], 3, '#limit1', '#result');
    if (!validate) {
      return;
    }
    let convertedForce = convertForce(forceValue, selectforce, 'newtons');
    let convertedDistance = convertLength(distanceValue, selectDistance, 'meters');
    let convertedTime = convertTime(timeValue, selectTime, 'seconds');
    let powerCalc = convertedForce * (convertedDistance / convertedTime);

    $('#solution1').html('The Power is: <b>' + powerCalc + ' watts </b><br>It is equivalent to:');
    $('#solution2').html(convertHorsePower(powerCalc, 'watt', 'mechanical-horsepower').toFixed(5) + ' mechanical horsepowers');
    $('#solution3').html(convertHorsePower(powerCalc, 'watt', 'metric-horsepower').toFixed(5) + ' metric horsepowers');
    $('#solution4').html(convertHorsePower(powerCalc, 'watt', 'electric-horsepower').toFixed(5) + ' electric horsepowers');
    $('#solution5').html(convertHorsePower(powerCalc, 'watt', 'boiler-horsepower').toFixed(5) + ' boiler horsepowers');
    $('#result').removeClass('hidden');
  });

  $('#horsePowerConverter').click(function () {
    let amountValue = parseFloat($('#amount').val());
    let convertFrom = $('#convertFrom').val();
    let convertTo = $('#convertTo').val();

    let validate = validateInputs(['#amount', '#convertTo', '#convertFrom'], 1, '#limit2', '#result');
    if (!validate) {
      return;
    }
    let powerConvert = convertHorsePower(amountValue, convertFrom, convertTo);
    $('#solution1').html(`${amountValue} ${convertFrom} is equivalent to <b>${Number(powerConvert).toFixed(5)} ${convertTo}</b>`);
    for (let i = 2; i < 6; i++) {
      $(`#solution${i}`).html('');
    }
    $('#result').removeClass('hidden');
  });
  function convertTime(time, fromUnit, toUnit) {
    let seconds;
    switch (fromUnit) {
      case 'seconds':
        seconds = time;
        break;
      case 'minutes':
        seconds = time * 60;
        break;
      case 'hours':
        seconds = time * 3600;
        break;
      case 'days':
        seconds = time * 86400;
        break;
      default:
        seconds = time;
    }

    switch (toUnit) {
      case 'seconds':
        return seconds;
      case 'minutes':
        return seconds / 60;
      case 'hours':
        return seconds / 3600;
      case 'days':
        return seconds / 86400;
      default:
        return seconds;
    }
  }
  function convertForce(initialForce, fromUnit, toUnit) {
    let forceConverted;
    switch (fromUnit) {
      case 'newtons':
        forceConverted = initialForce;
        break;
      case 'kilonewtons':
        forceConverted = initialForce * 1000;
        break;
      case 'pound-forces':
        forceConverted = initialForce * 4.44822;
        break;
      case 'kilogram-forces':
        forceConverted = initialForce * 9.80665;
        break;
      default:
        forceConverted = initialForce;
    }

    switch (toUnit) {
      case 'newtons':
        return forceConverted;
      case 'kilonewtons':
        return forceConverted / 1000;
      case 'pound-forces':
        return forceConverted / 4.44822;
      case 'kilogram-forces':
        return forceConverted / 9.80665;
      default:
        return forceConverted;
    }
  }
  function convertHorsePower(initialValue, fromUnit, toUnit) {
    let horsePower;

    switch (fromUnit) {
      case 'watt':
        horsePower = initialValue;
        break;
      case 'kilowatt':
        horsePower = initialValue * 1000;
        break;
      case 'mechanical-horsepower':
        horsePower = initialValue / 0.00134102;
        break;
      case 'metric-horsepower':
        horsePower = initialValue / 0.00135962;
        break;
      case 'electric-horsepower':
        horsePower = initialValue / 0.00134;
        break;
      case 'boiler-horsepower':
        horsePower = initialValue / 0.000101942;
        break;
      case 'BTU/h':
        horsePower = initialValue / 3.41442;
        break;
      default:
        horsePower = initialValue;
    }

    switch (toUnit) {
      case 'watt':
        return horsePower;
      case 'kilowatt':
        return horsePower / 1000;
      case 'mechanical-horsepower':
        return horsePower * 0.00134102;
      case 'metric-horsepower':
        return horsePower * 0.00135962;
      case 'electric-horsepower':
        return horsePower * 0.00134;
      case 'boiler-horsepower':
        return horsePower * 0.000101942;
      case 'BTU/h':
        return horsePower * 3.41442;
      default:
        return horsePower;
    }
  }
});
