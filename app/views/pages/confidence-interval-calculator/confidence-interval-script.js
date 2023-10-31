// $(document).ready(function () {
//   const confidenceLevelZTable = {
//     50: 0.674,
//     70: 1.036,
//     75: 1.15,
//     80: 1.282,
//     85: 1.44,
//     90: 1.645,
//     95: 1.96,
//     98: 2.326,
//     99: 2.576,
//     99.9: 3.291,
//     99.99: 3.891,
//     99.999: 4.417,
//   };

//   $('#clacSampleSize').click(function () {
//     let sample = parseFloat($('#sampleSize').val());
//     let mean = parseFloat($('#meanValue').val());
//     let std = parseFloat($('#std').val());
//     let confidence = parseFloat($('#confidenceLevel').val());

//     let validateInput = validateInputs(['#sampleSize', '#meanValue', '#std', '#confidenceLevel'], 4, '#warning1', '#result');
//     if (!validateInput) {
//       return;
//     }
//     let valueofZ = confidenceLevelZTable[confidence];
//     let PreconfidenceInterval = valueofZ * (std / Math.sqrt(sample));
//     let confidenceInterval_positive = (mean + PreconfidenceInterval).toFixed(4);
//     let confidenceInterval_negative = (mean - PreconfidenceInterval).toFixed(4);
//     let errorMargin = ((PreconfidenceInterval / mean) * 100).toFixed(2);
//     $('#solution1').html('<b>Confidence Interval: </b>' + mean + ' ± ' + PreconfidenceInterval.toFixed(4) + ' &nbsp;&nbsp; <b>OR</b> &nbsp;&nbsp; (' + errorMargin + '%)<br>= [(' + mean + ' - ' + PreconfidenceInterval.toFixed(4) + ') – (' + mean + ' + ' + PreconfidenceInterval.toFixed(4) + ')] <br>= [' + confidenceInterval_negative + ' – ' + confidenceInterval_positive + ']');
//     $('#result').removeClass('hidden');

//     let remainingPercent = 100 - errorMargin;
//     if (errorMargin > 100) {
//       document.getElementById('graphLine').style.width = 100 + '%';
//       document.getElementById('solution2').style.width = 7 + '%';
//     } else {
//       document.getElementById('graphLine').style.width = errorMargin + '%';
//       document.getElementById('solution2').style.width = remainingPercent + '%';
//     }
//   });
// });



$(document).ready(function () {
  const confidenceLevelZTable = {
    50: 0.674,
    70: 1.036,
    75: 1.15,
    80: 1.282,
    85: 1.44,
    90: 1.645,
    95: 1.96,
    98: 2.326,
    99: 2.576,
    99.9: 3.291,
    99.99: 3.891,
    99.999: 4.417,
  };

  $('#clacSampleSize').click(function () {
    let sample = parseFloat($('#sampleSize').val());
    let mean = parseFloat($('#meanValue').val());
    let std = parseFloat($('#std').val());
    let confidence = parseFloat($('#confidenceLevel').val());
    let validateInput = validateInputs(['#sampleSize', '#meanValue', '#std', '#confidenceLevel'], 4, '#warning1', '#result');
    if (!validateInput) {
      return;
    }
    let valueofZ = confidenceLevelZTable[confidence];
    let PreconfidenceInterval = valueofZ * (std / Math.sqrt(sample));
    let confidenceInterval_positive = (mean + PreconfidenceInterval).toFixed(4);
    let confidenceInterval_negative = (mean - PreconfidenceInterval).toFixed(4);
    let errorMargin = ((PreconfidenceInterval / mean) * 100).toFixed(2);
    $('#solution1').html('<b>Confidence Interval: </b>' + mean + ' ± ' + PreconfidenceInterval.toFixed(4) + ' &nbsp;&nbsp; <b>OR</b> &nbsp;&nbsp; (' + errorMargin + '%)<br>= [(' + mean + ' - ' + PreconfidenceInterval.toFixed(4) + ') – (' + mean + ' + ' + PreconfidenceInterval.toFixed(4) + ')] <br>= [' + confidenceInterval_negative + ' – ' + confidenceInterval_positive + ']');
    $('#result').removeClass('hidden');

    let remainingPercent = 100 - errorMargin;
    if (errorMargin > 100) {
      document.getElementById('graphLine').style.width = 100 + '%';
      document.getElementById('solution2').style.width = 7 + '%';
    } else {
      document.getElementById('graphLine').style.width = errorMargin + '%';
      document.getElementById('solution2').style.width = remainingPercent + '%';
    }
  });
});