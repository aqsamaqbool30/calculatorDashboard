$(document).ready(function () {
  $('#sphere-volume').click(function () {
    let radius = parseFloat($('#radius-sphere').val());
    let selectvalue = $('#surfaceAreaSelect').val();
    let validate = validateInputs(['#radius-sphere'], 1, '#limit1', '#result1');
    if (!validate) {
      return;
    }
    selectvalue = selectvalue + '<sup>2</sup>';
    let solution = 'Volume: 4πr<sup>2</sup> <br>= ' + (4 + ' * ' + Math.PI + ' * ' + radius + '<sup>2</sup>') + '<br>= ' + 4 * Math.PI * radius * radius + '  ' + selectvalue;
    $('#solution-div1').html(solution);
    $('#result1').removeClass('hidden');
  });

  $('#cubeSurfaceArea').click(function () {
    let radius = parseFloat($('#inputcube').val());
    let selectvalue = $('#selectcube').val();
    let validate = validateInputs(['#inputcube'], 1, '#limit2', '#result1');
    if (!validate) {
      return;
    }
    selectvalue = selectvalue + '<sup>2</sup>';
    let solution = 'Volume: 6a<sup>2</sup> <br>= ' + (6 + ' * ' + radius + '<sup>2</sup>') + '<br>= ' + 6 * radius * radius + '  ' + selectvalue;
    $('#solution-div1').html(solution);
    $('#result1').removeClass('hidden');
  });

  calculateSurfaceArea('#cone-surface-area', '#radius-cone', '#height-cone', '#coneradius', '#coneheight', '#result2', '#limit3');
  calculateSurfaceArea('#cylinder-surface-area', '#radiuscylinder', '#heightcylinder', '#cylinderradius', '#cylinderheight', '#result2', '#limit4');
  calculateSurfaceArea('#capsule-surface-area', '#radiuscapsule', '#heightcapsule', '#capsuleradius', '#capsuleheight', '#result3', '#limit5');
  calculateSurfaceArea('#squarePyramid-surface-area', '#radiussquarePyramid', '#heightsquarePyramid', '#squarePyramidradius', '#squarePyramidheight', '#result3', '#limit6');

  function calculateSurfaceArea(buttonId, value1, value2, unit1, unit2, resultId, warningID) {
    $(buttonId).click(function () {
      let coneradius = parseFloat($(value1).val());
      let conerheight = parseFloat($(value2).val());
      let radiusunit = $(unit1).val();
      let heightunit = $(unit2).val();

      let validate = validateInputs([value1, value2], 2, warningID, resultId);
      if (!validate) {
        return;
      }
      let conversion_radius = convertLength(coneradius, radiusunit, heightunit);
      let conversion_height = convertLength(conerheight, heightunit, radiusunit);
      let solution1, solution2, solution3, solution4, solution5, solution6, solution7, solution8;

      if (buttonId === '#cone-surface-area') {
        solution1 = '<b>Base Surface Area:</b> πr<sup>2</sup> <br>= π * ' + coneradius + '<sup>2</sup>' + '<br>= ' + Math.PI * coneradius * coneradius + '  ' + radiusunit + '<sup>2</sup> <br> ';
        solution2 = '<b>Lateral Surface Area:</b> πr√(r<sup>2</sup> + h<sup>2</sup>) <br>= π * ' + coneradius + ' * √ (' + coneradius + '<sup>2</sup> + ' + conversion_height + '<sup>2</sup>)' + '<br>= ' + Math.PI * coneradius * Math.sqrt(coneradius * coneradius + conversion_height * conversion_height) + '  ' + radiusunit + '<sup>2</sup> <br> ';
        solution3 = '<b>Total Surface Area:</b> πr( r + √(r<sup>2</sup> + h<sup>2</sup>)) <br>= π * ' + coneradius + ' * (' + coneradius + '+ √ (' + coneradius + '<sup> 2</sup> + ' + conversion_height + '<sup> 2</sup> )' + '<br>= ' + Math.PI * coneradius * (coneradius + Math.sqrt(coneradius * coneradius + conversion_height * conversion_height)) + '  ' + radiusunit + '<sup> 2</sup>';
        if (radiusunit !== heightunit) {
          solution4 = '<br><b>OR in square ' + heightunit + ' : </b><br><br><b>Base Surface Area:</b> πr<sup>2</sup> <br>= π * ' + conversion_radius + '<sup>2</sup>' + '<br>= ' + Math.PI * conversion_radius * conversion_radius + '  ' + heightunit + '<sup>2</sup> <br> ';
          solution5 = '<b>Lateral Surface Area:</b> πr√(r<sup>2</sup> + h<sup>2</sup>) <br>= π * ' + conversion_radius + ' * √ (' + conversion_radius + '<sup>2</sup> + ' + conerheight + '<sup>2</sup>)' + '<br>= ' + Math.PI * conversion_radius * Math.sqrt(conversion_radius * conversion_radius + conerheight * conerheight) + '  ' + heightunit + '<sup>2</sup> <br> ';
          solution6 = '<b>Total Surface Area:</b> πr( r + √(r<sup>2</sup> + h<sup>2</sup>)) <br>= π * ' + conversion_radius + ' * (' + conversion_radius + '+ √ (' + conversion_radius + '<sup> 2</sup> + ' + conerheight + '<sup>2</sup> )' + '<br>= ' + Math.PI * conversion_radius * (conversion_radius + Math.sqrt(conversion_radius * conversion_radius + conerheight * conerheight)) + '  ' + heightunit + '<sup>2</sup>';
        }
        $('#solution-first').html(solution1);
        $('#solution-second').html(solution2);
        $('#solution-third').html(solution3);
        $('#solution-foruth').html(solution4);
        $('#solution-fifth').html(solution5);
        $('#solution-six').html(solution6);
        $('#solution-seventh').html('');
        $('#solution-eighth').html('');
        console.log('cone');
      } else if (buttonId === '#cylinder-surface-area') {
        solution1 = '<b>Top Surface Area:</b> πr<sup>2</sup> <br>= π * ' + coneradius + '<sup>2</sup> <br>= ' + Math.PI * coneradius * coneradius + '  ' + radiusunit + '<sup>2</sup> <br>';
        solution7 = '<b>Bottom Surface Area:</b> πr<sup>2</sup> <br>= π * ' + coneradius + '<sup>2</sup> <br>= ' + Math.PI * coneradius * coneradius + '  ' + radiusunit + '<sup>2</sup> <br>';
        solution2 = '<b>Lateral Surface Area:</b> 2πrh <br>= 2 * π * ' + coneradius + ' * ' + conversion_height + '<br>= ' + 2 * Math.PI * coneradius * conversion_height + '  ' + radiusunit + '<sup>2</sup> <br>';
        solution3 = '<b>Total Surface Area:</b> 2πr(r + h) <br>= 2 * π * ' + coneradius + ' * (' + coneradius + ' + ' + conversion_height + ')<br>= ' + 2 * Math.PI * coneradius * (coneradius + conversion_height) + '  ' + radiusunit + '<sup>2</sup> <br>';
        if (radiusunit !== heightunit) {
          solution4 = '<br><b>OR in square ' + heightunit + ' : </b><br><br><b>Top Surface Area:</b> πr<sup>2</sup> <br>= π * ' + conversion_radius + '<sup>2</sup>' + '<br>= ' + Math.PI * conversion_radius * conversion_radius + '  ' + heightunit + '<sup>2</sup> <br>';
          solution8 = '<b>Bottom Surface Area:</b> πr<sup>2</sup> <br>= π * ' + conversion_radius + '<sup>2</sup> <br>= ' + Math.PI * conversion_radius * conversion_radius + '  ' + heightunit + '<sup>2</sup>' + ' <br>';
          solution5 = '<b>Lateral Surface Area:</b> 2πrh <br>= 2 * π * ' + conversion_radius + ' * ' + conerheight + '<br>= ' + 2 * Math.PI * conversion_radius * conerheight + '  ' + heightunit + '<sup>2</sup>' + ' <br>';
          solution6 = '<b>Total Surface Area:</b> 2πr(r + h) <br>= 2 * π * ' + conversion_radius + ' * (' + conversion_radius + ' + ' + conerheight + ')<br>= ' + 2 * Math.PI * conversion_radius * (conversion_radius + conerheight) + '  ' + heightunit + '<sup>2</sup>';
        }
        $('#solution-first').html(solution1);
        $('#solution-seventh').html(solution7);
        $('#solution-second').html(solution2);
        $('#solution-third').html(solution3);
        $('#solution-foruth').html(solution4);
        $('#solution-eighth').html(solution8);
        $('#solution-fifth').html(solution5);
        $('#solution-six').html(solution6);
        console.log('cylinder');
      } else if (buttonId === '#capsule-surface-area') {
        solution1 = '<b>Top Surface Area:</b> 2πr<sup>2</sup> <br>= 2 * π * ' + coneradius + '<sup>2</sup> <br>= ' + 2 * Math.PI * coneradius * coneradius + '  ' + radiusunit + '<sup>2</sup> <br>';
        solution2 = '<b>Bottom Surface Area:</b> 2πr<sup>2</sup> <br>= 2 * π * ' + coneradius + '<sup>2</sup> <br>= ' + 2 * Math.PI * coneradius * coneradius + '  ' + radiusunit + '<sup>2</sup> <br>';
        solution3 = '<b>Lateral Surface Area:</b> 2πrh <br>= 2 * π * ' + coneradius + ' * ' + conversion_height + '<br>= ' + 2 * Math.PI * coneradius * conversion_height + '  ' + radiusunit + '<sup>2</sup> <br>';
        solution4 = '<b>Total Surface Area:</b> ' + (2 * (2 * Math.PI * coneradius * coneradius) + 2 * Math.PI * coneradius * conversion_height) + '  ' + radiusunit + '<sup>2</sup> <br>';
        if (radiusunit !== heightunit) {
          solution5 = '<br><b>OR in square ' + heightunit + ' : </b><br><br><b>Top Surface Area:</b> 2πr<sup>2</sup> <br>= 2 * π * ' + conversion_radius + '<sup>2</sup>' + '<br>= ' + 2 * Math.PI * conversion_radius * conversion_radius + '  ' + heightunit + '<sup>2</sup> <br>';
          solution6 = '<b>Bottom Surface Area:</b> 2πr<sup>2</sup> <br>= 2 * π * ' + conversion_radius + '<sup>2</sup> <br>= ' + 2 * Math.PI * conversion_radius * conversion_radius + '  ' + heightunit + '<sup>2</sup> <br>';
          solution7 = '<b>Lateral Surface Area:</b> 2πrh <br>= 2 * π * ' + conversion_radius + ' * ' + conerheight + '<br>= ' + 2 * Math.PI * conversion_radius * conerheight + '  ' + heightunit + '<sup>2</sup> <br>';
          solution8 = '<b>Total Surface Area:</b> ' + (2 * (2 * Math.PI * conversion_radius * conversion_radius) + 2 * Math.PI * conversion_radius * conerheight) + '  ' + heightunit + '<sup>2</sup>';
        }
        $('#solution9').html(solution1);
        $('#solution10').html(solution2);
        $('#solution11').html(solution3);
        $('#solution12').html(solution4);
        $('#solution13').html(solution5);
        $('#solution14').html(solution6);
        $('#solution15').html(solution7);
        $('#solution16').html(solution8);
        console.log('capsule');
      } else if (buttonId === '#squarePyramid-surface-area') {
        solution1 = '<b>Base Surface Area:</b> a<sup>2</sup> <br>= ' + coneradius + '<sup>2</sup> <br>= ' + coneradius * coneradius + '  ' + radiusunit + '<sup>2</sup> <br>';
        solution2 = '<b>Lateral Surface Area:</b> 2a√((a/2)<sup>2</sup> + h<sup>2</sup>) <br>= 2 * ' + coneradius + ' * ' + ' √ (( ' + coneradius + ' / 2)<sup>2</sup> + ' + conversion_height + '<sup>2</sup>) <br>= ' + 2 * coneradius * Math.sqrt((coneradius / 2) ** 2 + conversion_height ** 2) + '  ' + radiusunit + '<sup>2</sup> <br>';
        solution3 = '<b>Total Surface Area:</b> a<sup>2</sup> + 2a√((a/2)<sup>2</sup> + h<sup>2</sup>) <br>= ' + (coneradius * coneradius + 2 * coneradius * Math.sqrt((coneradius / 2) ** 2 + conversion_height ** 2)) + '  ' + radiusunit + '<sup>2</sup> <br>';
        if (radiusunit !== heightunit) {
          solution4 = '<br><b>OR in square ' + heightunit + ' : </b><br><br><b>Base Surface Area:</b> a<sup>2</sup> <br>= ' + conversion_radius + '<sup>2</sup> <br>= ' + conversion_radius * conversion_radius + '  ' + heightunit + '<sup>2</sup> <br>';
          solution5 = '<b>Lateral Surface Area:</b> 2a√((a/2)<sup>2</sup> + h<sup>2</sup>) <br>= 2 * ' + conversion_radius + ' * ' + ' √ (( ' + conversion_radius + ' / 2)<sup>2</sup> + ' + conerheight + '<sup>2</sup>) <br>= ' + 2 * conversion_radius * Math.sqrt((conversion_radius / 2) ** 2 + conerheight ** 2) + '  ' + heightunit + '<sup>2</sup> <br>';
          solution6 = '<b>Total Surface Area:</b> a<sup>2</sup> + 2a√((a/2)<sup>2</sup> + h<sup>2</sup>) <br>= ' + (conversion_radius * conversion_radius + 2 * conversion_radius * Math.sqrt((conversion_radius / 2) ** 2 + conerheight ** 2)) + '  ' + heightunit + '<sup>2</sup>';
        }
        $('#solution9').html(solution1);
        $('#solution10').html(solution2);
        $('#solution11').html(solution3);
        $('#solution12').html(solution4);
        $('#solution13').html(solution5);
        $('#solution14').html(solution6);
        $('#solution15').html('');
        $('#solution16').html('');
        console.log('capsule');
      }
      $(resultId).removeClass('hidden');
    });
  }

  calcSurfaceAreaNew('#tank-surface-area', '#lengthtank', '#widthtank', '#heighttank', '#tanklength', '#tankwidth', '#tankheight', '#result4', '#limit7');
  calcSurfaceAreaNew('#ellipsoid-surface-area', '#lengthellipsoid', '#widthellipsoid', '#heightellipsoid', '#ellipsoidlength', '#ellipsoidwidth', '#ellipsoidheight', '#result4', '#limit8');
  calcSurfaceAreaNew('#conical-surface-area', '#lengthconicalFrustum', '#widthconicalFrustum', '#heightconicalFrustum', '#conicalFrustumlength', '#conicalFrustumwidth', '#conicalFrustumheight', '#result5', '#limit9');
  calcSurfaceAreaNew('#spherical-surface-area', '#lengthsphericalCap', '#widthsphericalCap', '#heightsphericalCap', '#sphericalCaplength', '#sphericalCapwidth', '#sphericalCapheight', '#result5', '#limit10');

  function emptyDivs(div1, div2, div3, div4) {
    $(div1).html('');
    $(div2).html('');
    $(div3).html('');
    $(div4).html('');
  }

  function calcSurfaceAreaNew(buttonId, num1, num2, num3, unit1, unit2, unit3, resultId, warningID) {
    $(buttonId).click(function () {
      let value1 = parseFloat($(num1).val());
      let value2 = parseFloat($(num2).val());
      let value3 = parseFloat($(num3).val());
      let lengthunit = $(unit1).val();
      let widthunit = $(unit2).val();
      let heightunit = $(unit3).val();

      let isValidate = validateInputs([num1, num2, num3], 3, warningID, resultId);
      if (!isValidate) {
        return;
      }

      let conversion_length_1 = convertLength(value2, widthunit, lengthunit);
      let conversion_length_2 = convertLength(value3, heightunit, lengthunit);
      let conversion_width_1 = convertLength(value1, lengthunit, widthunit);
      let conversion_width_2 = convertLength(value3, heightunit, widthunit);
      let conversion_height_1 = convertLength(value1, lengthunit, heightunit);
      let conversion_height_2 = convertLength(value2, widthunit, heightunit);

      let solution1, solution2, solution3;

      if (buttonId === '#tank-surface-area') {
        let numUniqueUnits = new Set([lengthunit, widthunit, heightunit]).size;
        let solutions = [];

        function calculateSolution(unit, value, conversion1, conversion2) {
          return `<b>Surface Area:</b> 2lw + 2lh + 2wh <br>= ((2 * ${value} * ${conversion1}) + (2 * ${value} * ${conversion2}) + (2 * ${conversion1} * ${conversion2})) <br>= ${2 * value * conversion1 + 2 * value * conversion2 + 2 * conversion1 * conversion2} ${unit}<sup>2</sup>`;
        }
        if (numUniqueUnits === 1) {
          solutions.push(calculateSolution(lengthunit, value1, conversion_length_1, conversion_length_2));
        } else if (numUniqueUnits === 2) {
          if (lengthunit !== widthunit) {
            solutions.push(calculateSolution(lengthunit, value1, conversion_length_1, conversion_length_2));
            solutions.push(`<br><b>OR in square ${widthunit}:</b><br><br>` + calculateSolution(widthunit, value2, conversion_width_1, conversion_width_2));
          } else if (lengthunit !== heightunit) {
            solutions.push(calculateSolution(lengthunit, value1, conversion_length_1, conversion_length_2));
            solutions.push(`<br><b>OR in square ${heightunit}:</b><br><br>` + calculateSolution(heightunit, value3, conversion_height_1, conversion_height_2));
          }
        } else {
          solutions.push(calculateSolution(lengthunit, value1, conversion_length_1, conversion_length_2));
          solutions.push(`<br><b>OR in square ${widthunit}:</b><br><br>` + calculateSolution(widthunit, value2, conversion_width_1, conversion_width_2));
          solutions.push(`<br><b>OR in square ${heightunit}:</b><br><br>` + calculateSolution(heightunit, value3, conversion_height_1, conversion_height_2));
        }
        $('#solution17').html(solutions[0] || '');
        $('#solution18').html(solutions[1] || '');
        $('#solution19').html(solutions[2] || '');
        console.log('tank');
      } else if (buttonId === '#conical-surface-area') {
        function equationFormula(smallr, capitalR, h, solutionDiv1, solutionDiv2, solutionDiv3, solutionDiv4, unit) {
          let topSurfaceArea = Math.PI * Math.pow(smallr, 2);
          let bottomSurfaceArea = Math.PI * Math.pow(capitalR, 2);
          let lateral = Math.PI * (capitalR + smallr) * Math.sqrt((capitalR - smallr) ** 2 + Math.pow(h, 2));
          let total = topSurfaceArea + bottomSurfaceArea + lateral;

          $(solutionDiv1).html('<b>Top Surface Area: </b> πr<sup>2</sup> <br>= π * ' + smallr + '<sup>2</sup><br>= ' + topSurfaceArea + ' ' + unit + '<sup>2</sup>');
          $(solutionDiv2).html('<b>Bottom Surface Area: </b> πR<sup>2</sup> <br>= π * ' + smallr + '<sup>2</sup><br>= ' + bottomSurfaceArea + ' ' + unit + '<sup>2</sup>');
          $(solutionDiv3).html('<b>Lateral Surface Area: </b> π(R + r)√((R - r)<sup>2</sup> + h<sup>2</sup>) <br>= π (' + capitalR + ' + ' + smallr + ')√((' + capitalR + ' - ' + smallr + ')<sup>2</sup> + ' + h + '<sup>2</sup>)<br>= ' + lateral + ' ' + unit + '<sup>2</sup>');
          $(solutionDiv4).html('<b>Total Surface Area: </b> π(R<sup>2</sup> + r<sup>2</sup>) + π(R + r)√((R - r)<sup>2</sup> + h<sup>2</sup>) <br>= π(' + capitalR + '<sup>2</sup> + ' + smallr + '<sup>2</sup>) + π (' + capitalR + ' + ' + smallr + ')√((' + capitalR + ' - ' + smallr + ')<sup>2</sup> + ' + h + '<sup>2</sup>)<br>= ' + total + ' ' + unit + '<sup>2</sup>');
        }
        if (lengthunit === widthunit && lengthunit === heightunit) {
          $('#orDiv1').html('');
          $('#orDiv2').html('');
          let emptyDiv1 = emptyDivs('#solution-div24', '#solution-div25', '#solution-div26', '#solution-div27');
          let emptyDiv2 = emptyDivs('#solution-div28', '#solution-div29', '#solution-div30', '#solution-div31');
          let solution = equationFormula(value1, conversion_length_1, conversion_length_2, '#solution-div20', '#solution-div21', '#solution-div22', '#solution-div23', lengthunit);
        } else if (lengthunit === widthunit && lengthunit !== heightunit) {
          $('#orDiv2').html('');
          let emptyDiv = emptyDivs('#solution-div28', '#solution-div29', '#solution-div30', '#solution-div31');
          let solution1 = equationFormula(value1, conversion_length_1, conversion_length_2, '#solution-div20', '#solution-div21', '#solution-div22', '#solution-div23', lengthunit);
          $('#orDiv1').html('<br><b>OR in Square ' + heightunit + ' : </b><br><br>');
          let solution2 = equationFormula(conversion_height_1, conversion_height_2, value3, '#solution-div24', '#solution-div25', '#solution-div26', '#solution-div27', heightunit);
        } else if (lengthunit !== widthunit && lengthunit === heightunit) {
          $('#orDiv2').html('');
          let emptyDiv = emptyDivs('#solution-div28', '#solution-div29', '#solution-div30', '#solution-div31');
          let solution1 = equationFormula(conversion_width_1, value2, conversion_width_2, '#solution-div20', '#solution-div21', '#solution-div22', '#solution-div23', widthunit);
          $('#orDiv1').html('<br><b>OR in Square ' + lengthunit + ' : </b><br><br>');
          let solution2 = equationFormula(value1, conversion_length_1, conversion_length_2, '#solution-div24', '#solution-div25', '#solution-div26', '#solution-div27', lengthunit);
        } else if (lengthunit !== widthunit && lengthunit !== heightunit && widthunit === heightunit) {
          $('#orDiv2').html('');
          let emptyDiv = emptyDivs('#solution-div28', '#solution-div29', '#solution-div30', '#solution-div31');
          let solution1 = equationFormula(value1, conversion_length_1, conversion_length_2, '#solution-div20', '#solution-div21', '#solution-div22', '#solution-div23', lengthunit);
          $('#orDiv1').html('<br><b>OR in Square ' + widthunit + ' : </b><br><br>');
          let solution2 = equationFormula(conversion_width_1, value2, conversion_width_2, '#solution-div24', '#solution-div25', '#solution-div26', '#solution-div27', widthunit);
        } else if (lengthunit !== widthunit && lengthunit !== heightunit) {
          let solution1 = equationFormula(value1, conversion_length_1, conversion_length_2, '#solution-div20', '#solution-div21', '#solution-div22', '#solution-div23', lengthunit);
          $('#orDiv1').html('<br><b>OR in Square ' + widthunit + ' : </b><br><br>');
          let solution2 = equationFormula(conversion_width_1, value2, conversion_width_2, '#solution-div24', '#solution-div25', '#solution-div26', '#solution-div27', widthunit);
          $('#orDiv2').html('<br><b>OR in Square ' + heightunit + ' : </b><br><br>');
          let solution3 = equationFormula(conversion_height_1, conversion_height_2, value3, '#solution-div28', '#solution-div29', '#solution-div30', '#solution-div31', heightunit);
        }
        console.log('Conical Frustum');
      } else if (buttonId === '#ellipsoid-surface-area') {
        let numUniqueUnits = new Set([lengthunit, widthunit, heightunit]).size;
        let solutions = [];

        function calculateSolution(unit, value, conversion1, conversion2) {
          let a_power_1_6 = Math.pow(value, 1.6);
          let b_power_1_6 = Math.pow(conversion1, 1.6);
          let c_power_1_6 = Math.pow(conversion2, 1.6);
          let sum_power_1_6 = 4 * Math.PI * Math.pow((a_power_1_6 * b_power_1_6 + a_power_1_6 * c_power_1_6 + b_power_1_6 * c_power_1_6) / 3, 1 / 1.6);
          return `<b>Surface Area ≈</b> 4π <sup>1.6</sup>√((a<sup>1.6</sup> * b<sup>1.6</sup> + a<sup>1.6</sup> * c<sup>1.6</sup> + b<sup>1.6</sup> * c<sup>1.6</sup>)/3) <br>≈ 4π <sup>1.6</sup>√((${a_power_1_6} * ${b_power_1_6} + ${a_power_1_6} * ${c_power_1_6} + ${b_power_1_6} * ${c_power_1_6})/3) <br>≈ ${sum_power_1_6} ${unit}<sup>2</sup>`;
        }
        if (numUniqueUnits === 1) {
          solutions.push(calculateSolution(lengthunit, value1, conversion_length_1, conversion_length_2));
        } else if (numUniqueUnits === 2) {
          if (lengthunit !== widthunit) {
            solutions.push(calculateSolution(lengthunit, value1, conversion_length_1, conversion_length_2));
            solutions.push(`<br><b>OR in square ${widthunit}:</b><br><br>` + calculateSolution(widthunit, value2, conversion_width_1, conversion_width_2));
          } else if (lengthunit !== heightunit) {
            solutions.push(calculateSolution(lengthunit, value1, conversion_length_1, conversion_length_2));
            solutions.push(`<br><b>OR in square ${heightunit}:</b><br><br>` + calculateSolution(heightunit, value3, conversion_height_1, conversion_height_2));
          }
        } else {
          solutions.push(calculateSolution(lengthunit, value1, conversion_length_1, conversion_length_2));
          solutions.push(`<br><b>OR in square ${widthunit}:</b><br><br>` + calculateSolution(widthunit, value2, conversion_width_1, conversion_width_2));
          solutions.push(`<br><b>OR in square ${heightunit}:</b><br><br>` + calculateSolution(heightunit, value3, conversion_height_1, conversion_height_2));
        }
        $('#solution17').html(solutions[0] || '');
        $('#solution18').html(solutions[1] || '');
        $('#solution19').html(solutions[2] || '');
        console.log('Ellipsoid');
      } else if (buttonId === '#spherical-surface-area') {
        $('.caution').removeClass('text-primary_button').addClass('text-gray-400');
        if (value1 > conversion_length_1) {
          $('.caution').addClass('text-primary_button').removeClass('text-gray-400');
          $(resultId).addClass('hidden');
          return;
        }
        findHpositive = conversion_length_1 + Math.sqrt(conversion_length_1 * conversion_length_1 - value1 * value1);
        findHnegative = conversion_length_1 - Math.sqrt(conversion_length_1 * conversion_length_1 - value1 * value1);
        if (findHpositive < 0) {
          findHpositive = -1 * findHpositive;
        }
        $('#solution-div20').html('<b>Value of Height: </b> ' + findHpositive + ' ' + lengthunit);
        $('#solution-div21').html('<b>Base Surface Area: </b> πr<sup>2</sup> <br>= ' + Math.PI * value1 ** 2 + ' ' + lengthunit + '<sup>2</sup>');
        $('#solution-div22').html('<b>Cap Surface Area: </b> 2πhR <br>= ' + 2 * Math.PI * findHpositive * conversion_length_1 + ' ' + lengthunit + '<sup>2</sup>');
        $('#solution-div23').html('<b>Total Surface Area: </b> πr<sup>2</sup> + 2πhR <br>= ' + (Math.PI * value1 ** 2 + 2 * Math.PI * findHpositive * conversion_length_1) + ' ' + lengthunit + '<sup>2</sup>');

        if (findHnegative < 0) {
          findHnegative = -1 * findHnegative;
        }
        $('#solution-div24').html('<b>OR</b><br><b>Value of Height: </b> ' + findHnegative + ' ' + lengthunit);
        $('#solution-div25').html('<b>Base Surface Area: </b> πr<sup>2</sup> <br>= ' + Math.PI * value1 ** 2 + ' ' + lengthunit + '<sup>2</sup>');
        $('#solution-div26').html('<b>Cap Surface Area: </b> 2πhR <br>= ' + 2 * Math.PI * findHnegative * conversion_length_1 + ' ' + lengthunit + '<sup>2</sup>');
        $('#solution-div27').html('<b>Total Surface Area: </b> πr<sup>2</sup> + 2πhR <br>= ' + (Math.PI * value1 ** 2 + 2 * Math.PI * findHnegative * conversion_length_1) + ' ' + lengthunit + '<sup>2</sup>');
        $('#orDiv1').html('');
        $('#orDiv2').html('');
        $('#solution-div28').html('');
        $('#solution-div29').html('');
        $('#solution-div30').html('');
        $('#solution-div31').html('');
      }
      $(resultId).removeClass('hidden');
    });
  }
});
