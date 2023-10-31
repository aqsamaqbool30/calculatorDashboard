$(document).ready(function () {
  $('#zScoreCalculate').click(function () {
    $('#warning3').html('');
    $('#warning3').removeClass('pb-6');
    let input1 = parseFloat($('#input1').val());
    let input2 = parseFloat($('#input2').val());
    let input3 = parseFloat($('#input3').val());
    let input4 = parseFloat($('#input4').val());
    let input5 = parseFloat($('#input5').val());
    let input6 = parseFloat($('#input6').val());
    let firstNonEmptyInputId = null;

    if (!isNaN(input1)) {
      firstNonEmptyInputId = 'input1';
    } else if (!isNaN(input2)) {
      firstNonEmptyInputId = 'input2';
    } else if (!isNaN(input3)) {
      firstNonEmptyInputId = 'input3';
    } else if (!isNaN(input4)) {
      firstNonEmptyInputId = 'input4';
    } else if (!isNaN(input5)) {
      firstNonEmptyInputId = 'input5';
    } else if (!isNaN(input6)) {
      firstNonEmptyInputId = 'input6';
    }

    if (firstNonEmptyInputId === null) {
      $('#warning3').html('Please provide at least one valid value.');
      $('#warning3').addClass('pb-6');
      $('#result2').addClass('hidden');
      return;
    } else if (0 > input4 || input4 > 0.5) {
      $('#warning3').html('Value for P(0 to Z or Z to 0) should be between 0 and 0.5.');
      $('#warning3').addClass('pb-6');
      $('#result2').addClass('hidden');
      return;
    } else if (0 > input2 || input2 > 1 || 0 > input3 || input3 > 1 || 0 > input5 || input5 > 1 || 0 > input6 || input6 > 1) {
      $('#warning3').html('Value for probability should be between 0 and 1.');
      $('#warning3').addClass('pb-6');
      $('#result2').addClass('hidden');
      return;
    }
    let solution1, solution2, solution3, solution4, solution5, solution6;
    if (firstNonEmptyInputId === 'input1') {
      solution1 = input1;
      solution2 = jStat.normal.cdf(input1, 0, 1);
      solution3 = 1 - jStat.normal.cdf(input1, 0, 1);
      solution4 = jStat.normal.cdf(input1, 0, 1) / 2 - jStat.normal.cdf(-input1, 0, 1) / 2;
      solution5 = jStat.normal.cdf(input1, 0, 1) - jStat.normal.cdf(-input1, 0, 1);
      solution6 = 1 - (jStat.normal.cdf(input1, 0, 1) - jStat.normal.cdf(-input1, 0, 1));
    } else if (firstNonEmptyInputId === 'input2') {
      solution2 = input2;
      solution1 = jStat.normal.inv(solution2, 0, 1);
      solution3 = 1 - solution2;
      solution4 = 2 * solution2 - 1;
      solution5 = solution4;
      solution6 = 1 - (jStat.normal.cdf(solution1, 0, 1) - jStat.normal.cdf(-solution1, 0, 1));
    } else if (firstNonEmptyInputId === 'input3') {
      solution3 = input3;
      solution1 = jStat.normal.inv(1 - solution3, 0, 1);
      solution2 = 1 - solution3;
      solution4 = jStat.normal.cdf(solution1, 0, 1) / 2 - jStat.normal.cdf(-solution1, 0, 1) / 2;
      solution5 = 1 - 2 * solution3;
      solution6 = 1 - Math.abs(solution5);
    } else if (firstNonEmptyInputId === 'input4') {
      solution4 = Math.abs(input4);
      if (solution4 === 0.5) {
        solution1 = 999999999999999;
        solution2 = 1;
        solution3 = 0;
        solution5 = 1;
        solution6 = 0;
      } else {
        solution1 = jStat.normal.inv(solution4 + 1 / 2, 0, 1);
        solution2 = (1 + 2 * solution4) / 2;
        solution3 = 1 - solution2;
        solution5 = solution4 + solution4;
        solution6 = 1 - Math.abs(solution5);
      }
    } else if (firstNonEmptyInputId === 'input5') {
      solution5 = input5;
      solution1 = jStat.normal.inv((solution5 + 1) / 2, 0, 1);
      solution2 = (1 + solution5) / 2;
      solution3 = 1 - solution2;
      solution4 = solution5 / 2;
      solution6 = 1 - solution5;
    } else if (firstNonEmptyInputId === 'input6') {
      solution6 = Math.abs(input6);
      solution1 = jStat.normal.inv(solution6 / 2, 0, 1);
      solution2 = 1 - jStat.normal.cdf(solution1, 0, 1);
      solution3 = 1 - solution2;
      solution4 = solution2 - 0.5;
      solution5 = 1 - solution6;
      solution1 = Math.abs(solution1);
    }

    $('#solution6').html('<b>Z-score, Z: </b>' + solution1.toFixed(3).replace(/\.?00+$/, ''));
    $('#solution7').html(
      '<b>Probability, P(x < Z): </b>' +
        Math.abs(solution2)
          .toFixed(5)
          .replace(/\.?00+$/, '')
    );
    $('#solution8').html(
      '<b>Probability, P(x > Z): </b>' +
        Math.abs(solution3)
          .toFixed(5)
          .replace(/\.?00+$/, '')
    );
    $('#solution9').html(
      '<b>Probability, P(0 to Z or Z to 0): </b>' +
        Math.abs(solution4)
          .toFixed(5)
          .replace(/\.?00+$/, '')
    );
    $('#solution10').html(
      '<b>Probability, P(-Z < x < Z): </b>' +
        Math.abs(solution5)
          .toFixed(5)
          .replace(/\.?00+$/, '')
    );
    $('#solution11').html(
      '<b>Probability, P(x < -Z or x > Z): </b>' +
        Math.abs(solution6)
          .toFixed(5)
          .replace(/\.?00+$/, '')
    );
    $('#result2').removeClass('hidden');

    let curveArr = ['', 'firstCurve', 'secondCurve', 'thirdCurve', 'fourthCurve', 'fifthCurve', 'sixthCurve'];
    for (let i = 1; i < 6; i++) {
      let solutionValue = eval(`solution${i + 1}`) * 100;
      if (curveArr[i] === 'fifthCurve') {
        solutionValue = solutionValue / 2;
        document.getElementById(curveArr[i]).style.width = solutionValue + '%';
        document.getElementById('sixthCurve').style.width = solutionValue + '%';
      } else {
        document.getElementById(curveArr[i]).style.width = solutionValue + '%';
      }
    }
  });
});
