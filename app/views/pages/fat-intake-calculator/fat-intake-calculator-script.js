function calculateBMR(age, gender, height, weight, formula, bodyFatPercentage) {
  if (formula === 'mifflin') {
    if (gender === 'male') {
      return 10 * weight + 6.25 * height - 5 * age + 5;
    } else {
      return 10 * weight + 6.25 * height - 5 * age - 161;
    }
  } else if (formula === 'katch') {
    return 370 + 21.6 * (1 - bodyFatPercentage / 100) * weight;
  }
}

$(document).ready(function () {
  $('#calculate-btn').click(function () {
    let age = parseInt($('#age').val());
    let gender = $('input[name=gender]:checked').val();
    let height = parseInt($('#height').val());
    let weight = parseInt($('#weight').val());
    let activity = parseFloat($('#activity').val());
    let formula = $('input[name=formula]:checked').val();
    let bodyFatPercentage = parseFloat($('#body-fat-percentage').val());
    if (!gender | isNaN(age) || isNaN(weight) || isNaN(height) || isNaN(activity) || !formula || isNaN(bodyFatPercentage)) {
      $('#warning').html('Please provide all required fields.');
      return;
    }

    let bmr = calculateBMR(
      age,
      gender,
      height,
      weight,
      formula,
      bodyFatPercentage,
    );

    let calorieAllowance = Math.round(bmr * activity);
    let fatAllowanceMin = Math.round((calorieAllowance * 0.2) / 9);
    let fatAllowanceMax = Math.round((calorieAllowance * 0.35) / 9);
    let saturatedFatAllowance = Math.round((calorieAllowance * 0.1) / 9);
    let saturatedFatAllowanceHeart = Math.round((calorieAllowance * 0.07) / 9);
    $("#additionalDiv").show();
    $('#warning').html(' ');

    $("#result").html(
    
        "<table class='table_design'>" +
        "<tr><th>Goal</th><th>Daily Calorie Allowance</th><th>Daily Fat Allowance (20-35%)</th><th>Saturated Fat Allowance (10%)</th><th>Saturated Fat Allowance to Help Reduce Heart Disease (7%)</th></tr>" +
        "<tr><td>Weight Maintenance</td><td>" +
        calorieAllowance +
        " Calories</td><td>" +
        fatAllowanceMin +
        " - " +
        fatAllowanceMax +
        " grams</td><td>&lt;" +
        saturatedFatAllowance +
        " grams</td><td>&lt;" +
        saturatedFatAllowanceHeart +
        " grams</td></tr>" +
        "<tr><td>Lose 0.5 kg/week</td><td>" +
        Math.round(calorieAllowance - 500) +
        " Calories</td><td>" +
        Math.round(((calorieAllowance - 500) / 9) * 0.2) +
        " - " +
        Math.round(((calorieAllowance - 500) / 9) * 0.35) +
        " grams</td><td>&lt;" +
        Math.round(((calorieAllowance - 500) / 9) * 0.1) +
        " grams</td><td>&lt;" +
        Math.round(((calorieAllowance - 500) / 9) * 0.07) +
        " grams</td></tr>" +
        "<tr><td>Lose 1 kg/week</td><td>" +
        Math.round(calorieAllowance - 1000) +
        " Calories</td><td>" +
        Math.round(((calorieAllowance - 1000) / 9) * 0.2) +
        " - " +
        Math.round(((calorieAllowance - 1000) / 9) * 0.35) +
        " grams</td><td>&lt;" +
        Math.round(((calorieAllowance - 1000) / 9) * 0.1) +
        " grams</td><td>&lt;" +
        Math.round(((calorieAllowance - 1000) / 9) * 0.07) +
        " grams</td></tr>" +
        "<tr><td>Gain 0.5 kg/week</td><td>" +
        Math.round(calorieAllowance + 500) +
        " Calories</td><td>" +
        Math.round(((calorieAllowance + 500) / 9) * 0.2) +
        " - " +
        Math.round(((calorieAllowance + 500) / 9) * 0.35) +
        " grams</td><td>&lt;" +
        Math.round(((calorieAllowance + 500) / 9) * 0.1) +
        " grams</td><td>&lt;" +
        Math.round(((calorieAllowance + 500) / 9) * 0.07) +
        " grams</td></tr>" +
        "<tr><td>Gain 1 kg/week</td><td>" +
        Math.round(calorieAllowance + 1000) +
        " Calories</td><td>" +
        Math.round(((calorieAllowance + 1000) / 9) * 0.2) +
        " - " +
        Math.round(((calorieAllowance + 1000) / 9) * 0.35) +
        " grams</td><td>&lt;" +
        Math.round(((calorieAllowance + 1000) / 9) * 0.1) +
        " grams</td><td>&lt;" +
        Math.round(((calorieAllowance + 1000) / 9) * 0.07) +
        " grams</td></tr>" +
        "</table>",
    );


  });

  $('#calculate-btns').on('click', function () {
    let gender = $('#genders').val();
    let age = parseInt($('#ages').val());
    let heightFeet = parseInt($('#height-feet').val());
    let heightInches = parseInt($('#height-inches').val());
    let weight = parseInt($('#weightpound').val());
    let activityLevel = parseFloat($('#activity-levels').val());
    let formula = $('input[name=formulas]:checked').val();
    let bodyFatPercentage = parseFloat($('#body-fat-percentages').val());
    if ( isNaN(age) || isNaN(heightFeet) || isNaN(heightInches) || isNaN(weight) || isNaN(bodyFatPercentage)) {
      $('#warning2').html('Please provide all required fields.');
      return;
    }
    let heightcmTotal = (heightFeet * 12 + heightInches) * 2.54;
    let weightKG = weight * 0.45359237;
    let bmr;
    if (formula === 'mifflin') {
      if (gender === 'male') {
        bmr = 10 * weightKG + 6.25 * heightcmTotal - 5 * age + 5;
      } else {
        bmr = 10 * weightKG + 6.25 * heightcmTotal - 5 * age - 161;
      }
    } else if (formula === 'katch') {
      bmr = 370 + 21.6 * (1 - bodyFatPercentage / 100) * weightKG;
    }

    let dailyCaloricNeeds = bmr * activityLevel;
    let calorieAllowance = Math.round(bmr * activityLevel);
    let fatAllowanceMin = Math.round((calorieAllowance * 0.2) / 9);
    let fatAllowanceMax = Math.round((calorieAllowance * 0.35) / 9);
    let saturatedFatAllowance = Math.round((calorieAllowance * 0.1) / 9);
    let saturatedFatAllowanceHeart = Math.round((calorieAllowance * 0.07) / 9);
    $("#additionalDiv").show();
    $('#warning2').html(' ');

    $("#result").html(
  
        "<table class='table_design'>" +
        "<tr><th>Goal</th><th>Daily Calorie Allowance</th><th>Daily Fat Allowance (20-35%)</th><th>Saturated Fat Allowance (10%)</th><th>Saturated Fat Allowance to Help Reduce Heart Disease (7%)</th></tr>" +
        "<tr><td>Weight Maintenance</td><td>" +
        calorieAllowance +
        " Calories</td><td>" +
        fatAllowanceMin +
        " - " +
        fatAllowanceMax +
        " grams</td><td>&lt;" +
        saturatedFatAllowance +
        " grams</td><td>&lt;" +
        saturatedFatAllowanceHeart +
        " grams</td></tr>" +
        "<tr><td>Lose 0.5 lb/week</td><td>" +
        (calorieAllowance - 500).toFixed(0) +
        " Calories</td><td>" +
        (((calorieAllowance - 500) / 9) * 0.2).toFixed(0) +
        " - " +
        (((calorieAllowance - 500) / 9) * 0.35).toFixed(0) +
        " grams</td><td>&lt;" +
        (((calorieAllowance - 500) / 9) * 0.1).toFixed(0) +
        " grams</td><td>&lt;" +
        (((calorieAllowance - 500) / 9) * 0.07).toFixed(0) +
        " grams</td></tr>" +
        "<tr><td>Lose 1 lb/week</td><td>" +
        (calorieAllowance - 1000).toFixed(0) +
        " Calories</td><td>" +
        (((calorieAllowance - 1000) / 9) * 0.2).toFixed(0) +
        " - " +
        (((calorieAllowance - 1000) / 9) * 0.35).toFixed(0) +
        " grams</td><td>&lt;" +
        (((calorieAllowance - 1000) / 9) * 0.1).toFixed(0) +
        " grams</td><td>&lt;" +
        (((calorieAllowance - 1000) / 9) * 0.07).toFixed(0) +
        " grams</td></tr>" +
        "<tr><td>Gain 0.5 lb/week</td><td>" +
        (calorieAllowance + 500).toFixed(0) +
        " Calories</td><td>" +
        (((calorieAllowance + 500) / 9) * 0.2).toFixed(0) +
        " - " +
        (((calorieAllowance + 500) / 9) * 0.35).toFixed(0) +
        " grams</td><td>&lt;" +
        (((calorieAllowance + 500) / 9) * 0.1).toFixed(0) +
        " grams</td><td>&lt;" +
        (((calorieAllowance + 500) / 9) * 0.07).toFixed(0) +
        " grams</td></tr>" +
        "<tr><td>Gain 1 lb/week</td><td>" +
        (calorieAllowance + 1000).toFixed(0) +
        " Calories</td><td>" +
        (((calorieAllowance + 1000) / 9) * 0.2).toFixed(0) +
        " - " +
        (((calorieAllowance + 1000) / 9) * 0.35).toFixed(0) +
        " grams</td><td>&lt;" +
        (((calorieAllowance + 1000) / 9) * 0.1).toFixed(0) +
        " grams</td><td>&lt;" +
        (((calorieAllowance + 1000) / 9) * 0.07).toFixed(0) +
        " grams</td></tr>" +
        "</table>",
    );
  });
});
