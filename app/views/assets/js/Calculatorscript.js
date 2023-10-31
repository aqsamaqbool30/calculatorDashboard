// weight conversion

$(document).ready(function () {
  $("#inputWeight, #selectFrom, #selectTo").on("input", function () {
    let weight = $("#inputWeight").val();
    let fromUnit = $("#selectFrom").val();
    let toUnit = $("#selectTo").val();
    let convertedWeight = convertWeight(weight, fromUnit, toUnit);
    $("#outputWeight").val(convertedWeight.toFixed(2));
  });

  function convertWeight(weight, fromUnit, toUnit) {
    let kg;
    switch (fromUnit) {
      case "lb":
        kg = weight * 0.45359237;
        break;
      case "g":
        kg = weight * 0.001;
        break;
      case "oz":
        kg = weight * 0.02834952;
        break;
      case "mg":
        kg = weight * 0.000001;
        break;
      case "t":
        kg = weight * 1000;
        break;
      case "lt":
        kg = weight * 1016.0469088;
        break;
      case "st":
        kg = weight * 907.18474;
        break;
      case "ct":
        kg = weight * 0.0002;
        break;
      case "amu":
        kg = weight * 1.6605390666e-27;
        break;
      default: // Assume input is already in kilograms
        kg = weight;
    }

    switch (toUnit) {
      case "lb":
        return kg * 2.20462262;
      case "g":
        return kg * 1000;
      case "oz":
        return kg * 35.27396195;
      case "mg":
        return kg * 1000000;
      case "t":
        return kg * 0.001;
      case "lt":
        return kg * 0.00098420653;
      case "st":
        return kg * 0.00110231131;
      case "ct":
        return kg * 5000;
      case "amu":
        return kg * 6.02213665167e26;
      default: // Convert to kilograms by default
        return kg;
    }
  }

  // volume conversion

  $("#inputVolume, #selectFromVolume, #selectToVolume").on(
    "input",
    function () {
      let volume = $("#inputVolume").val();
      let fromUnit = $("#selectFromVolume").val();
      let toUnit = $("#selectToVolume").val();
      let convertedVolume = convertVolume(volume, fromUnit, toUnit);
      $("#outputVolume").val(convertedVolume.toFixed(2));
    },
  );

  function convertVolume(volume, fromUnit, toUnit) {
    let m3;
    switch (fromUnit) {
      case "mm3":
        m3 = volume * 1e-9;
        break;
      case "m3":
        m3 = volume;
        break;
      case "km3":
        m3 = volume * 1e9;
        break;
      case "cm3":
        m3 = volume * 1e-6;
        break;
      case "l":
        m3 = volume * 0.001;
        break;
      case "ml":
        m3 = volume * 1e-6;
        break;
      case "gal":
        m3 = volume * 0.00378541;
        break;
      case "qt":
        m3 = volume * 0.000946353;
        break;
      case "pt":
        m3 = volume * 0.000473176;
        break;
      case "cup":
        m3 = volume * 0.000236588;
        break;
      case "oz":
        m3 = volume * 2.95735e-5;
        break;
      case "tbsp":
        m3 = volume * 1.47868e-5;
        break;
      case "tsp":
        m3 = volume * 4.92892e-6;
        break;
      case "igal":
        m3 = volume * 0.00454609;
        break;
      case "iq":
        m3 = volume * 0.00113652;
        break;
      case "ip":
        m3 = volume * 0.000568261;
        break;
      case "ifl":
        m3 = volume * 2.84131e-5;
        break;
      case "its":
        m3 = volume * 1.7758e-5;
        break;
      case "itts":
        m3 = volume * 5.9194e-6;
        break;
      case "mi3":
        m3 = volume * 4168181825.44058;
        break;
      case "yd3":
        m3 = volume * 0.764555;
        break;
      case "ft3":
        m3 = volume * 0.0283168;
        break;
      case "in3":
        m3 = volume * 1.63871e-5;
        break;
      default: // Assume input is already in cubic meters
        m3 = volume;
    }

    switch (toUnit) {
      case "mm3":
        return m3 * 1e9;
      case "m3":
        return m3;
      case "km3":
        return m3 * 1e-9;
      case "cm3":
        return m3 * 1e6;
      case "l":
        return m3 * 1000;
      case "ml":
        return m3 * 1e6;
      case "gal":
        return m3 * 264.172;
      case "qt":
        return m3 * 1056.69;
      case "pt":
        return m3 * 2113.38;
      case "cup":
        return m3 * 4226.75;
      case "oz":
        return m3 * 33814;
      case "tbsp":
        return m3 * 67628;
      case "tsp":
        return m3 * 202884;
      case "igal":
        return m3 * 219.969;
      case "iq":
        return m3 * 879.877;
      case "ip":
        return m3 * 1759.75;
      case "ifl":
        return m3 * 35195.1;
      case "its":
        return m3 * 56123.9;
      case "itts":
        return m3 * 168371;
      case "mi3":
        return m3 * 2.39913e-10;
      case "yd3":
        return m3 * 1.30795;
      case "ft3":
        return m3 * 35.3147;
      case "in3":
        return m3 * 61023.7;
      default: // Convert to cubic meters by default
        return m3;
    }
  }

  // start of Area

  $("#inputArea, #selectFromArea, #selectToArea").on("input", function () {
    let area = $("#inputArea").val();
    let fromUnit = $("#selectFromArea").val();
    let toUnit = $("#selectToArea").val();
    let convertedArea = convertArea(area, fromUnit, toUnit);
    $("#outputArea").val(convertedArea.toFixed(2));
  });

  function convertArea(area, fromUnit, toUnit) {
    let m2;
    switch (fromUnit) {
      case "m2":
        m2 = area;
        break;
      case "km2":
        m2 = area * 1e6;
        break;
      case "cm2":
        m2 = area * 0.0001;
        break;
      case "mm2":
        m2 = area * 1e-6;
        break;
      case "um2":
        m2 = area * 1e-12;
        break;
      case "ha":
        m2 = area * 10000;
        break;
      case "mi2":
        m2 = area * 2.59e6;
        break;
      case "yd2":
        m2 = area * 0.836127;
        break;
      case "ft2":
        m2 = area * 0.092903;
        break;
      case "in2":
        m2 = area * 0.00064516;
        break;
      case "ac":
        m2 = area * 4046.86;
        break;
      default: // Assume input is already in square meters
        m2 = area;
    }

    switch (toUnit) {
      case "m2":
        return m2;
      case "km2":
        return m2 * 1e-6;
      case "cm2":
        return m2 * 10000;
      case "mm2":
        return m2 * 1e6;
      case "um2":
        return m2 * 1e12;
      case "ha":
        return m2 * 0.0001;
      case "mi2":
        return m2 * 3.861e-7;
      case "yd2":
        return m2 * 1.19599;
      case "ft2":
        return m2 * 10.7639;
      case "in2":
        return m2 * 1550;
      case "ac":
        return m2 * 0.000247105;
      default: // Convert to square meters by default
        return m2;
    }
  }

  // strat of tempareture

  $("#inputTemp, #selectFromTemp, #selectToTemp").on("input", function () {
    let temperature = $("#inputTemp").val();
    let fromUnit = $("#selectFromTemp").val();
    let toUnit = $("#selectToTemp").val();
    let convertedTemperature = convertTemperature(
      temperature,
      fromUnit,
      toUnit,
    );
    $("#outputTemp").val(convertedTemperature.toFixed(2));
  });

  function convertTemperature(temperature, fromUnit, toUnit) {
    let convertedTemp;
    switch (fromUnit) {
      case "celsius":
        if (toUnit === "kelvin") {
          convertedTemp = parseFloat(temperature) + 273.15;
        } else if (toUnit === "fahrenheit") {
          convertedTemp = (parseFloat(temperature) * 9) / 5 + 32;
        } else {
          convertedTemp = parseFloat(temperature);
        }
        break;
      case "kelvin":
        if (toUnit === "celsius") {
          convertedTemp = parseFloat(temperature) - 273.15;
        } else if (toUnit === "fahrenheit") {
          convertedTemp = ((parseFloat(temperature) - 273.15) * 9) / 5 + 32;
        } else {
          convertedTemp = parseFloat(temperature);
        }
        break;
      case "fahrenheit":
        if (toUnit === "celsius") {
          convertedTemp = ((parseFloat(temperature) - 32) * 5) / 9;
        } else if (toUnit === "kelvin") {
          convertedTemp = ((parseFloat(temperature) - 32) * 5) / 9 + 273.15;
        } else {
          convertedTemp = parseFloat(temperature);
        }
        break;
      default:
        convertedTemp = parseFloat(temperature);
    }
    return convertedTemp;
  }

  // start of  lenght

  $("#inputLength, #selectFromLength, #selectToLength").on(
    "input",
    function () {
      let length = $("#inputLength").val();
      let fromUnit = $("#selectFromLength").val();
      let toUnit = $("#selectToLength").val();
      let convertedLength = convertLength(length, fromUnit, toUnit);
      $("#outputLength").val(convertedLength.toFixed(2));
    },
  );

  function convertLength(length, fromUnit, toUnit) {
    let meter;
    switch (fromUnit) {
      case "meter":
        meter = length;
        break;
      case "kilometer":
        meter = length * 1000;
        break;
      case "centimeter":
        meter = length * 0.01;
        break;
      case "millimeter":
        meter = length * 0.001;
        break;
      case "micrometer":
        meter = length * 1e-6;
        break;
      case "nanometer":
        meter = length * 1e-9;
        break;
      case "mile":
        meter = length * 1609.34;
        break;
      case "yard":
        meter = length * 0.9144;
        break;
      case "foot":
        meter = length * 0.3048;
        break;
      case "inch":
        meter = length * 0.0254;
        break;
      case "lightyear":
        meter = length * 9.461e15;
        break;
      default:
        meter = length;
    }

    switch (toUnit) {
      case "meter":
        return meter;
      case "kilometer":
        return meter * 0.001;
      case "centimeter":
        return meter * 100;
      case "millimeter":
        return meter * 1000;
      case "micrometer":
        return meter * 1e6;
      case "nanometer":
        return meter * 1e9;
      case "mile":
        return meter * 0.000621371;
      case "yard":
        return meter * 1.09361;
      case "foot":
        return meter * 3.28084;
      case "inch":
        return meter * 39.3701;
      case "lightyear":
        return meter * 1.057e-16;
      default:
        return meter;
    }
  }

  // start of date calculator

  $(".calculateAge").click(function (e) {
    calculateAge();
  });

  function calculateAge() {
    let birthDate = new Date($("#birthDate").val());
    let currentDate = new Date($("#currentDate").val());

    let timeDiff = Math.abs(currentDate - birthDate);

    let oneSecond = 1000;
    let oneMinute = oneSecond * 60;
    let oneHour = oneMinute * 60;
    let oneDay = oneHour * 24;
    let oneWeek = oneDay * 7;
    let oneMonth = oneDay * 30.436875;

    let years = Math.floor(timeDiff / (oneDay * 365.25));
    let months = Math.floor(timeDiff / oneMonth);
    let weeks = Math.floor(timeDiff / oneWeek);
    let days = Math.floor(timeDiff / oneDay);
    let hours = Math.floor(timeDiff / oneHour);
    let minutes = Math.floor(timeDiff / oneMinute);
    let seconds = Math.floor(timeDiff / oneSecond);

    let ageYears = years;
    let ageMonths = Math.floor((timeDiff % (oneDay * 365.25)) / oneMonth);
    let ageDays = Math.floor((timeDiff % oneMonth) / oneDay);

    let result8 =
      "Age: " +
      ageYears +
      " years, " +
      ageMonths +
      " months, " +
      ageDays +
      " days";
    let result1 = "OR Years: " + years;
    let result2 = "OR Months: " + months;
    let result3 = "OR Weeks: " + weeks;
    let result4 = "OR Days: " + days;
    let result5 = "OR Hours: " + hours;
    let result6 = "OR Minutes: " + minutes;
    let result7 = "OR Seconds: " + seconds;
    $("#age").text(result8);
    $("#year").text(result1);
    $("#month").text(result2);
    $("#Week").text(result3);
    $("#Day").text(result4);
    $("#hour").text(result5);
    $("#Minute").text(result6);
    $("#Second").text(result7);
  }

  // start of time calculator

  // $('#calculate').click(function () {
  $("#calculatetime").click(function () {
    let operation = $('input[name="operation"]:checked').val();

    let day1 = parseInt($("#day1").val()) || 0;
    let hour1 = parseInt($("#hour1").val()) || 0;
    let minute1 = parseInt($("#minute1").val()) || 0;
    let second1 = parseInt($("#second1").val()) || 0;

    let day2 = parseInt($("#day2").val()) || 0;
    let hour2 = parseInt($("#hour2").val()) || 0;
    let minute2 = parseInt($("#minute2").val()) || 0;
    let second2 = parseInt($("#second2").val()) || 0;

    let time1 = day1 * 24 * 60 * 60 + hour1 * 60 * 60 + minute1 * 60 + second1;
    let time2 = day2 * 24 * 60 * 60 + hour2 * 60 * 60 + minute2 * 60 + second2;

    let result;
    if (operation === "add") {
      result = time1 + time2;
    } else if (operation === "subtract") {
      result = time1 - time2;
    }

    let days = Math.floor(Math.abs(result) / (24 * 60 * 60));
    let hours = Math.floor((Math.abs(result) % (24 * 60 * 60)) / (60 * 60));
    let minutes = Math.floor((Math.abs(result) % (60 * 60)) / 60);
    let seconds = Math.floor(Math.abs(result) % 60);
    let totalHours = Math.floor(Math.abs(result) / (60 * 60));
    let totalDays = Math.floor(Math.abs(result) / (24 * 60 * 60));

    let resultText = "Result: ";
    if (result < 0) {
      resultText += "-";
    }
    resultText +=
      days +
      " days, " +
      hours +
      " hours, " +
      minutes +
      " minutes, " +
      seconds +
      " seconds";
    $("#result").text(resultText);

    let totalResultText = "Total Result: ";
    if (result < 0) {
      totalResultText += "-";
    }
    totalResultText +=
      totalDays +
      " days, " +
      totalHours +
      " OR hours, " +
      (totalHours * 60 + minutes) +
      " OR minutes, " +
      result +
      " OR seconds";
    $("#totalResult").text(totalResultText);
  });

  // start of time 2nd calculator
  $("#addButton").click(function () {
    calculateTime(true);
  });

  $("#subtractButton").click(function () {
    calculateTime(false);
  });

  function calculateTime(isAddition) {
    // $("#totalResult"
    document.getElementById("totalResult").innerHTML = "";
    let startDate = new Date($("#start").val());
    let days = parseInt($("#days").val()) || 0;
    let hours = parseInt($("#hours").val()) || 0;
    let minutes = parseInt($("#minutes").val()) || 0;
    let seconds = parseInt($("#seconds").val()) || 0;

    let resultDate = new Date(startDate);

    if (isAddition) {
      resultDate.setDate(resultDate.getDate() + days);
      resultDate.setHours(resultDate.getHours() + hours);
      resultDate.setMinutes(resultDate.getMinutes() + minutes);
      resultDate.setSeconds(resultDate.getSeconds() + seconds);
    } else {
      resultDate.setDate(resultDate.getDate() - days);
      resultDate.setHours(resultDate.getHours() - hours);
      resultDate.setMinutes(resultDate.getMinutes() - minutes);
      resultDate.setSeconds(resultDate.getSeconds() - seconds);
    }

    let result = resultDate.toLocaleString();
    $("#result").text("Time: " + result);
  }

  // start of percentage
  $("#calculateButton").click(function () {
    let percentage = parseFloat($("#percentage").val());
    let value = parseFloat($("#value").val());

    let result = calculatePercentage(percentage, value);
    console.log(result);
    $("#result").html(result);
  });

  function calculatePercentage(percentage, value) {
    let percentOfValue = (percentage / 100) * value;
    let result6 =
      percentage +
      "% of " +
      value +
      " = " +
      percentage / 100 +
      " × " +
      value +
      " = " +
      percentOfValue;

    let result = percentage + "% of " + value + " = " + percentOfValue;
    // console.log('working func');

    return result;
  }

  // BMI calculator

  $("#calculatebmi").on("click", function () {
    let age = parseFloat($("#age").val());
    let gender = $('input[name="gender"]:checked').val();
    let weight = parseFloat($("#weight").val());
    let height = parseFloat($("#height").val()) / 100; // convert cm to m

    if (age && weight && height) {
      let bmi = weight / (height * height);
      let ponderalIndex = weight / Math.pow(height, 3); // Calculate Ponderal Index

      let weightStatus = "";
      let bmiCategory = "";
      let healthyBMI = "";
      let healthyWeightRange = "";
      let gainToReachBMI = "";
      let bmiPrime = "";

      if (age >= 2 && age <= 20) {
        // BMI categorization for children and teens
        if (bmi < 5) {
          weightStatus = "Underweight";
          bmiCategory = "Underweight";
        } else if (bmi >= 5 && bmi < 85) {
          weightStatus = "Healthy weight";
          bmiCategory = "Healthy weight";
        } else if (bmi >= 85 && bmi < 95) {
          weightStatus = "At risk of overweight";
          bmiCategory = "Overweight";
        } else if (bmi >= 95) {
          weightStatus = "Overweight";
          bmiCategory = "Overweight";
        }

        healthyBMI = "14.7 - 18.2 kg/m2";
        healthyWeightRange = "2.7 kgs - 3.4 kgs";
        gainToReachBMI = "Gain 0.7 kgs to reach a BMI of 14.7 kg/m2.";
        bmiPrime = (bmi / 25).toFixed(2);
      } else {
        // BMI values for adults
        if (bmi < 16) {
          weightStatus = "Severe Thinness";
          bmiCategory = "Underweight";
        } else if (bmi >= 16 && bmi < 17) {
          weightStatus = "Moderate Thinness";
          bmiCategory = "Underweight";
        } else if (bmi >= 17 && bmi < 18.5) {
          weightStatus = "Mild Thinness";
          bmiCategory = "Underweight";
        } else if (bmi >= 18.5 && bmi < 25) {
          weightStatus = "Normal";
          bmiCategory = "Normal weight";
        } else if (bmi >= 25 && bmi < 30) {
          weightStatus = "Overweight";
          bmiCategory = "Overweight";
        } else if (bmi >= 30 && bmi < 35) {
          weightStatus = "Obese Class I";
          bmiCategory = "Obese";
        } else if (bmi >= 35 && bmi < 40) {
          weightStatus = "Obese Class II";
          bmiCategory = "Obese";
        } else if (bmi >= 40) {
          weightStatus = "Obese Class III";
          bmiCategory = "Obese";
        }

        healthyBMI = "18.5 - 24.9 kg/m2";
        healthyWeightRange =
          "Weight within BMI range is generally considered healthy.";
        gainToReachBMI = "";
        bmiPrime = (bmi / 24.9).toFixed(2);
      }

      let resultText = "BMI: " + bmi.toFixed(2) + "<br>";
      resultText +=
        "Ponderal Index: " + ponderalIndex.toFixed(2) + " kg/m3" + "<br>";
      resultText += "Weight Status: " + weightStatus + "<br>";
      resultText += "BMI Category: " + bmiCategory + "<br>";
      resultText += "Healthy BMI range: " + healthyBMI + "<br>";
      resultText +=
        "Healthy weight for the height: " + healthyWeightRange + "<br>";
      resultText += gainToReachBMI + "<br>";
      resultText += "BMI Prime: " + bmiPrime + "<br>";

      $("#result").html(resultText);
    }
  });
  // BMI calculator using US metrix

  $("#calculateBMIresult").click(function () {
    let heightFeet = parseFloat($("#height-feet").val());
    let heightInches = parseFloat($("#height-inches").val());
    let weightPound = parseFloat($("#weight-pound").val());
    let age = parseInt($("#age2").val());
    let gender = $("input[name='gender']:checked").val();

    let heightInchesTotal = heightFeet * 12 + heightInches;
    let heightMeters = heightInchesTotal * 0.0254;
    let weightKg = weightPound * 0.453592;

    let bmi = weightKg / (heightMeters * heightMeters);
    bmi = bmi.toFixed(2);

    let healthyWeightMin = (18.5 * (heightMeters * heightMeters)) / 0.453592;
    healthyWeightMin = healthyWeightMin.toFixed(2);
    let healthyWeightMax = (25 * (heightMeters * heightMeters)) / 0.453592;
    healthyWeightMax = healthyWeightMax.toFixed(2);

    let bmiPrime = bmi / 25;
    bmiPrime = bmiPrime.toFixed(2);

    let ponderalIndex = weightKg / Math.pow(heightMeters, 3);
    ponderalIndex = ponderalIndex.toFixed(2);

    let category = "";
    if (age < 2 || age > 120) {
      category = "Invalid age";
    } else if (gender === undefined) {
      category = "Select gender";
    } else {
      if (age >= 20) {
        if (bmi < 16) {
          category = "Severe Thinness";
        } else if (bmi >= 16 && bmi < 17) {
          category = "Moderate Thinness";
        } else if (bmi >= 17 && bmi < 18.5) {
          category = "Mild Thinness";
        } else if (bmi >= 18.5 && bmi < 25) {
          category = "Normal";
        } else if (bmi >= 25 && bmi < 30) {
          category = "Overweight";
        } else if (bmi >= 30 && bmi < 35) {
          category = "Obese Class I";
        } else if (bmi >= 35 && bmi < 40) {
          category = "Obese Class II";
        } else {
          category = "Obese Class III";
        }
      } else if (age >= 2 && age <= 20) {
        if (gender === "male") {
          if (bmi < 5) {
            category = "Underweight";
          } else if (bmi >= 5 && bmi < 85) {
            category = "Healthy weight";
          } else if (bmi >= 85 && bmi < 95) {
            category = "At risk of overweight";
          } else {
            category = "Overweight";
          }
        } else if (gender === "female") {
          if (bmi < 5) {
            category = "Underweight";
          } else if (bmi >= 5 && bmi < 85) {
            category = "Healthy weight";
          } else if (bmi >= 85 && bmi < 95) {
            category = "At risk of overweight";
          } else {
            category = "Overweight";
          }
        }
      }
    }

    $("#result2").html(
      "BMI: " +
        bmi +
        " kg/m2  <br>Category: " +
        category +
        "" +
        "<br>Healthy BMI Range: 18.5 kg/m2 - 25 kg/m2" +
        "<br>Healthy Weight for Height: " +
        healthyWeightMin +
        " lbs  - " +
        healthyWeightMax +
        "lbs<br>BMI Prime: " +
        bmiPrime +
        "<br>Ponderal Index: " +
        ponderalIndex,
    ) + "kg/m3";
  });

  // start of fraction calculator

  $("#fraction_calculate").click(function () {
    let numerator = $("#numerator").val();
    let denominator = $("#denominator").val();

    let result;

    if (denominator !== "0") {
      result = parseFloat(numerator) / parseFloat(denominator);
    } else {
      result = "Error: Division by zero";
    }

    $("#fraction_result").text("Result: " + result);
  });

  // love calculator

  let loveScore = null;
  let previousLover1 = null;
  let previousLover2 = null;

  $("#love_calculate").click(function () {
    let lover1 = $("#lover1").val();
    let lover2 = $("#lover2").val();

    if (lover1 === "" || lover2 === "") {
      alert("Please enter the names of both lovers.");
    } else {
      if (lover1 !== previousLover1 || lover2 !== previousLover2) {
        loveScore = calculateLoveScore(lover1, lover2);
        previousLover1 = lover1;
        previousLover2 = lover2;
      }

      $("#love_result").text(
        lover1 + " and " + lover2 + "'s love score is " + loveScore + "%.",
      );
    }
  });

  $("#love_reset").click(function () {
    loveScore = null;
    previousLover1 = null;
    previousLover2 = null;
    $("#lover1").val("");
    $("#lover2").val("");
    $("#love_result").empty();
  });

  function calculateLoveScore(lover1, lover2) {
    // Calculation logic goes here
    let loveScore = Math.floor(Math.random() * 101);
    return loveScore;
  }
});

// start of COMPREHENSIVE VERSION

$(document).ready(function () {
  $("input[name=number_type]").change(function () {
    let numberType = $(this).val();
    if (numberType === "integer") {
      $("#precision").prop("disabled", true);
      $("#precision").val("");
      // console.log($('#precision').val(''));
    } else {
      $("#precision").prop("disabled", false);
    }
  });
});
