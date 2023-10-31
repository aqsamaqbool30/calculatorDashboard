$(document).ready(function () {
  // $('input[name="formula"]').change(function () {
  //   let selectedFormula = $('input[name="formula"]:checked').val();
  //   if (selectedFormula === 'katch-mcardle') {
  //     $('#body-fat-container').show();
  //   } else {
  //     $('#body-fat-container').hide();
  //   }
  // });


  $('#calculate-bmr').click(function () {
    let age = parseInt($('#age').val());
    let gender = $('#gender').val();
    let height = parseInt($('#height').val());
    let weight = parseInt($('#weight').val());
    let formula = $('input[name="formula"]:checked').val();
    let unit = $('input[name="unit"]:checked').val();
    if (
      
      isNaN(age) ||
      isNaN(height) ||
      isNaN(weight)
     
    ) {
      $("#warning").html("Please provide all required fields.");
      $("#results").html(" ");
      return;
    } 

      let bmr;

      if (formula === "katch-mcardle") {
        let bodyFatPercentage = parseFloat($("#body-fat-percentage").val());
        let leanBodyMass = weight - (weight * bodyFatPercentage) / 100;
        bmr = 370 + 21.6 * leanBodyMass;

        let bodyFat = (weight * bodyFatPercentage) / 100;
        let fatPercentage = (bodyFat / weight) * 100;
        fatPercentage = fatPercentage.toFixed(1);
      } else if (formula === "harris-benedict") {
        if (gender === "male") {
          bmr = 13.397 * weight + 4.799 * height - 5.677 * age + 88.362;
        } else {
          bmr = 9.247 * weight + 3.098 * height - 4.33 * age + 447.593;
        }
      } else {
        // Mifflin-St Jeor formula
        if (gender === "male") {
          bmr = 10 * weight + 6.25 * height - 5 * age + 5;
        } else {
          bmr = 10 * weight + 6.25 * height - 5 * age - 161;
        }
      }

      if (unit === "kilojoules") {
        bmr *= 4.184;
      }

      let activityLevels = [
        {
          level: "Sedentary: little or no exercise",
          value: bmr * 1.2,
        },
        {
          level: "Exercise 1-3 times/week",
          value: bmr * 1.375,
        },
        {
          level: "Exercise 4-5 times/week",
          value: bmr * 1.55,
        },
        {
          level: "Daily exercise or intense exercise 3-4 times/week",
          value: bmr * 1.725,
        },
        {
          level: "Intense exercise 6-7 times/week",
          value: bmr * 1.9,
        },
        {
          level: "Very intense exercise daily, or physical job",
          value: bmr * 2.1,
        },
      ];

      let resultText =
        "Your Basal Metabolic Rate (BMR) is: " +
        bmr.toFixed(0) +
        " " +
        unit +
        "<br><br>";
      if (formula === "katch-mcardle") {
        resultText += "Body Fat Percentage: " + fatPercentage + "%<br><br>";
      }
      resultText += "Daily calorie needs based on activity level:<br><br>";

      let tableResult = "<table>";
      tableResult +=
        "<tr><th>Activity Level</th><th>Daily Calorie Needs</th></tr>";

      for (let i = 0; i < activityLevels.length; i++) {
        tableResult +=
          "<tr><td>" +
          activityLevels[i].level +
          "</td><td>" +
          activityLevels[i].value.toFixed(0) +
          " " +
          unit +
          "/day</td></tr>";
      }

      tableResult += "</table>";
      $("#warning").html(" ");
      $("#results").html(tableResult);
      $("#result").html(resultText);
      $("#additionalDiv").show();
    
  });

  $("#calculateBMR").click(function () {
    var age = +$("#ages").val();
    var gender = $("#genders").val();
    var heightFeet = +$("#height-feet").val();
    var heightInches = +$("#height-inches").val();
    var weightPounds = +$("#weight-lbs").val();
    var bodyFat = +$("#bodyfats").val();
    if (
      isNaN(age) ||
      isNaN(heightFeet) ||
      isNaN(heightInches) ||
      isNaN(weightPounds) ||
      isNaN(bodyFat)
    ) {
      $("#warning2").html("Please provide all required fields.");
      $("#results").html(" ");
      return;
    } 
      var heightInCm = heightFeet * 30.48 + heightInches * 2.54;
      var weightKg = weightPounds * 0.45359237;

      var selectedFormula = $("input[name='formulas']:checked").val();
      var bmr = 0;

      if (selectedFormula === "mifflin-st-jeor") {
        bmr =
          gender === "male"
            ? 10 * weightKg + 6.25 * heightInCm - 5 * age + 5
            : 10 * weightKg + 6.25 * heightInCm - 5 * age - 161;
      } else if (selectedFormula === "harris-benedict") {
        bmr =
          gender === "male"
            ? 13.397 * weightKg + 4.799 * heightInCm - 5.677 * age + 88.362
            : 9.247 * weightKg + 3.098 * heightInCm - 4.33 * age + 447.593;
      } else if (selectedFormula === "katch-mcardle") {
        var leanBodyMass = weightKg * (1 - bodyFat / 100);
        bmr = 370 + 21.6 * leanBodyMass;
      }

      var unit = $("input[name='units']:checked").val();
      var multiplier = unit === "calories" ? 1 : 4.187;

      var activityLevels = {
        "Sedentary: little or no exercise": 1.2,
        "Exercise 1-3 times/week": 1.375,
        "Exercise 4-5 times/week": 1.465,
        "Daily exercise or intense exercise 3-4 times/week": 1.55,
        "Intense exercise 6-7 times/week": 1.725,
        "Very intense exercise daily, or physical job": 1.9,
      };

      var resultHtml = `BMR based on selected formula:<br>Your BMR is <b>${(
        bmr * multiplier
      ).toFixed(
        0,
      )} </b>  ${unit} per day.<br><br>Daily ${unit} needs based on activity level:<br><br>`;

      var tableHtml = `<table><tr><th>Activity Level</th><th>${unit} per Day</th></tr>`;

      for (var activityLevel in activityLevels) {
        var total = bmr * activityLevels[activityLevel] * multiplier;
        tableHtml += `<tr><td>${activityLevel}</td><td>${total.toFixed(
          0,
        )} ${unit}</td></tr>`;
      }

      tableHtml += `</table>`;
      $("#results").html(tableHtml);
      $("#result").html(resultHtml);
      $("#additionalDiv").show();
    
  });
});
