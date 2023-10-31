$(document).ready(function () {
  $('#calcOhmsLaw').click(function () {
    // $('#limit1').html('').removeClass('pb-6');
    let voltage = parseFloat($('#voltage').val());
    let current = parseFloat($('#current').val());
    let power = parseFloat($('#power').val());
    let resistance = parseFloat($('#resistance').val());
    let voltageSelect = parseFloat($('#voltageSelect').val());
    let currentSelect = parseFloat($('#currentSelect').val());
    let powerSelect = parseFloat($('#powerSelect').val());
    let resistanceSelect = parseFloat($('#resistanceSelect').val());

    let valueValidate = validateInputs(['#voltage', '#current', '#power', '#resistance'], 2, '#limit1', '#result');
    if (!valueValidate) {
      return;
    }
    if (!isNaN(voltage) && !isNaN(current)) {
      resistance = (voltage * voltageSelect) / (current * currentSelect);
      power = voltage * voltageSelect * (current * currentSelect);
      $('#solution5').html('Steps:<br> Resistance = Voltage / current<br>=' + voltage * voltageSelect + '/' + current * currentSelect + '<br>= ' + resistance + ' ohm (Ω)');
      $('#solution6').html('power = voltage * current<br>= ' + voltage * voltageSelect + '*' + current * currentSelect + '<br>= ' + power + ' watt (W)');
    } else if (!isNaN(voltage) && !isNaN(power)) {
      resistance = (power * powerSelect) / (Math.pow(current, 2) * Math.pow(currentSelect, 2));
      current = (power * powerSelect) / (voltage * voltageSelect);
      $('#solution5').html('Steps:<br> Resistance = Power / current<br>=' + power * powerSelect + '/' + current * currentSelect + '<sup>2</sup><br>= ' + resistance + ' ohm (Ω)');
      $('#solution6').html('current = power / voltage<br>= ' + power * powerSelect + ' / ' + voltage * voltageSelect + '<br>= ' + current + ' ampere (A)');
    } else if (!isNaN(voltage) && !isNaN(resistance)) {
      current = (voltage * voltageSelect) / (resistance * resistanceSelect);
      power = (Math.pow(voltage, 2) * Math.pow(voltageSelect, 2)) / (resistance * resistanceSelect);
      $('#solution5').html('Steps:<br> current = voltage / resistance<br>=' + voltage * voltageSelect + '/' + resistance * resistanceSelect + '<sup>2</sup><br>= ' + current + ' ampere (A)');
      $('#solution6').html('Power = voltage<sup>2</sup> / resistance<br>= ' + voltage * voltageSelect + '<sup>2</sup> *' + resistance * resistanceSelect + '<br>= ' + power + ' watt (W)');
    } else if (!isNaN(current) && !isNaN(power)) {
      voltage = (power * powerSelect) / (current * currentSelect);
      resistance = (voltage * voltageSelect) / (current * currentSelect);
      $('#solution5').html('Steps:<br> Voltage = Power / current<br>=' + power * powerSelect + '/' + current * currentSelect + '<sup>2</sup><br>= ' + voltage + ' volt (V)');
      $('#solution6').html('Resistance = voltage / current<br>= ' + voltage * voltageSelect + '/' + current * currentSelect + '<br>= ' + resistance + ' ohm (Ω)');
    } else if (!isNaN(current) && !isNaN(resistance)) {
      voltage = current * currentSelect * (resistance * resistanceSelect);
      power = Math.pow(current, 2) * Math.pow(currentSelect, 2) * (resistance * resistanceSelect);
      $('#solution5').html('Steps:<br> Voltage = Power / current<br>=' + power * powerSelect + '/' + current * currentSelect + '<sup>2</sup><br>= ' + voltage + ' volt (V)');
      $('#solution6').html('Power = current<sup>2</sup> * Resistance<br>= ' + current * currentSelect + '<sup>2</sup> *' + resistance * resistanceSelect + '<br>= ' + power + ' watt (W)');
    } else if (!isNaN(power) && !isNaN(resistance)) {
      voltage = Math.sqrt(power * powerSelect * (resistance * resistanceSelect));
      current = (power * powerSelect) / (voltage * voltageSelect);
      $('#solution5').html('Steps:<br> Voltage = √(Power) / Resistance<br>=√(' + power * powerSelect + ')*' + current * currentSelect + '<sup>2</sup><br>= ' + voltage + ' volt (V)');
      $('#solution6').html('current = Power / Voltage<br>= ' + power * powerSelect + '/' + voltage * voltageSelect + '<br>= ' + current + ' ampere (A)');
    }
    $('#solution1').html('<b>Voltage: </b>' + voltage + ' volt (V)');
    $('#solution2').html('<b>current: </b>' + current + ' ampere (A)');
    $('#solution3').html('<b>Resistance: </b>' + resistance + ' ohm (Ω)');
    $('#solution4').html('<b>Power: </b>' + power + ' watt (W)');
    $('#result').removeClass('hidden');
  });
});
