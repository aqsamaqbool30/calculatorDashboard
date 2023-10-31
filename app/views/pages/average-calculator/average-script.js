$(document).ready(function () {
  $('#avergeBtn').click(function (e) {
    var inputValues = $('#averageInput').val();
    var valuesArray = inputValues.split(',').map(function (item) {
      return parseFloat(item.trim());
    });
    analyzeNumbers(valuesArray);
  });

  function analyzeNumbers(numbers) {
    // Calculate sum
    const sum = numbers.reduce((acc, num) => acc + num, 0);
    // Calculate count
    const count = numbers.length;
    // Calculate median
    const sortedNumbers = numbers.slice().sort((a, b) => a - b);
    const middleIndex = Math.floor(sortedNumbers.length / 2);
    const median = sortedNumbers.length % 2 === 0 ? (sortedNumbers[middleIndex - 1] + sortedNumbers[middleIndex]) / 2 : sortedNumbers[middleIndex];
    // Calculate geometric mean
    const product = numbers.reduce((acc, num) => acc * num, 1);
    const geometricMean = Math.pow(product, 1 / count);
    // Find largest and smallest numbers
    const largest = Math.max(...numbers);
    const smallest = Math.min(...numbers);
    // Calculate range
    const range = largest - smallest;
    // Calculate average
    const average = sum / count;

    $('#solution3').html('Average= sum/count <br>= ' + sum + '/' + count + '<br>= ' + average);
    $('#solution1').html('Sum: ' + sum);
    $('#solution2').html('Count: ' + count);
    $('#solution4').html('Median: ' + median);
    $('#solution5').html('GeometricMean: ' + geometricMean);
    $('#solution6').html('Largest Number: ' + largest);
    $('#solution7').html('Smallest Number: ' + smallest);
    $('#solution8').html('Range: ' + range);

    $('#result').removeClass('hidden');
  }
});
