$(document).ready(function () {
  $('#calcQuadratic').click(function () {
    $('#warning').html('').removeClass('pb-6');
    let inputFields = [$('#valueA').val(), $('#valueB').val(), $('#valueC').val()];
    let emptyInputs = inputFields.filter(input => input === '');

    if (emptyInputs.length > 0) {
      if (emptyInputs.length === 1) {
        $('#warning').html('There is ' + emptyInputs.length + ' empty input field. Please fill it.').addClass('pb-6');
      } else {
        $('#warning').html('There are ' + emptyInputs.length + ' input fields are empty. Please fill them.').addClass('pb-6');
      }
      $('#result').addClass('hidden');
      return;
    }

    let valueofABefore = divideNumeratorByDenominator($('#valueA').val());
    let valueofBBefore = divideNumeratorByDenominator($('#valueB').val());
    let valueofCBefore = divideNumeratorByDenominator($('#valueC').val());
    
    if (valueofABefore === "Division by zero is not allowed" || valueofBBefore === "Division by zero is not allowed" || valueofCBefore === "Division by zero is not allowed") {
      $('#warning').html('Division by zero is not allowed. Please enter valid values.').addClass('pb-6');
      $('#result').addClass('hidden');
      return;
    }
    let valueofA = parseFloat(valueofABefore);
    let valueofB = parseFloat(valueofBBefore);
    let valueofC = parseFloat(valueofCBefore);
    let discriminant = Math.pow(valueofB, 2) - 4 * valueofA * valueofC;
    let solutionPlus, solutionMinus;
    if (discriminant >= 0) {
      solutionPlus = (-valueofB + Math.sqrt(discriminant)) / (2 * valueofA);
      solutionMinus = (-valueofB - Math.sqrt(discriminant)) / (2 * valueofA);
      $('#solution2').html('<br><b>Steps (positive value) =  </b> (-1 * ' + valueofB + ' ) + √' + valueofB + '<sup>2</sup> - (4 * ' + valueofA + '*' + valueofC + ')' + '<br> = -' + valueofB + ' + √' + discriminant + '<br> = ' + solutionPlus);
      $('#solution3').html('<br><b>Steps (negative value) =  </b> (-1 * ' + valueofB + ' ) - √' + valueofB + '<sup>2</sup> - (4 * ' + valueofA + '*' + valueofC + ')' + '<br> = -' + valueofB + ' - √' + discriminant + '<br> = ' + solutionMinus);
    } else {
      let sqrtValues = Math.sqrt(Math.abs(discriminant));
      solutionPlus = -valueofB / (2 * valueofA) + ' + ' + sqrtValues / (2 * valueofA) + ' i';
      solutionMinus = -valueofB / (2 * valueofA) + ' - ' + sqrtValues / (2 * valueofA) + ' i';
      $('#solution2').html('<br><b>Steps (positive value) =  </b> (-1 * ' + valueofB + ' ) + √' + valueofB + '<sup>2</sup> - (4 * ' + valueofA + '*' + valueofC + ')' + '<br> = -' + valueofB + ' + √' + discriminant + '<br> = ' + solutionPlus);
      $('#solution3').html('<br><b>Steps (negative value) =  </b> (-1 * ' + valueofB + ' ) - √' + valueofB + '<sup>2</sup> - (4 * ' + valueofA + '*' + valueofC + ')' + '<br> = -' + valueofB + ' - √' + discriminant + '<br> = ' + solutionMinus);
    }
    $('#solution1').html('<b>x = </b> ' + solutionPlus + '<br> OR <br><b>x = </b> ' + solutionMinus);
    $('#result').removeClass('hidden');
  });

  function divideNumeratorByDenominator(number) {
    let input = number;
    let regex = /^(-?\d+(\.\d+)?)\/(\d+(\.\d+)?)$/;
    let wholeNumberRegex = /^(-?\d+(\.\d+)?)$/;
  
    if (regex.test(input)) {
      let [, numerator, , denominator] = input.match(regex);
      numerator = parseFloat(numerator);
      denominator = parseFloat(denominator);
  
      if (denominator === 0) {
        return "Division by zero is not allowed";
      }
      let result = numerator / denominator;
      return result;
    } else if (wholeNumberRegex.test(input)) {
      return parseFloat(input);
    } else {
      return NaN;
    }
  }
  

});
