$(document).ready(function () {
  $('#btnCalcualte').click(function () {
    $('#warnspan').html('').removeClass('pb-6');
    let inputText = $('#inputTextarea').val().trim();
    let valuesArray = inputText.split(',').map((item) => parseFloat(item.trim()));
    let validPattern = /^[\d,\s]+$/;

    let message;
    if (!validPattern.test(inputText) || inputText.endsWith(',') || inputText === '' || inputText.split(',').length === 1) {
      if (!validPattern.test(inputText)) {
        message = 'Please enter some values to perform calculations.';
      } else if (inputText.endsWith(',')) {
        message = 'Input should not end with a comma.';
      } else if (inputText === '' || inputText.split(',').length === 1) {
        message = 'Please enter more than one valid value.';
      }
      $('#warnspan').html(message).addClass('pb-6');
      $('#resultDiv').addClass('hidden');
      return;
    }
    let mean = calculateMean(valuesArray);
    let median = calculateMedian(valuesArray);
    let mode = calculateMode(valuesArray);
    let range = calculateRange(valuesArray);
    let geometricMean = calculateGeometricMean(valuesArray);
    let largest = calculateLargest(valuesArray);
    let smallest = calculateSmallest(valuesArray);
    let sum = calculateSum(valuesArray);
    let count = calculateCount(valuesArray);
    let sortedDataSet = sortDataSet(valuesArray);

    $('#meanResult').text('Mean: ' + mean.toFixed(2));
    $('#medianResult').text('Median: ' + median.toFixed(2));
    $('#modeResult').text('Mode: ' + mode.join(', '));
    $('#rangeResult').text('Range: ' + range);
    $('#geometricMeanResult').text('Geometric Mean: ' + geometricMean.toFixed(2));
    $('#largestResult').text('Largest: ' + largest);
    $('#smallestResult').text('Smallest: ' + smallest);
    $('#sumResult').text('Sum: ' + sum);
    $('#countResult').text('Count: ' + count);
    $('#sortedDataSetResult').text('Sorted Data Set: ' + sortedDataSet.join(', '));
    $('#resultDiv').removeClass('hidden');
  });
});

function calculateMean(values) {
  let sum = values.reduce(function (acc, val) {
    return acc + val;
  }, 0);
  return sum / values.length;
}

function calculateMedian(values) {
  let sortedValues = values.sort(function (a, b) {
    return a - b;
  });
  let mid = Math.floor(sortedValues.length / 2);
  return sortedValues.length % 2 !== 0 ? sortedValues[mid] : (sortedValues[mid - 1] + sortedValues[mid]) / 2;
}

function calculateMode(values) {
  let counts = {};
  values.forEach(function (value) {
    if (counts[value] === undefined) {
      counts[value] = 0;
    }
    counts[value]++;
  });
  let mode = [];
  let maxCount = 0;

  for (let value in counts) {
    if (counts[value] > maxCount) {
      mode = [parseFloat(value)];
      maxCount = counts[value];
    } else if (counts[value] === maxCount) {
      mode.push(parseFloat(value));
    }
  }
  return mode;
}

function calculateRange(values) {
  let min = Math.min.apply(null, values);
  let max = Math.max.apply(null, values);
  return max - min;
}

function calculateGeometricMean(values) {
  let product = values.reduce(function (acc, val) {
    return acc * val;
  }, 1);
  return Math.pow(product, 1 / values.length);
}

function calculateLargest(values) {
  return Math.max.apply(null, values);
}

function calculateSmallest(values) {
  return Math.min.apply(null, values);
}

function calculateSum(values) {
  return values.reduce(function (acc, val) {
    return acc + val;
  }, 0);
}

function calculateCount(values) {
  return values.length;
}

function sortDataSet(values) {
  return values.sort(function (a, b) {
    return a - b;
  });
}
