$(document).ready(function () {
  // 1st calcualtor
  $('#btnVoltageDrop').click(function () {
    let wireMaterial = $('#wire-material').val();
    let wireSize = $('#wire-size').val();
    let conduitMaterial = $('#conduit-material').val();
    let powerFactor = $('#powerFactor').val();
    let phase = $('#phase').val();
    let voltage = $('#voltage').val();
    let loadCurrent = $('#loadCurrent').val();
    let numberOfConductors = $('#conductors').val();
    let distance = $('#distance').val();
    let distanceSelect = $('#distanceSelect').val();

    console.log(wireMaterial);
    console.log(wireSize);
    console.log(conduitMaterial);
    console.log(powerFactor);
    console.log(phase);
    console.log(voltage);
    console.log(loadCurrent);
    console.log(numberOfConductors);
    console.log(distance);
    console.log(distanceSelect);

    $('#result').removeClass('hidden');
  });
});
