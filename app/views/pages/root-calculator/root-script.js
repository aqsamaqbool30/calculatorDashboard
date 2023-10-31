$(document).ready(function () {
  $('#squareRoot').click(function (e) {
    let num1 = $('#numbSquareroot').val();

    let validate = validateInputs(['#numbSquareroot'], 1, '#limit1', '#result');
    if (!validate) {
      return;
    }
    if(num1 <= 0){
      $("#limit3").html('Please provide positive value to calculate.').addClass('pb-6');
      $('#result').addClass('hidden');
      return;
    }
    let solution = Math.sqrt(num1);
    $('#solution1').html('Sqaure Root of ' + '<b>' + num1 + '</b> is ' + '<b>' + solution + '</b>');
    $('#solution2').html(solution + ' <sup> ' + 2 + '</sup>  = ' + num1);
    $("#limit3").html('').removeClass('pb-6');
    $('#result').removeClass('hidden');
  });
  $('#cubeRoot').click(function () {
    let num1 = $('#numbCuberoot').val();
    let solution = Math.cbrt(num1);

    let validate = validateInputs(['#numbCuberoot'], 1, '#limit2', '#result');
    if (!validate) {
      return;
    }
    $('#solution1').html('Cube Root of ' + '<b>' + num1 + '</b> is ' + '<b>' + solution + '</b>');
    $('#solution2').html(solution + ' <sup> ' + 3 + '</sup>  = ' + num1);
    $('#result').removeClass('hidden');
  });
  $('#generalRoot').click(function () {
    let num1 = $('#numb1').val();
    let num2 = $('#numb2').val();
    
    let validate = validateInputs(['#numb1', '#numb2'], 2, '#limit3', '#result2');
    if (!validate) {
      return;
    }
    if(num1 <= 0){
      $("#limit4").html('Please provide positive value to calculate.').addClass('pb-6');
      $('#result2').addClass('hidden');
      return;
    }
    let solution = Math.pow(num1, 1 / num2);
    $('#solution3').html('General Root of ' + '<b>' + num1 + '</b> is ' + '<b>' + solution + '</b>');
    $('#solution4').html(solution + ' <sup> ' + num2 + '</sup>  = ' + num1);
    $("#limit4").html('').removeClass('pb-6');
    $('#result2').removeClass('hidden');
  });
});
