$(document).ready(function () {
  $('#calculateBtn').click(function () {
    $('#error').text('');
    let age = parseInt($('#age').val());
    let gender = $("input[name='gender']:checked").val();
    let height = parseInt($('#height').val());
    let weight = parseInt($('#weight').val());

    if (isNaN(age) || !gender || isNaN(height) || isNaN(weight)) {
      $('#error').text('Please fill in all the required fields.');
      return;
    }

    // Calculate BMI
    let heightInMeters = height / 100;
    let bmi = weight / (heightInMeters * heightInMeters);

    $('#bmiResult').text('BMI = ' + bmi.toFixed(2) + ' kg/m²');
    let anorexiaMsg = '';
    if (bmi < 17.5) {
      anorexiaMsg = 'Your calculated BMI suggests anorexia nervosa.';
      let targetWeight = 17.5 * heightInMeters * heightInMeters - weight;
      if (targetWeight > 0) {
        anorexiaMsg += ' You need to gain approximately ' + targetWeight.toFixed(2) + ' kg to reach a BMI of 17.5 kg/m².';
      } else {
        anorexiaMsg += ' Your weight is already below the healthy range for a BMI of 17.5 kg/m².';
      }
    } else {
      anorexiaMsg = 'Your calculated BMI does not suggest anorexia nervosa.';
    }

    $('#additionalDiv').show();

    $('#anorexiaResult').html('<br>' + anorexiaMsg);

    $('#healthyRange').html('<br> Healthy BMI range: 18.5 - 25 kg/m²');
    $('#disclaimer').html('<br> The result above is not a diagnosis');
  });

  $('#calculateBtnAnorexic').click(function () {
    $('#error').text('');

    let age = parseInt($('#ageAnorexic').val());
    let gender = $("input[name='genderAnorexic']:checked").val();
    let feet = parseInt($('#feet').val());
    let inches = parseInt($('#inches').val());
    let weight = parseInt($('#weightAnorexic').val());

    if (isNaN(age) || !gender || isNaN(feet) || isNaN(inches) || isNaN(weight)) {
      $('#error').text('Please fill in all the required fields.');
      return;
    }
    let heightInMeters = (feet * 12 + inches) * 0.0254;

    let weightInKg = weight * 0.45359237;
    let bmi = weightInKg / (heightInMeters * heightInMeters);

    $('#bmiResult').text('BMI = ' + bmi.toFixed(2) + ' kg/m²');

    let anorexiaMsg = '';
    if (bmi < 17.5) {
      anorexiaMsg = 'Your calculated BMI suggests anorexia nervosa.';
      let targetWeight = 17.5 * heightInMeters * heightInMeters - weightInKg;
      if (targetWeight > 0) {
        anorexiaMsg += ' You need to gain approximately ' + targetWeight.toFixed(2) + ' kg to reach a BMI of 17.5 kg/m².';
      } else {
        anorexiaMsg += ' Your weight is already below the healthy range for a BMI of 17.5 kg/m².';
      }
    } else {
      anorexiaMsg = 'Your calculated BMI does not suggest anorexia nervosa.';
    }
    $('#additionalDiv').show();

    $('#anorexiaResult').html('<br>' + anorexiaMsg);
    $('#healthyRange').html(' <br>Healthy BMI range: 18.5 - 25 kg/m²');
    $('#disclaimer').html(' <br>The result above is not a diagnosis');
  });
});
