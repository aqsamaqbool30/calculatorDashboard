$(document).ready(function () {
  function mathOperations(num1, numb2, operate) {
    let mainSolution;
    if (operate === '+') {
      mainSolution = num1 + numb2;
    } else if (operate === '-') {
      mainSolution = num1 - numb2;
    } else if (operate === '*') {
      mainSolution = num1 * numb2;
    } else if (operate === '/') {
      mainSolution = num1 / numb2;
    }
    return mainSolution;
  }
  function pieGraphs(graphID, remainingAmount) {
    let solutionTotal = 100 - remainingAmount;
    let chart = new CanvasJS.Chart(graphID, {
      animationEnabled: true,
      title: {
        text: ' ',
      },
      data: [
        {
          type: 'pie',
          startAngle: 280,
          yValueFormatString: '0.00"%"',
          indexLabel: '{y}',
          dataPoints: [
            {
              y: remainingAmount,
              color: '#ff823c',
            },
            {
              y: solutionTotal,
              color: '#eeeeee',
            },
          ],
        },
      ],
    });
    chart.render();
  }

  basicFraction('#calcFraction', '#num1', '#num2', '#num3', '#num4', '#selctOperator');
  function basicFraction(btnID, number1, number2, number3, number4, operator) {
    $(btnID).click(function () {
      $('#result').addClass('maxsm:h-[880px]');
      $('#graphs').removeClass('hidden').addClass('flex');
      $('#graphContainer1').removeClass('hidden');
      $('#graphContainer2').removeClass('hidden');
      $('#graphContainer3').removeClass('hidden');
      $('#solution3').html(' ');

      let integer1 = parseInt($(number1).val());
      let integer2 = parseInt($(number2).val());
      let integer3 = parseInt($(number3).val());
      let integer4 = parseInt($(number4).val());
      let operate = $(operator).val();

      let validate = validateInputs([number1, number2, number3, number4], 4, '#limitWarning1', '#result');
      if (!validate) {
        return;
      }
      let solution1 = integer1 / integer2;
      let solution2 = integer3 / integer4;
      let mainSolution = mathOperations(solution1, solution2, operate);

      $('#solution1').html('<b>Result</b> = ' + mainSolution.toFixed(5));
      $('#solution2').html('<b>Steps</b> =&nbsp;&nbsp;' + integer1 + ' / ' + integer2 + operate + integer3 + ' / ' + integer4 + '<br>= ' + solution1 + ' ' + operate + ' ' + solution2 + '<br>= ' + mainSolution.toFixed(5));
      let solution1Percent = solution1 * 100;
      let solution2Percent = solution2 * 100;
      let finalSolution = solution1Percent + solution2Percent;

      pieGraphs('graphContainer1', solution1Percent);
      pieGraphs('graphContainer2', solution2Percent);
      pieGraphs('graphContainer3', finalSolution);
      $('#result').removeClass('hidden');

    });
  }

  $('#calcbigIntergers').click(function () {
    let value1 = parseFloat($('#bignum1').val());
    let value2 = parseFloat($('#bignum2').val());
    let value3 = parseFloat($('#bignum3').val());
    let value4 = parseFloat($('#bignum4').val());
    let operation = $('#selctbigInt').val();

    let validate = validateInputs(['#bignum1', '#bignum2', '#bignum3', '#bignum4'], 4, '#limits', '#result');
    if (!validate) {
      return;
    }
    let solution1 = value1 / value2;
    let solution2 = value3 / value4;
    let solution = mathOperations(solution1, solution2, operation);

    $('#solution1').html('<b>Result</b> = ' + solution);
    $('#solution2').html('<b>Steps</b> =&nbsp;&nbsp;' + value1 + ' / ' + value2 + ' ' + operation + ' ' + value3 + ' / ' + value4 + '<br>= ' + solution1 + ' ' + operation + ' ' + solution2 + '<br>= ' + solution);
    $('#result').removeClass('hidden maxsm:h-[880px]');
    $('#graphs').addClass('hidden').removeClass('flex');
  });

  function calcMixedNumber(number) {
    $('#wrongFormat').addClass('hidden');
    let input = number;
    let regex = /^(-?\d+)\+(\d+)\/(\d+)$/;

    if (!regex.test(input)) {
      $('#wrongFormat').removeClass('hidden');
      $('#solution10').html('');
      $('#solution11').html('');
      $('#solution12').html('');
      $('#result1').addClass('hidden');
      return;
    }
    let [, whole, numerator, denominator] = input.match(regex);
    let sign = whole.startsWith('-') ? -1 : 1;
    let absWhole = parseInt(whole.replace('-', ''));
    let improperFraction = absWhole * parseInt(denominator) + parseInt(numerator);
    let result = (sign * improperFraction) / parseInt(denominator);
    return [result, whole, numerator, denominator];
  }

  $('#calcMixed').click(function () {
    let number1 = $('#mixNumb1').val().trim();
    let number2 = $('#mixNumb2').val().trim();
    let operate = $('#mixNumbSelect').val();

    let solution1 = calcMixedNumber(number1);
    let solution2 = calcMixedNumber(number2);
    let mainsolution = mathOperations(solution1[0], solution2[0], operate);
    let firstNumber = parseFloat(solution1[1]) * parseFloat(solution1[3]) + parseFloat(solution1[2]);
    let secondNumber = parseFloat(solution2[1]) * parseFloat(solution2[3]) + parseFloat(solution2[2]);
    $('#solution10').html('<b>Result: </b>' + mainsolution);
    $('#solution11').html('<br><b>Steps: </b><br> First Number = ' + solution1[1] + '*' + solution1[2] + '/' + solution1[3] + '<br>= ' + '(( ' + solution1[1] + ' x ' + solution1[3] + ' ) + ' + solution1[2] + ') / ' + solution1[3] + '<br>= ' + firstNumber + ' / ' + solution1[3] + '<br>= ' + firstNumber / solution1[3] + '<br>Second Number = ' + solution2[1] + '*' + solution2[2] + '/' + solution2[3] + '<br>= ' + '(( ' + solution2[1] + ' x ' + solution2[3] + ' ) + ' + solution2[2] + ') / ' + solution2[3] + '<br>= ' + secondNumber + ' / ' + solution2[3] + '<br>= ' + secondNumber / solution2[3]);
    $('#solution12').html('<b>Solution</b> = First Number ' + operate + ' Second Number = ' + firstNumber / solution1[3] + ' ' + operate + ' ' + secondNumber / solution2[3] + ' = ' + mainsolution);
    $('#result1').removeClass('hidden');
  });

  $('#mixedNumbers').click(function () {
    $('#solution12').html(' ');
    let whole = parseFloat($('#wholeNumb').val());
    let number1 = parseFloat($('#numerator').val());
    let number2 = parseFloat($('#denomerator').val());

    let validate = validateInputs(['#wholeNumb', '#numerator', '#denomerator'], 3, '#limitWarning', '#result1');
    if (!validate) {
      return;
    }

    let solution = (whole * number2 + number1) / number2;
    $('#solution10').html('<b>Result</b> = ' + solution);
    $('#solution11').html('<b>Steps</b> <br>Formula = a (b/c) <br>= ((a * c) + b) / c <br>Original Number = ' + whole + ' (' + number1 + '/' + number2 + ') <br>Solution = ((' + whole + ' * ' + number2 + ' ) + ' + number1 + ' ) / ' + number2 + '<br>= ' + (whole * number2 + number1) + ' / ' + number2 + ' <br>= ' + solution);
    $('#result1').removeClass('hidden');
  });

  $('#fractiontoDecimals').click(function () {
    let numb1 = parseFloat($('#numeratorFraction').val());
    let numb2 = parseFloat($('#denomeratorFraction').val());
    let validate = validateInputs(['#numeratorFraction', '#denomeratorFraction'], 2, '#limit5', '#result2');
    if (!validate) {
      return;
    }
    solution = numb1 / numb2;
    $('#solution13').html('<b>Solution</b> = ' + solution);
    $('#solution14').html('<b>Steps:</b>  decimal = numerator / denomerator = ' + numb1 + ' / ' + numb2 + ' = ' + solution);
    $('#result2').removeClass('hidden');
  });

  function decimalToFraction(decimalValue) {
    let decimalStr = decimalValue.toString();
    let precision = Math.pow(10, decimalStr.length - decimalStr.indexOf('.') - 1);
    let numerator = Math.round(decimalValue * precision);
    let denominator = precision;

    if (numerator % denominator === 0) {
      $('#solution13').html('<b>Fraction</b> = ' + decimalValue + ' / ' + 1);
      $('#solution14').html('Steps = ' + decimalValue + '<br> = (' + decimalValue + ' * ' + 1 + ' ) / (' + 1 + ' * ' + 1 + ')<br>= ' + decimalValue + '/' + 1);
    } else {
      $('#solution13').html('<b>Fraction</b> = ' + numerator + '/' + denominator);
      $('#solution14').html('Steps = ' + decimalValue + '<br> = (' + decimalValue + ' * ' + denominator + ' ) / (' + 1 + ' * ' + denominator + ')<br>= ' + numerator + '/' + denominator);
    }
  }

  $('#decimalsID').on('click', function () {
    let decimalValue = parseFloat($('#decimal').val());

    let validate = validateInputs(['#decimal'], 1, '#limit6', '#result2');
    if (!validate) {
      return;
    }
    let fraction = decimalToFraction(decimalValue);
    $('#result2').removeClass('hidden');
  });
});
