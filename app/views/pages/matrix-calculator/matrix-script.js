$(document).ready(function () {
  function validateFunction() {
    $('#limit1').html('').removeClass('pb-6');
    let numRows = parseInt($('#rowsInput').val());
    let numColumns = parseInt($('#columnsInput').val());
    let numRowsB = parseInt($('#rowsInputB').val());
    let numColumnsB = parseInt($('#columnsInputB').val());
    if (isNaN(numRows) || isNaN(numColumns) || isNaN(numRowsB) || isNaN(numColumnsB) || numRows < 1 || numRows > 9 || numColumns < 1 || numColumns > 9 || numRowsB < 1 || numRowsB > 9 || numColumnsB < 1 || numColumnsB > 9) {
      $('#limit1').html('Please enter valid integer values for rows and columns (min value is 1 and max value is 9).').addClass('pb-6');
      return false;
    }
    return true;
  }

  function matrixCalculations(btnID, matrixConainterDiv) {
    let inputElements = $(matrixConainterDiv);
    inputElements.each(function () {
      if (btnID === 'clearAllInputs' || btnID === 'clearAllInputsB') {
        $(this).val('');
      } else if (btnID === 'calculateAllOnes' || btnID === 'calculateAllOnesB') {
        $(this).val(1);
      } else if (btnID === 'calculateAllZeroes' || btnID === 'calculateAllZeroesB') {
        $(this).val(0);
      } else if (btnID === 'calculateAllRandoms' || btnID === 'calculateAllRandomsB') {
        let randomNumb = Math.floor(Math.random() * 10);
        $(this).val(randomNumb);
      }
    });
  }

  let arrA = ['clearAllInputs', 'calculateAllOnes', 'calculateAllZeroes', 'calculateAllRandoms'];
  for (let i = 0; i < arrA.length; i++) {
    $('#' + arrA[i]).click(function () {
      matrixCalculations(`${arrA[i]}`, '#matrixContainer input[type="number"]');
    });
  }

  let arrB = ['clearAllInputsB', 'calculateAllOnesB', 'calculateAllZeroesB', 'calculateAllRandomsB'];
  for (let i = 0; i < arrB.length; i++) {
    $('#' + arrB[i]).click(function () {
      matrixCalculations(`${arrB[i]}`, '#matrixContainerB input[type="number"]');
    });
  }

  function matrixPower(btnID, matrixContainerDiv, valueInput, rowsInput, columnsInput) {
    $(btnID).click(function () {
      $('#limit2').html('').removeClass('pb-6');
      $('#copingDiv').addClass('hidden');
      let inputElements = $(matrixContainerDiv + ' input[type="number"]');
      let powerValue = parseFloat($(valueInput).val());
      let numRows = parseInt($(rowsInput).val());
      let numColumns = parseInt($(columnsInput).val());
      let inputValuesAfter = [];

      let validationPassed = validateFunction();
      if (!validationPassed) {
        return;
      }
      inputElements.each(function () {
        let inputValuesBefore = parseFloat($(this).val());
        let inputNewValue;
        if (btnID === '#btnPower' || btnID === '#btnPowerB') {
          inputNewValue = Math.pow(inputValuesBefore, powerValue);
          $('#powerAndMultiply').html(`<b>${btnID === '#btnPower' ? 'A' : 'B'}<sup>${powerValue}</sup> = </b>`);
        } else if (btnID === '#btnMultiply' || btnID === '#btnMultiplyB') {
          inputNewValue = inputValuesBefore * powerValue;
          $('#powerAndMultiply').html(`<b>${btnID === '#btnMultiply' ? 'A' : 'B'} x ${powerValue} = </b>`);
        }
        if (isNaN(inputNewValue)) {
          $('#limit2').html('Matrix contains some invalid values. Please provide valid values.').addClass('pb-6');
          return;
        }
        inputValuesAfter.push(inputNewValue);
      });
      if ($('#limit2').html() !== '') {
        $('#matrixWithPower').html('');
        $('#powerAndMultiply').html('');
        return;
      }
      let matrixPowerHTML = '<table class="matrix-table">';
      let currentIndex = 0;
      for (let i = 0; i < numRows; i++) {
        matrixPowerHTML += '<tr>';
        for (let j = 0; j < numColumns; j++) {
          matrixPowerHTML += '<td>' + inputValuesAfter[currentIndex++] + '</td>';
        }
        matrixPowerHTML += '</tr>';
      }
      matrixPowerHTML += '</table>';
      $('#matrixWithPower').html(matrixPowerHTML);
      $('#result').removeClass('hidden');
    });
  }
  matrixPower('#btnPower', '#matrixContainer', '#powerOfNumber', '#rowsInput', '#columnsInput');
  matrixPower('#btnMultiply', '#matrixContainer', '#multiplyByNumber', '#rowsInput', '#columnsInput');
  matrixPower('#btnPowerB', '#matrixContainerB', '#powerOfNumberB', '#rowsInputB', '#columnsInputB');
  matrixPower('#btnMultiplyB', '#matrixContainerB', '#multiplyByNumberB', '#rowsInputB', '#columnsInputB');

  function matrixTranspose(btnID, rowsValues, columnsValues, matrixContainerAB) {
    $(btnID).click(function () {
      $('#limit2').html('').removeClass('pb-6');
      $('#copingDiv').addClass('hidden');
      let numRows = parseInt($(rowsValues).val());
      let numColumns = parseInt($(columnsValues).val());
      let transposedMatrix = [];

      for (let j = 0; j < numColumns; j++) {
        let column = [];
        for (let i = 0; i < numRows; i++) {
          let inputValue = parseFloat(
            $(matrixContainerAB)
              .eq(i * numColumns + j)
              .val()
          );
          console.log(inputValue);
          if (isNaN(inputValue)) {
            $('#limit2').html('Please provide valid values.').addClass('pb-6');
            $('#matrixWithPower').html('');
            $('#powerAndMultiply').html('');
            return;
          }
          column.push(inputValue);
        }
        transposedMatrix.push(column);
      }
      if ($('#limit2').html() !== '') {
        return;
      }
      let matrixHTML = '<table class="matrix-table">';
      for (let i = 0; i < numColumns; i++) {
        matrixHTML += '<tr>';
        for (let j = 0; j < numRows; j++) {
          matrixHTML += '<td>' + transposedMatrix[i][j] + '</td>';
        }
        matrixHTML += '</tr>';
      }
      matrixHTML += '</table>';
      $('#matrixWithPower').html(matrixHTML);
      $('#powerAndMultiply').html(`<b>${btnID === '#btnTranspose' ? 'A' : 'B'}<sup>T</sup> = </b>`);
    });
  }
  matrixTranspose('#btnTranspose', '#rowsInput', '#columnsInput', '#matrixContainer input[type="number"]');
  matrixTranspose('#btnTransposeB', '#rowsInputB', '#columnsInputB', '#matrixContainerB input[type="number"]');

  function functionInverse(btnID, rowValue, columnValue, tableMatrix) {
    $(btnID).click(function () {
      $('#limit2').html('').removeClass('pb-6');
      $('#copingDiv').addClass('hidden');
      let numRows = parseInt($(rowValue).val());
      let numColumns = parseInt($(columnValue).val());
      let matrix = [];

      for (let i = 0; i < numRows; i++) {
        let row = [];
        for (let j = 0; j < numColumns; j++) {
          let inputValue = parseFloat(
            $(tableMatrix)
              .eq(i * numColumns + j)
              .val()
          );
          if (isNaN(inputValue)) {
            $('#limit2').html('Please provide valid values.').addClass('pb-6');
            $('#matrixWithPower').html('');
            $('#powerAndMultiply').html('');
            return;
          }
          row.push(inputValue);
        }
        matrix.push(row);
      }
      if ($('#limit2').html() !== '') {
        return;
      }
      try {
        let inverseMatrix = math.inv(matrix);
        let inverseMatrixHTML = '<table class="matrix-table">';
        for (let i = 0; i < numRows; i++) {
          inverseMatrixHTML += '<tr>';
          for (let j = 0; j < numColumns; j++) {
            inverseMatrixHTML +=
              '<td>' +
              inverseMatrix[i][j]
                .toFixed(2)
                .replace(/\.?00+$/, '')
                .replace(/\.?-0+$/, '0') +
              '</td>';
          }
          inverseMatrixHTML += '</tr>';
        }
        inverseMatrixHTML += '</table>';
        $('#matrixWithPower').html(inverseMatrixHTML);
        $('#powerAndMultiply').html('<b>Inverse of Matrix: A<sup>-1</sup> = </b>');
      } catch (error) {
        $('#powerAndMultiply').html('Matrix is not invertible.');
        $('#matrixWithPower').html('');
      }
    });
  }
  functionInverse('#btnInverse', '#rowsInput', '#columnsInput', "#matrixContainer input[type='number']");
  functionInverse('#btnInverseB', '#rowsInputB', '#columnsInputB', "#matrixContainerB input[type='number']");

  function functionDterminant(btnID, rowValue, columnValue, matrixContainer) {
    $(btnID).click(function () {
      $('#copingDiv').addClass('hidden');
      let numRows = parseInt($(rowValue).val());
      let numColumns = parseInt($(columnValue).val());
      let matrix = [];

      if (numRows !== numColumns) {
        $('#powerAndMultiply').html('Determinant is only defined for square matrices.');
        $('#matrixWithPower').html('');
        return;
      }
      for (let i = 0; i < numRows; i++) {
        let row = [];
        for (let j = 0; j < numColumns; j++) {
          let inputValue = parseFloat(
            $(matrixContainer)
              .eq(i * numColumns + j)
              .val()
          );
          row.push(inputValue);
        }
        matrix.push(row);
      }
      $('#matrixWithPower').html('');
      try {
        let determinant = math.det(matrix);
        $('#powerAndMultiply').html('<b>Determinant: |A| = </b>' + determinant);
      } catch (error) {
        $('#powerAndMultiply').html('Error calculating determinant.');
      }
    });
  }
  functionDterminant('#btnDterminant', '#rowsInput', '#columnsInput', "#matrixContainer input[type='number']");
  functionDterminant('#btnDterminantB', '#rowsInputB', '#columnsInputB', "#matrixContainerB input[type='number']");

  function addRemoveCells(clsBtnChange, rowsValue, columnsValue, divforMatrix) {
    $(clsBtnChange).click(function () {
      let target = $('#' + $(this).data('target'));
      let operation = $(this).data('operation');
      let currentValue = parseInt(target.val());

      if (operation === 'increase') {
        target.val(currentValue + 1);
      } else if (operation === 'decrease' && currentValue > 1) {
        target.val(currentValue - 1);
      }
      matrixCreation(rowsValue, columnsValue, divforMatrix);
      console.log('working');
    });
  }
  addRemoveCells('.changeValueBtn', '#rowsInput', '#columnsInput', '#matrixContainer');
  addRemoveCells('.changeValueBtnB', '#rowsInputB', '#columnsInputB', '#matrixContainerB');

  function matrixCreation(rowsValue, columnsValue, divforMatrix) {
    $('#copingDiv').addClass('hidden');
    let numRows = parseInt($(rowsValue).val());
    let numColumns = parseInt($(columnsValue).val());

    let validationPassed = validateFunction();
    if (!validationPassed) {
      return;
    }
    let matrixHTML = '<table style="">';
    for (let i = 0; i < numRows; i++) {
      matrixHTML += '<tr>';
      for (let j = 0; j < numColumns; j++) {
        matrixHTML += '<td><input type="number" class="custom-input-width h-9 mb-4 px-2 text-xs md:text-sm border border-black rounded-full focus-within:text-primary_button focus-within:border-primary_button outline-none" style=" margin: 0px 0px 16px;"></td>';
      }
      matrixHTML += '</tr>';
    }
    matrixHTML += '</table>';
    $(divforMatrix).html(matrixHTML);
  }
  matrixCreation('#rowsInput', '#columnsInput', '#matrixContainer');
  matrixCreation('#rowsInputB', '#columnsInputB', '#matrixContainerB');

  let newArray = [];
  function functionForAB(btnID) {
    $('#' + btnID).click(function () {
      $('#limit2').html('').removeClass('pb-6');
      $('#copingDiv').removeClass('hidden');
      let inputElementsA = $("#matrixContainer input[type='number']");
      let inputElementsB = $("#matrixContainerB input[type='number']");
      let numRowsA = parseInt($('#rowsInput').val());
      let numColumnsA = parseInt($('#columnsInput').val());
      let numRowsB = parseInt($('#rowsInputB').val());
      let numColumnsB = parseInt($('#columnsInputB').val());

      let inputValuesAfterA = [];
      let inputValuesAfterB = [];
      let inputValuesBeforeA;
      let inputValuesBeforeB;

      inputElementsA.each(function () {
        inputValuesBeforeA = parseFloat($(this).val());
        if (isNaN(inputValuesBeforeA)) {
          $('#limit2').html('Matrix A contains some invalid values. Please provide valid values.').addClass('pb-6');
          $('#matrixWithPower').html('');
          return;
        }
        inputValuesAfterA.push(inputValuesBeforeA);
      });
      console.log(inputValuesAfterA);

      inputElementsB.each(function () {
        inputValuesBeforeB = parseFloat($(this).val());
        if (isNaN(inputValuesBeforeB)) {
          $('#limit2').html('Matrix B contains some invalid values. Please provide valid values.').addClass('pb-6');
          $('#matrixWithPower').html('');
          $('#powerAndMultiply').html('');
          return;
        }
        inputValuesAfterB.push(inputValuesBeforeB);
      });
      console.log(inputValuesAfterB);

      if ($('#limit2').html() !== '') {
        // $('#result').addClass("hidden");
        $('#copingDiv').addClass('hidden');
        return;
      }

      let resultArray = [];
      for (let i = 0; i < inputValuesAfterA.length; i++) {
        if (btnID === 'btnABaddition') {
          resultArray.push(inputValuesAfterA[i] + inputValuesAfterB[i]);
        } else if (btnID === 'btnABsubtract') {
          resultArray.push(inputValuesAfterA[i] - inputValuesAfterB[i]);
        } else if (btnID === 'btnABproduct') {
          let resultMatrix = [];
          for (let i = 0; i < numRowsA; i++) {
            let row = [];
            for (let j = 0; j < numColumnsB; j++) {
              let sum = 0;
              for (let k = 0; k < numColumnsA; k++) {
                sum += inputValuesAfterA[i * numColumnsA + k] * inputValuesAfterB[k * numColumnsB + j];
              }
              row.push(sum);
            }
            resultMatrix.push(row);
          }
          resultArray = resultMatrix.flat();
        }
      }
      for (let i = 0; i < resultArray.length; i++) {
        newArray[i] = resultArray[i];
      }
      console.log(newArray);

      let matrixAdditionHTML = '<table class="matrix-table">';
      let currentIndex = 0;
      for (let i = 0; i < numRowsA; i++) {
        matrixAdditionHTML += '<tr>';
        for (let j = 0; j < numColumnsA; j++) {
          matrixAdditionHTML += '<td>' + resultArray[currentIndex++] + '</td>';
        }
        matrixAdditionHTML += '</tr>';
      }
      matrixAdditionHTML += '</table>';
      $('#matrixWithPower').html(matrixAdditionHTML);
      $('#powerAndMultiply').html(`<b>A + B = </b>`);
      $('#result').removeClass('hidden');
    });
  }
  functionForAB('btnABaddition');
  functionForAB('btnABsubtract');
  functionForAB('btnABproduct');

  function populateMatrixValues(values, matrix) {
    let inputElements = $(`#matrixContainer${matrix} input[type='number']`);
    inputElements.each(function (index) {
      $(this).val(values[index]);
    });
  }
  $('#copyToA').click(function () {
    populateMatrixValues(newArray, '');
  });
  $('#copyToB').click(function () {
    populateMatrixValues(newArray, 'B');
  });

  $('#btnABswap').click(function () {
    $('#limit2').html('').removeClass('pb-6');
    $('#copingDiv').addClass('hidden');
    let inputElementsA = $("#matrixContainer input[type='number']");
    let inputElementsB = $("#matrixContainerB input[type='number']");

    inputElementsA.each(function (index) {
      let valueA = $(this).val();
      let valueB = inputElementsB.eq(index).val();
      $(this).val(valueB);
      inputElementsB.eq(index).val(valueA);
      $('#powerAndMultiply').html('Matrix A and B were swapped.');
      $('#matrixWithPower').html('');
      $('#result').removeClass('hidden');
    });
  });
});
