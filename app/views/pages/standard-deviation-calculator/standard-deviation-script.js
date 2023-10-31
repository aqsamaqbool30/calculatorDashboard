$(document).ready(function () {
  $('#stdCalcualte').click(function () {
    $('#warnspan').html('').removeClass('pb-6');
    let radios = $('input[name=std_calcualtion]:checked').val();
    let radioInputs = $('#inputTextarea').val().trim();
    let allValuesArray = radioInputs.split(',').map(function (item) {
      return parseFloat(item.trim());
    });
    let validPattern = /^[\d,\s]+$/;

    if (!validPattern.test(radioInputs) || radioInputs.endsWith(',') || radioInputs === '' || radioInputs.split(',').length === 1) {
      if (!validPattern.test(radioInputs)) {
        message = 'Please enter atleast two values to perform calculations.';
      } else if (radioInputs.endsWith(',')) {
        message = 'Input should not end with a comma.';
      } else if (radioInputs === '' || radioInputs.split(',').length === 1) {
        message = 'Please enter more than one valid value.';
      }
      $('#warnspan').html(message).addClass('pb-6');
      $('#result').addClass('hidden');
      return;
    }

    let count = allValuesArray.length;
    let sum = allValuesArray.reduce(function (acc, current) {
      return acc + current;
    }, 0);
    let mean = sum / count;
    let squaredDifferencesSum = allValuesArray.reduce(function (acc, current) {
      let diff = current - mean;
      return acc + diff * diff;
    }, 0);

    let stdPopulation, variance, stdSample, sampleVariance, marginError;
    if (radios === 'population') {
      variance = squaredDifferencesSum / count;
      stdPopulation = Math.sqrt(variance);
      marginError = stdPopulation / Math.sqrt(count);
      $('#solution1').html('<b>Standard Deviation (σ): </b> ' + stdPopulation.toFixed(9).replace(/\.?00+$/, ''));
      $('#solution5').html('<b>Variance (σ<sup>2</sup>): </b>' + variance.toFixed(9).replace(/\.?00+$/, ''));
      $('#solution7').html('<b>Margin Error (σx̄) = </b> σ/√N =' + marginError.toFixed(9).replace(/\.?00+$/, ''));
      console.log(marginError);
    } else if (radios === 'sample') {
      sampleVariance = squaredDifferencesSum / (count - 1);
      stdSample = Math.sqrt(sampleVariance);
      marginError = stdSample / Math.sqrt(count);
      $('#solution1').html('<b>Standard Deviation (σ): </b> ' + stdSample.toFixed(9).replace(/\.?00+$/, ''));
      $('#solution5').html('<b>Variance (σ<sup>2</sup>): </b>' + sampleVariance.toFixed(9).replace(/\.?00+$/, ''));
      $('#solution7').html('<b>Margin Error (sx̄) = </b> s/√N =' + marginError.toFixed(9).replace(/\.?00+$/, ''));
      console.log(marginError);
    }

    let frequency = {};
    allValuesArray.forEach(function (number) {
      frequency[number] = frequency[number] ? frequency[number] + 1 : 1;
    });
    let frequencyResultHTML = '<br><b>Frequency Table </b><br>Value : Frequency (percentage)<br>';
    for (const number in frequency) {
      frequencyResultHTML += `${number} <b>:</b> ${frequency[number]} (${(frequency[number] * 100) / count}%) <br>`;
    }

    $('#solution2').html('<b>Count (N): </b>' + count);
    $('#solution3').html('<b>Sum Σx: </b>' + sum);
    $('#solution4').html('<b>Mean (μ): </b>' + mean);
    $('#solution6').html(frequencyResultHTML);
    $('#result').removeClass('hidden');
  });
});
