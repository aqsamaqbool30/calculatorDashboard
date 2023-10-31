$(document).ready(function () {
  $('#heightWithMatric').click(function () {
    let ageYears = parseFloat($('#age').val());
    let weightKg = parseFloat($('#weight').val());
    let currentHeightCm = parseFloat($('#currentHeight').val());
    let motherHeightCm = parseFloat($('#motherHeight').val());
    let fatherHeightCm = parseFloat($('#fatherHeight').val());
    let gender = $('input[name=gender]:checked').val();

    let coefficient_age = 0.5;
    let coefficient_weight = 0.1;
    let coefficient_father_height = 0.58;
    let coefficient_mother_height = 0.39;
    let coefficient_gender_male = 0.05;
    let coefficient_gender_female = -0.05;
    let interceptM = 10;
    let interceptF = -6;

    let predictedHeightCmM = interceptM + coefficient_age * ageYears + coefficient_weight * weightKg + coefficient_father_height * fatherHeightCm + coefficient_mother_height * motherHeightCm;
    let predictedHeightCmF = interceptF + coefficient_age * ageYears + coefficient_weight * weightKg + coefficient_father_height * fatherHeightCm + coefficient_mother_height * motherHeightCm;

    if (gender === 'male') {
      predictedHeightCmM += coefficient_gender_male;
    } else if (gender === 'female') {
      predictedHeightCmF += coefficient_gender_female;
    }

    console.log(`Height M: ${predictedHeightCmM.toFixed(2)} cm`);
    console.log(`Height F: ${predictedHeightCmF.toFixed(2)} cm`);
    $('#result').removeClass('hidden');
  });
});
