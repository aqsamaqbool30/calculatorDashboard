$(document).ready(function () {
  // lenght
  $('#inputLength, #selectFromLength, #selectToLength').on('input', function () {
    let length = parseFloat($('#inputLength').val());
    let fromUnit = $('#selectFromLength').val();
    let toUnit = $('#selectToLength').val();

    console.log(length);
    console.log(fromUnit);
    console.log(toUnit);

    let convertedLength = convertLength(length, fromUnit, toUnit);
    console.log(convertedLength);
    $('#outputLength').val(Number(convertedLength).toFixed(2));
  });
  function convertLength(length, fromUnit, toUnit) {
    let meter;
    switch (fromUnit) {
      case 'meter':
        meter = length;
        break;
      case 'kilometer':
        meter = length * 1000;
        break;
      case 'centimeter':
        meter = length * 0.01;
        break;
      case 'millimeter':
        meter = length * 0.001;
        break;
      case 'micrometer':
        meter = length * 1e-6;
        break;
      case 'nanometer':
        meter = length * 1e-9;
        break;
      case 'mile':
        meter = length * 1609.34;
        break;
      case 'yard':
        meter = length * 0.9144;
        break;
      case 'foot':
        meter = length * 0.3048;
        break;
      case 'inch':
        meter = length * 0.0254;
        break;
      case 'lightyear':
        meter = length * 9.461e15;
        break;
      default:
        meter = length;
    }

    switch (toUnit) {
      case 'meter':
        return meter;
      case 'kilometer':
        return meter * 0.001;
      case 'centimeter':
        return meter * 100;
      case 'millimeter':
        return meter * 1000;
      case 'micrometer':
        return meter * 1e6;
      case 'nanometer':
        return meter * 1e9;
      case 'mile':
        return meter * 0.000621371;
      case 'yard':
        return meter * 1.09361;
      case 'foot':
        return meter * 3.28084;
      case 'inch':
        return meter * 39.3701;
      case 'lightyear':
        return meter * 1.057e-16;
      default:
        return meter;
    }
  }

  // tempareture
  $('#temp-input, #selectFromTemp, #selectToTemp').on('input', function () {
    let temperature = $('#temp-input').val();
    let fromUnit = $('#selectFromTemp').val();
    let toUnit = $('#selectToTemp').val();
    let convertedTemperature = convertTemperature(temperature, fromUnit, toUnit);
    $('#temp-output').val(convertedTemperature.toFixed(2));
  });
  function convertTemperature(temperature, fromUnit, toUnit) {
    let convertedTemp;
    switch (fromUnit) {
      case 'celsius':
        if (toUnit === 'kelvin') {
          convertedTemp = parseFloat(temperature) + 273.15;
        } else if (toUnit === 'fahrenheit') {
          convertedTemp = (parseFloat(temperature) * 9) / 5 + 32;
        } else {
          convertedTemp = parseFloat(temperature);
        }
        break;
      case 'kelvin':
        if (toUnit === 'celsius') {
          convertedTemp = parseFloat(temperature) - 273.15;
        } else if (toUnit === 'fahrenheit') {
          convertedTemp = ((parseFloat(temperature) - 273.15) * 9) / 5 + 32;
        } else {
          convertedTemp = parseFloat(temperature);
        }
        break;
      case 'fahrenheit':
        if (toUnit === 'celsius') {
          convertedTemp = ((parseFloat(temperature) - 32) * 5) / 9;
        } else if (toUnit === 'kelvin') {
          convertedTemp = ((parseFloat(temperature) - 32) * 5) / 9 + 273.15;
        } else {
          convertedTemp = parseFloat(temperature);
        }
        break;
      default:
        convertedTemp = parseFloat(temperature);
    }
    return convertedTemp;
  }

  // Area
  $('#area-input, #selectFromArea, #selectToArea').on('input', function () {
    let area = $('#area-input').val();
    let fromUnit = $('#selectFromArea').val();
    let toUnit = $('#selectToArea').val();
    let convertedArea = convertArea(area, fromUnit, toUnit);
    $('#area-output').val(Number(convertedArea).toFixed(2));
  });
  function convertArea(area, fromUnit, toUnit) {
    let m2;
    switch (fromUnit) {
      case 'm2':
        m2 = area;
        break;
      case 'km2':
        m2 = area * 1e6;
        break;
      case 'cm2':
        m2 = area * 0.0001;
        break;
      case 'mm2':
        m2 = area * 1e-6;
        break;
      case 'um2':
        m2 = area * 1e-12;
        break;
      case 'ha':
        m2 = area * 10000;
        break;
      case 'mi2':
        m2 = area * 2.59e6;
        break;
      case 'yd2':
        m2 = area * 0.836127;
        break;
      case 'ft2':
        m2 = area * 0.092903;
        break;
      case 'in2':
        m2 = area * 0.00064516;
        break;
      case 'ac':
        m2 = area * 4046.86;
        break;
      default: // Assume input is already in square meters
        m2 = area;
    }

    switch (toUnit) {
      case 'm2':
        return m2;
      case 'km2':
        return m2 * 1e-6;
      case 'cm2':
        return m2 * 10000;
      case 'mm2':
        return m2 * 1e6;
      case 'um2':
        return m2 * 1e12;
      case 'ha':
        return m2 * 0.0001;
      case 'mi2':
        return m2 * 3.861e-7;
      case 'yd2':
        return m2 * 1.19599;
      case 'ft2':
        return m2 * 10.7639;
      case 'in2':
        return m2 * 1550;
      case 'ac':
        return m2 * 0.000247105;
      default: // Convert to square meters by default
        return m2;
    }
  }

  // weight
  $('#weight-input, #selectFrom, #selectTo').on('input', function () {
    let weight = $('#weight-input').val();
    let fromUnit = $('#selectFrom').val();
    let toUnit = $('#selectTo').val();
    let convertedWeight = convertWeight(weight, fromUnit, toUnit);
    $('#weight-output').val(Number(convertedWeight).toFixed(2));
  });
  function convertWeight(weight, fromUnit, toUnit) {
    let kg;
    switch (fromUnit) {
      case 'lb':
        kg = weight * 0.45359237;
        break;
      case 'g':
        kg = weight * 0.001;
        break;
      case 'oz':
        kg = weight * 0.02834952;
        break;
      case 'mg':
        kg = weight * 0.000001;
        break;
      case 't':
        kg = weight * 1000;
        break;
      case 'lt':
        kg = weight * 1016.0469088;
        break;
      case 'st':
        kg = weight * 907.18474;
        break;
      case 'ct':
        kg = weight * 0.0002;
        break;
      case 'amu':
        kg = weight * 1.6605390666e-27;
        break;
      default: // Assume input is already in kilograms
        kg = weight;
    }

    switch (toUnit) {
      case 'lb':
        return kg * 2.20462262;
      case 'g':
        return kg * 1000;
      case 'oz':
        return kg * 35.27396195;
      case 'mg':
        return kg * 1000000;
      case 't':
        return kg * 0.001;
      case 'lt':
        return kg * 0.00098420653;
      case 'st':
        return kg * 0.00110231131;
      case 'ct':
        return kg * 5000;
      case 'amu':
        return kg * 6.02213665167e26;
      default: // Convert to kilograms by default
        return kg;
    }
  }

  // volume
  $('#volume-input, #selectFromVolume, #selectToVolume').on('input', function () {
    let volume = $('#volume-input').val();
    let fromUnit = $('#selectFromVolume').val();
    let toUnit = $('#selectToVolume').val();
    let convertedVolume = convertVolume(volume, fromUnit, toUnit);
    $('#volume-output').val(Number(convertedVolume).toFixed(2));
  });
  function convertVolume(volume, fromUnit, toUnit) {
    let m3;
    switch (fromUnit) {
      case 'mm3':
        m3 = volume * 1e-9;
        break;
      case 'm3':
        m3 = volume;
        break;
      case 'km3':
        m3 = volume * 1e9;
        break;
      case 'cm3':
        m3 = volume * 1e-6;
        break;
      case 'l':
        m3 = volume * 0.001;
        break;
      case 'ml':
        m3 = volume * 1e-6;
        break;
      case 'gal':
        m3 = volume * 0.00378541;
        break;
      case 'qt':
        m3 = volume * 0.000946353;
        break;
      case 'pt':
        m3 = volume * 0.000473176;
        break;
      case 'cup':
        m3 = volume * 0.000236588;
        break;
      case 'oz':
        m3 = volume * 2.95735e-5;
        break;
      case 'tbsp':
        m3 = volume * 1.47868e-5;
        break;
      case 'tsp':
        m3 = volume * 4.92892e-6;
        break;
      case 'igal':
        m3 = volume * 0.00454609;
        break;
      case 'iq':
        m3 = volume * 0.00113652;
        break;
      case 'ip':
        m3 = volume * 0.000568261;
        break;
      case 'ifl':
        m3 = volume * 2.84131e-5;
        break;
      case 'its':
        m3 = volume * 1.7758e-5;
        break;
      case 'itts':
        m3 = volume * 5.9194e-6;
        break;
      case 'mi3':
        m3 = volume * 4168181825.44058;
        break;
      case 'yd3':
        m3 = volume * 0.764555;
        break;
      case 'ft3':
        m3 = volume * 0.0283168;
        break;
      case 'in3':
        m3 = volume * 1.63871e-5;
        break;
      default: // Assume input is already in cubic meters
        m3 = volume;
    }

    switch (toUnit) {
      case 'mm3':
        return m3 * 1e9;
      case 'm3':
        return m3;
      case 'km3':
        return m3 * 1e-9;
      case 'cm3':
        return m3 * 1e6;
      case 'l':
        return m3 * 1000;
      case 'ml':
        return m3 * 1e6;
      case 'gal':
        return m3 * 264.172;
      case 'qt':
        return m3 * 1056.69;
      case 'pt':
        return m3 * 2113.38;
      case 'cup':
        return m3 * 4226.75;
      case 'oz':
        return m3 * 33814;
      case 'tbsp':
        return m3 * 67628;
      case 'tsp':
        return m3 * 202884;
      case 'igal':
        return m3 * 219.969;
      case 'iq':
        return m3 * 879.877;
      case 'ip':
        return m3 * 1759.75;
      case 'ifl':
        return m3 * 35195.1;
      case 'its':
        return m3 * 56123.9;
      case 'itts':
        return m3 * 168371;
      case 'mi3':
        return m3 * 2.39913e-10;
      case 'yd3':
        return m3 * 1.30795;
      case 'ft3':
        return m3 * 35.3147;
      case 'in3':
        return m3 * 61023.7;
      default: // Convert to cubic meters by default
        return m3;
    }
  }
});
