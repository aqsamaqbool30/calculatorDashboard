// $(document).ready(function () {
//   function factorial(num) {
//     if (num <= 1) return 1;
//     return num * factorial(num - 1);
//   }
//   function calculateCombination(total, sub) {
//     console.log(factorial(total));
//     return factorial(total) / (factorial(sub) * factorial(total - sub));
//   }
//   function calculatePermutation(total, sub) {
//     return factorial(total) / factorial(total - sub);
//   }

//   $('#permutation-combination').click(function () {
//     let totalAmount = parseInt($('#totalSet').val());
//     let subsetAmount = parseInt($('#subSet').val());

//     let result1, result2;
//     let validate = validateInputs(['#totalSet', '#subSet'], 2, '#warning', '#result');
//     if (!validate) {
//       return;
//     }
//     if (totalAmount < 0 || subsetAmount < 0) {
//       $('#warning2').html('*Both values should be positive.').addClass('pb-6');
//       $('#result').addClass('hidden');
//       return;
//     } else if (subsetAmount >= totalAmount) {
//       $('#warning2').html('*Total Amount in a Set (n) is always greater than Sub-Set (r).').addClass('pb-6');
//       $('#result').addClass('hidden');
//       return;
//     } else if (subsetAmount === 0 && totalAmount === 0) {
//       result1 = 1;
//       result2 = 1;
//     } else {
//       result1 = calculatePermutation(totalAmount, subsetAmount);
//       result2 = calculateCombination(totalAmount, subsetAmount);
//     }
//     console.log(result1);
//     console.log(result2);
//     $('#solution1').html('<b>Permutation:</b> <sub>n</sub>P<sub>r</sub> = n! / (n - r)! <br>= ' + totalAmount + '! / (' + totalAmount + ' - ' + subsetAmount + ' )! <br>= ' + result1);
//     $('#solution2').html('<b>Combination:</b> <sub>n</sub>C<sub>r</sub> = n! / r! * (n - r)! <br>= ' + totalAmount + '! / ' + subsetAmount + '! * (' + totalAmount + ' - ' + subsetAmount + ' )! <br>= ' + result2);
//     $('#warning2').html('').removeClass('pb-6');
//     $('#result').removeClass('hidden');
//   });
// });

$(document).ready(function () {
  function factorial(num) {
    if (num <= 1) return BigInt(1);
    return BigInt(num) * factorial(BigInt(num) - BigInt(1));
  }

  function calculateCombination(total, sub) {
    return factorial(total) / (factorial(sub) * factorial(total - sub));
  }

  function calculatePermutation(total, sub) {
    return factorial(total) / factorial(total - sub);
  }

  $('#permutation-combination').click(function () {
    let totalAmount = parseInt($('#totalSet').val());
    let subsetAmount = parseInt($('#subSet').val());

    let result1, result2;
    let validate = validateInputs(['#totalSet', '#subSet'], 2, '#warning', '#result');
    if (!validate) {
      return;
    }
    if (totalAmount < 0 || subsetAmount < 0) {
      $('#warning2').html('*Both values should be positive.').addClass('pb-6');
      $('#result').addClass('hidden');
      return;
    } else if (subsetAmount >= totalAmount) {
      $('#warning2').html('*Total Amount in a Set (n) is always greater than Sub-Set (r).').addClass('pb-6');
      $('#result').addClass('hidden');
      return;
    } else if (subsetAmount === 0 && totalAmount === 0) {
      result1 = 1;
      result2 = 1;
    } else {
      result1 = calculatePermutation(BigInt(totalAmount), BigInt(subsetAmount));
      result2 = calculateCombination(BigInt(totalAmount), BigInt(subsetAmount));
    }
    $('#solution1').html('<b>Permutation:</b> <sub>n</sub>P<sub>r</sub> = n! / (n - r)! <br>= ' + totalAmount + '! / (' + totalAmount + ' - ' + subsetAmount + ' )! <br>= ' + result1);
    $('#solution2').html('<b>Combination:</b> <sub>n</sub>C<sub>r</sub> = n! / r! * (n - r)! <br>= ' + totalAmount + '! / ' + subsetAmount + '! * (' + totalAmount + ' - ' + subsetAmount + ' )! <br>= ' + result2);
    $('#warning2').html('').removeClass('pb-6');
    $('#result').removeClass('hidden');
  });
});
