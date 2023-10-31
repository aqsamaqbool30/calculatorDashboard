$(document).ready(function () {
  $('#calculate-calories').click(function () {
    var age = parseInt($('#age').val());
    var gender = $("input[name='gender']:checked").val();
    var height = parseInt($('#height').val());
    var weight = parseInt($('#weight').val());
    var bodyFat = parseFloat($('#body-fat').val());
    var activity = parseFloat($('#activity').val());
    var formula = $("input[name='formula']:checked").val();
    var resultUnit = $("input[name='result-unit']:checked").val();
    var bmr;
    if ( 
      !gender | isNaN(age) ||
      isNaN(height) ||
      isNaN(weight) ||
      isNaN(weight) ||
      isNaN(bodyFat) ||
      !formula ||
      isNaN(activity) ||
      !resultUnit
    ) {
      $("#warning").html("Please provide all required fields.");
      return;
    }
    if (formula === 'mifflin') {
      if (gender === 'male') {
        bmr = 10 * weight + 6.25 * height - 5 * age + 5;
      } else {
        bmr = 10 * weight + 6.25 * height - 5 * age - 161;
      }
    } else if (formula === 'harris') {
      if (gender === 'male') {
        bmr = 13.397 * weight + 4.799 * height - 5.677 * age + 88.362;
      } else {
        bmr = 9.247 * weight + 3.098 * height - 4.33 * age + 447.593;
      }
    } else if (formula === 'katch') {
      bmr = 370 + 21.6 * (1 - bodyFat / 100) * weight;
    }

    var result;
    if (resultUnit === 'kilojoules') {
      result = (bmr * 4.187).toFixed(2) + ' kJ/day'; // Convert calories to kilojoules
    } else {
      result = bmr.toFixed(2) + ' Calories/day';
    }
    if (activity !== 1) {
      var maintainWeight = bmr * activity;
      var mildWeightLoss = (maintainWeight - 250).toFixed(0);
      var weightLoss = (maintainWeight - 500).toFixed(0);
      var extremeWeightLoss = (maintainWeight - 1000).toFixed(0);
      var mildWeightGain = (maintainWeight + 250).toFixed(0);
      var weightGain = (maintainWeight + 500).toFixed(0);
      var fastWeightGain = (maintainWeight + 1000).toFixed(0);
      if (resultUnit === 'kilojoules') {
        maintainWeight = (maintainWeight * 4.187).toFixed(0);
        mildWeightLoss = (mildWeightLoss * 4.187).toFixed(0);
        weightLoss = (weightLoss * 4.187).toFixed(0);
        extremeWeightLoss = (extremeWeightLoss * 4.187).toFixed(0);
        mildWeightGain = (mildWeightGain * 4.187).toFixed(0);
        weightGain = (weightGain * 4.187).toFixed(0);
        fastWeightGain = (fastWeightGain * 4.187).toFixed(0);
      }
      $("#results").html(
        "The results show a number of daily " +
          resultUnit +
          " estimates that can be used as a guideline for how many " +
          resultUnit +
          " to consume each day to maintain, lose, or gain weight at a chosen rate:</br> </br> ",
      );
      $("#result").html(
        "<table><tr> <td>Maintain weight:</td> <td>" +
          numberWithCommas(maintainWeight) +
          ((maintainWeight * 100) / maintainWeight).toFixed(0) +
          "% " +
          resultUnit +
          "/day  </td> </tr>" +
          "<tr> <td>Mild weight loss (0.25 kg/week):</td><td>" +
          numberWithCommas(mildWeightLoss) +
          ((mildWeightLoss * 100) / maintainWeight).toFixed(0) +
          "% " +
          resultUnit +
          "/day</td> </tr>" +
          "<tr> <td>Weight loss (0.5 kg/week):</td><td>" +
          numberWithCommas(weightLoss) +
          ((weightLoss * 100) / maintainWeight).toFixed(0) +
          "% " +
          resultUnit +
          "/day</td> </tr>" +
          "<tr> <td>Extreme weight loss (1 kg/week):</td><td>" +
          numberWithCommas(extremeWeightLoss) +
          ((extremeWeightLoss * 100) / maintainWeight).toFixed(0) +
          "% " +
          resultUnit +
          "/day  </td> </tr></table> <br> <br>" +
          "<table><tr> <td>Mild weight gain (0.25 kg/week):</td><td>" +
          numberWithCommas(mildWeightGain) +
        
          ((mildWeightGain * 100) / maintainWeight).toFixed(0) +
          "% " +
          resultUnit +
          "/day</td> </tr>" +
          "<tr> <td>Weight gain (0.5 kg/week):</td><td>" +
          numberWithCommas(weightGain) +
        
          ((weightGain * 100) / maintainWeight).toFixed(0) +
          "% " +
          resultUnit +
          "/day</td> </tr>" +
          "<tr> <td>Fast weight gain (1 kg/week):</td><td>" +
          numberWithCommas(fastWeightGain) +
    
          ((fastWeightGain * 100) / maintainWeight).toFixed(0) +
          "% " +
          resultUnit +
          "/day</td> </tr></table>",
      );
    } else {
      $("#result").html(
        "Basal Metabolic Rate (BMR):<br>" +
          result +
          "<br><br>",
      );
      $("#additionalDiv").show();
    }
  });

  $('#calculate-cal').click(function () {
    var age = parseInt($('#ages').val());
    var gender = $("input[name='genders']:checked").val();
    var feet = parseInt($('#feet').val());
    var inches = parseInt($('#inches').val());
    var weightInPounds = parseInt($('#weight-lbs').val());
    var bodyFat = parseFloat($('#body-fats').val());
    var activity = parseFloat($('#activities').val());
    var formula = $("input[name='formulas']:checked").val();
    var resultUnit = $("input[name='result-units']:checked").val();
    var bmr;
    if (
      !gender | isNaN(age) ||
      isNaN(height) ||
      isNaN(feet) ||
      isNaN(inches) ||
      isNaN(weightInPounds) ||
      isNaN(bodyFat) ||
      !formula ||
      isNaN(activity) ||
      !resultUnit
    ) {
      $("#warning2").html("Please provide all required fields.");
      return;
    }
    var height = feet * 30.48 + inches * 2.54;

    var weight = weightInPounds * 0.45359237;

    if (formula === 'mifflin') {
      if (gender === 'male') {
        bmr = 10 * weight + 6.25 * height - 5 * age + 5;
      } else {
        bmr = 10 * weight + 6.25 * height - 5 * age - 161;
      }
    } else if (formula === 'harris') {
      if (gender === 'male') {
        bmr = 13.397 * weight + 4.799 * height - 5.677 * age + 88.362;
      } else {
        bmr = 9.247 * weight + 3.098 * height - 4.33 * age + 447.593;
      }
    } else if (formula === 'katch') {
      bmr = 370 + 21.6 * (1 - bodyFat / 100) * weight;
    }

    var result;
    if (resultUnit === 'kilojoules') {
      result = (bmr * 4.187).toFixed(2) + ' kJ/day';
    } else {
      result = bmr.toFixed(2) + ' Calories/day';
    }

    if (activity !== 1) {
      var maintainWeight = bmr * activity;
      var mildWeightLoss = (maintainWeight - 250).toFixed(0);
      var weightLoss = (maintainWeight - 500).toFixed(0);
      var extremeWeightLoss = (maintainWeight - 1000).toFixed(0);
      var mildWeightGain = (maintainWeight + 250).toFixed(0);
      var weightGain = (maintainWeight + 500).toFixed(0);
      var fastWeightGain = (maintainWeight + 1000).toFixed(0);

      if (resultUnit === 'kilojoules') {
        maintainWeight = (maintainWeight * 4.187).toFixed(0);
        mildWeightLoss = (mildWeightLoss * 4.187).toFixed(0);
        weightLoss = (weightLoss * 4.187).toFixed(0);
        extremeWeightLoss = (extremeWeightLoss * 4.187).toFixed(0);
        mildWeightGain = (mildWeightGain * 4.187).toFixed(0);
        weightGain = (weightGain * 4.187).toFixed(0);
        fastWeightGain = (fastWeightGain * 4.187).toFixed(0);
      }
      $("#results").html(
        "The results show a number of daily " +
          resultUnit +
          " estimates that can be used as a guideline for how many " +
          resultUnit +
          " to consume each day to maintain, lose, or gain weight at a chosen rate: ",
      );
      $("#result").html(
        "<table><tr> <td>Maintain weight:</td> <td>" +
          numberWithCommas(maintainWeight) +
    
          ((maintainWeight * 100) / maintainWeight).toFixed(0) +
          "%  " +
          resultUnit +
          "/day  </td> </tr>" +
          "<tr> <td>Mild weight loss (0.25 kg/week):</td><td>" +
          numberWithCommas(mildWeightLoss) +
    
          ((mildWeightLoss * 100) / maintainWeight).toFixed(0) +
          "% " +
          resultUnit +
          "/day</td> </tr>" +
          "<tr> <td>Weight loss (0.5 kg/week):</td><td>" +
          numberWithCommas(weightLoss) +
    
          ((weightLoss * 100) / maintainWeight).toFixed(0) +
          "% " +
          resultUnit +
          "/day</td> </tr>" +
          "<tr> <td>Extreme weight loss (1 kg/week):</td><td>" +
          numberWithCommas(extremeWeightLoss) +
      
          ((extremeWeightLoss * 100) / maintainWeight).toFixed(0) +
          "% " +
          resultUnit +
          "/day  </td> </tr></table> <br> <br>" +
          "<table><tr> <td>Mild weight gain (0.25 kg/week):</td><td>" +
          numberWithCommas(mildWeightGain) +
          ((mildWeightGain * 100) / maintainWeight).toFixed(0) +
          "% " +
          resultUnit +
          "/day</td> </tr>" +
          "<tr> <td>Weight gain (0.5 kg/week):</td><td>" +
          numberWithCommas(weightGain) +
          ((weightGain * 100) / maintainWeight).toFixed(0) +
          "% " +
          resultUnit +
          "/day</td> </tr>" +
          "<tr> <td>Fast weight gain (1 kg/week):</td><td>" +
          numberWithCommas(fastWeightGain) +
          ((fastWeightGain * 100) / maintainWeight).toFixed(0) +
          "% " +
          resultUnit +
          "/day</td> </tr></table>",
      );
    } else {
      $("#result").html(
        "Basal Metabolic Rate (BMR):<br>" +
          result +
          "<br><br>",
      );
    }
  });
});

function numberWithCommas(number) {
  return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
}
