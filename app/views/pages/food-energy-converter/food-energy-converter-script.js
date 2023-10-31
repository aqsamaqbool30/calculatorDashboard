$(document).ready(function () {
  $('#convertBtn').on('click', function () {
    const value = parseFloat($('#value').val());
    const fromUnit = $('#fromUnit').val();
    const toUnit = $('#toUnit').val();
    if (isNaN(value) || !fromUnit || !toUnit) {
      $('#warning').text('Please enter a valid value and select both units.');
      return;
    }
    if (fromUnit === toUnit) {
      $('#warning').text('Both units are the same. No conversion needed.');
      return;
    }
    const conversionFactors = {
      kcal: {
        cal: 1000,
        kJ: 4.184,
        J: 4184,
      },
      cal: {
        kcal: 0.001,
        kJ: 0.004184,
        J: 4.184,
      },
      kJ: {
        kcal: 0.239,
        cal: 239,
        J: 1000,
      },
      J: {
        kcal: 0.000239,
        cal: 0.239,
        kJ: 0.001,
      },
    };

    const result = value * conversionFactors[fromUnit][toUnit];

    $('#result').text(`${value} ${fromUnit} = ${result.toFixed(4)} ${toUnit}`);
    $('#additionalDiv').show();
  });
});
