$(document).ready(function () {
  function findFactors(num) {
    let factors = [];
    for (let i = 1; i <= num; i++) {
      if (num % i === 0) {
        factors.push(i);
      }
    }
    return factors;
  }
  function findCommonFactors(arr) {
    function findIntersection(arr1, arr2) {
      return arr1.filter((item) => arr2.includes(item));
    }
    function findArrayCommonFactors(arr) {
      if (arr.length === 0) {
        return [];
      }
      let commonFactors = findFactors(arr[0]);
      for (let i = 1; i < arr.length; i++) {
        commonFactors = findIntersection(commonFactors, findFactors(arr[i]));
      }
      return commonFactors;
    }
    return findArrayCommonFactors(arr);
  }
  function findGCF(arr) {
    function calculateGCF(a, b) {
      if (b === 0) return a;
      return calculateGCF(b, a % b);
    }
    function findArrayGCF(arr) {
      let gcf = arr[0];
      for (let i = 1; i < arr.length; i++) {
        gcf = calculateGCF(gcf, arr[i]);
      }
      return gcf;
    }
    return findArrayGCF(arr);
  }

  $('#commonFactorCalcualte').click(function () {
    $('#warnspan').html('').removeClass('pb-6');
    let inputText = $('#inputTextarea').val().trim();
    let allValuesArray = inputText.split(',').map(function (item) {
      return parseFloat(item.trim());
    });
    let validPattern = /^[\d,\s]+$/;

    if (!validPattern.test(inputText) || inputText.endsWith(',') || inputText === '' || inputText.split(',').length === 1) {
      if (!validPattern.test(inputText)) {
        message = 'Please enter atleast two values to perform calculations.';
      } else if (inputText.endsWith(',')) {
        message = 'Input should not end with a comma.';
      } else if (inputText === '' || inputText.split(',').length === 1) {
        message = 'Please enter more than one valid value.';
      }
      $('#warnspan').html(message).addClass('pb-6');
      $('#result').addClass('hidden');
      return;
    }
    let solution1 = findCommonFactors(allValuesArray);
    let solution2 = findGCF(allValuesArray);
    let factorsOutputHtml = '';
    for (let i = 0; i < allValuesArray.length; i++) {
      let factors = findFactors(allValuesArray[i]);
      let factorsString = factors.join(', ');
      factorsOutputHtml += `<p><b>${allValuesArray[i]}: </b> ${factorsString}</p>`;
    }

    $('#solution1').html('<b>Common factors:</b> ' + solution1);
    $('#solution2').html('<b>GCF:</b> ' + solution2);
    $('#solution3').html('<b>Steps: </b>' + factorsOutputHtml);
    $('#result').removeClass('hidden');
  });
});
