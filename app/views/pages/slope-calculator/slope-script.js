$(document).ready(function () {
  $('#slope1').click(function () {
    let x1 = $('#X1').val();
    let y1 = $('#Y1').val();
    let x2 = $('#X2').val();
    let y2 = $('#Y2').val();

    let validate = validateInputs(['#X1', '#X2', '#Y1', '#Y2'], 4, '#limit1', '#result');
    if (!validate) {
      return;
    }
    let deltax = x2 - x1;
    let deltay = y2 - y1;
    let slope = 'Slope (m): ' + deltay / deltax;
    let theta = 'Angle (θ) : ' + Math.atan(deltay / deltax) + ' radian &nbsp;&nbsp; OR &nbsp;&nbsp; ' + (Math.atan(deltay / deltax) * 180) / Math.PI + ' °';
    let distance = 'Distance (d) : ' + Math.sqrt(deltax * deltax + deltay * deltay);

    $('#solution-div1').html(slope);
    $('#solution-div2').html(theta);
    $('#solution-div3').html('ΔX: ' + deltax);
    $('#solution-div4').html('Δy: ' + deltay);
    $('#solution-div5').html(distance);
    $('#result').removeClass('hidden');
  });

  let selectedRadioValue = 'slopeRadio';
  $('input[name=slopeAndAngle]').change(function () {
    selectedRadioValue = $(this).val();
    if (selectedRadioValue === 'slopeRadio') {
      $('#mainDiv').find('#slopeDiv').removeClass('hidden').addClass('flex');
      $('#mainDiv').find('#angleDiv').addClass('hidden').removeClass('flex');
      $('#mainDiv').find('#angle').val('');
    } else if (selectedRadioValue === 'angleRadio') {
      $('#mainDiv').find('#slopeDiv').addClass('hidden').removeClass('flex');
      $('#mainDiv').find('#angleDiv').removeClass('hidden').addClass('flex');
      $('#mainDiv').find('#slope').val('');
    }
  });

  $('#slope2').click(function () {
    let X1 = parseFloat($('#secondX1').val());
    let Y1 = parseFloat($('#secondY1').val());
    let distance = parseFloat($('#distance').val());
    let slope = $('#slope').val();
    let angle = $('#angle').val();
    let validate;

    if (selectedRadioValue === 'slopeRadio') {
      validate = validateInputs(['#secondX1', '#secondY1', '#distance', '#slope'], 4, '#limit2', '#result');
    } else if (selectedRadioValue === 'angleRadio') {
      validate = validateInputs(['#secondX1', '#secondY1', '#distance', '#angle'], 4, '#limit2', '#result');
    }
    if (!validate) {
      return;
    }
    let X2, Y2, deltax, deltay;
    if (angle === '') {
      deltax = distance / Math.sqrt(1 + slope * slope);
      deltay = slope * deltax;
      X2 = parseFloat(X1) + deltax;
      Y2 = parseFloat(Y1) + deltay;

      angle = Math.atan(slope);
      angleInDegrees = angle * (180 / Math.PI);
      theta = 'Angle (θ) : ' + angleInDegrees + ' ° &nbsp;&nbsp; OR &nbsp;&nbsp; ' + (angleInDegrees * Math.PI) / 180 + ' radian';
      $('#solution-div5').html(theta);
    } else {
      angleInRadians = angle * (Math.PI / 180);
      deltax = distance * Math.cos(angleInRadians);
      deltay = distance * Math.sin(angleInRadians);

      X2 = parseFloat(X1) + deltax;
      Y2 = parseFloat(Y1) + deltay;
      slope = (Y2 - Y1) / (X2 - X1);
      $('#solution-div5').html('Slope (m): ' + slope);
    }
    $('#solution-div1').html('ΔX: ' + deltax);
    $('#solution-div2').html('Δy: ' + deltay);
    $('#solution-div3').html('X<sub>2</sub>: ' + X2);
    $('#solution-div4').html('Y<sub>2</sub>: ' + Y2);
    $('#result').removeClass('hidden');
  });
});
