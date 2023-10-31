$(document).ready(function () {
  $('#calculate').click(function () {
    let height = parseFloat($('#height').val()) / 100;
    let weightRange = calculateWeightRange(height);

    let lowerRange = weightRange[0].toFixed(2);
    let upperRange = weightRange[1].toFixed(2);

    $('#weightRangeResult').html(' <b> Healthy Weight Range: </b>' + lowerRange + ' kg - ' + upperRange + ' kg');

    let severelyUnderweight = (16.5 * height * height).toFixed(1);
    let underweight = lowerRange;
    let overweight = (25.0 * height * height).toFixed(1);
    let obeseClass1 = (30.0 * height * height).toFixed(1);
    let obeseClass2 = (35.0 * height * height).toFixed(1);
    let obeseClass3 = (40.0 * height * height).toFixed(1);

    $('#severelyUnderweight').text(+severelyUnderweight);
    $('#underweight').text(underweight);
    $('#overweight').text(overweight);
    $('#obeseClass1').text(obeseClass1);
    $('#obeseClass2').text(obeseClass2);
    $('#obeseClass3').text(obeseClass3);

    $('#additionalDiv').show();
    $('#img').show();
  });

  function calculateWeightRange(height) {
    let lowerRange = 18.5 * (height * height);
    let upperRange = 25 * (height * height);
    return [lowerRange, upperRange];
  }

  $('#calculates').click(function () {
    let heightFeet = parseFloat($('#heightFeet').val());
    let heightInches = parseFloat($('#heightInches').val());
    let heightInchesTotal = heightFeet * 12 + heightInches;
    let heightCm = heightInchesTotal * 2.54;
    let weightRange = calculateWeightRanges(heightCm);

    let lowerRangeKg = weightRange[0].toFixed(1);
    let upperRangeKg = weightRange[1].toFixed(1);
    let lowerRangeLbs = (lowerRangeKg * 2.20462).toFixed(1);
    let upperRangeLbs = (upperRangeKg * 2.20462).toFixed(1);

    $('#weightRangeResult').text('<b> Healthy Weight Range: </b> ' + lowerRangeLbs + ' lbs - ' + upperRangeLbs + ' lbs');

    let severelyUnderweightLbs = (((16.5 * heightCm * heightCm) / 10000) * 2.20462).toFixed(0);
    let underweightLbs = (lowerRangeKg * 2.20462).toFixed(0);
    let overweightLbs = (((25.0 * heightCm * heightCm) / 10000) * 2.20462).toFixed(0);
    let obeseClass1Lbs = (((30.0 * heightCm * heightCm) / 10000) * 2.20462).toFixed(0);
    let obeseClass2Lbs = (((35.0 * heightCm * heightCm) / 10000) * 2.20462).toFixed(0);
    let obeseClass3Lbs = (((40.0 * heightCm * heightCm) / 10000) * 2.20462).toFixed(0);

    $('#severelyUnderweight').text(severelyUnderweightLbs);
    $('#underweight').text(underweightLbs);
    $('#overweight').text(overweightLbs);
    $('#obeseClass1').text(obeseClass1Lbs);
    $('#obeseClass2').text(obeseClass2Lbs);
    $('#obeseClass3').text(obeseClass3Lbs);

    $('#additionalDiv').show();
    $('#img').show();
  });

  function calculateWeightRanges(heightCm) {
    let lowerRangeKg = 18.5 * ((heightCm * heightCm) / 10000);
    let upperRangeKg = 25.0 * ((heightCm * heightCm) / 10000);
    return [lowerRangeKg, upperRangeKg];
  }
});
