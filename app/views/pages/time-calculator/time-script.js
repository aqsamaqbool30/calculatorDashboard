$(document).ready(function () {
  $('#calculatetime').click(function () {
    let operation = $('input[name="operation"]:checked').val();
    let day1 = parseInt($('#day1').val()) || 0;
    let hour1 = parseInt($('#hour1').val()) || 0;
    let minute1 = parseInt($('#minute1').val()) || 0;
    let second1 = parseInt($('#second1').val()) || 0;
    let day2 = parseInt($('#day2').val()) || 0;
    let hour2 = parseInt($('#hour2').val()) || 0;
    let minute2 = parseInt($('#minute2').val()) || 0;
    let second2 = parseInt($('#second2').val()) || 0;

    let validate = validateInputs(['#day1', '#hour1', '#minute1', '#second1', '#day2', '#hour2', '#minute2', '#second2'], 8, '#limit1', '#result');
    if (!validate) {
      return;
    }
    let time1 = day1 * 24 * 60 * 60 + hour1 * 60 * 60 + minute1 * 60 + second1;
    let time2 = day2 * 24 * 60 * 60 + hour2 * 60 * 60 + minute2 * 60 + second2;

    let result;
    if (operation === 'add') {
      result = time1 + time2;
    } else if (operation === 'subtract') {
      result = time1 - time2;
    }
    let days = Math.floor(Math.abs(result) / (24 * 60 * 60));
    let hours = Math.floor((Math.abs(result) % (24 * 60 * 60)) / (60 * 60));
    let minutes = Math.floor((Math.abs(result) % (60 * 60)) / 60);
    let seconds = Math.floor(Math.abs(result) % 60);
    let totalHours = Math.floor(Math.abs(result) / (60 * 60));
    let totalDays = Math.floor(Math.abs(result) / (24 * 60 * 60));

    let resultText = 'Result: ';
    if (result < 0) {
      resultText += '-';
    }
    resultText += days + ' days, ' + hours + ' hours, ' + minutes + ' minutes, ' + seconds + ' seconds';
    $('#result').text(resultText);

    let totalResultText = 'Total Result: ';
    if (result < 0) {
      totalResultText += '-';
    }
    totalResultText += totalDays + ' days, OR ' + totalHours + ' hours,  OR ' + (totalHours * 60 + minutes) + 'minutes,  OR' + result + ' seconds';
    $('#result').html(totalResultText);
    $('#resultDIV').removeClass('hidden');
  });

  // start of time 2nd calculator
  $('#addButton').click(function () {
    calculateTime(true);
  });

  $('#subtractButton').click(function () {
    calculateTime(false);
  });

  function calculateTime(isAddition) {
    document.getElementById('totalResult').innerHTML = '';
    let startDate = new Date($('#start').val());
    let days = parseInt($('#days').val()) || 0;
    let hours = parseInt($('#hours').val()) || 0;
    let minutes = parseInt($('#minutes').val()) || 0;
    let seconds = parseInt($('#seconds').val()) || 0;

    let validate = validateInputs(['#start', '#days', '#hours', '#minutes', '#seconds'], 4, '#limit2', '#resultDIV');
    if (!validate) {
      return;
    }
    let resultDate = new Date(startDate);

    if (isAddition) {
      resultDate.setDate(resultDate.getDate() + days);
      resultDate.setHours(resultDate.getHours() + hours);
      resultDate.setMinutes(resultDate.getMinutes() + minutes);
      resultDate.setSeconds(resultDate.getSeconds() + seconds);
    } else {
      resultDate.setDate(resultDate.getDate() - days);
      resultDate.setHours(resultDate.getHours() - hours);
      resultDate.setMinutes(resultDate.getMinutes() - minutes);
      resultDate.setSeconds(resultDate.getSeconds() - seconds);
    }
    let result = resultDate.toLocaleString();
    $('#result').html('Time: ' + result);
    $('#resultDIV').removeClass('hidden');
  }
});
