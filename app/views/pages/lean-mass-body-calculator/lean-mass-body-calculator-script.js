$(document).ready(function () {
  $('#calculateBtn').click(function () {
    let weight = parseFloat($('#weight').val());
    let height = parseFloat($('#height').val());
    let gender = $('input[name="gender"]:checked').val();
    let isChild = $('input[name="isChild"]:checked').val();
    if (!weight || !height || !gender || !isChild) {
      $('#errorMessage').text('Please fill out all the required fields.');
      $('#resultTable').empty();
    } else {
      $('#errorMessage').empty();
      $("#additionalDiv").show();
      let leanBodyMassBoer = 0;
      let bodyFatPercentageBoer = 0;
      let leanBodyMassJames = 0;
      let bodyFatPercentageJames = 0;
      let leanBodyMassHume = 0;
      let bodyFatPercentageHume = 0;
      let leanBodyMassPeters = 0;
      let bodyFatPercentagePeters = 0;

      if (gender === 'male') {
        leanBodyMassBoer = 0.407 * weight + 0.267 * height - 19.2;
        bodyFatPercentageBoer = (1 - leanBodyMassBoer / weight) * 100;

        leanBodyMassJames = 1.1 * weight - 128 * Math.pow(weight / height, 2);
        bodyFatPercentageJames = (1 - leanBodyMassJames / weight) * 100;

        leanBodyMassHume = 0.3281 * weight + 0.33929 * height - 29.5336;
        bodyFatPercentageHume = (1 - leanBodyMassHume / weight) * 100;
      } else if (gender === 'female') {
        leanBodyMassBoer = 0.252 * weight + 0.473 * height - 48.3;
        bodyFatPercentageBoer = (1 - leanBodyMassBoer / weight) * 100;

        leanBodyMassJames = 1.07 * weight - 148 * Math.pow(weight / height, 2);
        bodyFatPercentageJames = (1 - leanBodyMassJames / weight) * 100;

        leanBodyMassHume = 0.29569 * weight + 0.41813 * height - 43.2933;
        bodyFatPercentageHume = (1 - leanBodyMassHume / weight) * 100;
      }

      if (isChild === 'yes') {
        let eECV = 0.0215 * Math.pow(weight, 0.6469) * Math.pow(height, 0.7236);
        leanBodyMassPeters = 3.8 * eECV;
        bodyFatPercentagePeters = (1 - leanBodyMassPeters / weight) * 100;
      }

      let tableContent = '<tr><th>Formula</th><th>Lean Body Mass (kg)</th><th>Lean Body Mass (%)</th><th>Body Fat Percentage (%)</th></tr>';
      tableContent += '<tr><td>Boer Formula</td><td>' + leanBodyMassBoer.toFixed(1) + '</td><td>' + ((leanBodyMassBoer / weight) * 100).toFixed(0) + '%</td><td>' + bodyFatPercentageBoer.toFixed(0) + '%</td></tr>';
      tableContent += '<tr><td>James Formula</td><td>' + leanBodyMassJames.toFixed(1) + '</td><td>' + ((leanBodyMassJames / weight) * 100).toFixed(0) + '%</td><td>' + bodyFatPercentageJames.toFixed(0) + '%</td></tr>';
      tableContent += '<tr><td>Hume Formula</td><td>' + leanBodyMassHume.toFixed(1) + '</td><td>' + ((leanBodyMassHume / weight) * 100).toFixed(0) + '%</td><td>' + bodyFatPercentageHume.toFixed(0) + '%</td></tr>';

      if (isChild === "yes") {
        tableContent +=
          "<tr><td>Peters Formula</td><td>" +
          leanBodyMassPeters.toFixed(1) +
          "</td><td>" +
          ((leanBodyMassPeters / weight) * 100).toFixed(1) +
          "%</td><td>" +
          bodyFatPercentagePeters.toFixed(1) +
          "%</td></tr>";
      }

      $('#resultTable').html(tableContent);
    }
  });

  $('#calculateBtnMass').click(function () {
    let heightFeet = parseFloat($('#heightFeet').val());
    let heightInches = parseFloat($('#heightInches').val());
    let weightPounds = parseFloat($('#weightPounds').val());
    let gender = $('input[name="genderMass"]:checked').val();
    let isChild = $('input[name="isChildMass"]:checked').val();

    if (!heightFeet || !heightInches || !weightPounds || !gender || !isChild) {
      $("#errorMessage2").text("Please fill out all the required fields.");
      $("#resultTableMass").empty();
    } else {
      $("#errorMessage2").empty();
      $("#additionalDiv").show();
      let heightCentimeters = (heightFeet * 12 + heightInches) * 2.54;
      let weightKilograms = weightPounds * 0.45359237;

      let leanBodyMassBoer = 0;
      let bodyFatPercentageBoer = 0;
      let leanBodyMassJames = 0;
      let bodyFatPercentageJames = 0;
      let leanBodyMassHume = 0;
      let bodyFatPercentageHume = 0;
      let leanBodyMassPeters = 0;
      let bodyFatPercentagePeters = 0;

      if (gender === 'male') {
        leanBodyMassBoer = 0.407 * weightKilograms + 0.267 * heightCentimeters - 19.2;
        bodyFatPercentageBoer = (1 - leanBodyMassBoer / weightKilograms) * 100;

        leanBodyMassJames = 1.1 * weightKilograms - 128 * Math.pow(weightKilograms / heightCentimeters, 2);
        bodyFatPercentageJames = (1 - leanBodyMassJames / weightKilograms) * 100;

        leanBodyMassHume = 0.3281 * weightKilograms + 0.33929 * heightCentimeters - 29.5336;
        bodyFatPercentageHume = (1 - leanBodyMassHume / weightKilograms) * 100;
      } else if (gender === 'female') {
        leanBodyMassBoer = 0.252 * weightKilograms + 0.473 * heightCentimeters - 48.3;
        bodyFatPercentageBoer = (1 - leanBodyMassBoer / weightKilograms) * 100;

        leanBodyMassJames = 1.07 * weightKilograms - 148 * Math.pow(weightKilograms / heightCentimeters, 2);
        bodyFatPercentageJames = (1 - leanBodyMassJames / weightKilograms) * 100;

        leanBodyMassHume = 0.29569 * weightKilograms + 0.41813 * heightCentimeters - 43.2933;
        bodyFatPercentageHume = (1 - leanBodyMassHume / weightKilograms) * 100;
      }

      if (isChild === 'yes') {
        let eECV = 0.0215 * Math.pow(weightKilograms, 0.6469) * Math.pow(heightCentimeters, 0.7236);
        leanBodyMassPeters = 3.8 * eECV;
        bodyFatPercentagePeters = (1 - leanBodyMassPeters / weightKilograms) * 100;
      }

      let tableContent = '<tr><th>Formula</th><th>Lean Body Mass (lbs)</th><th>Lean Body Mass (%)</th><th>Body Fat Percentage (%)</th></tr>';
      tableContent += '<tr><td>Boer Formula</td><td>' + (leanBodyMassBoer * 2.20462).toFixed(2) + '</td><td>' + ((leanBodyMassBoer / weightKilograms) * 100).toFixed(2) + '%</td><td>' + bodyFatPercentageBoer.toFixed(2) + '%</td></tr>';
      tableContent += '<tr><td>James Formula</td><td>' + (leanBodyMassJames * 2.20462).toFixed(2) + '</td><td>' + ((leanBodyMassJames / weightKilograms) * 100).toFixed(2) + '%</td><td>' + bodyFatPercentageJames.toFixed(2) + '%</td></tr>';
      tableContent += '<tr><td>Hume Formula</td><td>' + (leanBodyMassHume * 2.20462).toFixed(2) + '</td><td>' + ((leanBodyMassHume / weightKilograms) * 100).toFixed(2) + '%</td><td>' + bodyFatPercentageHume.toFixed(2) + '%</td></tr>';

      if (isChild === "yes") {
        tableContent +=
          "<tr><td>Peters Formula</td><td>" +
          (leanBodyMassPeters * 2.20462).toFixed(2) +
          "</td><td>" +
          ((leanBodyMassPeters / weightKilograms) * 100).toFixed(2) +
          "%</td><td>" +
          bodyFatPercentagePeters.toFixed(2) +
          "%</td></tr>";

     
      }

      $("#resultTable").html(tableContent);
    }
  });
});
