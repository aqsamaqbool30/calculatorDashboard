$(document).ready(function () {
  $('#theoremCalc').click(function (e) {
    let value1 = parseFloat($('#valueA').val());
    let value2 = parseFloat($('#valueB').val());
    let value3 = parseFloat($('#valueC').val());
    calculateTheorem(value1, value2, value3, '#warningC');
  });
  $('#squareRoottheoremCalc').click(function (e) {
    let value1 = parseFloat($('#squareRootvalueA').val());
    let value2 = parseFloat($('#squareRootvalueB').val());
    let value3 = parseFloat($('#squareRootvalueC').val());
    value1 = Math.sqrt(value1);
    value2 = Math.sqrt(value2);
    value3 = Math.sqrt(value3);
    calculateTheorem(value1, value2, value3, '#warningSquareRoot');
  });

  function calculateTheorem(value1, value2, value3, warnID) {
    $(warnID).html('').addClass('pb-6');
    let validate = validationfunction(value1, value2, value3);
    if (validate < 2 || validate > 2) {
      $(warnID).html(`Please provide two values for calculations. You have provided ${validate} values.`);
      $('#result').addClass('hidden');
      return;
    }

    if (isNaN(value3)) {
      value3 = Math.sqrt(value1 * value1 + value2 * value2);
      $('#solution1').html('<b> Value of c =</b> ' + value3);
      $('#solutionCalc').html('Value of c = √(a<sup>2</sup> + b<sup>2</sup>) ' + '<br> = √(' + value1 + '<sup>2</sup> + ' + value2 + '<sup>2</sup>)<br> = ' + value3);
    } else if (isNaN(value2)) {
      if (value1 >= value3) {
        $(warnID).html('The values of a or b can never be greater than or equal to the value of c.');
        $('#result').addClass('hidden');
        return;
      } else {
        $(warnID).html('');
      }
      value2 = Math.sqrt(value3 * value3 - value1 * value1);
      $('#solution1').html('<b> Value of b =</b> ' + value2);
      $('#solutionCalc').html('Value of b = √(c<sup>2</sup> - a<sup>2</sup>) ' + '<br> = √(' + value3 + '<sup>2</sup> - ' + value1 + '<sup>2</sup>)<br> = ' + value2);
    } else if (isNaN(value1)) {
      if (value2 >= value3) {
        $(warnID).html('The values of a or b can never be greater than or equal to the value of c.');
        $('#result').addClass('hidden');
        return;
      } else {
        $(warnID).html('');
      }
      value1 = Math.sqrt(value3 * value3 - value2 * value2);
      $('#solution1').html('<b> Value of a =</b> ' + value1);
      $('#solutionCalc').html('Value of a = √(c<sup>2</sup> - b<sup>2</sup>) ' + '<br> = √(' + value3 + '<sup>2</sup> - ' + value2 + '<sup>2</sup>)<br> = ' + value1);
    }

    let alpha = Math.asin(value1 / value3);
    let beta = Math.asin(value2 / value3);
    let area = (value1 * value2) / 2;
    let perimeter = value1 + value2 + value3;
    let h = (value1 * value2) / value3;

    $('#solution2').html('<b> Alpha angle (∠α) =</b>' + alpha + ' rad <b> OR </b> ' + ((alpha * 180) / Math.PI).toFixed(4) + '°');
    $('#solution3').html('<b> Beta angle (∠β) =</b> ' + beta + ' rad <b> OR </b> ' + ((beta * 180) / Math.PI).toFixed(4) + '°');
    $('#solution4').html('<b> Area =</b> ' + area);
    $('#solution5').html('<b> Perimeter = </b>' + perimeter);
    $('#solution6').html('<b> h =</b> ' + h);

    $('#solution8').html('Alpha angle (∠α) = arcsin(a/c)' + '<br>= arcsin(' + value1 + ' / ' + value3 + ')' + '<br> = ' + alpha + ' rad <br> = ' + ((alpha * 180) / Math.PI).toFixed(4) + '°');
    $('#solution9').html('Beta angle (∠β) = arcsin(b/c)' + '<br>= arcsin(' + value2 + ' / ' + value3 + ')' + '<br> = ' + beta + ' rad <br> = ' + ((beta * 180) / Math.PI).toFixed(4) + '°');
    $('#solution10').html('Area = (a*b)/2' + '<br> = (' + value1 + '*' + value2 + ') /2' + '<br> = ' + area);
    $('#solution11').html('Perimeter = a+b+c' + '<br> = ' + value1 + '+' + value2 + '+' + value3 + '<br> = ' + perimeter);
    $('#solution12').html('h = (a*b)/c' + '<br> = (' + value1 + '*' + value2 + ') /' + value3 + '<br> = ' + h);
    $(warnID).html('').removeClass('pb-6');
    $('#result').removeClass('hidden');
  }

  function validationfunction(value1, value2, value3) {
    let arr = [value1, value2, value3];
    let count = 0;
    for (let i = 0; i < arr.length; i++) {
      if (!isNaN(arr[i])) {
        count++;
      }
    }
    return count;
  }
});
