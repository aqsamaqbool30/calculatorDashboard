console.log('working');
function validateInputs(inputValue, numberRequired, warnID, resultID) {
  $(warnID).html("").removeClass('pb-6');
  let filledCount = 0;
  inputValue.forEach((selector) => {
    let value = $(selector).val();
    if (!isNaN(value) && value.trim() !== '') {
      filledCount++;
    }
  });

  const isValid = filledCount === numberRequired;
  $(warnID).html(isValid ? "" : `Please provide ${numberRequired} values. You have provided ${filledCount}.`).toggleClass('pb-6', !isValid);
  $(resultID).addClass('hidden');
  console.log(isValid);
  return isValid;
}

// function for converting into different units
function convertLength(length, fromUnit, toUnit) {
  console.log('function working');
  let meter;
  switch (fromUnit) {
    case 'meters':
      meter = length;
      break;
    case 'kilometers':
      meter = length * 1000;
      break;
    case 'centimeters':
      meter = length * 0.01;
      break;
    case 'millimeters':
      meter = length * 0.001;
      break;
    case 'micrometers':
      meter = length * 1e-6;
      break;
    case 'nanometers':
      meter = length * 1e-9;
      break;
    case 'miles':
      meter = length * 1609.34;
      break;
    case 'yards':
      meter = length * 0.9144;
      break;
    case 'feets':
      meter = length * 0.3048;
      break;
    case 'inches':
      meter = length * 0.0254;
      break;
    case 'lightyears':
      meter = length * 9.461e15;
      break;
    default:
      meter = length;
  }


  switch (toUnit) {

    case 'meters':
      return meter;
    case 'kilometers':
      console.log(typeof (meter));
      console.log(meter * 0.001);
      return meter * 0.001;
    case 'centimeters':
      return meter * 100;
    case 'millimeters':
      return meter * 1000;
    case 'micrometers':
      return meter * 1e6;
    case 'nanometers':
      return meter * 1e9;
    case 'miles':
      return meter * 0.000621371;
    case 'yards':
      return meter * 1.09361;
    case 'feets':
      return meter * 3.28084;
    case 'inches':
      return meter * 39.3701;
    case 'lightyears':
      return meter * 1.057e-16;
    default:
      return meter;
  }
}

// confidence level covnersions (%)
const confidenceLevelZTable = {
  50: 0.674,
  70: 1.036,
  75: 1.15,
  80: 1.282,
  85: 1.44,
  90: 1.645,
  95: 1.96,
  98: 2.326,
  99: 2.576,
  99.9: 3.291,
  99.99: 3.891,
  99.999: 4.417,
};
