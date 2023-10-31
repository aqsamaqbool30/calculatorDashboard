$(document).ready(function () {
  $('#calculate').click(function () {
    let height_cm = parseFloat($('#height').val());
    let age = parseInt($('#age').val());
    let gender = $("input[name='gender']:checked").val();

  
      let height_inches = height_cm * 0.393701;
      let jd_robinson_weight, dr_miller_weight, bj_devine_weight, gj_hamwi_weight;
      let bmi_range_start, bmi_range_end;

      if (gender === 'male') {
        jd_robinson_weight = 52 + 1.9 * (height_inches - 60);
        dr_miller_weight = 56.2 + 1.41 * (height_inches - 60);
        bj_devine_weight = 50 + 2.3 * (height_inches - 60);
        gj_hamwi_weight = 48 + 2.7 * (height_inches - 60);
      } else if (gender === 'female') {
        jd_robinson_weight = 49 + 1.7 * (height_inches - 60);
        dr_miller_weight = 53.1 + 1.36 * (height_inches - 60);
        bj_devine_weight = 45.5 + 2.3 * (height_inches - 60);
        gj_hamwi_weight = 45.5 + 2.2 * (height_inches - 60);
      }

      bmi_range_start = (18.5 * Math.pow(height_cm / 100, 2)).toFixed(1);
      bmi_range_end = (24.9 * Math.pow(height_cm / 100, 2)).toFixed(1);
      $("#additionalDiv").show();
      $("#warning").text(" ");

      $("#result").html(
        "<strong>J.D. Robinson Formula (1983):</strong> " +
          jd_robinson_weight.toFixed(1) +
          " kg.<br><strong>D.R. Miller Formula (1983):</strong> " +
          dr_miller_weight.toFixed(1) +
          " kg.<br><strong>B.J. Devine Formula (1974):</strong> " +
          bj_devine_weight.toFixed(1) +
          " kg.<br><strong>G.J. Hamwi Formula (1964):</strong>" +
          gj_hamwi_weight.toFixed(1) +
          " kg.<br><br><strong>Healthy BMI Range:</strong> " +
          bmi_range_start +
          " - " +
          bmi_range_end +
          " kgs.",
      );
  
  });

  $('#calculateunits').click(function () {
    let age = parseInt($('#ages').val());
    let heightFeet = parseInt($('#heightFeet').val());
    let heightInches = parseInt($('#heightInches').val());
    let gender = $('input[name="gender"]:checked').val();
    if (
      isNaN(age) ||
      isNaN(heightFeet) ||
      isNaN(heightInches) ||
      gender === undefined
    ) {
      $("#warning2").text("Please enter valid inputs.");
    } else {
      var height = heightFeet * 12 + heightInches;
      var idealWeightRobinson,
        idealWeightMiller,
        idealWeightDevine,
        idealWeightHamwi;

      if (gender === "male") {
        idealWeightRobinson = 52 + 1.9 * (height - 60);
        idealWeightMiller = 56.2 + 1.41 * (height - 60);
        idealWeightDevine = 50 + 2.3 * (height - 60);
        idealWeightHamwi = 48 + 2.7 * (height - 60);
      } else if (gender === "female") {
        idealWeightRobinson = 49 + 1.7 * (height - 60);
        idealWeightMiller = 53.1 + 1.36 * (height - 60);
        idealWeightDevine = 45.5 + 2.3 * (height - 60);
        idealWeightHamwi = 45.5 + 2.2 * (height - 60);
      } else {
        $("#result").text("Invalid gender. Please select Male or Female.");
        return;
      }

      let idealWeightRobinsonLbs = idealWeightRobinson * 2.20462;
      let idealWeightMillerLbs = idealWeightMiller * 2.20462;
      let idealWeightDevineLbs = idealWeightDevine * 2.20462;
      let idealWeightHamwiLbs = idealWeightHamwi * 2.20462;

      let heightMeters = height * 0.0254;
      let bmiMin = 18.5 * heightMeters * heightMeters;
      let bmiMax = 24.9 * heightMeters * heightMeters;

      let healthyWeightMin = (bmiMin * 2.20462).toFixed(1);
      let healthyWeightMax = (bmiMax * 2.20462).toFixed(1);
      $("#additionalDiv").show();
      $("#warning2").text(" ");

      $("#result").html(
        "<strong>Ideal Weight:</strong><br>Robinson (1983): " +
          idealWeightRobinsonLbs.toFixed(1) +
          " lbs<br>Miller (1983): " +
          idealWeightMillerLbs.toFixed(1) +
          " lbs<br>Devine (1974): " +
          idealWeightDevineLbs.toFixed(1) +
          " lbs<br>Hamwi (1964): " +
          idealWeightHamwiLbs.toFixed(1) +
          " lbs<br><br><strong>Healthy BMI Range:</strong><br>" +
          healthyWeightMin +
          " - " +
          healthyWeightMax +
          " lbs",
      );
    }
  });
});
