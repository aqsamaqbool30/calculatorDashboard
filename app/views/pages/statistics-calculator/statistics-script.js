$(document).ready(function () {
  $('#calculateStats').click(function () {
    $('#limit1').html('').removeClass('pb-6');
    let inputText = $('#statInput').val().trim();
    let validPattern = /^[\d,\s]+$/;

    if (!validPattern.test(inputText) || inputText.endsWith(',') || inputText === '' || inputText.split(',').length === 1) {
      if (!validPattern.test(inputText)) {
        message = 'Please enter atleast two values to perform calculations.';
      } else if (inputText.endsWith(',')) {
        message = 'Input should not end with a comma.';
      } else if (inputText === '' || inputText.split(',').length === 1) {
        message = 'Please enter more than one valid value.';
      }
      $('#limit1').html(message).addClass('pb-6');
      $('#result').addClass('hidden');
      return;
    }

    let values = inputText.split(',').map((value) => parseFloat(value));
    values.sort((a, b) => a - b);

    let count = values.length;
    let sum = values.reduce((acc, value) => acc + value, 0);
    let mean = sum / count;

    let median = count % 2 === 0 ? (values[count / 2 - 1] + values[count / 2]) / 2 : values[Math.floor(count / 2)];

    let mode = [...new Set(values)].reduce(
      (maxFreqValue, value) => {
        let freq = values.filter((v) => v === value).length;
        return freq > maxFreqValue.freq ? { value, freq } : maxFreqValue;
      },
      { value: null, freq: 0 }
    ).value;

    let largest = values[count - 1];
    let smallest = values[0];
    let range = largest - smallest;

    let geometricMean = Math.pow(
      values.reduce((acc, value) => acc * value, 1),
      1 / count
    );

    let squaredDiffs = values.map((value) => Math.pow(value - mean, 2));
    let variance = squaredDiffs.reduce((acc, value) => acc + value, 0) / count;
    let stdDeviation = Math.sqrt(variance);

    let sampleVariance = squaredDiffs.reduce((acc, value) => acc + value, 0) / (count - 1);
    let sampleStdDeviation = Math.sqrt(sampleVariance);

    let resultObj = {
      Count: count,
      Sum: sum,
      Mean: mean,
      Median: median,
      Mode: mode,
      Largest: largest,
      Smallest: smallest,
      Range: range,
      GeometricMean: geometricMean,
      Standard_Deviation: stdDeviation,
      Variance: variance,
      Sample_Standard_Deviation: sampleStdDeviation,
      Sample_Variance: sampleVariance,
      Sorted_Data: values,
    };
    for (const key in resultObj) {
      if (resultObj.hasOwnProperty(key)) {
        const value = resultObj[key];
        $(`#solution${key}`).html(`<b>${key.replace(/_/g, ' ')}: </b>` + value);
      }
    }
    $('#result').removeClass('hidden');
  });
});
