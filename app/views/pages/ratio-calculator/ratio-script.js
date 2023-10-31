$(document).ready(function () {
  $('#fourthRatio').click(function () {
    let valueA = parseFloat($('#valA').val());
    let valueB = parseFloat($('#valB').val());
    let valueC = parseFloat($('#valC').val());
    let valueD = parseFloat($('#valD').val());

    let valueValidate = validateInputs(['#valA', '#valB', '#valC', '#valD'], 3, '#limitFirst', '#result');
    if (!valueValidate) {
      return;
    }
    if (isNaN(valueD)) {
      valueD = (valueB * valueC) / valueA;
      $('#solution2').html('<b>Calculations </b> = (' + valueB + ' * ' + valueC + ') / ' + valueA + '  =  ' + valueB * valueC + ' / ' + valueA + '  =  ' + valueD);
    } else if (isNaN(valueC)) {
      valueC = (valueA * valueD) / valueB;
      $('#solution2').html('<b>Calculations </b> = (' + valueA + ' * ' + valueD + ') / ' + valueB + '  =  ' + valueA * valueD + ' / ' + valueB + '  =  ' + valueC);
    } else if (isNaN(valueB)) {
      valueB = (valueA * valueD) / valueC;
      $('#solution2').html('<b>Calculations </b> = (' + valueA + ' * ' + valueD + ') / ' + valueC + '  =  ' + valueA * valueD + ' / ' + valueC + '  =  ' + valueB);
    } else if (isNaN(valueA)) {
      valueA = (valueB * valueC) / valueD;
      $('#solution2').html('<b>Calculations </b> = (' + valueB + ' * ' + valueC + ') / ' + valueD + '  =  ' + valueB * valueC + ' / ' + valueD + '  =  ' + valueA);
    }
    let sumAB = valueA + valueB;
    let solutionAB = (valueA / sumAB) * 100;
    let solutionTotal = 100 - solutionAB;

    $('#solution1').html('<b>Ratio:</b> ' + valueA + ' : ' + valueB + ' = ' + valueC + ' : ' + valueD);
    $('#solution3').html('<b>Percentage of Ratio A:B</b> =  ' + valueA + ' : ' + valueB + ' = ' + valueA + ' / ' + '(' + valueA + ' + ' + valueB + ')' + ' = ' + solutionAB + ' %');
    $('#result').removeClass('hidden');
    $('#chartContainer').removeClass('hidden');
    $('#staraightGraph').removeClass('hidden');

    $('#left').text(valueA);
    $('#right').text(valueB);
    document.getElementById('SquareA').style.width = solutionAB + '%';
    document.getElementById('SquareB').style.width = solutionTotal + '%';

    let chart = new CanvasJS.Chart('chartContainer', {
      animationEnabled: true,
      title: {
        text: 'Visual Representations of the Ratio',
      },
      data: [
        {
          type: 'pie',
          startAngle: 280,
          yValueFormatString: '##0.00"%"',
          indexLabel: '{label} {y}',
          dataPoints: [
            {
              y: solutionTotal,
              label: 'Percentage of B: ',
              color: '#ff823c',
            },
            {
              y: solutionAB,
              label: 'Percentage of A: ',
              color: '#ffc19e',
            },
          ],
        },
      ],
    });
    chart.render();
  });

  $('#scaleRatio').click(function () {
    $('#solution2').html('');
    $('#solution3').html('');
    let valueA = $('#scaleRatioA').val();
    let valueB = $('#scaleRatioB').val();
    let scaleSelect = $('#scaleRatioSelect').val();
    let times = $('#scaleRatioTimes').val();

    let validate = validateInputs(['#scaleRatioA', '#scaleRatioB', '#scaleRatioSelect', '#scaleRatioTimes'], 3, '#limit1', '#result');
    if (!validate) {
      return;
    }
    let solution1;
    let solution2;
    if (scaleSelect === "Shrink") {
      solution1 = valueA / times;
      solution2 = valueB / times;
      $('#solution1').html(solution1 + ' : ' + solution2);
    } else {
      solution1 = times * valueA;
      solution2 = times * valueB;
      $('#solution1').html(solution1 + ' : ' + solution2);
    }
    $('#solution1').html(valueA + ' : ' + valueB + ' ' + '<b>' + scaleSelect + '</b> ' + times + ' times = ' + solution1 + ' : ' + solution2);
    $('#result').removeClass('hidden');
    $('#chartContainer').addClass('hidden');
    $('#staraightGraph').addClass('hidden');
  });
});
