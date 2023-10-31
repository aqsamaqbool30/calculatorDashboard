$(document).ready(function () {
  $('#calclog').click(function () {
    $('#warningID').addClass('hidden');
    let valueofX = parseFloat($('#valueX').val());
    let valueofY = parseFloat($('#valueY').val());
    let baseValue = $('#base').val();

    if ((isNaN(valueofX) && baseValue === '') || (isNaN(valueofY) && isNaN(valueofX)) || (isNaN(valueofY) && baseValue === '')) {
      $('#warningID').removeClass('hidden');
      $('#result').addClass('hidden');
      return;
    }
    let base, solution;
    if (baseValue === 'e' || baseValue === 'E') {
      base = parseFloat(Math.E);
    } else {
      base = parseFloat(baseValue);
    }
    // let valueValidate = checkInputs(["#valueX", "#valueY", "#base", "e"]);
    // if (valueValidate !== 2) {
    //   $("#warningID").html(`Please provide two values. you have provided ${valueValidate}.`).addClass("pb-6");
    //   $("#result").addClass("hidden");
    //   return;
    // }
    if (isNaN(valueofY)) {
      solution = Math.log(valueofX) / Math.log(base);
      $('#solution1').html('<b>Value of Y = </b>' + solution);
      $('#solution2').html('<b>Calculations</b> <br> Value of y = ' + 'log<sub>' + base + '</sub> (' + valueofX + ') = ' + solution);
      $('#solution3').html(base + '<sup>' + solution + '</sup> = ' + valueofX);
    } else if (isNaN(valueofX)) {
      solution = Math.pow(base, valueofY);
      $('#solution1').html('<b>Value of X = </b>' + solution);
      $('#solution2').html('<b>Calculations</b> <br> Value of x = ' + 'log<sub>' + base + '</sub> (' + solution + ') = ' + valueofY);
      $('#solution3').html(base + '<sup>' + valueofY + '</sup> = ' + solution);
    } else if (isNaN(base)) {
      solution = Math.exp(Math.log(valueofX) / valueofY);
      $('#solution1').html('<b>Value of base = </b>' + solution);
      $('#solution2').html('<b>Calculations</b> <br> Value of base = ' + 'log<sub>' + solution + '</sub> (' + valueofX + ') = ' + valueofY);
      $('#solution3').html(solution + '<sup>' + valueofY + '</sup> = ' + valueofX);
    }
    $('#result').removeClass('hidden');
  });
});
