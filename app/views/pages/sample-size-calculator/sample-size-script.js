$(document).ready(function () {
  $('#clacSampleSize').click(function () {
    let confidence = parseFloat($('#confidence-level').val());
    let errorMargin = parseFloat($('#errorMargin').val()) / 100;
    let proportion = parseFloat($('#populationProportion').val()) / 100;
    let size = parseFloat($('#populationSize').val());
    let validate = validateInputs(['#confidence-level', '#errorMargin', '#populationProportion', '#populationSize'], 4, '#warn1', '#result');
    if (!validate) {
      return;
    }
    let valueofZ = confidenceLevelZTable[confidence];
    let numerator = (Math.pow(valueofZ, 2) * proportion * (1 - proportion)) / Math.pow(errorMargin, 2);
    let denomerator = 1 + (Math.pow(valueofZ, 2) * proportion * (1 - proportion)) / (Math.pow(errorMargin, 2) * size);
    let sampleSize = Math.round(numerator / denomerator);
    $('#solution1').html('<b>Sample Size ≈ </b>' + sampleSize);
    $('#solution2').html(`This means <b>${sampleSize}</b> or more measurements/surveys are needed to have a confidence level of <b>${proportion * 100}%</b> that the real value is within <b>±${errorMargin * 100}%</b> of the measured/surveyed value.`);
    $('#result').removeClass('hidden');
  });

  $('#clacErrorMargin').click(function () {
    let errorConfidence = parseFloat($('#selectMarginLevel').val());
    let sampleSize = parseFloat($('#sampleSize').val());
    let proportion = parseFloat($('#errorPopulationProportion').val()) / 100;
    let errorSize = parseFloat($('#errorPopulationSize').val());
    let validate = validateInputs(['#sampleSize', '#selectMarginLevel', '#errorPopulationProportion', '#errorPopulationSize'], 4, '#warn2', '#result');
    if (!validate) {
      return;
    }
    let zValue = confidenceLevelZTable[errorConfidence];
    let marginOfError = (zValue * Math.sqrt((proportion * (1 - proportion) * (errorSize - sampleSize)) / ((errorSize - 1) * sampleSize)) * 100).toFixed(2);
    $('#solution1').html('<b>Sample Size ≈ </b>' + marginOfError + '%');
    $('#solution2').html(`This means, in this case, there is a <b>${errorConfidence}%</b> chance that the real value is within <b>± ${marginOfError}%</b> of the measured/surveyed value.`);
    $('#result').removeClass('hidden');
  });
});
