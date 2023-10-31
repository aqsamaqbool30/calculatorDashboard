$(document).ready(function () {
  $('#Calculate').click(function () {
    let bust = parseFloat($('#bust').val());
    let waist = parseFloat($('#waist').val());
    let highHip = parseFloat($('#highHip').val());
    let hip = parseFloat($('#hip').val());
    let bustUnit = $('#bustUnit').val();
    let waistUnit = $('#waistUnit').val();
    let highHipUnit = $('#highHipUnit').val();
    let hipUnit = $('#hipUnit').val();

    if (!bust || (!waist || !highHip || !hip)) {
      $("#warning").html("please provide all required fields");
      $("#resultbody").html("");

      return;
    }
    if (bustUnit === 'in') {
      bust = convertInchesToCm(bust);
    }
    if (waistUnit === 'in') {
      waist = convertInchesToCm(waist);
    }
    if (highHipUnit === 'in') {
      highHip = convertInchesToCm(highHip);
    }
    if (hipUnit === 'in') {
      hip = convertInchesToCm(hip);
    }
    let waistHipRatio = waist / hip;
    let resultBody = '';

    if (bust - hip <= 1 && hip - bust < 3.6 && bust - waist >= 9 && hip - waist >= 9) {
      resultBody = 'Hourglass';
    } else if (hip - bust >= 3.6 && hip - bust < 10 && hip - waist >= 9 && highHip / waist < 1.193) {
      resultBody = 'Bottom Hourglass';
    } else if (bust - hip > 1 && bust - hip < 10 && bust - waist >= 9) {
      resultBody = 'Top Hourglass';
    } else if (hip - bust > 2 && hip - waist >= 7 && highHip / waist >= 1.193) {
      resultBody = 'Spoon';
    } else if (hip - bust >= 3.6 && hip - waist < 9) {
      resultBody = 'Triangle';
    } else if (bust - hip >= 3.6 && bust - waist < 9) {
      resultBody = 'Inverted Triangle';
    } else if (hip - bust < 3.6 && bust - hip < 3.6 && bust - waist < 9 && hip - waist < 9) {
      resultBody = 'Rectangle';
    } else {
      resultBody = 'Unfortunately, this calculator was unable to classify your body shape within one of the seven female body shapes. Each individual is unique, and this calculator is unable to consider all possibilities.';
    }

    $("#result").html(
      " <b> Waist-Hip Ratio (WHR): </b> " + waistHipRatio.toFixed(2),
    );
    $("#resultbody").html(" <b>Body shape: </b> " + resultBody);
    $("#warning").html(" ");
    $("#additionalDiv").show();
  });
  function convertInchesToCm(inches) {
    return inches * 2.54;
  }
});
