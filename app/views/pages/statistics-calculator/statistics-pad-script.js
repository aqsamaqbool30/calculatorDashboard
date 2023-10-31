$(document).ready(function () {
  $('#clearInput').click(function () {
    $('#expressionsInputs').val('');
    $('#otherSolution').html('').removeClass('pr-5');
  });
  $('#clearAllData').click(function () {
    $('#expressionsInputs').empty();
    $('#solutionInput').empty();
    $('#valueDivs').empty();
    $('#counting').html('Count = 0');
    $('#otherSolution').html('').removeClass('pr-5');
  });
  let operatorAdded = false;
  let periodAdded = false;
  let btn_val;
  $('.btn_design').click(function () {
    btn_val = $(this).val();
    console.log('Button Value:', btn_val);
    if (btn_val === '^') {
      console.log('operatorAdded:', operatorAdded);
      if (!operatorAdded) {
        console.log('Adding ^ operator.');
        $('#expressionsInputs').val($('#expressionsInputs').val() + btn_val);
        console.log('added');
        operatorAdded = true;
        periodAdded = false;
      }
      console.log('added2');
    } else if (btn_val === '.') {
      if (!periodAdded) {
        $('#expressionsInputs').val($('#expressionsInputs').val() + btn_val);
        periodAdded = true;
      }
    } else {
      $('#expressionsInputs').val($('#expressionsInputs').val() + btn_val);
      operatorAdded = false;
    }
  });

  let plusMinusState = false;
  $('#btnPlusMinus').click(function () {
    let inputValue = $('#expressionsInputs').val();
    if (plusMinusState) {
      inputValue = inputValue.substring(1);
    } else {
      inputValue = '-' + inputValue;
    }
    $('#expressionsInputs').val(inputValue);
    plusMinusState = !plusMinusState;
  });

  let count = 0,
    sum = 0;
  $('#addData').click(function () {
    let inputValue = $('#expressionsInputs').val();
    console.log('Input value:', inputValue);
    inputValue = inputValue.replace(/\^/g, '**');
    let finalAsnwer = eval(inputValue);
    if (isNaN(finalAsnwer)) {
      $('#valueDivs').append(`<div class=divClass><span class=closeBtn onclick=removeFromList(this)>x</span>0</div>`);
      count++;
    } else {
      $('#valueDivs').append(`<div class=divClass><span class=closeBtn onclick=removeFromList(this)>x</span>${finalAsnwer}</div>`);
      count++;
    }
    if (!isNaN(finalAsnwer)) {
      sum += finalAsnwer;
    }
    if (count >= 2) {
      $('#countWarning').html('').removeClass('pb-2');
    }
    $('#counting').html('Count = ' + count);
    $('#expressionsInputs').val('');
  });

  function caluclateAllValues() {
    let squaredDifferencesSum = 0,
      product = 1,
      sumOfSquare = 0;
    let mean = sum / count;

    $('.divClass').each(function () {
      let textNew = $(this).text().trim();
      let valueNew = parseFloat(textNew.replace(/[^\d.-]/g, ''));
      if (!isNaN(valueNew)) {
        let squaredDifference = Math.pow(valueNew - mean, 2);
        squaredDifferencesSum += squaredDifference;
        product *= valueNew;
        sumOfSquare += Math.pow(valueNew, 2);
      }
    });
    let meanSquare = sumOfSquare / count;
    let divisor = count - 1;
    let populastionVariance = squaredDifferencesSum / divisor;
    let populastionstdDeviation = Math.sqrt(populastionVariance);
    let sampleVariance = squaredDifferencesSum / count;
    let SamplestdDeviation = Math.sqrt(sampleVariance);
    let geometricMean = Math.pow(product, 1 / count);

    return [count, sum, sumOfSquare, mean, meanSquare, populastionVariance, populastionstdDeviation, sampleVariance, SamplestdDeviation, geometricMean];
  }

  function displayResult(value, title) {
    $('#otherSolution')
      .html(title + ',')
      .addClass('pr-5');
    $('#expressionsInputs').val(value);
  }

  $('.calculationBtn').click(function () {
    let btnId = $(this).attr('id');
    let calculatedValues = caluclateAllValues();

    if (count >= 2) {
      switch (btnId) {
        case 'sumOfVlaues':
          displayResult(calculatedValues[1], 'Sum');
          break;
        case 'squareOfSumOfVlaues':
          displayResult(calculatedValues[2], 'Sum of the Square of the Values');
          break;
        case 'averageMeanValue':
          displayResult(calculatedValues[3], 'Mean (Average)');
          break;
        case 'averageMeanValueSquare':
          displayResult(calculatedValues[4], 'Mean of the Square of the Values');
          break;
        case 'PopulationStandardVariance':
          displayResult(calculatedValues[7], 'Population Standard Variance');
          break;
        case 'populationStandardDeviation':
          displayResult(calculatedValues[8], 'Population Standard Deviation');
          break;
        case 'sampleStandardVariance':
          displayResult(calculatedValues[5], 'Sample Standard Variance');
          break;
        case 'sampleStandardDeviation':
          displayResult(calculatedValues[6], 'Sample Standard Deviation');
          break;
        case 'geometricMean':
          displayResult(calculatedValues[9], 'Geometric Mean');
          break;
        default:
          break;
      }
    } else {
      $('#countWarning').html('Please enter atleast two values to perform calculations.').addClass('pb-2');
      return;
    }
  });
});

function removeFromList(button) {
  let divToRemove = button.parentNode;
  divToRemove.remove();
  console.log('removing');
}
