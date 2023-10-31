$(document).ready(function () {
  $('#calculateButtons').on('click', function () {
    var age = parseInt($('#age').val());
    var gender = $('select#gender').val();
    var height = parseInt($('#height').val());
    var weight = parseFloat($('#weight').val());
    var activityLevel = parseFloat($('#activityLevel').val());
    var resultUnit = $("input[name='resultUnit']:checked").val();
    var fatPercentage = parseFloat($('#fatPercentage').val()) / 100; // Convert percentage to decimal
    var selectedFormula = $("input[name='formula']:checked").val();

    if (
     isNaN(age) ||
      isNaN(height) ||
      isNaN(weight) ||
      isNaN(fatPercentage)
    ) {
      $("#warning").html("Please provide all required fields.");
      return;
    } else {
      var bmr;
      if (selectedFormula === "mifflin") {
        if (gender === "male") {
          bmr = 10 * weight + 6.25 * height - 5 * age + 5;
        } else if (gender === "female") {
          bmr = 10 * weight + 6.25 * height - 5 * age - 161;
        }
      } else if (selectedFormula === "katchMcArdle") {
        bmr = 370 + 21.6 * (1 - fatPercentage) * weight;
      }
      if (resultUnit === "kilojoules") {
        bmr *= 4.187;
      }

      var tdee = bmr * activityLevel;
      var resultText = generateResultText(tdee, resultUnit, activityLevel);

      $("#result").html(resultText);
    }
  });

  $('#calculatetdee').on('click', function () {
    var age = parseInt($('#ages').val());
    var gender = $('select#genders').val();
    var heightFeet = parseInt($('#heightFeet').val());
    var heightInches = parseInt($('#heightInches').val());
    var weightPounds = parseFloat($('#weightPounds').val());
    var activityLevel = parseFloat($('#activityLevels').val());
    var resultUnit = $("input[name='resultUnits']:checked").val();
    var fatPercentage = parseFloat($('#fatPercentages').val()) / 100;

    var selectedFormula = $("input[name='formulas']:checked").val();
    // if (
    //  isNaN(age) ||
    //   isNaN(heightFeet) ||
    //   isNaN(heightInches) ||
    //   isNaN(weightPounds) ||
    //   isNAN(fatPercentage)
    // ) {
    //   $("#warning2").html("Please provide all required fields.");
    //   return;
    // }
    var heightCm = (heightFeet * 12 + heightInches) * 2.54;

    var weightKg = weightPounds * 0.45359237;

    var bmr;

    if (selectedFormula === 'mifflin') {
      if (gender === 'male') {
        bmr = 10 * weightKg + 6.25 * heightCm - 5 * age + 5;
      } else if (gender === 'female') {
        bmr = 10 * weightKg + 6.25 * heightCm - 5 * age - 161;
      }
    } else if (selectedFormula === 'katchMcArdle') {
      bmr = 370 + 21.6 * (1 - fatPercentage) * weightKg;
    }
    if (resultUnit === 'kilojoules') {
      bmr *= 4.187;
    }

    var tdee = bmr * activityLevel;
    var resultText = generateResultText(tdee, resultUnit, activityLevel);

    $('#result').html(resultText);
  });

  function generateResultText(tdee, resultUnit, activityLevel) {
    var resultText;

    if (resultUnit == 'kilojoules') {
      if (activityLevel == 1) {
        var resultText = `Your Total Daily Energy Expenditure (TDEE) is: ${tdee.toFixed(
          0,
        )} ${resultUnit}`;
      } else {
        var resultText = `The estimated TDEE or body weight maintenance energy requirement is: ${tdee.toFixed(
          0,
        )} ${resultUnit} per day. <br>

                                <b>Energy intake to lose weight:</b><br>
                                Mild weight loss (0.25 kg/week): ${(
                                  tdee - 1046
                                ).toFixed(0)} ${resultUnit}/day (${(
                                  ((tdee - 1046) * 100) /
                                  tdee
                                ).toFixed(0)}%)<br>
                                Weight loss (0.5 kg/week): ${(
                                  tdee - 2093
                                ).toFixed(0)} ${resultUnit}/day (${(
                                  ((tdee - 2093) * 100) /
                                  tdee
                                ).toFixed(0)}%) <br>
                                Extreme weight loss (1 kg/week): ${(
                                  tdee - 4186
                                ).toFixed(0)} ${resultUnit}/day (${(
                                  ((tdee - 4186) * 100) /
                                  tdee
                                ).toFixed(0)}%) <br>

                                <b>Energy intake to gain weight:</b> <br>
                                Mild weight gain (0.25 kg/week): ${(
                                  tdee + 1046
                                ).toFixed(0)} ${resultUnit}/day (${(
                                  ((tdee + 1046) * 100) /
                                  tdee
                                ).toFixed(0)}%) <br>
                                // Weight gain (0.5 kg/week): ${(
                                  tdee + 2093
                                ).toFixed(0)} ${resultUnit}/day (${(
                                  ((tdee + 2093) * 100) /
                                  tdee
                                ).toFixed(0)}%) <br>
                                Fast Weight gain (1 kg/week): ${(
                                  tdee + 4186
                                ).toFixed(0)} ${resultUnit}/day (${(
                                  ((tdee + 1000) * 100) /
                                  tdee
                                ).toFixed(0)}%) `;
      }
    } else {
      if (activityLevel == 1) {
        var resultText = `Your Total Daily Energy Expenditure (TDEE) is: ${tdee.toFixed(
          0,
        )} ${resultUnit}`;
      } else {
        var resultText = `The estimated TDEE or body weight maintenance energy requirement is: ${tdee.toFixed(
          0,
        )} ${resultUnit} per day. <br>

                                <b>Energy intake to lose weight:</b><br>
                                Mild weight loss (0.25 kg/week): ${(
                                  tdee - 250
                                ).toFixed(0)} ${resultUnit}/day (${(
                                  ((tdee - 250) * 100) /
                                  tdee
                                ).toFixed(0)}%)<br>
                                Weight loss (0.5 kg/week): ${(
                                  tdee - 500
                                ).toFixed(0)} ${resultUnit}/day (${(
                                  ((tdee - 500) * 100) /
                                  tdee
                                ).toFixed(0)}%) <br>
                                Extreme weight loss (1 kg/week): ${(
                                  tdee - 1000
                                ).toFixed(0)} ${resultUnit}/day (${(
                                  ((tdee - 1000) * 100) /
                                  tdee
                                ).toFixed(0)}%) <br>

                                <b>Energy intake to gain weight:</b> <br>
                                Mild weight gain (0.25 kg/week): ${(
                                  tdee + 250
                                ).toFixed(0)} ${resultUnit}/day (${(
                                  ((tdee + 250) * 100) /
                                  tdee
                                ).toFixed(0)}%) <br>
                                Weight gain (0.5 kg/week): ${(
                                  tdee + 500
                                ).toFixed(0)} ${resultUnit}/day (${(
                                  ((tdee + 500) * 100) /
                                  tdee
                                ).toFixed(0)}%) <br>
                                Fast Weight gain (1 kg/week): ${(
                                  tdee + 1000
                                ).toFixed(0)} ${resultUnit}/day (${(
                                  ((tdee + 1000) * 100) /
                                  tdee
                                ).toFixed(0)}%) `;
      }
    }

    return resultText;
  }
});
