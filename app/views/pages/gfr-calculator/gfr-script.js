$(document).ready(function () {
  $('#calculate-btn').click(function () {
    let serumCreatinineValue = parseFloat($('#serum-creatinine').val());
    let serumCreatinineUnit = $('#creatinine-unit').val();
    let age = parseInt($('#age').val());
    let race = $('input[name="race"]:checked').val();
    let gender = $('input[name="gender"]:checked').val();

    if (
      isNaN(serumCreatinineValue) ||
      serumCreatinineUnit === undefined ||
      isNaN(age) ||
      race === undefined ||
      gender === undefined
    ) {
      $("#warning").html("Please provide all required fields.");
      return;
    }

    if (serumCreatinineUnit === 'umol') {
      serumCreatinineValue = serumCreatinineValue / 88.4;
    }

    let gfrMdrd = 175 * Math.pow(serumCreatinineValue, -1.154) * Math.pow(age, -0.203);
    if (gender === 'female') {
      gfrMdrd *= 0.742;
    }
    if (race === 'black') {
      gfrMdrd *= 1.212;
    }

    let gfr;
    if (race === 'black' && gender === 'female') {
      if (serumCreatinineValue < 0.7) {
        gfr = 166 * Math.pow(serumCreatinineValue / 0.7, -0.329) * Math.pow(0.993, age);
      } else {
        gfr = 166 * Math.pow(serumCreatinineValue / 0.7, -1.209) * Math.pow(0.993, age);
      }
    } else if (race === 'black' && gender === 'male') {
      if (serumCreatinineValue < 0.9) {
        gfr = 163 * Math.pow(serumCreatinineValue / 0.9, -0.411) * Math.pow(0.993, age);
      } else {
        gfr = 163 * Math.pow(serumCreatinineValue / 0.9, -1.209) * Math.pow(0.993, age);
      }
    } else if (race === 'non-black' && gender === 'female') {
      if (serumCreatinineValue < 0.7) {
        gfr = 144 * Math.pow(serumCreatinineValue / 0.7, -0.329) * Math.pow(0.993, age);
      } else {
        gfr = 144 * Math.pow(serumCreatinineValue / 0.7, -1.209) * Math.pow(0.993, age);
      }
    } else if (race === 'non-black' && gender === 'male') {
      if (serumCreatinineValue < 0.9) {
        gfr = 141 * Math.pow(serumCreatinineValue / 0.9, -0.411) * Math.pow(0.993, age);
      } else {
        gfr = 141 * Math.pow(serumCreatinineValue / 0.9, -1.209) * Math.pow(0.993, age);
      }
    }

    if (serumCreatinineValue < 0.8) {
      serumCreatinineValue = 0.8;
    }
    let gfrMayo = Math.exp(
      1.911 +
        5.249 / serumCreatinineValue -
        2.114 / Math.pow(serumCreatinineValue, 2) -
        0.00686 * age -
        0.205 * (gender === "female" ? 1 : 0),
    );

    $('#additionalDiv').show();

    $("#result-mdrd").html(
      "<table> <tr><th>Formula</th> <th>Result</th></tr> <tr><th>GFR (IDMS-traceable MDRD)</th> <th> " +
        gfrMdrd.toFixed(1) +
        " mL/min/1.73m²</th></tr> <tr><th>GFR (CKD-EPI)</th> <th> " +
        gfr.toFixed(1) +
        " mL/min/1.73m²</th></tr> <tr><th>GFR (Mayo Quadratic)</th> <th> " +
        gfrMayo.toFixed(1) +
        " mL/min/1.73m²</th></tr></table>",
    );
    // $("#result-gfr-child").hide();
    // $("#result-mdrd").show();
  });

  $("#calculate-btn-child").click(function () {
    let serumCreatinineValue = parseFloat($("#serum-creatinine-child").val());
    let serumCreatinineUnit = $("#creatinine-unit-child").val();
    let heightValue = parseFloat($("#height-child").val());
    let heightUnit = $("#height-unit-child").val();
    if (
      isNaN(serumCreatinineValue) ||
      isNaN(serumCreatinineUnit) ||
      isNaN(age) ||
      isNaN(heightValue) ||
      isNaN(heightUnit)
    ) {
      $("#warning2").html("Please provide all required fields.");
      return;
    } else {
      if (serumCreatinineUnit === "umol") {
        serumCreatinineValue = serumCreatinineValue / 88.4;
      }

      if (heightUnit === "inches") {
        heightValue = heightValue * 2.54;
      }

      let gfr = 0.413 * (heightValue / serumCreatinineValue);
      $("#additionalDiv").show();
      $("#result-mdrd").html(
        "<b> GFR (Schwartz): </b>" + gfr.toFixed(1) + " mL/min/1.73m²",
      );
    }
    // $("#result-mdrd").hide();
    // $("#result-gfr-child").show();
  });
});
