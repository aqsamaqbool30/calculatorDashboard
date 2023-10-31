$(document).ready(function () {
  $('#calcCirlce').click(function () {
    $("#limit2").html('').removeClass('pb-6');
    let radius = parseFloat($('#radius').val());
    let diameter = parseFloat($('#diameter').val());
    let circumference = parseFloat($('#circumference').val());
    let area = parseFloat($('#area').val());

    let valueValidate = validateInputs(['#radius', '#diameter', '#circumference', '#area'], 1, '#limit1', '#result');
    if (!valueValidate) {
      return;
    }
    if(radius <= 0 || diameter <= 0 || circumference <= 0 || area <= 0){
      $("#limit2").html('Please provide at least one positive number to calculate.').addClass('pb-6');
      $('#result').addClass('hidden');
      return;
    }
    if (radius) {
      diameter = 2 * radius;
      circumference = 2 * Math.PI * radius;
      area = Math.PI * radius * radius;
    } else if (diameter) {
      radius = diameter / 2;
      circumference = 2 * Math.PI * radius;
      area = Math.PI * radius * radius;
    } else if (circumference) {
      radius = circumference / (2 * Math.PI);
      diameter = 2 * radius;
      area = Math.PI * radius * radius;
    } else if (area) {
      radius = Math.sqrt(area / Math.PI);
      diameter = 2 * radius;
      circumference = 2 * Math.PI * radius;
    } 
    $('#solution1').html('Radius: ' + radius);
    $('#solution2').html('Diameter: ' + diameter);
    $('#solution3').html('Circumference: ' + circumference);
    $('#solution4').html('Area: ' + area);
    $('#result').removeClass('hidden');
  });
});
