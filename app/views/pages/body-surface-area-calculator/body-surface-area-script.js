$(document).ready(function () {
  $('#calculateBtn').click(function () {
    let weight = parseFloat($('#weight').val());
    let weightUnit = $('#weightUnit').val();
    let heightUnit = $('input[name="heightUnit"]:checked').val();
    let heightFeet = parseFloat($('#heightFeet').val());
    let heightInches = parseFloat($('#heightInches').val());
    let heightCm = parseFloat($('#heightCm').val());
    let gender = $('input[name="gender"]:checked').val();
 
    if (
      !weight ||
      (!heightFeet && !heightCm) ||
      isNaN(weight) ||
      (heightUnit === "ft" && (isNaN(heightFeet) || isNaN(heightInches))) ||
      (heightUnit === "cm" && isNaN(heightCm))
    ) {
      $("#bodySurfaceWarning").html(
        "Please provide all required fields"
      );
      return;
    } else {
      if (weightUnit === "pounds") {
        weight *= 0.453592;
      } else if (weightUnit === "grams") {
        weight *= 0.001;
      }

      let height;
      if (heightUnit === "ft") {
        height = heightFeet * 30.48 + heightInches * 2.54;
      } else if (heightUnit === "cm") {
        height = heightCm;
      }

      let formulas = {
        "Du Bois": 0.007184 * Math.pow(weight, 0.425) * Math.pow(height, 0.725),
        Mosteller: 0.016667 * Math.sqrt(weight) * Math.sqrt(height),
        Haycock: 0.024265 * Math.pow(weight, 0.5378) * Math.pow(height, 0.3964),
        "Gehan & George":
          0.0235 * Math.pow(weight, 0.51456) * Math.pow(height, 0.42246),
        Boyd:
          0.0333 *
          Math.pow(weight, 0.6157 - 0.0188 * Math.log10(weight)) *
          Math.pow(height, 0.3),
        Fujimoto: 0.008883 * Math.pow(weight, 0.444) * Math.pow(height, 0.663),
        Takahira: 0.007241 * Math.pow(weight, 0.425) * Math.pow(height, 0.725),
        Schlich:
          gender === "male"
            ? 0.000579479 * Math.pow(weight, 0.38) * Math.pow(height, 1.24)
            : 0.000975482 * Math.pow(weight, 0.46) * Math.pow(height, 1.08),
      };

      let units = {
        "m²": 1,
        "ft²": 10.7639,
        "in²": 1550.0031,
      };

      let results =
        " <div></div><table class='table_design'><tr><th>Formula</th><th colspan= '3'>Results in different units</th></tr>";
      for (let formula in formulas) {
        let bsa = formulas[formula];
        let resultRow = "<tr><td>" + formula + "</td>";
        for (let unit in units) {
          let result =
            (bsa * units[unit])
              .toFixed(0)
              .replace(/\B(?=(\d{3})+(?!\d))/g, ",") +
            " " +
            unit;
          resultRow += "<td>" + result + "</td>";
        }
        resultRow += "</tr>";
        results += resultRow;
      }
      results += "</table>";
      $("#results").html(results);
      $("#additionalDiv").show();
      $("#bodySurfaceWarning").html(" ");
    }
  });

  $('input[name="heightUnit"]').change(function () {
    let heightUnit = $(this).val();
    if (heightUnit === 'ft') {
      $('#heightFields').show();
      $('#heightCmField').hide();
    } else if (heightUnit === 'cm') {
      $('#heightFields').hide();
      $('#heightCmField').show();
    }
  });
});
