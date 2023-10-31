$(document).ready(function () {
  $('#calculator-form').submit(function (event) {
    event.preventDefault();

    let age = parseInt($('#age').val());
    let gender = $('#gender').val();
    let height = parseInt($('#height').val());
    let weight = parseInt($('#weight').val());

    let result = calculateBMI(weight, height);
    let message = getWeightStatus(result);
    message += '<br>Normal weight range for the height: ' + getNormalWeightRange(height).join(' - ') + ' kgs.';

    $('#result').html(message);
    $('#additionalDiv').show();
  });

  function calculateBMI(weight, height) {
    let heightInMeter = height / 100;
    return weight / (heightInMeter * heightInMeter);
  }

  function getWeightStatus(bmi) {
    if (bmi < 18.5) {
      return '<span class="weight_color">Your weight is Underweight.</span>';
    } else if (bmi >= 18.5 && bmi < 25) {
      return '<span class="weight_color">Your weight is Normal.</span>';
    } else if (bmi >= 25 && bmi < 30) {
      return '<span class="weight_color">Your weight is Overweight.</span>';
    } else if (bmi >= 30 && bmi < 35) {
      return '<span class="weight_color">Your weight is Obese I.</span>';
    } else if (bmi >= 35 && bmi < 40) {
      return '<span class="weight_color">Your weight is Obese II.</span>';
    } else {
      return '<span class="weight_color">Your weight is Obese III.</span>';
    }
  }

  function getNormalWeightRange(height) {
    let lowerBound = 18.5 * (height / 100) ** 2;
    let upperBound = 25 * (height / 100) ** 2;
    return [lowerBound.toFixed(1), upperBound.toFixed(1)];
  }

  $('#calculator-forms').submit(function (event) {
    event.preventDefault();

    let age = parseInt($('#ages').val());
    let gender = $('#genders').val();
    let feet = parseInt($('#feet').val());
    let inches = parseInt($('#inches').val());
    let weight = parseInt($('#weights').val());

    let height = feet * 12 + inches;
    let result = calculateBMI(weight, height);
    let message = getWeightStatus(result);
    message += '<br>Normal weight range for the height: ' + getNormalWeightRange(height).join(' - ') + ' lbs.';

    $('#result').html(message);
    $('#additionalDiv').show();
  });

  function calculateBMI(weight, height) {
    return (weight / (height * height)) * 703;
  }

  function getWeightStatus(bmi) {
    if (bmi < 18.5) {
      return 'Your weight is Underweight.';
    } else if (bmi >= 18.5 && bmi < 25) {
      return 'Your weight is Normal.';
    } else if (bmi >= 25 && bmi < 30) {
      return 'Your weight is Overweight.';
    } else {
      return 'Your weight is Obese.';
    }
  }

  function getNormalWeightRange(height) {
    let lowerBound = (18.5 * (height * height)) / 703;
    let upperBound = (25 * (height * height)) / 703;
    return [lowerBound.toFixed(1), upperBound.toFixed(1)];
  }
});
